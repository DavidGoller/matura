<?php

class family{
    use ActiveRecordable, Deletable, Findable, Persistable;
    protected static $table = 'family';
    private int $id = 0;
    private string $firstname = "";
    private string $lastname = "";
    private int $phone = 0;

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of firstname
     *
     * @return string
     */
    public function getFirstname(): string {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return string
     */
    public function getLastname(): string {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get the value of phone
     *
     * @return int
     */
    public function getPhone(): int {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @param int $phone
     *
     * @return self
     */
    public function setPhone(int $phone): self {
        $this->phone = $phone;
        return $this;
    }
}
