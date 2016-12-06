<?php

namespace Controle;

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
        $this->CreDate = $val;
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
        $this->Status = $val;
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
        $this->Handle = $val;
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
        $this->FirstName = $val;
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
        $this->LastName = $val;
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
        $this->OrgName = $val;
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
        $this->Address1 = $val;
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
        $this->Address2 = $val;
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
        $this->PostalCode = $val;
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
        $this->City = $val;
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
        $this->State = $val;
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
        $this->CountryCode = $val;
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
        $this->Email = $val;
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
        $this->Phone = $val;
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
        $this->Fax = $val;
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
        $this->Type = $val;
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
        $this->Details = $val;
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
        $this->OrganisationNumber = $val;
    }
}
