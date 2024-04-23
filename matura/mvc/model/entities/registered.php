<?php
class Registered
{
    use ActiveRecordable, Deletable, Findable, Persistable;
    protected static $table = "registered";

    private int $id;
    private int $bid;
    private int $did;
    private string $expiring_date;
    private float $cost;
    private int $rate;

    //Getter&Setter
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setBid(int $bid): void
    {
        $this->bid = $bid;
    }

    public function setDid(int $did): void
    {
        $this->did = $did;
    }

    public function setExpiringDate(string $expiring_date): void
    {
        $this->expiring_date = $expiring_date;
    }

    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }

    public function setRate(int $rate): void
    {
        $this->rate = $rate;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getBid(): int
    {
        return $this->bid;
    }

    public function getDid(): int
    {
        return $this->did;
    }

    public function getExpiringDate(): string
    {
        return $this->expiring_date;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getRate(): int
    {
        return $this->rate;
    }

    //Static
    public static function findeByDog($did)
    {
        $sql = "SELECT r.* FROM registered as r"
            . " WHERE r.did =:did";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('bid' => $did));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'registered');
        return $abfrage->fetchAll();
    }

    //External fubnctions
    public function getDog(){
        return Dog::finde($this->getDid());
    }
    
    public function getBoundle(){
        return Boundle::finde($this->getbid());
    }


}
