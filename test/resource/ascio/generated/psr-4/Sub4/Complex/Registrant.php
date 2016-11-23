<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Registrant
{
    // @codingStandardsIgnoreStart
    /**
     * @var dateTime
     */
    public $CreDate;
    /**
     * @var string
     */
    public $Status;
    /**
     * @var string
     */
    public $Handle;
    /**
     * @var string
     */
    public $Name;
    /**
     * @var string
     */
    public $OrgName;
    /**
     * @var string
     */
    public $Address1;
    /**
     * @var string
     */
    public $Address2;
    /**
     * @var string
     */
    public $City;
    /**
     * @var string
     */
    public $State;
    /**
     * @var string
     */
    public $PostalCode;
    /**
     * @var string
     */
    public $CountryCode;
    /**
     * @var string
     */
    public $Email;
    /**
     * @var string
     */
    public $Phone;
    /**
     * @var string
     */
    public $Fax;
    /**
     * @var string
     */
    public $RegistrantType;
    /**
     * @var string
     */
    public $VatNumber;
    /**
     * @var string
     */
    public $RegistrantDate;
    /**
     * @var string
     */
    public $NexusCategory;
    /**
     * @var string
     */
    public $RegistrantNumber;
    /**
     * @var string
     */
    public $Details;
    // @codingStandardsIgnoreEnd

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreDate($val)
    {
        $this->CreDate = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Handle');
        }
        $this->Handle = (int)$val;
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
        $this->Name = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOrgName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrgName');
        }
        $this->OrgName = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAddress1($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Address1');
        }
        $this->Address1 = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAddress2($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Address2');
        }
        $this->Address2 = (int)$val;
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
        $this->City = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setState($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for State');
        }
        $this->State = (int)$val;
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
        $this->PostalCode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCountryCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CountryCode');
        }
        $this->CountryCode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmail($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Email');
        }
        $this->Email = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhone($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone');
        }
        $this->Phone = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFax($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Fax');
        }
        $this->Fax = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRegistrantType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegistrantType');
        }
        $this->RegistrantType = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVatNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for VatNumber');
        }
        $this->VatNumber = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRegistrantDate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegistrantDate');
        }
        $this->RegistrantDate = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNexusCategory($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NexusCategory');
        }
        $this->NexusCategory = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRegistrantNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegistrantNumber');
        }
        $this->RegistrantNumber = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDetails($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Details');
        }
        $this->Details = (int)$val;
    }
}
