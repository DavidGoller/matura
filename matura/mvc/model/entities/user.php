<?php

class User
{

    use ActiveRecordable, Deletable, Findable, Persistable;
    private int $id = 0;
    private $usercol; //!BITTE ENTFERNEN
    private string $firstname = "";
    private string $lastname = "";
    private string $codicefiscale ="";
    private string $email ="";
    private int $phone =0;
    private string $password ="";
    private int $lid= 0;
    protected static $table = 'user';
    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Set the value of firstname
     */
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Set the value of lastname
     */
    public function setLastname($lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Set the value of codicefiscale
     */
    public function setCodicefiscale($codicefiscale): self
    {
        $this->codicefiscale = $codicefiscale;
        return $this;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    public function __toString()
    {
        return json_encode($this->toArray());
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Get the value of codicefiscale
     */
    public function getCodicefiscale()
    {
        return $this->codicefiscale;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }


    /**
     * Get the value of lid
     *
     * @return int
     */
    public function getLid(): int {
        return $this->lid;
    }

    /**
     * Set the value of lid
     *
     * @param int $lid
     *
     * @return self
     */
    public function setLid(int $lid): self {
        $this->lid = $lid;
        return $this;
    }
    public static function findeNachEmail($email)
    {
        $sql ='SELECT * FROM user WHERE email = ?';
        $abfrage = DB::getDB()->prepare($sql);
        $abfrage->execute([$email]);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, get_class());
        $user = $abfrage->fetch();
        return $user;
    }
}
