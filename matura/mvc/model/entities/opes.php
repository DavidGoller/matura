<?php

class Opes{
    use ActiveRecordable, Deletable, Findable, Persistable;
    private int $cardnumber = 0;
    private int $uid = 0;
    private int $id = 0;
    protected static $table = 'opes';

    /**
     * Get the value of cardnumber
     *
     * @return int
     */
    public function getCardnumber(): int {
        return $this->cardnumber;
    }

    /**
     * Set the value of cardnumber
     *
     * @param int $cardnumber
     *
     * @return self
     */
    public function setCardnumber(int $cardnumber): self {
        $this->cardnumber = $cardnumber;
        return $this;
    }

    /**
     * Get the value of uid
     *
     * @return int
     */
    public function getUid(): int {
        return $this->uid;
    }

    /**
     * Set the value of uid
     *
     * @param int $uid
     *
     * @return self
     */
    public function setUid(int $uid): self {
        $this->uid = $uid;
        return $this;
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
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */

    public function __toString()
    {
        return json_encode($this->toArray());
    }
}
