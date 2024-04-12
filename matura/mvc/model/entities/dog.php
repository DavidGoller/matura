<?php
class Dog
{
    use ActiveRecordable, Deletable, Findable, Persistable;
    protected static $table = 'dog';
    private int $id = 0;
    private string $name = "";
    private string $microchip = "";
    private string $breed = "";
    private string $birthdate = "";
    private string $gender = "";
    private string $adoption_date = "";
    private string $origin = "";
    private bool $sterilized = false;
    private string $vet = "";
    private string $info = "";
    private string $behaviour = "";
    private int $uid = 0;


    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of microchip
     *
     * @return int
     */
    public function getMicrochip(): string
    {
        return $this->microchip;
    }

    /**
     * Set the value of microchip
     *
     * @param int $microchip
     *
     * @return self
     */
    public function setMicrochip(string $microchip): self
    {
        $this->microchip = $microchip;
        return $this;
    }

    /**
     * Get the value of breed
     *
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * Set the value of breed
     *
     * @param string $breed
     *
     * @return self
     */
    public function setBreed(string $breed): self
    {
        $this->breed = $breed;
        return $this;
    }

    /**
     * Get the value of gender
     *
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get the value of adoption_date
     *
     * @return string
     */
    public function getAdoptionDate(): string
    {
        return $this->adoption_date;
    }

    /**
     * Set the value of adoption_date
     *
     * @param string $adoption_date
     *
     * @return self
     */
    public function setAdoptionDate($adoption_date): self
    {
        if ($adoption_date instanceof DateTime) {
            $this->adoption_date = date("d-m-y", $adoption_date);
        }else{
            $this->adoption_date=$adoption_date;
        }
        return $this;
    }

    /**
     * Get the value of origin
     *
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * Set the value of origin
     *
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Get the value of sterilized
     *
     * @return bool
     */
    public function getSterilized(): bool
    {
        return $this->sterilized;
    }

    /**
     * Set the value of sterilized
     *
     * @param bool $sterilized
     *
     * @return self
     */
    public function setSterilized(string $check): self
    {
        if ($check =="on") {
            $this->sterilized = 1;
        } else {
            $this->sterilized = 0;
        }
        return $this;
    }

    /**
     * Get the value of vet
     *
     * @return string
     */
    public function getVet(): string
    {
        return $this->vet;
    }

    /**
     * Set the value of vet
     *
     * @param string $vet
     *
     * @return self
     */
    public function setVet(string $vet): self
    {
        $this->vet = $vet;
        return $this;
    }

    /**
     * Get the value of info
     *
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * Set the value of info
     *
     * @param string $info
     *
     * @return self
     */
    public function setInfo(string $info): self
    {
        $this->info = $info;
        return $this;
    }

    /**
     * Get the value of behaviour
     *
     * @return string
     */
    public function getBehaviour(): string
    {
        return $this->behaviour;
    }

    /**
     * Set the value of behaviour
     *
     * @param string $behaviour
     *
     * @return self
     */
    public function setBehaviour(string $behaviour): self
    {
        $this->behaviour = $behaviour;
        return $this;
    }



    /**
     * Get the value of UId
     *
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * Set the value of UId
     *
     * @param int $UId
     *
     * @return self
     */
    public function setUId(int $uid): self
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Get the value of birthdate
     *
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @param string $birthdate
     *
     * @return self
     */
    public function setBirthdate($birthdate): self
    {
        if($birthdate instanceof DateTime){
        $this->birthdate = date("d-m-y", $birthdate);
        }else{
            $this->birthdate=$birthdate;
        }    
        return $this;
    }
    public static function findDogByUserID(int $id)
    {
        $sql = "SELECT d.* FROM dog as d"
            . " WHERE d.uid =:user_id";
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute(array('user_id' => $id));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Dog');
        return $abfrage->fetchAll();
    }
}
