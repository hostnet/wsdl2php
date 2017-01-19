<?php

namespace Controle;

class PersonalInfo extends
 \Controle\Employee
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeNumber;
	/**
	 * @var string
	 */
	public $BSN;
	/**
	 * @var string
	 */
	public $Title;
	/**
	 * @var string
	 */
	public $FirstName;
	/**
	 * @var string
	 */
	public $Initials;
	/**
	 * @var string
	 */
	public $Prefix;
	/**
	 * @var string
	 */
	public $LastName;
	/**
	 * @var string
	 */
	public $Nickname;
	/**
	 * @var \Controle\Gender
	 */
	public $Gender;
	/**
	 * @var int
	 */
	public $NationalityCode;
	/**
	 * @var string
	 */
	public $PlaceOfBirth;
	/**
	 * @var string
	 */
	public $CountryOfBirthISOCode;
	/**
	 * @var string
	 */
	public $IdentificationNumber;
	/**
	 * @var int
	 */
	public $IdentificationType;
	/**
	 * @var string
	 */
	public $PartnerPrefix;
	/**
	 * @var string
	 */
	public $PartnerLastName;
	/**
	 * @var string
	 */
	public $TelephonePrivate;
	/**
	 * @var string
	 */
	public $TelephoneWork;
	/**
	 * @var string
	 */
	public $TelephoneMobilePrivate;
	/**
	 * @var string
	 */
	public $TelephoneMobileWork;
	/**
	 * @var string
	 */
	public $TelephoneOther;
	/**
	 * @var string
	 */
	public $EmailPrivate;
	/**
	 * @var string
	 */
	public $EmailWork;
	/**
	 * @var string
	 */
	public $BurgerlijkeStaat;
	/**
	 * @var string
	 */
	public $Naamstelling;
	/**
	 * @var dateTime
	 */
	public $Birthday;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployeeNumber($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeNumber = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBSN($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for BSN');
        }
        $this->BSN = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTitle($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Title');
        }
        $this->Title = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setFirstName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for FirstName');
        }
        $this->FirstName = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setInitials($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Initials');
        }
        $this->Initials = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPrefix($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Prefix');
        }
        $this->Prefix = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLastName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for LastName');
        }
        $this->LastName = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNickname($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Nickname');
        }
        $this->Nickname = $val;
	}

	/**
	 * @param Gender $val
	 * @throws \Exception
	 */
	public function setGender($val)
	{
        $this->Gender = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setNationalityCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->NationalityCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPlaceOfBirth($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PlaceOfBirth');
        }
        $this->PlaceOfBirth = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCountryOfBirthISOCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CountryOfBirthISOCode');
        }
        $this->CountryOfBirthISOCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setIdentificationNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for IdentificationNumber');
        }
        $this->IdentificationNumber = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setIdentificationType($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->IdentificationType = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPartnerPrefix($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PartnerPrefix');
        }
        $this->PartnerPrefix = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPartnerLastName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PartnerLastName');
        }
        $this->PartnerLastName = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephonePrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephonePrivate');
        }
        $this->TelephonePrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneWork');
        }
        $this->TelephoneWork = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneMobilePrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneMobilePrivate');
        }
        $this->TelephoneMobilePrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneMobileWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneMobileWork');
        }
        $this->TelephoneMobileWork = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneOther($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneOther');
        }
        $this->TelephoneOther = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmailPrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for EmailPrivate');
        }
        $this->EmailPrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmailWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for EmailWork');
        }
        $this->EmailWork = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBurgerlijkeStaat($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for BurgerlijkeStaat');
        }
        $this->BurgerlijkeStaat = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNaamstelling($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Naamstelling');
        }
        $this->Naamstelling = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setBirthday($val)
	{
        $this->Birthday = $val;
	}
}
