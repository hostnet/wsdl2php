<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo;

class V2
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $displayname;
    /**
     * @var int
     */
    public $employeenumber;
    /**
     * @var string
     */
    public $bsn;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $firstname;
    /**
     * @var string
     */
    public $initials;
    /**
     * @var string
     */
    public $prefix;
    /**
     * @var string
     */
    public $lastname;
    /**
     * @var string
     */
    public $nickname;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Gender
     */
    public $gender;
    /**
     * @var int
     */
    public $nationalitycode;
    /**
     * @var string
     */
    public $placeofbirth;
    /**
     * @var string
     */
    public $countryofbirthisocode;
    /**
     * @var string
     */
    public $identificationnumber;
    /**
     * @var int
     */
    public $identificationtype;
    /**
     * @var string
     */
    public $partnerprefix;
    /**
     * @var string
     */
    public $partnerlastname;
    /**
     * @var string
     */
    public $telephoneprivate;
    /**
     * @var string
     */
    public $telephonework;
    /**
     * @var string
     */
    public $telephonemobileprivate;
    /**
     * @var string
     */
    public $telephonemobilework;
    /**
     * @var string
     */
    public $telephoneother;
    /**
     * @var string
     */
    public $emailprivate;
    /**
     * @var string
     */
    public $emailwork;
    /**
     * @var int
     */
    public $burgerlijkestaat;
    /**
     * @var int
     */
    public $naamstelling;
    /**
     * @var dateTime
     */
    public $birthday;
    /**
     * @var dateTime
     */
    public $creationdate;
    /**
     * @var int
     */
    public $startperiod;
    /**
     * @var int
     */
    public $startyear;
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
    public function setDisplayName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DisplayName');
        }
        $this->displayname = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeenumber = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBSN($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BSN');
        }
        $this->bsn = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Title');
        }
        $this->title = (int)$val;
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
    public function setInitials($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Initials');
        }
        $this->initials = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPrefix($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Prefix');
        }
        $this->prefix = (int)$val;
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
    public function setNickname($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Nickname');
        }
        $this->nickname = (int)$val;
    }

    /**
     * @param Gender $val
     * @throws Exception
     */
    public function setGender($val)
    {
        $this->gender = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setNationalityCode($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->nationalitycode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPlaceOfBirth($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PlaceOfBirth');
        }
        $this->placeofbirth = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCountryOfBirthISOCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CountryOfBirthISOCode');
        }
        $this->countryofbirthisocode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setIdentificationNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for IdentificationNumber');
        }
        $this->identificationnumber = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setIdentificationType($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->identificationtype = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPartnerPrefix($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PartnerPrefix');
        }
        $this->partnerprefix = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPartnerLastName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PartnerLastName');
        }
        $this->partnerlastname = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTelephonePrivate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TelephonePrivate');
        }
        $this->telephoneprivate = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTelephoneWork($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TelephoneWork');
        }
        $this->telephonework = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTelephoneMobilePrivate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TelephoneMobilePrivate');
        }
        $this->telephonemobileprivate = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTelephoneMobileWork($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TelephoneMobileWork');
        }
        $this->telephonemobilework = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTelephoneOther($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TelephoneOther');
        }
        $this->telephoneother = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmailPrivate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EmailPrivate');
        }
        $this->emailprivate = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmailWork($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EmailWork');
        }
        $this->emailwork = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setBurgerlijkeStaat($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->burgerlijkestaat = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setNaamstelling($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->naamstelling = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setBirthday($val)
    {
        $this->birthday = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreationDate($val)
    {
        $this->creationdate = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStartPeriod($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->startperiod = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStartYear($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->startyear = (int)$val;
    }
}
