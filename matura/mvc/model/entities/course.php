<?php
class Course
{
    use ActiveRecordable, Deletable, Findable, Persistable;

    private int $id = 0;
    private string $name = "";
    protected static $table = "course";

    //Getter&Setter
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    //Statics
    public static function findByBoundle(int $bid)
    {
        $sql = "SELECT c.* FROM contains as co"
            . " JOIN course as c ON c.id = co.cid"
            . " WHERE co.bid =:bid";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('bid' => $bid));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'course');
        return $abfrage->fetchAll();
    }

}