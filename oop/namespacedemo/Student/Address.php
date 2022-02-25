<?php


namespace Student;
class Address
{
    public $address;

    /**
     * Address constructor.
     * @param $address
     */
    public function __construct($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        echo "Address: $this->address";
    }


}
