<?php

namespace Controle;

class Contact
{
    /**
     * @var dateTime
     */
    public $credate;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $handle;
    /**
     * @var string
     */
    public $firstname;
    /**
     * @var string
     */
    public $lastname;
    /**
     * @var string
     */
    public $orgname;
    /**
     * @var string
     */
    public $address1;
    /**
     * @var string
     */
    public $address2;
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
    public $state;
    /**
     * @var string
     */
    public $countrycode;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $details;
    /**
     * @var string
     */
    public $organisationnumber;
    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreDate($val)
    {
        $this->credate = (int)$val;
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
        $this->status = (int)$val;
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
        $this->handle = (int)$val;
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
        $this->firstname = (int)$val;
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
        $this->lastname = (int)$val;
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
        $this->orgname = (int)$val;
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
        $this->address1 = (int)$val;
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
        $this->address2 = (int)$val;
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
    public function setState($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for State');
        }
        $this->state = (int)$val;
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
        $this->countrycode = (int)$val;
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
        $this->email = (int)$val;
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
        $this->phone = (int)$val;
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
        $this->fax = (int)$val;
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
        $this->type = (int)$val;
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
        $this->details = (int)$val;
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
        $this->organisationnumber = (int)$val;
    }
}
