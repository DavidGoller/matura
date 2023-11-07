<?php

class IndexController extends AbstractBase {

    // Alle Seminartermine auslesen
    public function alleP() {
        $this->addContext("personen", Person::findeAlle());
    }

    public function auto() {
        $this->addContext("autos", Auto::findAutoByPersonID($_GET['id']));
        $this->addContext("User", Person::finde($_GET['id']));
    }

    public function delAuto() {
        $person = Person::finde($_GET['pid']);
        $person->rmAuto(Auto::finde($_GET['aid']));
        $this->addContext("autos", Auto::findAutoByPersonID($_GET['pid']));
        $this->addContext("User", Person::finde($_GET['pid']));
        $this->setTemplate("autoAktion");
    }

    public function delPerson() {
        $person = Person::finde($_GET['id']);
        $person->loesche();
        redirect("index.php");
    }

    public function changePerson() {
        if ($_POST) {
            $p = Person::finde($_GET['id']);
            $p->setVorname($_POST['vorname']);
            $p->setNachname($_POST['nachname']);
            $p->speichere();

            redirect("index.php");
        } else {

            $this->addContext("person", Person::finde($_GET['id']));
        }
    }

    public function adresse() {
        $this->addContext("adresse", Adresse::findeNachPersonID($_GET['id']));
        $this->addContext("User", Person::finde($_GET['id']));
    }

    public function delAdresse() {
        $a = Adresse::finde($_GET['aid']);
        $a->loesche();
        $this->addContext("adresse", Adresse::findeNachPersonID($_GET['pid']));
        $this->addContext("User", Person::finde($_GET['pid']));
        $this->setTemplate("adresseAktion");
    }

    public function newPerson() {
        if ($_POST) {
            $p = new Person(array(
                'vorname' => $_POST['vorname'],
                'nachname' => $_POST['nachname'],
            ));
            $p->speichere();

            redirect("index.php");
        }
    }

    public function newAdresse() {
        if ($_POST) {
            $a = new Adresse(array(
                'person_id' => $_GET['pid'],
                'strase' => $_POST['strase'],
                'hausnr' => $_POST['hausnr'],
                'ort' => $_POST['ort'],
                'plz' => $_POST['plz']
            ));
            $a->speichere();

            $this->addContext("adresse", Adresse::findeNachPersonID($_GET['pid']));
            $this->addContext("User", Person::finde($_GET['pid']));
            $this->setTemplate('adresseAktion');
            //WIE ERLAUBEN DU DAS!!!
        }
    }

    public function newAuto() {
        
    }

    public function saveAuto() {
        $a = new Auto(array(
            'modell' => $_POST['modell'],
            'kennzeichen' => $_POST['kennzeichen'],
            'marke' => $_POST['marke']
        ));
        $a->speichere();
        redirect('index.php');
    }

    public function anzeigeAutos() {
        $this->addContext("auto", Auto::findeAlle());
    }

    public function changeAdresse() {
        if ($_POST) {
            $a = Adresse::finde($_GET['aid']);
            $a->setStrase($_POST['strase']);
            $a->setHausnr($_POST['hausnr']);
            $a->setOrt($_POST['ort']);
            $a->setPlz($_POST['plz']);
            $a->speichere();
            $this->setTemplate('adresseAktion');
            $this->addContext("adresse", Adresse::findeNachPersonID($a->getPerson_id()));
            $this->addContext("User", Person::finde($a->getPerson_id()));
        } else {
            $this->addContext("adresse", Adresse::finde($_GET['aid']));
        }
    }

}
