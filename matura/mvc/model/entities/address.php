<?php
class Address
{

    use ActiveRecordable, Deletable, Findable, Persistable;
    protected $table_name = 'addresses';
    private string $address = "";
    private string $country = "";
    private int $postcode = 0;
    private string $city = "";
    private string $province = "";
    private int $uid = 0;



    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress($address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     */
    public function setCountry($country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get the value of postcode
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set the value of postcode
     */
    public function setPostcode($postcode): self
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity($city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get the value of province
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set the value of province
     */
    public function setProvince($province): self
    {
        $this->province = $province;
        return $this;
    }


    /**
     * Get the value of uid
     *
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * Set the value of uid
     *
     * @param int $uid
     *
     * @return self
     */
    public function setUid(int $uid): self
    {
        $this->uid = $uid;
        return $this;
    }
    public function __toString()
    {
        return "Address: {$this->address}, City: {$this->city}, Province: {$this->province}, Country: {$this->country}, Postcode: {$this->postcode}, UID: {$this->uid}\n";
    }
}
