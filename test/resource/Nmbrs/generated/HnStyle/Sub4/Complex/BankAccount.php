<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class BankAccount
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $number;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $iban;
    /**
     * @var string
     */
    public $bic;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $name;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BankAccountType
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
     * @param string $val
     * @throws Exception
     */
    public function setNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Number');
        }
        $this->number = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setIBAN($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for IBAN');
        }
        $this->iban = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBIC($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BIC');
        }
        $this->bic = (int)$val;
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
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
    }

    /**
     * @param BankAccountType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }
}
