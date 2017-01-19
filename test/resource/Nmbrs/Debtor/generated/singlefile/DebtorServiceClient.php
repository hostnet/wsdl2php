<?php

class AbsenceXmL_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var dateTime
	 */
	public $from;
	/**
	 * @var dateTime
	 */
	public $to;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setFrom($val)
	{
        $this->from = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setTo($val)
	{
        $this->to = $val;
	}
}

class AbsenceXmL_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var AbsenceVerzuim[]
	 */
	public $AbsenceXML_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfAbsenceVerzuim $val
	 * @throws \Exception
	 */
	public function setAbsenceXMLGetResult($val)
	{
        $this->AbsenceXML_GetResult = $val;
	}
}

class AbsenceVerzuim
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorID;
	/**
	 * @var int
	 */
	public $ComapnyID;
	/**
	 * @var int
	 */
	public $EmployeeID;
	/**
	 * @var string
	 */
	public $XML;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorID = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setComapnyID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ComapnyID = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployeeID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeID = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setXML($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for XML');
        }
        $this->XML = $val;
	}
}

class Address_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class Address_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Address
	 */
	public $Address_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Address $val
	 * @throws \Exception
	 */
	public function setAddressGetResult($val)
	{
        $this->Address_GetResult = $val;
	}
}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setDefault($val)
	{
        $this->Default = $val;
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
}

class BankAccount_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class BankAccount_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var BankAccount
	 */
	public $BankAccount_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BankAccount $val
	 * @throws \Exception
	 */
	public function setBankAccountGetResult($val)
	{
        $this->BankAccount_GetResult = $val;
	}
}

class BankAccount
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var string
	 */
	public $IBAN;
	/**
	 * @var string
	 */
	public $BIC;
	/**
	 * @var string
	 */
	public $City;
	/**
	 * @var string
	 */
	public $Name;
	/**
	 * @var BankAccountType
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Number');
        }
        $this->Number = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setIBAN($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for IBAN');
        }
        $this->IBAN = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBIC($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for BIC');
        }
        $this->BIC = $val;
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
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
	}

	/**
	 * @param BankAccountType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}
}

class BankAccountType
{
	const NONE          = 'None';
	const BANKREKENING1 = 'Bankrekening1';
	const SPAARLOON     = 'Spaarloon';
	const BANKREKENING2 = 'Bankrekening2';
	const BANKREKENING3 = 'Bankrekening3';
	const BANKREKENING4 = 'Bankrekening4';
	const BANKREKENING5 = 'Bankrekening5';
	const STANDAARD     = 'Standaard';
	const LEVENSLOOP    = 'Levensloop';
}

class Department_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class Department_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Department[]
	 */
	public $Department_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfDepartment $val
	 * @throws \Exception
	 */
	public function setDepartmentGetListResult($val)
	{
        $this->Department_GetListResult = $val;
	}
}

class Department
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var string
	 */
	public $Description;
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
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}
}

class Department_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var Department
	 */
	public $department;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param Department $val
	 * @throws \Exception
	 */
	public function setDepartment($val)
	{
        $this->department = $val;
	}
}

class Department_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Department_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDepartmentInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Department_InsertResult = $val;
	}
}

class Department_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var Department
	 */
	public $department;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param Department $val
	 * @throws \Exception
	 */
	public function setDepartment($val)
	{
        $this->department = $val;
	}
}

class Department_UpdateResponse
{}

class Department_Delete
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var int
	 */
	public $id;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->id = $val;
	}
}

class Department_DeleteResponse
{}

class Function_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class Function_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Function[]
	 */
	public $Function_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfFunction $val
	 * @throws \Exception
	 */
	public function setFunctionGetListResult($val)
	{
        $this->Function_GetListResult = $val;
	}
}

class Function_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var Function
	 */
	public $function;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param Function $val
	 * @throws \Exception
	 */
	public function setFunction($val)
	{
        $this->function = $val;
	}
}

class Function_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Function_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setFunctionInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Function_InsertResult = $val;
	}
}

class Function_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var Function
	 */
	public $function;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param Function $val
	 * @throws \Exception
	 */
	public function setFunction($val)
	{
        $this->function = $val;
	}
}

class Function_UpdateResponse
{}

class Function_Delete
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var int
	 */
	public $id;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->id = $val;
	}
}

class Function_DeleteResponse
{}

class Tags_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class Tags_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var DebtorTag[]
	 */
	public $Tags_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfDebtorTag $val
	 * @throws \Exception
	 */
	public function setTagsGetResult($val)
	{
        $this->Tags_GetResult = $val;
	}
}

class DebtorTag
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $HexColor;
	/**
	 * @var string
	 */
	public $Tag;
	// @codingStandardsIgnoreEnd

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
	public function setHexColor($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HexColor');
        }
        $this->HexColor = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Tag');
        }
        $this->Tag = $val;
	}
}

class ContactPerson_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class ContactPerson_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var DebtorContactPerson
	 */
	public $ContactPerson_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DebtorContactPerson $val
	 * @throws \Exception
	 */
	public function setContactPersonGetResult($val)
	{
        $this->ContactPerson_GetResult = $val;
	}
}

class DebtorContactPerson
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Email;
	/**
	 * @var string
	 */
	public $Name;
	/**
	 * @var string
	 */
	public $Phone;
	// @codingStandardsIgnoreEnd

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
	public function setPhone($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Phone');
        }
        $this->Phone = $val;
	}
}

class AccountantContact_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class AccountantContact_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var DebtorContactPerson[]
	 */
	public $AccountantContact_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfDebtorContactPerson $val
	 * @throws \Exception
	 */
	public function setAccountantContactGetListResult($val)
	{
        $this->AccountantContact_GetListResult = $val;
	}
}

class ServiceLevel_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class ServiceLevel_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var DebtorServicelevel
	 */
	public $ServiceLevel_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DebtorServicelevel $val
	 * @throws \Exception
	 */
	public function setServiceLevelGetResult($val)
	{
        $this->ServiceLevel_GetResult = $val;
	}
}

class DebtorServicelevel
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $StartPeriod;
	/**
	 * @var int
	 */
	public $StartYear;
	/**
	 * @var string
	 */
	public $ServiceLevel;
	/**
	 * @var dateTime
	 */
	public $StartContract;
	// @codingStandardsIgnoreEnd

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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setServiceLevel($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ServiceLevel');
        }
        $this->ServiceLevel = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStartContract($val)
	{
        $this->StartContract = $val;
	}
}

class Debtor_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class Debtor_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Debtor
	 */
	public $Debtor_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Debtor $val
	 * @throws \Exception
	 */
	public function setDebtorGetResult($val)
	{
        $this->Debtor_GetResult = $val;
	}
}

class Debtor
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $Name;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Number');
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
}

class Debtor_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Debtor
	 */
	public $Debtor;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Debtor $val
	 * @throws \Exception
	 */
	public function setDebtor($val)
	{
        $this->Debtor = $val;
	}
}

class Debtor_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Debtor_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Debtor_InsertResult = $val;
	}
}

class Debtor_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Debtor
	 */
	public $Debtor;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Debtor $val
	 * @throws \Exception
	 */
	public function setDebtor($val)
	{
        $this->Debtor = $val;
	}
}

class Debtor_UpdateResponse
{}

class List_GetAll
{}

class List_GetAllResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Debtor[]
	 */
	public $List_GetAllResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfDebtor $val
	 * @throws \Exception
	 */
	public function setListGetAllResult($val)
	{
        $this->List_GetAllResult = $val;
	}
}

class List_GetByNumber
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Number;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Number');
        }
        $this->Number = $val;
	}
}

class List_GetByNumberResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Debtor[]
	 */
	public $List_GetByNumberResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfDebtor $val
	 * @throws \Exception
	 */
	public function setListGetByNumberResult($val)
	{
        $this->List_GetByNumberResult = $val;
	}
}

class Title_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}
}

class Title_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Title[]
	 */
	public $Title_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfTitle $val
	 * @throws \Exception
	 */
	public function setTitleGetListResult($val)
	{
        $this->Title_GetListResult = $val;
	}
}

class Title
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $TitleName;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTitleName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TitleName');
        }
        $this->TitleName = $val;
	}
}

class Title_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var Title
	 */
	public $title;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param Title $val
	 * @throws \Exception
	 */
	public function setTitle($val)
	{
        $this->title = $val;
	}
}

class Title_InsertResponse
{}

/**
 * DebtorServiceClient
 */
class DebtorServiceClient extends SoapClient {

	const WSDL_FILE = "DebtorService.wsdl";
	private $classmap = array(
        'AbsenceXML_Get' =>
            'AbsenceXML_Get',
        'AbsenceXML_GetResponse' =>
            'AbsenceXML_GetResponse',
        'AbsenceVerzuim' =>
            'AbsenceVerzuim',
        'Address_Get' =>
            'Address_Get',
        'Address_GetResponse' =>
            'Address_GetResponse',
        'Address' =>
            'Address',
        'BankAccount_Get' =>
            'BankAccount_Get',
        'BankAccount_GetResponse' =>
            'BankAccount_GetResponse',
        'BankAccount' =>
            'BankAccount',
        'BankAccountType' =>
            'BankAccountType',
        'Department_GetList' =>
            'Department_GetList',
        'Department_GetListResponse' =>
            'Department_GetListResponse',
        'Department' =>
            'Department',
        'Department_Insert' =>
            'Department_Insert',
        'Department_InsertResponse' =>
            'Department_InsertResponse',
        'Department_Update' =>
            'Department_Update',
        'Department_UpdateResponse' =>
            'Department_UpdateResponse',
        'Department_Delete' =>
            'Department_Delete',
        'Department_DeleteResponse' =>
            'Department_DeleteResponse',
        'Function_GetList' =>
            'Function_GetList',
        'Function_GetListResponse' =>
            'Function_GetListResponse',
        'Function_Insert' =>
            'Function_Insert',
        'Function_InsertResponse' =>
            'Function_InsertResponse',
        'Function_Update' =>
            'Function_Update',
        'Function_UpdateResponse' =>
            'Function_UpdateResponse',
        'Function_Delete' =>
            'Function_Delete',
        'Function_DeleteResponse' =>
            'Function_DeleteResponse',
        'Tags_Get' =>
            'Tags_Get',
        'Tags_GetResponse' =>
            'Tags_GetResponse',
        'DebtorTag' =>
            'DebtorTag',
        'ContactPerson_Get' =>
            'ContactPerson_Get',
        'ContactPerson_GetResponse' =>
            'ContactPerson_GetResponse',
        'DebtorContactPerson' =>
            'DebtorContactPerson',
        'AccountantContact_GetList' =>
            'AccountantContact_GetList',
        'AccountantContact_GetListResponse' =>
            'AccountantContact_GetListResponse',
        'ServiceLevel_Get' =>
            'ServiceLevel_Get',
        'ServiceLevel_GetResponse' =>
            'ServiceLevel_GetResponse',
        'DebtorServicelevel' =>
            'DebtorServicelevel',
        'Debtor_Get' =>
            'Debtor_Get',
        'Debtor_GetResponse' =>
            'Debtor_GetResponse',
        'Debtor' =>
            'Debtor',
        'Debtor_Insert' =>
            'Debtor_Insert',
        'Debtor_InsertResponse' =>
            'Debtor_InsertResponse',
        'Debtor_Update' =>
            'Debtor_Update',
        'Debtor_UpdateResponse' =>
            'Debtor_UpdateResponse',
        'List_GetAll' =>
            'List_GetAll',
        'List_GetAllResponse' =>
            'List_GetAllResponse',
        'List_GetByNumber' =>
            'List_GetByNumber',
        'List_GetByNumberResponse' =>
            'List_GetByNumberResponse',
        'Title_GetList' =>
            'Title_GetList',
        'Title_GetListResponse' =>
            'Title_GetListResponse',
        'Title' =>
            'Title',
        'Title_Insert' =>
            'Title_Insert',
        'Title_InsertResponse' =>
            'Title_InsertResponse',
	);

	public function __construct($wsdl = null, $options = array()) {
        foreach($this->classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
            	$options['classmap'][$key] = $value;
            }
        }
        if(isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * AbsenceXMLGet
	 * Get verzuim XML abcense list
	 *
	 * @param AbsenceXML_Get $parameters
	 * @return AbsenceXML_GetResponse
	 */
	public function AbsenceXMLGet(AbsenceXML_Get $parameters) {
        return $this->__soapCall(
            'AbsenceXML_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * AddressGet
	 * Get address by DebtorID
	 *
	 * @param Address_Get $parameters
	 * @return Address_GetResponse
	 */
	public function AddressGet(Address_Get $parameters) {
        return $this->__soapCall(
            'Address_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * BankAccountGet
	 * Get bankaccount by DebtorID
	 *
	 * @param BankAccount_Get $parameters
	 * @return BankAccount_GetResponse
	 */
	public function BankAccountGet(BankAccount_Get $parameters) {
        return $this->__soapCall(
            'BankAccount_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * DepartmentGetList
	 * Returns departments that belong to a debtor.
	 *
	 * @param Department_GetList $parameters
	 * @return Department_GetListResponse
	 */
	public function DepartmentGetList(Department_GetList $parameters) {
        return $this->__soapCall(
            'Department_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * DepartmentInsert
	 * Insert a department into a debtor.
	 *
	 * @param Department_Insert $parameters
	 * @return Department_InsertResponse
	 */
	public function DepartmentInsert(Department_Insert $parameters) {
        return $this->__soapCall(
            'Department_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * DepartmentUpdate
	 * Update a department into a debtor.
	 *
	 * @param Department_Update $parameters
	 * @return Department_UpdateResponse
	 */
	public function DepartmentUpdate(Department_Update $parameters) {
        return $this->__soapCall(
            'Department_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * DepartmentDelete
	 * Delete a department from a debtor.
	 *
	 * @param Department_Delete $parameters
	 * @return Department_DeleteResponse
	 */
	public function DepartmentDelete(Department_Delete $parameters) {
        return $this->__soapCall(
            'Department_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * FunctionGetList
	 * Returns functions that belong to a debtor.
	 *
	 * @param Function_GetList $parameters
	 * @return Function_GetListResponse
	 */
	public function FunctionGetList(Function_GetList $parameters) {
        return $this->__soapCall(
            'Function_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * FunctionInsert
	 * Update or insert a function into a debtor.
	 *
	 * @param Function_Insert $parameters
	 * @return Function_InsertResponse
	 */
	public function FunctionInsert(Function_Insert $parameters) {
        return $this->__soapCall(
            'Function_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * FunctionUpdate
	 * Update a function into a debtor.
	 *
	 * @param Function_Update $parameters
	 * @return Function_UpdateResponse
	 */
	public function FunctionUpdate(Function_Update $parameters) {
        return $this->__soapCall(
            'Function_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * FunctionDelete
	 * Delete a function from a debtor.
	 *
	 * @param Function_Delete $parameters
	 * @return Function_DeleteResponse
	 */
	public function FunctionDelete(Function_Delete $parameters) {
        return $this->__soapCall(
            'Function_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * TagsGet
	 * Get tags by DebtorId
	 *
	 * @param Tags_Get $parameters
	 * @return Tags_GetResponse
	 */
	public function TagsGet(Tags_Get $parameters) {
        return $this->__soapCall(
            'Tags_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * ContactPersonGet
	 * Get contactperson by DebtorID
	 *
	 * @param ContactPerson_Get $parameters
	 * @return ContactPerson_GetResponse
	 */
	public function ContactPersonGet(ContactPerson_Get $parameters) {
        return $this->__soapCall(
            'ContactPerson_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * AccountantContactGetList
	 * Get accountant contacts by debtorId
	 *
	 * @param AccountantContact_GetList $parameters
	 * @return AccountantContact_GetListResponse
	 */
	public function AccountantContactGetList(AccountantContact_GetList $parameters) {
        return $this->__soapCall(
            'AccountantContact_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * ServiceLevelGet
	 * Get servicelevel by DebtorId
	 *
	 * @param ServiceLevel_Get $parameters
	 * @return ServiceLevel_GetResponse
	 */
	public function ServiceLevelGet(ServiceLevel_Get $parameters) {
        return $this->__soapCall(
            'ServiceLevel_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * DebtorGet
	 * Get debtor by ID
	 *
	 * @param Debtor_Get $parameters
	 * @return Debtor_GetResponse
	 */
	public function DebtorGet(Debtor_Get $parameters) {
        return $this->__soapCall(
            'Debtor_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * DebtorInsert
	 * Insert debtor
	 *
	 * @param Debtor_Insert $parameters
	 * @return Debtor_InsertResponse
	 */
	public function DebtorInsert(Debtor_Insert $parameters) {
        return $this->__soapCall(
            'Debtor_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * DebtorUpdate
	 * Update an existing debtor
	 *
	 * @param Debtor_Update $parameters
	 * @return Debtor_UpdateResponse
	 */
	public function DebtorUpdate(Debtor_Update $parameters) {
        return $this->__soapCall(
            'Debtor_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * ListGetAll
	 * Returns all debtors
	 *
	 * @param List_GetAll $parameters
	 * @return List_GetAllResponse
	 */
	public function ListGetAll(List_GetAll $parameters) {
        return $this->__soapCall(
            'List_GetAll',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * ListGetByNumber
	 * Get debtors by Number
	 *
	 * @param List_GetByNumber $parameters
	 * @return List_GetByNumberResponse
	 */
	public function ListGetByNumber(List_GetByNumber $parameters) {
        return $this->__soapCall(
            'List_GetByNumber',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * TitleGetList
	 * Returns titles that belong to a debtor.
	 *
	 * @param Title_GetList $parameters
	 * @return Title_GetListResponse
	 */
	public function TitleGetList(Title_GetList $parameters) {
        return $this->__soapCall(
            'Title_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}

	/**
	 * TitleInsert
	 * Insert a title into a debtor.
	 *
	 * @param Title_Insert $parameters
	 * @return Title_InsertResponse
	 */
	public function TitleInsert(Title_Insert $parameters) {
        return $this->__soapCall(
            'Title_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}
}
