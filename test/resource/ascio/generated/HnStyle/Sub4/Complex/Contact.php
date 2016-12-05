<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Contact
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
    public $FirstName;
    /**
     * @var string
     */
    public $LastName;
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
    public $PostalCode;
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
    public $Type;
    /**
     * @var string
     */
    public $Details;
    /**
     * @var string
     */
    public $OrganisationNumber;
    // @codingStandardsIgnoreEnd

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreDate($val)
    {
        $this->CreDate = (dateTime)$val;
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
        $this->Status = (string)$val;
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
        $this->Handle = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFirstName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FirstName');
        }
        $this->FirstName = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLastName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LastName');
        }
        $this->LastName = (string)$val;
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
        $this->OrgName = (string)$val;
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
        $this->Address1 = (string)$val;
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
        $this->Address2 = (string)$val;
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
    public function setState($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for State');
        }
        $this->State = (string)$val;
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
        $this->CountryCode = (string)$val;
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
        $this->Email = (string)$val;
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
        $this->Phone = (string)$val;
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
        $this->Fax = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Type');
        }
        $this->Type = (string)$val;
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
        $this->Details = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOrganisationNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrganisationNumber');
        }
        $this->OrganisationNumber = (string)$val;
    }
}
