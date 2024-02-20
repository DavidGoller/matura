<?php

class IndexController extends AbstractBase
{

    // Alle Seminartermine auslesen
    public function home()
    {
    }
    public function headerbg()
    {
    }
    public function login()
    {
    }

    public function registration()
    {
        $step = 0;
        $obj = new User();
        $phone = "";
        $prefix = "";
        $warning = "";
        $addresses =[];
        $pc= "";
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
                    } else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
                        $warning = "First name can only contain letters.";
                    } else if (!preg_match("/^[a-zA-Z]*$/", $lastname) && $warning == "") {
                        $warning = "Last name can only contain letters.";
                    } else if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[a-zA-Z0-9]*$/", $codicefiscale) && $warning == "") {
                        $warning = "Codice fiscale has to contain letters, numbers.";
                    } else if (!preg_match("/^[+0-9]*$/", $prefix) && $warning == "") {
                        $warning = "Phone prefix must be in the format +[0-9]*";
                    } else if (!preg_match("/^(?=.*\d)[0-9]*$/", trim($_POST["phone"])) && $warning == "") {
                        $warning = "Phone number can only contain numbers.";
                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && $warning == "") {
                        $warning = "Invalid email format.";
                    }
                    if ($warning != "") {

                        $phone = $_POST["phone"];
                    }
                    $obj->setFirstname($firstname);
                    $obj->setLastname($lastname);
                    $obj->setPassword($password1);
                    $obj->setEmail($email);
                    $obj->setCodicefiscale($codicefiscale);
                    $obj->setPhone($phone);

                    break;
                case 2:
                    $length = count($_POST["country"]);
                    for ($x = 0; $x < $length; $x++) {
                        $add = new Address();
                        $address = trim($_POST["address"][$x]);
                        $country = trim($_POST["country"][$x]);
                        $postcode = trim($_POST["postcode"][$x]);
                        if($x==0){
                            $pc=$postcode;
                        }
                        $city = trim($_POST["city"][$x]);
                        $province = trim($_POST["province"][$x]);
                        if (!preg_match("/^[a-zA-Z0-9 \-\.,'&]*$/", $address)) {
                            $warning = "Invalid address format.";
                        }
                        else if (!preg_match("/^[a-zA-Z]*$/", $country)&& $warning == "") {
                            $warning = "Invalid country format.";
                        }
                        else if (!preg_match("/^[0-9]*$/", $postcode)&& $warning == "") {
                            $warning = "Invalid postcode format.";
                        }
                        else if (!preg_match("/^[a-zA-Z]*$/", $city)&& $warning == "") {
                            $warning = "Invalid city format.";
                        }
                        else if (!preg_match("/^[a-zA-Z]*$/", $province)&& $warning == "" ) {
                            $warning = "Invalid province format.";
                        }
                        
                        else{
                        $add->setPostcode($postcode);
                     
                        }   
                        $add->setAddress($address);
                        $add->setCountry($country);
                        $add->setCity($city);
                        $add->setProvince($province);
                        $addresses[] = $add;
                        
                    }
                    foreach (json_decode($_POST["obj"]) as $key => $value) {
                        $setterName = 'set' . ucfirst($key);
                        if (method_exists($obj, $setterName)) {
                            $obj->$setterName($value);
                        }
                    }

                    break;
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

        if(count($addresses)==0){
            $add = new Address();
            $add->setAddress("");
            $add->setCountry("");
            $add->setCity("");
            $add->setProvince("");
            $addresses[]=$add;
        }
        $this->addContext("addresses", $addresses);
        $this->addContext("postcode", $pc);
    }
    public function registration2()
    {
    }
    public function registration3()
    {
    }
    public function registration4()
    {
    }
}
