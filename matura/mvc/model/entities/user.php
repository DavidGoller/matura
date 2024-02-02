<?php

class User
{

    use ActiveRecordable, Deletable, Findable, Persistable;
    private $firstname = "";
    private $lastname = "";
    private $codicefiscale = "";
    private $email = "";
    private $phone = 0;
    private $password = "";

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
        return json_encode( $this->toArray() );
    }
}
