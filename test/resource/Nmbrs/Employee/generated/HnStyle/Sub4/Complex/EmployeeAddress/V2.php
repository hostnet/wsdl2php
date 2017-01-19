<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddress;

class V2
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Id;
    /**
     * @var int
     */
    public $StartPeriod;
    /**
     * @var int
     */
    public $StartYear;
    /**
     * @var int
     */
    public $EndPeriod;
    /**
     * @var int
     */
    public $EndYear;
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
     * @var dateTime
     */
    public $CreationDate;
    /**
     * @var string
     */
    public $CountryISOCode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType
     */
    public $Type;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Id = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setStartPeriod($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartPeriod = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setStartYear($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartYear = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEndPeriod($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EndPeriod = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEndYear($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EndYear = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setStreet($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Street');
        }
        $this->Street = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setHouseNumber($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HouseNumber');
        }
        $this->HouseNumber = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setHouseNumberAddition($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HouseNumberAddition');
        }
        $this->HouseNumberAddition = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setPostalCode($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCity($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for City');
        }
        $this->City = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setStateProvince($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for StateProvince');
        }
        $this->StateProvince = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setCreationDate($val)
    {
        $this->CreationDate = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCountryISOCode($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CountryISOCode');
        }
        $this->CountryISOCode = $val;
    }

    /**
     * @param AddressType $val
     * @throws \Exception
     */
    public function setType($val)
    {
        $this->Type = $val;
    }
}
