<?php

class auto {

    use ActiveRecordable, Deletable, Findable, Persistable;

    private int $id = 0;
    private string $marke = '';
    private string $modell = '';
    private string $kennzeichen = '';
    protected static $table = 'auto';

    public function getId(): int {
        return $this->id;
    }

    public function getMarke(): string {
        return $this->marke;
    }

    public function getModell(): string {
        return $this->modell;
    }

    public function getKennzeichen(): string {
        return $this->kennzeichen;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setMarke(string $marke): void {
        $this->marke = $marke;
    }

    public function setModell(string $modell): void {
        $this->modell = $modell;
    }

    public function setKennzeichen(string $kennzeichen): void {
        $this->kennzeichen = $kennzeichen;
    }


    public static function findAutoByPersonID(int $id) {
        $sql = "SELECT a.* FROM person_has_auto as pa"
                . " JOIN auto as a ON a.id = pa.auto_id"
                . " WHERE pa.person_id =:person_id";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('person_id' => $id));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Auto');
        return $abfrage->fetchAll();
    }

}
