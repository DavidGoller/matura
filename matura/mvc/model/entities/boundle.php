<?php
class Boundle
{
    use ActiveRecordable, Deletable, Findable, Persistable;



    private int $id = 0;
    private string $name = "";
    private string $info = "";
    protected static $table = "boundle";

    //Getter&Setter
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getInfo(): string
    {
        return $this->info;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setInfo(string $info): void
    {
        $this->info = $info;
    }



    //Static

    public static function findBoundleByCourse(int $cid)
    {
        $sql = "SELECT b.* FROM contains as co"
            . " JOIN boundle as b ON b.id = co.cid"
            . " WHERE co.cid =:cid";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('cid' => $cid));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Boundle');
        return $abfrage->fetchAll();
    }

    public static function findeByRegistered(int $rid)
    {
        $sql = "SELECT b.* FROM registered as r"
            . " JOIN boundle as b ON b.id = r.bid"
            . " WHERE r.id =:rid";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('rid' => $rid));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Boundle');
        return $abfrage->fetch();
    }




}