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

        $warning = "";
        if ($_POST) {


            if (isset($_POST["step"])) {
                $step = $_POST["step"];
            }
            switch ($step) {
                case 0: break;
                case 1:
                    $password1 = $_POST['password'];
                    $password2 = $_POST['confirmpassword'];
                    if ($password1 != $password2) {
                        $warning = "Are u dumb?";
                    }
                    $obj->setFirstname($_POST["firstname"]);
                    $obj->setLastname($_POST["lastname"]);
                    echo($obj);
                    break;
                case 2:
                    foreach (json_decode($_POST["obj"]) as $key => $value){
                        $setterName = 'set' . ucfirst($key);
                        if (method_exists($obj, $setterName)) {
                            $obj->$setterName($value); 
                        }
                        
                    }
                    echo($obj); 
                    break;
            }
            if ($warning != "") {
                $step--;
            }
          
        }
        $this->addContext("obj", $obj);
        $this->addContext("warning", $warning);
        $this->addContext("step", $step);
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
