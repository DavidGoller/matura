<?php

class IndexController extends AbstractBase
{

    // Alle Seminartermine auslesen
    public function home()
    {
    }
    public function footer()
    {
    }
    public function userSettings()
    {
        $user = new User;
        if (isset($_POST["user"])) {
            $user = User::findeNachEmail($_POST['user']);
            $user->setFirstname($_POST['firstname']);
            $user->setLastname($_POST['lastname']);
            $user->setEmail($_POST['email']);
            $user->setPhone($_POST['phone']);
            $user->speichere();
        } elseif (isset($_GET['email'])) {
            $user = User::findeNachEmail($_GET['email']);
        }
        $this->addContext("user", $user);
    }
    public function tryout()
    {
    }
    public function header()
    {
    }
    public function headerbg()
    {
    }
    public function login()
    {
        $email = "";
        $paswd = "";
        $warning = "";
        $user = null;
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
            $paswd = $_POST["password"];
            $erg = $this->checkEmailNPaswd($email, $paswd);
            if (is_string($erg)) {
                $warning = $erg;
            } else {
                $user = $erg;
            }
        }
        if ($user != null) {
            setcookie("user", $user, time() + 60 * 60* 48, "./");
            header("Location: index.php?aktion=home");
        }

        $this->addContext("warning", $warning);
        $this->addContext("email", $email);
    }

    private function checkEmailNPaswd($email, $paswd,)
    {
        $erg = null;
        $user = User::findeNachEmail($email);
        if ($user != null) {
            if ($user->getPassword() == md5($paswd)) {
                $erg = $user;
            } else {
                $erg = "Fehler: falsches Passwort!";
            }
        } else {
            $erg = "Fehler: Kein Benutzer mit dieser E-Mail gefunden.";
        }




        return $erg;
    }
    public function registration()
    {
        $lid = 3;
        if (isset($_COOKIE["language"])) {

            $lang = $_COOKIE["language"];
            switch (substr($lang, 0)) {
                case "de":
                    $lid = "1";
                    break;
                case "it":
                    $lid = "2";
                    break;
                default:
                    $lid = "3";
                    break;
            }
        }
        $opes = new Opes();
        $family = [];
        $step = 0;
        $obj = new User();
        $phone = "";
        $prefix = "";
        $warning = "";
        $addresses = [];
        $pc = "";
        if ($_POST) {


            if (isset($_POST["step"])) {
                $step = $_POST["step"];
            }
            switch ($step) {
                case 0:
                    break;
                case 1:

                    $lastname = trim($_POST["lastname"]);
                    $firstname = trim($_POST["firstname"]);
                    $password1 = trim($_POST['password']);
                    $password2 = trim($_POST['confirmpassword']);
                    $codicefiscale = trim($_POST["codicefiscale"]);
                    $prefix = trim($_POST["prefix"]);
                    $phone = (int)(str_replace("+", "", $prefix) . trim($_POST["phone"]));
                    $email = trim($_POST["email"]);
                    if (!preg_match("/^[0-9A-Za-z!@#$%]*$/", $password1)) {
                        $warning = "Password may only contain letters, numbers and special charakters.";
                    } else if ($password1 != $password2) {
                        $warning = "Are u dumb?";
                    } else if (!preg_match("/^[a-zA-Z.,'&ÄÖÜäöü^ -]*$/", $firstname)) {
                        $warning = "First name can only contain letters.";
                    } else if (!preg_match("/^[a-zA-Z.,'&ÄÖÜäöü^ -]*$/", $lastname) && $warning == "") {
                        $warning = "Last name can only contain letters.";
                    } else if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[a-zA-Z0-9]*$/", $codicefiscale) && $warning == "") {
                        $warning = "Codice fiscale has to contain letters, numbers.";
                    } else if (!preg_match("/^[+0-9]*$/", $prefix) && $warning == "") {
                        $warning = "Phone prefix must be in the format +[0-9]*";
                    } else if (!preg_match("/^(?=.*\d)[0-9]*$/", trim($_POST["phone"])) && $warning == "") {
                        $warning = "Phone number can only contain numbers.";
                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && $warning == "") {
                        $warning = "Invalid email format.";
                    } else if (User::findeNachEmail($email) != null) {
                        $warning = "This email is already registered. Please use another one.";
                    }
                    if ($warning != "") {

                        $phone = $_POST["phone"];
                    }
                    $obj->setFirstname($firstname);
                    $obj->setLastname($lastname);
                    $obj->setPassword(md5($password1)); //! Zum einloggen vergleiche den gehashtem Eingegebenen Wert mit diesem Hash
                    $obj->setEmail($email);
                    $obj->setCodicefiscale($codicefiscale);
                    $obj->setLid($lid);
                    $obj->setPhone($phone);

                    break;
                case 2:
                    $length = count($_POST["country"]);
                    for ($x = 0; $x < $length; $x++) {
                        $add = new Address();
                        $address = trim($_POST["address"][$x]);
                        $country = trim($_POST["country"][$x]);
                        $postcode = trim($_POST["postcode"][$x]);
                        if ($x == 0) {
                            $pc = $postcode;
                        }
                        $city = trim($_POST["city"][$x]);
                        $province = trim($_POST["province"][$x]);
                        if (!preg_match("/^[a-zA-Z0-9 \-\.,'&ÄÖÜäöü^ -]*$/", $address)) {
                            $warning = "Invalid address format.";
                        } else if (!preg_match("/^[a-zA-ZÄÖÜäöü^' -]*$/", $country) && $warning == "") {
                            $warning = "Invalid country format.";
                        } else if (!preg_match("/^[0-9]*$/", $postcode) && $warning == "") {
                            $warning = "Invalid postcode format.";
                        } else if (!preg_match("/^[a-zA-ZÄÖÜäöü^' -.]*$/", $city) && $warning == "") {
                            $warning = "Invalid city format.";
                        } else if (!preg_match("/^[a-zA-ZÄÖÜäöü^' -.]*$/", $province) && $warning == "") {
                            $warning = "Invalid province format.";
                        } else {
                            $add->setPostcode($postcode);
                        }
                        $add->setAddress($address);
                        $add->setCountry($country);
                        $add->setCity($city);
                        $add->setProvince($province);
                        $addresses[] = $add;
                    }



                    $obj = $_POST["obj"];


                    break;
                case 3:
                    $obj = $_POST["obj"];
                    $addresses = $_POST["addresses"];
                    if (isset($_POST["opes"])) {
                        $cardnumber = trim($_POST["opes"]);
                        if (!preg_match("/^[0-9]*$/", $cardnumber)) {
                            $warning = "cardnumber is invalide";
                        }

                        $opes->setCardnumber($cardnumber);
                    }
                    if (isset($_POST["firstname"])) {
                        $lenght = count($_POST["firstname"]);
                        for ($x = 0; $x < $lenght; $x++) {
                            $member = new family();
                            $lastname = trim($_POST["lastname"][$x]);
                            $firstname = trim($_POST["firstname"][$x]);
                            $prefix = trim((string)$_POST["prefix"][$x]);
                            $phone = (int)(str_replace("+", "", $prefix) . trim($_POST["phone"][$x]));
                            if (!preg_match("/^[a-zA-ZäöüÄÖÜ]*$/", $firstname)) {
                                $warning = "First name can only contain letters.";
                            } else if (!preg_match("/^[a-zA-ZäöüÄÖÜ]*$/", $lastname) && $warning == "") {
                                $warning = "Last name can only contain letters.";
                            } else if (!preg_match("/^[+0-9]*$/", $prefix) && $warning == "") {
                                $warning = "Phone prefix must be in the format +[0-9]*";
                            } else if (!preg_match("/^(?=.*\d)[0-9]*$/", trim($_POST["phone"][$x])) && $warning == "") {
                                $warning = "Phone number can only contain numbers.";
                            }

                            if ($warning != "") {

                                $phone = $_POST["phone"];
                            }
                            $member->setFirstname($firstname);
                            $member->setLastname($lastname);
                            $member->setPhone($phone);
                            $family[] = $member;
                        }
                    }



                    break;
                case 4:

                    foreach (json_decode($_POST["obj"]) as $key => $value) {
                        $setterName = 'set' . ucfirst($key);
                        if (method_exists($obj, $setterName)) {
                            $obj->$setterName($value);
                        }
                    }

                    $ad = $_POST["addresses"];
                    foreach ($ad as $address) {
                        $add = new Address();

                        foreach (json_decode(str_replace("/", "", $address)) as $key => $value) {
                            $setterName = 'set' . ucfirst($key);
                            if (method_exists($add, $setterName)) {
                                $add->$setterName($value);
                            }
                            $add->setUid($obj->getId());
                        }
                        $add->removeNbsp();
                        $addresses[] = $add;
                    }
                    if (isset($_POST["family"])) {
                        $fam = $_POST["family"];
                        foreach ($fam as $mem) {
                            $member = new Family();


                            foreach (json_decode(str_replace("/", "", $mem)) as $key => $value) {
                                $setterName = 'set' . ucfirst($key);
                                if (method_exists($member, $setterName)) {
                                    $member->$setterName($value);
                                }
                                $member->setUid($obj->getId());
                            }

                            $family[] = $member;
                        }
                    }
                    foreach (json_decode($_POST["opes"]) as $key => $value) {
                        $setterName = 'set' . ucfirst($key);
                        if (method_exists($opes, $setterName)) {
                            $opes->$setterName($value);
                        }
                    }

                    //Insert everything else into DB

                    $obj->speichere();
                    foreach ($addresses as $a) {
                        $a->setUid($obj->getID());
                        $a->speichere();
                    }
                    foreach ($family as $member) {
                        $member->setUid($obj->getID());
                        $member->speichere();
                    }
                    if ($opes->getCardnumber() > 0) {
                        $opes->setUID($obj->getID());
                        $opes->speichere();
                    }


                    //to login
                    $this->addContext("email", "");
                    $this->setTemplate("loginAktion");
            }

            if ($warning != "") {
                $step--;
            }
        }
        $this->addContext("prefix", $prefix);
        $this->addContext("phone", $phone);
        $this->addContext("obj", $obj);
        $this->addContext("warning", $warning);
        $this->addContext("step", $step);

        if ($addresses == null) {
            $add = new Address();
            $add->setAddress("");
            $add->setCountry("");
            $add->setCity("");
            $add->setProvince("");
            $addresses[] = $add;
        }
        $this->addContext("addresses", $addresses);
        $this->addContext("postcode", $pc);
        $this->addContext("family", $family);
        $this->addContext("opes", $opes);
    }
    public function contactUs()
    {
    }
    public function myDogs()
    {
        $dogs = [];
        if (!isset($_COOKIE["user"])) {
            $this->setTemplate("homeAktion");
        }
        else {
            $json = json_decode($_COOKIE["user"],true);
            $id = $json['id'];
            $user = new User($json);
            $user->setId($id);
            $dogs = Dog::findDogByUserID($user->getId());
            
        }
        $this->addContext("dogs", $dogs);
    }
    public function editDog()
    {
        $warning = "";
        $dog = new Dog();
        if($_GET["did"]>0){
        $dog=Dog::finde($_GET["did"]);
        }
            
        $this->addContext("did",$_GET["did"]);
        $this->addContext("dog",$dog);
        $this->addContext("warning", $warning);
    }
    public function setDog()
    {
        if (isset($_POST["name"])) {

            $json = $_COOKIE["user"];
            $decoded = json_decode($json, true);
            $user = new User($decoded);
            
            //wenn es ein neuer Hund ist, dann legen wir einen neuen an. Ansonsten updaten wir den bestehenden.
            $neuerHund = new Dog($_POST);
            $neuerHund->setId($_POST["did"]);
            $neuerHund->setUId($user->getId());
            
            try {
            
            $neuerHund->speichere();
            $dog = Dog::findDogByUserID($user->getId());
            $this->addContext("did",$_POST["did"]);    
            $this->addContext("dogs", $dog);
            $this->setTemplate("myDogsAktion");
            } catch (\Exception $e) {
                $warning = "Somthing went wrong!";
                $this->addContext("warning", $warning);
                $this->setTemplate("editDogAktion");
            
            }

        }
    }

    public function logout()
    {
        unset($_COOKIE["user"]);
        $this->setTemplate("homeAktion");
    }

    public function deleteDog(){
        //Löscht einen Hund aus der Datenbank.
        //Für den Fall dass ein Benutzer einen Hund löschen möchte muss er sich erstmal anmelden und dann nochmal auf die Aktion klicken
        $dog=Dog::finde($_GET["id"]);  
        $uid = $dog->getUId();       
        $dog->loesche();
        $dog = Dog::findDogByUserID($uid);  
        $this->addContext("dogs", $dog);
        $this->setTemplate("myDogsAktion");

    }
}
