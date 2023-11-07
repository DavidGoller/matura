<?php

class Adresse {

    use ActiveRecordable, Deletable, Findable, Persistable;

    private int $id = 0;
    private string $strase = '';
    private string $hausnr = '';
    private string $ort = '';
    private int $plz = 0;
    private int $person_id = 0;
    protected static $table = 'adresse';
    public function getId(): int {
        return $this->id;
    }

    public function getStrase(): string {
        return $this->strase;
    }

    public function getHausnr(): string {
        return $this->hausnr;
    }

    public function getOrt(): string {
        return $this->ort;
    }

    public function getPlz(): int {
        return $this->plz;
    }

    public function getPerson_id(): int {
        return $this->person_id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setStrase(string $Strase): void {
        $this->strase = $Strase;
    }

    public function setHausnr(string $hausnr): void {
        $this->hausnr = $hausnr;
    }

    public function setOrt(string $ort): void {
        $this->ort = $ort;
    }

    public function setPlz(int $plz): void {
        $this->plz = $plz;
    }

    public function setPerson_id(int $person_id): void {
        $this->person_id = $person_id;
    }

    public static function findeNachPersonID(int $personid) {
        $sql = "SELECT * FROM adresse WHERE person_id =:person_id";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('person_id' => $personid));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Adresse');
        return $abfrage->fetchAll();
    }



    public function getPerson() {
        return Person::finde($this->getPerson_id());
    }

    public function __toString() {
        $string = "Strase: " . $this->getStrase() . "\rOrt: " . $this->getOrt() . "\rHausnr:" . $this->getHausnr() . "\rPlz:" . $this->getPlz();
        return $string;
    }

}
