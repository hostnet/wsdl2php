<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Company
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $ID;
    /**
     * @var int
     */
    public $Number;
    /**
     * @var string
     */
    public $Name;
    /**
     * @var string
     */
    public $PhoneNumber;
    /**
     * @var string
     */
    public $FaxNumber;
    /**
     * @var string
     */
    public $Email;
    /**
     * @var string
     */
    public $Website;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\LoonaangifteTijdvak
     */
    public $LoonaangifteTijdvak;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ID = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setNumber($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Number = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setPhoneNumber($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PhoneNumber');
        }
        $this->PhoneNumber = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setFaxNumber($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for FaxNumber');
        }
        $this->FaxNumber = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setEmail($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Email');
        }
        $this->Email = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setWebsite($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Website');
        }
        $this->Website = $val;
    }

    /**
     * @param LoonaangifteTijdvak $val
     * @throws \Exception
     */
    public function setLoonaangifteTijdvak($val)
    {
        $this->LoonaangifteTijdvak = $val;
    }
}
