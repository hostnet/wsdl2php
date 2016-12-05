<?php

namespace Controle;

class Address
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Id;
    /**
     * @var boolean
     */
    public $Default;
    /**
     * @var string
     */
    public $Street;
    /**
     * @var string
     */
    public $HouseNumber;
    /**
     * @var string
     */
    public $HouseNumberAddition;
    /**
     * @var string
     */
    public $PostalCode;
    /**
     * @var string
     */
    public $City;
    /**
     * @var string
     */
    public $StateProvince;
    /**
     * @var string
     */
    public $CountryISOCode;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Id = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDefault($val)
    {
        $this->Default = (boolean)$val;
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
        $this->Street = (string)$val;
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
        $this->HouseNumber = (string)$val;
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
        $this->HouseNumberAddition = (string)$val;
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
        $this->PostalCode = (string)$val;
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
        $this->City = (string)$val;
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
        $this->StateProvince = (string)$val;
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
        $this->CountryISOCode = (string)$val;
    }
}
