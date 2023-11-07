<?php
class Person{
    use ActiveRecordable, Deletable, Findable, Persistable;
    private int $id = 0;
    private string $vorname = "";
    private string $nachname = "";
    protected static $table = 'person';

    public function getVorname()
    {
       return $this->vorname;
    }
    public function setVorname(string $vorname)
    {
        $this->vorname= $vorname;
    }

    public function getNachname()
    {
       return $this->nachname;
    }
    public function setNachname(string $nachname)
    {
        $this->nachname= $nachname;
    }

    public function getid()
    {
       return $this->id;
    }
    public function setid(int $id)
    {
        $this->id= $id;
    }

    

    public static function findeNachVorname(string $vorname)
    {
        $sql = "SELECT * FROM person WHERE vorname='?'";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array($vorname));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Person');
        return $abfrage->fetchAll();
    }

    public static function findeNachVorname2(string $vorname)
    {
        $sql = "SELECT * FROM person WHERE vorname=':vorname'";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('vorname'=>$vorname));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Person');
        return $abfrage->fetchAll();
    }

    public static function findeNachNachname(string $nachname):array //man kann den Rückgabewert festlegen mit : nach der ( 
    {
        $sql = "SELECT * FROM person WHERE nachname='?'"; // kann mehrere ? hintereinander nehmen muss aber die Reihenfolge im Array stimmen
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array($nachname));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Person');
        return $abfrage->fetchAll();
    }

   
    public static function findPersonByAutoID(int $id) {
        $sql = "SELECT p.* FROM person_has_auto as pa"
                . " JOIN person as p ON p.id = pa.person_id"
                . " WHERE pa.auto_id =:auto_id";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('auto_id' => $id));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Person');
        return $abfrage->fetchAll();
    }

      
    public function getAdressen(){
        return Adresse::findeNachPersonID($this->getid());
    }  
   public function getAuto(){
        return Auto::findAutoByPersonID($this->getid());
    }  
    
    public function setAuto(Auto $auto){
        try{
           $sql = 'INSERT INTO person_has_auto (person_id, auto_id) VALUES (:person_id, :auto_id)';
            $abfrage = DB::getDB()->prepare($sql);
            $abfrage->execute(array('person_id'=> $this->getid(),'auto_id'=> $auto->getid() ));
            echo 'Insert done well';
        }
        catch(Exception $e){
            var_dump($e);
            echo "<br></br>";
            var_dump($abfrage->errorinfo());
        }
      
    }
       public function rmAuto(Auto $auto){
        try{
           $sql = 'DELETE FROM person_has_auto WHERE person_id = :person_id AND auto_id = :auto_id';
            $abfrage = DB::getDB()->prepare($sql);
            $abfrage->execute(array('person_id'=> $this->getid(),'auto_id'=> $auto->getid() ));
            echo 'Remove done well';
                    }
        catch(Exception $e){
            var_dump($e);
            echo "<br></br>";
            var_dump($abfrage->errorinfo());
        }
      
    }
    public function __toString() {

        $string = "Nachname: ".$this->getNachname()."\rVorname: ".$this->getVorname();
        foreach($this->getAdressen() as $adresse){
            $string =$string. "\r" .$adresse;
        }
        return $string;
    }



}
