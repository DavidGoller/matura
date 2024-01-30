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
        if ($_POST) {
            $password1 = $_POST['password'];
            $password2 = $_POST['confirmpassword'];
            if ($password1 == $password2) {
                redirect("index.php?aktion=registration2");
            }
        }
    }
    public function registration2(){

    }
    public function registration3(){

    }
    public function registration4(){
        
    }
}
