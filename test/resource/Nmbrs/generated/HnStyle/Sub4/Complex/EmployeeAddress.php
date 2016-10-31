<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EmployeeAddress
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var boolean
     */
    public $default;
    /**
     * @var string
     */
    public $street;
    /**
     * @var string
     */
    public $housenumber;
    /**
     * @var string
     */
    public $housenumberaddition;
    /**
     * @var string
     */
    public $postalcode;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $stateprovince;
    /**
     * @var string
     */
    public $countryisocode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType
     */
    public $type;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDefault($val)
    {
        $this->default = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStreet($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Street');
        }
        $this->street = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHouseNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HouseNumber');
        }
        $this->housenumber = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHouseNumberAddition($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HouseNumberAddition');
        }
        $this->housenumberaddition = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PostalCode');
        }
        $this->postalcode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCity($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for City');
        }
        $this->city = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStateProvince($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StateProvince');
        }
        $this->stateprovince = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCountryISOCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CountryISOCode');
        }
        $this->countryisocode = (int)$val;
    }

    /**
     * @param AddressType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }
}
