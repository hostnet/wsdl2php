<?php

class SalaryDocuments_GetEmployeePayslipsPdFbyRunCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeID;
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $RunID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setEmployeeID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->EmployeeID = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRunID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunID = (int)$val;
	}
}

class SalaryDocuments_GetEmployeePayslipsPdFbyRunCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Payslip[]
	 */
	public $SalaryDocuments_GetEmployeePayslipsPDFByRunCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfPayslip $val
	 * @throws Exception
	 */
	public function setSalaryDocumentsGetEmployeePayslipsPDFByRunCompanyResult($val)
	{
        $this->SalaryDocuments_GetEmployeePayslipsPDFByRunCompanyResult = (int)$val;
	}
}

class Payslip
{
	// @codingStandardsIgnoreStart
	/**
	 * @var base64Binary
	 */
	public $PDF;
	// @codingStandardsIgnoreEnd

	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setPDF($val)
	{
        $this->PDF = (int)$val;
	}
}

class SalaryDocuments_GetAllPayslipsPdFbyRunCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $RunID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRunID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunID = (int)$val;
	}
}

class SalaryDocuments_GetAllPayslipsPdFbyRunCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Payslip
	 */
	public $SalaryDocuments_GetAllPayslipsPDFByRunCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Payslip $val
	 * @throws Exception
	 */
	public function setSalaryDocumentsGetAllPayslipsPDFByRunCompanyResult($val)
	{
        $this->SalaryDocuments_GetAllPayslipsPDFByRunCompanyResult = (int)$val;
	}
}

class Company_GetCurrentPeriod
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class Company_GetCurrentPeriodResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Company_GetCurrentPeriodResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCompanyGetCurrentPeriodResult($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Company_GetCurrentPeriodResult');
        }
        $this->Company_GetCurrentPeriodResult = (int)$val;
	}
}

class BankAccount_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class BankAccount_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var BankAccount
	 */
	public $BankAccount_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BankAccount $val
	 * @throws Exception
	 */
	public function setBankAccountGetCurrentResult($val)
	{
        $this->BankAccount_GetCurrentResult = (int)$val;
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
	 * @throws Exception
	 */
	public function setId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Id = (int)$val;
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
        $this->Number = (int)$val;
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
        $this->Description = (int)$val;
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
        $this->IBAN = (int)$val;
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
        $this->BIC = (int)$val;
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
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = (int)$val;
	}

	/**
	 * @param BankAccountType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = (int)$val;
	}
}

class BankAccountType
{
	// @codingStandardsIgnoreStart
	const NONE          = 'None';
	const BANKREKENING1 = 'Bankrekening1';
	const SPAARLOON     = 'Spaarloon';
	const BANKREKENING2 = 'Bankrekening2';
	const BANKREKENING3 = 'Bankrekening3';
	const BANKREKENING4 = 'Bankrekening4';
	const BANKREKENING5 = 'Bankrekening5';
	const STANDAARD     = 'Standaard';
	const LEVENSLOOP    = 'Levensloop';
	// @codingStandardsIgnoreEnd
}

class BankAccount_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var BankAccount
	 */
	public $BankAccount;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param BankAccount $val
	 * @throws Exception
	 */
	public function setBankAccount($val)
	{
        $this->BankAccount = (int)$val;
	}
}

class BankAccount_UpdateResponse
{}

class BankAccount_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var BankAccount
	 */
	public $BankAccount;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param BankAccount $val
	 * @throws Exception
	 */
	public function setBankAccount($val)
	{
        $this->BankAccount = (int)$val;
	}
}

class BankAccount_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $BankAccount_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setBankAccountInsertResult($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->BankAccount_InsertResult = (int)$val;
	}
}

class FileExplorer_UploadFile
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var string
	 */
	public $StrDocumentName;
	/**
	 * @var string
	 */
	public $StrDocumentSubFolder;
	/**
	 * @var base64Binary
	 */
	public $Body;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStrDocumentName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StrDocumentName');
        }
        $this->StrDocumentName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStrDocumentSubFolder($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StrDocumentSubFolder');
        }
        $this->StrDocumentSubFolder = (int)$val;
	}

	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setBody($val)
	{
        $this->Body = (int)$val;
	}
}

class FileExplorer_UploadFileResponse
{}

class Reports_GetPayslipByRunCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $RunId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRunId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunId = (int)$val;
	}
}

class Reports_GetPayslipByRunCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Reports_GetPayslipByRunCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setReportsGetPayslipByRunCompanyResult($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Reports_GetPayslipByRunCompanyResult');
        }
        $this->Reports_GetPayslipByRunCompanyResult = (int)$val;
	}
}

class Reports_GetWageCodesByRunCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $RunId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRunId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunId = (int)$val;
	}
}

class Reports_GetWageCodesByRunCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Reports_GetWageCodesByRunCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setReportsGetWageCodesByRunCompanyResult($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Reports_GetWageCodesByRunCompanyResult');
        }
        $this->Reports_GetWageCodesByRunCompanyResult = (int)$val;
	}
}

class Reports_GetWageCodesByYear
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $Year;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setYear($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
	}
}

class Reports_GetWageCodesByYearResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Reports_GetWageCodesByYearResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setReportsGetWageCodesByYearResult($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Reports_GetWageCodesByYearResult');
        }
        $this->Reports_GetWageCodesByYearResult = (int)$val;
	}
}

class Journals_GetByRunCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $RunId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRunId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunId = (int)$val;
	}
}

class Journals_GetByRunCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Journals_GetByRunCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setJournalsGetByRunCompanyResult($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Journals_GetByRunCompanyResult');
        }
        $this->Journals_GetByRunCompanyResult = (int)$val;
	}
}

class Journals_GetByRunEmployee
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $RunId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRunId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunId = (int)$val;
	}
}

class Journals_GetByRunEmployeeResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Journals_GetByRunEmployeeResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setJournalsGetByRunEmployeeResult($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Journals_GetByRunEmployeeResult');
        }
        $this->Journals_GetByRunEmployeeResult = (int)$val;
	}
}

class Journals_GetByRunCostCenter
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $RunId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRunId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunId = (int)$val;
	}
}

class Journals_GetByRunCostCenterResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Journals_GetByRunCostCenterResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setJournalsGetByRunCostCenterResult($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Journals_GetByRunCostCenterResult');
        }
        $this->Journals_GetByRunCostCenterResult = (int)$val;
	}
}

class Journals_GetByRunDepartment
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $RunId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRunId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RunId = (int)$val;
	}
}

class Journals_GetByRunDepartmentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Journals_GetByRunDepartmentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setJournalsGetByRunDepartmentResult($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Journals_GetByRunDepartmentResult');
        }
        $this->Journals_GetByRunDepartmentResult = (int)$val;
	}
}

class Run_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $Year;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setYear($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
	}
}

class Run_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var RunInfo[]
	 */
	public $Run_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfRunInfo $val
	 * @throws Exception
	 */
	public function setRunGetListResult($val)
	{
        $this->Run_GetListResult = (int)$val;
	}
}

class RunInfo
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
	 * @var int
	 */
	public $Year;
	/**
	 * @var int
	 */
	public $PeriodStart;
	/**
	 * @var int
	 */
	public $PeriodEnd;
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var dateTime
	 */
	public $RunAt;
	/**
	 * @var boolean
	 */
	public $IsLocked;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ID = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setNumber($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Number = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setYear($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPeriodStart($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PeriodStart = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPeriodEnd($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PeriodEnd = (int)$val;
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
        $this->Description = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setRunAt($val)
	{
        $this->RunAt = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIsLocked($val)
	{
        $this->IsLocked = (int)$val;
	}
}

class SvW_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class SvW_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SVW
	 */
	public $SVW_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SVW $val
	 * @throws Exception
	 */
	public function setSVWGetCurrentResult($val)
	{
        $this->SVW_GetCurrentResult = (int)$val;
	}
}

class SvW
{
	// @codingStandardsIgnoreStart
	/**
	 * @var CompanySVWSettings
	 */
	public $SVWSettings;
	/**
	 * @var Sector
	 */
	public $Sector;
	/**
	 * @var Risicogroep
	 */
	public $Risicogroep;
	/**
	 * @var CAO
	 */
	public $CAO;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CompanySVWSettings $val
	 * @throws Exception
	 */
	public function setSVWSettings($val)
	{
        $this->SVWSettings = (int)$val;
	}

	/**
	 * @param Sector $val
	 * @throws Exception
	 */
	public function setSector($val)
	{
        $this->Sector = (int)$val;
	}

	/**
	 * @param Risicogroep $val
	 * @throws Exception
	 */
	public function setRisicogroep($val)
	{
        $this->Risicogroep = (int)$val;
	}

	/**
	 * @param CAO $val
	 * @throws Exception
	 */
	public function setCAO($val)
	{
        $this->CAO = (int)$val;
	}
}

class CompanySvWsettings
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CodeCao;
	/**
	 * @var boolean
	 */
	public $EigenrisicodragerGediffWGA;
	/**
	 * @var boolean
	 */
	public $EigenrisicodragerUniformeWAO;
	/**
	 * @var boolean
	 */
	public $EigenrisicodragerZiektewet;
	/**
	 * @var int
	 */
	public $RisicoGroep;
	/**
	 * @var decimal
	 */
	public $Gediff_WGA_wn;
	/**
	 * @var decimal
	 */
	public $Gediff_WGA_wg;
	/**
	 * @var int
	 */
	public $Sector;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCodeCao($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CodeCao = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEigenrisicodragerGediffWGA($val)
	{
        $this->EigenrisicodragerGediffWGA = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEigenrisicodragerUniformeWAO($val)
	{
        $this->EigenrisicodragerUniformeWAO = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEigenrisicodragerZiektewet($val)
	{
        $this->EigenrisicodragerZiektewet = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRisicoGroep($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RisicoGroep = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setGediffWGAwn($val)
	{
        $this->Gediff_WGA_wn = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setGediffWGAwg($val)
	{
        $this->Gediff_WGA_wg = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setSector($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Sector = (int)$val;
	}
}

class Sector
{
	// @codingStandardsIgnoreStart
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
	 * @throws Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Code = (int)$val;
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
        $this->Description = (int)$val;
	}
}

class Risicogroep
{
	// @codingStandardsIgnoreStart
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
	 * @throws Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Code = (int)$val;
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
        $this->Description = (int)$val;
	}
}

class CaO
{
	// @codingStandardsIgnoreStart
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
	 * @throws Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Code = (int)$val;
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
        $this->Description = (int)$val;
	}
}

class SvW_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var SVW
	 */
	public $SVW;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param SVW $val
	 * @throws Exception
	 */
	public function setSVW($val)
	{
        $this->SVW = (int)$val;
	}
}

class SvW_UpdateCurrentResponse
{}

class SalaryTable_GetScales
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPeriod($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Period = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setYear($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
	}
}

class SalaryTable_GetScalesResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SalaryTableScale[]
	 */
	public $SalaryTable_GetScalesResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfSalaryTableScale $val
	 * @throws Exception
	 */
	public function setSalaryTableGetScalesResult($val)
	{
        $this->SalaryTable_GetScalesResult = (int)$val;
	}
}

class SalaryTableScale
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Scale;
	/**
	 * @var string
	 */
	public $SchaalDescription;
	/**
	 * @var decimal
	 */
	public $ScaleValue;
	/**
	 * @var decimal
	 */
	public $ScalePercentageMax;
	/**
	 * @var decimal
	 */
	public $ScalePercentageMin;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setScale($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Scale');
        }
        $this->Scale = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSchaalDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SchaalDescription');
        }
        $this->SchaalDescription = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setScaleValue($val)
	{
        $this->ScaleValue = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setScalePercentageMax($val)
	{
        $this->ScalePercentageMax = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setScalePercentageMin($val)
	{
        $this->ScalePercentageMin = (int)$val;
	}
}

class SalaryTable_GetSteps
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var SalaryTableScale
	 */
	public $Scale;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param SalaryTableScale $val
	 * @throws Exception
	 */
	public function setScale($val)
	{
        $this->Scale = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPeriod($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Period = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setYear($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
	}
}

class SalaryTable_GetStepsResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SalaryTableStep[]
	 */
	public $SalaryTable_GetStepsResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfSalaryTableStep $val
	 * @throws Exception
	 */
	public function setSalaryTableGetStepsResult($val)
	{
        $this->SalaryTable_GetStepsResult = (int)$val;
	}
}

class SalaryTableStep
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Step;
	/**
	 * @var string
	 */
	public $StepDescription;
	/**
	 * @var decimal
	 */
	public $StepValue;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStep($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Step');
        }
        $this->Step = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStepDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StepDescription');
        }
        $this->StepDescription = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setStepValue($val)
	{
        $this->StepValue = (int)$val;
	}
}

class SalaryTable_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPeriod($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Period = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setYear($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
	}
}

class SalaryTable_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SalaryTable
	 */
	public $SalaryTable_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SalaryTable $val
	 * @throws Exception
	 */
	public function setSalaryTableGetResult($val)
	{
        $this->SalaryTable_GetResult = (int)$val;
	}
}

class SalaryTable
{
	// @codingStandardsIgnoreStart
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
	 * @throws Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Code = (int)$val;
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
        $this->Description = (int)$val;
	}
}

class CostCenter_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class CostCenter_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var CostCenter[]
	 */
	public $CostCenter_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfCostCenter $val
	 * @throws Exception
	 */
	public function setCostCenterGetListResult($val)
	{
        $this->CostCenter_GetListResult = (int)$val;
	}
}

class CostCenter
{
	// @codingStandardsIgnoreStart
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
	 * @throws Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Code = (int)$val;
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
        $this->Description = (int)$val;
	}
}

class CostCenter_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var CostCenter
	 */
	public $kostenplaats;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param CostCenter $val
	 * @throws Exception
	 */
	public function setKostenplaats($val)
	{
        $this->kostenplaats = (int)$val;
	}
}

class CostCenter_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CostCenter_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCostCenterInsertResult($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CostCenter_InsertResult = (int)$val;
	}
}

class Address_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class Address_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Address
	 */
	public $Address_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Address $val
	 * @throws Exception
	 */
	public function setAddressGetCurrentResult($val)
	{
        $this->Address_GetCurrentResult = (int)$val;
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
	 * @throws Exception
	 */
	public function setId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Id = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setDefault($val)
	{
        $this->Default = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStreet($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Street');
        }
        $this->Street = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHouseNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HouseNumber');
        }
        $this->HouseNumber = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHouseNumberAddition($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HouseNumberAddition');
        }
        $this->HouseNumberAddition = (int)$val;
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
	public function setStateProvince($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StateProvince');
        }
        $this->StateProvince = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCountryISOCode($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CountryISOCode');
        }
        $this->CountryISOCode = (int)$val;
	}
}

class Address_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var Address
	 */
	public $Address;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param Address $val
	 * @throws Exception
	 */
	public function setAddress($val)
	{
        $this->Address = (int)$val;
	}
}

class Address_UpdateResponse
{}

class Address_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var Address
	 */
	public $Address;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param Address $val
	 * @throws Exception
	 */
	public function setAddress($val)
	{
        $this->Address = (int)$val;
	}
}

class Address_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Address_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setAddressInsertResult($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Address_InsertResult = (int)$val;
	}
}

class RunRequest_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class RunRequest_InsertResponse
{}

class RunRequest_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var int
	 */
	public $Year;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setYear($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
	}
}

class RunRequest_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var RunRequest[]
	 */
	public $RunRequest_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfRunRequest $val
	 * @throws Exception
	 */
	public function setRunRequestGetListResult($val)
	{
        $this->RunRequest_GetListResult = (int)$val;
	}
}

class RunRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var RunRequestStatus
	 */
	public $Status;
	/**
	 * @var dateTime
	 */
	public $HandledDate;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPeriod($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Period = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setYear($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
	}

	/**
	 * @param RunRequestStatus $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->Status = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setHandledDate($val)
	{
        $this->HandledDate = (int)$val;
	}
}

class RunRequestStatus
{
	// @codingStandardsIgnoreStart
	const UNDEFINED = 'Undefined';
	const PENDING   = 'Pending';
	const HANDLED   = 'Handled';
	const COMPLETE  = 'Complete';
	const CANCELED  = 'Canceled';
	// @codingStandardsIgnoreEnd
}

class Schedule_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class Schedule_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var BedrijfFulltimeSchedule
	 */
	public $Schedule_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BedrijfFulltimeSchedule $val
	 * @throws Exception
	 */
	public function setScheduleGetCurrentResult($val)
	{
        $this->Schedule_GetCurrentResult = (int)$val;
	}
}

class BedrijfFulltimeSchedule
{
	// @codingStandardsIgnoreStart
	/**
	 * @var FulltimeSchedule
	 */
	public $FulltimeScheduleOne;
	/**
	 * @var FulltimeSchedule
	 */
	public $FulltimeScheduleTwo;
	// @codingStandardsIgnoreEnd

	/**
	 * @param FulltimeSchedule $val
	 * @throws Exception
	 */
	public function setFulltimeScheduleOne($val)
	{
        $this->FulltimeScheduleOne = (int)$val;
	}

	/**
	 * @param FulltimeSchedule $val
	 * @throws Exception
	 */
	public function setFulltimeScheduleTwo($val)
	{
        $this->FulltimeScheduleTwo = (int)$val;
	}
}

class FulltimeSchedule
{
	// @codingStandardsIgnoreStart
	/**
	 * @var ScheduleCalcMethod
	 */
	public $ScheduleCalcMethod;
	/**
	 * @var decimal
	 */
	public $HoursMonday;
	/**
	 * @var decimal
	 */
	public $HoursTuesday;
	/**
	 * @var decimal
	 */
	public $HoursWednesday;
	/**
	 * @var decimal
	 */
	public $HoursThursday;
	/**
	 * @var decimal
	 */
	public $HoursFriday;
	/**
	 * @var decimal
	 */
	public $HoursSaturday;
	/**
	 * @var decimal
	 */
	public $HoursSunday;
	/**
	 * @var decimal
	 */
	public $HoursMonday2;
	/**
	 * @var decimal
	 */
	public $HoursTuesday2;
	/**
	 * @var decimal
	 */
	public $HoursWednesday2;
	/**
	 * @var decimal
	 */
	public $HoursThursday2;
	/**
	 * @var decimal
	 */
	public $HoursFriday2;
	/**
	 * @var decimal
	 */
	public $HoursSaturday2;
	/**
	 * @var decimal
	 */
	public $HoursSunday2;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ScheduleCalcMethod $val
	 * @throws Exception
	 */
	public function setScheduleCalcMethod($val)
	{
        $this->ScheduleCalcMethod = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursMonday($val)
	{
        $this->HoursMonday = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursTuesday($val)
	{
        $this->HoursTuesday = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursWednesday($val)
	{
        $this->HoursWednesday = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursThursday($val)
	{
        $this->HoursThursday = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursFriday($val)
	{
        $this->HoursFriday = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursSaturday($val)
	{
        $this->HoursSaturday = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursSunday($val)
	{
        $this->HoursSunday = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursMonday2($val)
	{
        $this->HoursMonday2 = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursTuesday2($val)
	{
        $this->HoursTuesday2 = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursWednesday2($val)
	{
        $this->HoursWednesday2 = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursThursday2($val)
	{
        $this->HoursThursday2 = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursFriday2($val)
	{
        $this->HoursFriday2 = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursSaturday2($val)
	{
        $this->HoursSaturday2 = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setHoursSunday2($val)
	{
        $this->HoursSunday2 = (int)$val;
	}
}

class ScheduleCalcMethod
{
	// @codingStandardsIgnoreStart
	const HOURSYEARDEVIDEDPERIODS    = 'HoursYearDevidedPeriods';
	const HOURS52WEEKSDEVIDEDPERIODS = 'Hours52WeeksDevidedPeriods';
	// @codingStandardsIgnoreEnd
}

class HourModel_GetHourCodes
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class HourModel_GetHourCodesResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var HourCode[]
	 */
	public $HourModel_GetHourCodesResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfHourCode $val
	 * @throws Exception
	 */
	public function setHourModelGetHourCodesResult($val)
	{
        $this->HourModel_GetHourCodesResult = (int)$val;
	}
}

class HourCode
{
	// @codingStandardsIgnoreStart
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
	 * @throws Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Code = (int)$val;
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
        $this->Description = (int)$val;
	}
}

class WageModel_GetWageCodes
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCompanyId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = (int)$val;
	}
}

class WageModel_GetWageCodesResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var WageCode[]
	 */
	public $WageModel_GetWageCodesResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfWageCode $val
	 * @throws Exception
	 */
	public function setWageModelGetWageCodesResult($val)
	{
        $this->WageModel_GetWageCodesResult = (int)$val;
	}
}

class WageCode
{
	// @codingStandardsIgnoreStart
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
	 * @throws Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Code = (int)$val;
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
        $this->Description = (int)$val;
	}
}

class List_GetAll
{}

class List_GetAllResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Company[]
	 */
	public $List_GetAllResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfCompany $val
	 * @throws Exception
	 */
	public function setListGetAllResult($val)
	{
        $this->List_GetAllResult = (int)$val;
	}
}

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
	 * @var LoonaangifteTijdvak
	 */
	public $LoonaangifteTijdvak;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ID = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setNumber($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Number = (int)$val;
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
	public function setPhoneNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PhoneNumber');
        }
        $this->PhoneNumber = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFaxNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FaxNumber');
        }
        $this->FaxNumber = (int)$val;
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
	public function setWebsite($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Website');
        }
        $this->Website = (int)$val;
	}

	/**
	 * @param LoonaangifteTijdvak $val
	 * @throws Exception
	 */
	public function setLoonaangifteTijdvak($val)
	{
        $this->LoonaangifteTijdvak = (int)$val;
	}
}

class LoonaangifteTijdvak
{
	// @codingStandardsIgnoreStart
	const NONE   = 'None';
	const MONTH  = 'Month';
	const WEEK4  = 'Week4';
	const MONTH6 = 'Month6';
	const YEAR   = 'Year';
	// @codingStandardsIgnoreEnd
}

class List_GetByDebtor
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = (int)$val;
	}
}

class List_GetByDebtorResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Company[]
	 */
	public $List_GetByDebtorResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfCompany $val
	 * @throws Exception
	 */
	public function setListGetByDebtorResult($val)
	{
        $this->List_GetByDebtorResult = (int)$val;
	}
}

/**
 * CompanyServiceClient
 */
class CompanyServiceClient extends SoapClient {

	const WSDL_FILE = "CompanyService.wsdl";
	private $classmap = array(
        'SalaryDocuments_GetEmployeePayslipsPDFByRunCompany' =>
            'SalaryDocuments_GetEmployeePayslipsPDFByRunCompany',
        'SalaryDocuments_GetEmployeePayslipsPDFByRunCompanyResponse' =>
            'SalaryDocuments_GetEmployeePayslipsPDFByRunCompanyResponse',
        'Payslip' =>
            'Payslip',
        'SalaryDocuments_GetAllPayslipsPDFByRunCompany' =>
            'SalaryDocuments_GetAllPayslipsPDFByRunCompany',
        'SalaryDocuments_GetAllPayslipsPDFByRunCompanyResponse' =>
            'SalaryDocuments_GetAllPayslipsPDFByRunCompanyResponse',
        'Company_GetCurrentPeriod' =>
            'Company_GetCurrentPeriod',
        'Company_GetCurrentPeriodResponse' =>
            'Company_GetCurrentPeriodResponse',
        'BankAccount_GetCurrent' =>
            'BankAccount_GetCurrent',
        'BankAccount_GetCurrentResponse' =>
            'BankAccount_GetCurrentResponse',
        'BankAccount' =>
            'BankAccount',
        'BankAccountType' =>
            'BankAccountType',
        'BankAccount_Update' =>
            'BankAccount_Update',
        'BankAccount_UpdateResponse' =>
            'BankAccount_UpdateResponse',
        'BankAccount_Insert' =>
            'BankAccount_Insert',
        'BankAccount_InsertResponse' =>
            'BankAccount_InsertResponse',
        'FileExplorer_UploadFile' =>
            'FileExplorer_UploadFile',
        'FileExplorer_UploadFileResponse' =>
            'FileExplorer_UploadFileResponse',
        'Reports_GetPayslipByRunCompany' =>
            'Reports_GetPayslipByRunCompany',
        'Reports_GetPayslipByRunCompanyResponse' =>
            'Reports_GetPayslipByRunCompanyResponse',
        'Reports_GetWageCodesByRunCompany' =>
            'Reports_GetWageCodesByRunCompany',
        'Reports_GetWageCodesByRunCompanyResponse' =>
            'Reports_GetWageCodesByRunCompanyResponse',
        'Reports_GetWageCodesByYear' =>
            'Reports_GetWageCodesByYear',
        'Reports_GetWageCodesByYearResponse' =>
            'Reports_GetWageCodesByYearResponse',
        'Journals_GetByRunCompany' =>
            'Journals_GetByRunCompany',
        'Journals_GetByRunCompanyResponse' =>
            'Journals_GetByRunCompanyResponse',
        'Journals_GetByRunEmployee' =>
            'Journals_GetByRunEmployee',
        'Journals_GetByRunEmployeeResponse' =>
            'Journals_GetByRunEmployeeResponse',
        'Journals_GetByRunCostCenter' =>
            'Journals_GetByRunCostCenter',
        'Journals_GetByRunCostCenterResponse' =>
            'Journals_GetByRunCostCenterResponse',
        'Journals_GetByRunDepartment' =>
            'Journals_GetByRunDepartment',
        'Journals_GetByRunDepartmentResponse' =>
            'Journals_GetByRunDepartmentResponse',
        'Run_GetList' =>
            'Run_GetList',
        'Run_GetListResponse' =>
            'Run_GetListResponse',
        'RunInfo' =>
            'RunInfo',
        'SVW_GetCurrent' =>
            'SVW_GetCurrent',
        'SVW_GetCurrentResponse' =>
            'SVW_GetCurrentResponse',
        'SVW' =>
            'SVW',
        'CompanySVWSettings' =>
            'CompanySVWSettings',
        'Sector' =>
            'Sector',
        'Risicogroep' =>
            'Risicogroep',
        'CAO' =>
            'CAO',
        'SVW_UpdateCurrent' =>
            'SVW_UpdateCurrent',
        'SVW_UpdateCurrentResponse' =>
            'SVW_UpdateCurrentResponse',
        'SalaryTable_GetScales' =>
            'SalaryTable_GetScales',
        'SalaryTable_GetScalesResponse' =>
            'SalaryTable_GetScalesResponse',
        'SalaryTableScale' =>
            'SalaryTableScale',
        'SalaryTable_GetSteps' =>
            'SalaryTable_GetSteps',
        'SalaryTable_GetStepsResponse' =>
            'SalaryTable_GetStepsResponse',
        'SalaryTableStep' =>
            'SalaryTableStep',
        'SalaryTable_Get' =>
            'SalaryTable_Get',
        'SalaryTable_GetResponse' =>
            'SalaryTable_GetResponse',
        'SalaryTable' =>
            'SalaryTable',
        'CostCenter_GetList' =>
            'CostCenter_GetList',
        'CostCenter_GetListResponse' =>
            'CostCenter_GetListResponse',
        'CostCenter' =>
            'CostCenter',
        'CostCenter_Insert' =>
            'CostCenter_Insert',
        'CostCenter_InsertResponse' =>
            'CostCenter_InsertResponse',
        'Address_GetCurrent' =>
            'Address_GetCurrent',
        'Address_GetCurrentResponse' =>
            'Address_GetCurrentResponse',
        'Address' =>
            'Address',
        'Address_Update' =>
            'Address_Update',
        'Address_UpdateResponse' =>
            'Address_UpdateResponse',
        'Address_Insert' =>
            'Address_Insert',
        'Address_InsertResponse' =>
            'Address_InsertResponse',
        'RunRequest_Insert' =>
            'RunRequest_Insert',
        'RunRequest_InsertResponse' =>
            'RunRequest_InsertResponse',
        'RunRequest_GetList' =>
            'RunRequest_GetList',
        'RunRequest_GetListResponse' =>
            'RunRequest_GetListResponse',
        'RunRequest' =>
            'RunRequest',
        'RunRequestStatus' =>
            'RunRequestStatus',
        'Schedule_GetCurrent' =>
            'Schedule_GetCurrent',
        'Schedule_GetCurrentResponse' =>
            'Schedule_GetCurrentResponse',
        'BedrijfFulltimeSchedule' =>
            'BedrijfFulltimeSchedule',
        'FulltimeSchedule' =>
            'FulltimeSchedule',
        'ScheduleCalcMethod' =>
            'ScheduleCalcMethod',
        'HourModel_GetHourCodes' =>
            'HourModel_GetHourCodes',
        'HourModel_GetHourCodesResponse' =>
            'HourModel_GetHourCodesResponse',
        'HourCode' =>
            'HourCode',
        'WageModel_GetWageCodes' =>
            'WageModel_GetWageCodes',
        'WageModel_GetWageCodesResponse' =>
            'WageModel_GetWageCodesResponse',
        'WageCode' =>
            'WageCode',
        'List_GetAll' =>
            'List_GetAll',
        'List_GetAllResponse' =>
            'List_GetAllResponse',
        'Company' =>
            'Company',
        'LoonaangifteTijdvak' =>
            'LoonaangifteTijdvak',
        'List_GetByDebtor' =>
            'List_GetByDebtor',
        'List_GetByDebtorResponse' =>
            'List_GetByDebtorResponse',
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
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
	}

	/**
	 * SalaryDocumentsGetEmployeePayslipsPDFByRunCompany
	 * Get employee payslips in PDF by run company for a specific run period
	 *
	 * @param SalaryDocuments_GetEmployeePayslipsPDFByRunCompany $parameters
	 * @return SalaryDocuments_GetEmployeePayslipsPDFByRunCompanyResponse
	 */
	public function SalaryDocumentsGetEmployeePayslipsPDFByRunCompany(SalaryDocuments_GetEmployeePayslipsPDFByRunCompany $parameters) {
        return $this->__soapCall(
            'SalaryDocuments_GetEmployeePayslipsPDFByRunCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * SalaryDocumentsGetAllPayslipsPDFByRunCompany
	 * Get all payslip PDF's of a company for a specific run period
	 *
	 * @param SalaryDocuments_GetAllPayslipsPDFByRunCompany $parameters
	 * @return SalaryDocuments_GetAllPayslipsPDFByRunCompanyResponse
	 */
	public function SalaryDocumentsGetAllPayslipsPDFByRunCompany(SalaryDocuments_GetAllPayslipsPDFByRunCompany $parameters) {
        return $this->__soapCall(
            'SalaryDocuments_GetAllPayslipsPDFByRunCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * CompanyGetCurrentPeriod
	 * Returns the company's current period, Format = yyyy-pp-type, example: 2010-5-M or 2010-4-4W
	 *
	 * @param Company_GetCurrentPeriod $parameters
	 * @return Company_GetCurrentPeriodResponse
	 */
	public function CompanyGetCurrentPeriod(Company_GetCurrentPeriod $parameters) {
        return $this->__soapCall(
            'Company_GetCurrentPeriod',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * BankAccountGetCurrent
	 * Get the company's current bankaccount.
	 *
	 * @param BankAccount_GetCurrent $parameters
	 * @return BankAccount_GetCurrentResponse
	 */
	public function BankAccountGetCurrent(BankAccount_GetCurrent $parameters) {
        return $this->__soapCall(
            'BankAccount_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * BankAccountUpdate
	 * Update the current company bankaccount.
	 *
	 * @param BankAccount_Update $parameters
	 * @return BankAccount_UpdateResponse
	 */
	public function BankAccountUpdate(BankAccount_Update $parameters) {
        return $this->__soapCall(
            'BankAccount_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * BankAccountInsert
	 * Insert a company bankaccount.
	 *
	 * @param BankAccount_Insert $parameters
	 * @return BankAccount_InsertResponse
	 */
	public function BankAccountInsert(BankAccount_Insert $parameters) {
        return $this->__soapCall(
            'BankAccount_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * FileExplorerUploadFile
	 * Uploads document for company
	 *
	 * @param FileExplorer_UploadFile $parameters
	 * @return FileExplorer_UploadFileResponse
	 */
	public function FileExplorerUploadFile(FileExplorer_UploadFile $parameters) {
        return $this->__soapCall(
            'FileExplorer_UploadFile',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * ReportsGetPayslipByRunCompany
	 * Get the run's payslips
	 *
	 * @param Reports_GetPayslipByRunCompany $parameters
	 * @return Reports_GetPayslipByRunCompanyResponse
	 */
	public function ReportsGetPayslipByRunCompany(Reports_GetPayslipByRunCompany $parameters) {
        return $this->__soapCall(
            'Reports_GetPayslipByRunCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * ReportsGetWageCodesByRunCompany
	 * Returns the Journal XML
	 *
	 * @param Reports_GetWageCodesByRunCompany $parameters
	 * @return Reports_GetWageCodesByRunCompanyResponse
	 */
	public function ReportsGetWageCodesByRunCompany(Reports_GetWageCodesByRunCompany $parameters) {
        return $this->__soapCall(
            'Reports_GetWageCodesByRunCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * ReportsGetWageCodesByYear
	 * Returns the Journal XML
	 *
	 * @param Reports_GetWageCodesByYear $parameters
	 * @return Reports_GetWageCodesByYearResponse
	 */
	public function ReportsGetWageCodesByYear(Reports_GetWageCodesByYear $parameters) {
        return $this->__soapCall(
            'Reports_GetWageCodesByYear',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * JournalsGetByRunCompany
	 * Returns the Journal XML
	 *
	 * @param Journals_GetByRunCompany $parameters
	 * @return Journals_GetByRunCompanyResponse
	 */
	public function JournalsGetByRunCompany(Journals_GetByRunCompany $parameters) {
        return $this->__soapCall(
            'Journals_GetByRunCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * JournalsGetByRunEmployee
	 * Returns the Journal XML
	 *
	 * @param Journals_GetByRunEmployee $parameters
	 * @return Journals_GetByRunEmployeeResponse
	 */
	public function JournalsGetByRunEmployee(Journals_GetByRunEmployee $parameters) {
        return $this->__soapCall(
            'Journals_GetByRunEmployee',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * JournalsGetByRunCostCenter
	 * Returns the Journal XML
	 *
	 * @param Journals_GetByRunCostCenter $parameters
	 * @return Journals_GetByRunCostCenterResponse
	 */
	public function JournalsGetByRunCostCenter(Journals_GetByRunCostCenter $parameters) {
        return $this->__soapCall(
            'Journals_GetByRunCostCenter',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * JournalsGetByRunDepartment
	 * Returns the Journal XML
	 *
	 * @param Journals_GetByRunDepartment $parameters
	 * @return Journals_GetByRunDepartmentResponse
	 */
	public function JournalsGetByRunDepartment(Journals_GetByRunDepartment $parameters) {
        return $this->__soapCall(
            'Journals_GetByRunDepartment',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * RunGetList
	 * Get the company's run list for a specified year
	 *
	 * @param Run_GetList $parameters
	 * @return Run_GetListResponse
	 */
	public function RunGetList(Run_GetList $parameters) {
        return $this->__soapCall(
            'Run_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * SVWGetCurrent
	 * Get the current SVW settings.
	 *
	 * @param SVW_GetCurrent $parameters
	 * @return SVW_GetCurrentResponse
	 */
	public function SVWGetCurrent(SVW_GetCurrent $parameters) {
        return $this->__soapCall(
            'SVW_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * SVWUpdateCurrent
	 * Update the current SVW settings.
	 *
	 * @param SVW_UpdateCurrent $parameters
	 * @return SVW_UpdateCurrentResponse
	 */
	public function SVWUpdateCurrent(SVW_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'SVW_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * SalaryTableGetScales
	 * Returns a list of available scales for the company salary table
	 *
	 * @param SalaryTable_GetScales $parameters
	 * @return SalaryTable_GetScalesResponse
	 */
	public function SalaryTableGetScales(SalaryTable_GetScales $parameters) {
        return $this->__soapCall(
            'SalaryTable_GetScales',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * SalaryTableGetSteps
	 * Returns a list of available steps for the company salary table and selected scale
	 *
	 * @param SalaryTable_GetSteps $parameters
	 * @return SalaryTable_GetStepsResponse
	 */
	public function SalaryTableGetSteps(SalaryTable_GetSteps $parameters) {
        return $this->__soapCall(
            'SalaryTable_GetSteps',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * SalaryTableGet
	 * Returns a list of available schalen for the company salarytable
	 *
	 * @param SalaryTable_Get $parameters
	 * @return SalaryTable_GetResponse
	 */
	public function SalaryTableGet(SalaryTable_Get $parameters) {
        return $this->__soapCall(
            'SalaryTable_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * CostCenterGetList
	 * Returns kostenplaatsen that belong to a company
	 *
	 * @param CostCenter_GetList $parameters
	 * @return CostCenter_GetListResponse
	 */
	public function CostCenterGetList(CostCenter_GetList $parameters) {
        return $this->__soapCall(
            'CostCenter_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * CostCenterInsert
	 * Update or insert a kostenplaats into a company
	 *
	 * @param CostCenter_Insert $parameters
	 * @return CostCenter_InsertResponse
	 */
	public function CostCenterInsert(CostCenter_Insert $parameters) {
        return $this->__soapCall(
            'CostCenter_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * AddressGetCurrent
	 * Get the company's current address.
	 *
	 * @param Address_GetCurrent $parameters
	 * @return Address_GetCurrentResponse
	 */
	public function AddressGetCurrent(Address_GetCurrent $parameters) {
        return $this->__soapCall(
            'Address_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * AddressUpdate
	 * Update the current company address.
	 *
	 * @param Address_Update $parameters
	 * @return Address_UpdateResponse
	 */
	public function AddressUpdate(Address_Update $parameters) {
        return $this->__soapCall(
            'Address_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * AddressInsert
	 * Insert the current company address.
	 *
	 * @param Address_Insert $parameters
	 * @return Address_InsertResponse
	 */
	public function AddressInsert(Address_Insert $parameters) {
        return $this->__soapCall(
            'Address_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * RunRequestInsert
	 * Requests a run for given company
	 *
	 * @param RunRequest_Insert $parameters
	 * @return RunRequest_InsertResponse
	 */
	public function RunRequestInsert(RunRequest_Insert $parameters) {
        return $this->__soapCall(
            'RunRequest_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * RunRequestGetList
	 * Returns a list of requested runs with status for given company and year
	 *
	 * @param RunRequest_GetList $parameters
	 * @return RunRequest_GetListResponse
	 */
	public function RunRequestGetList(RunRequest_GetList $parameters) {
        return $this->__soapCall(
            'RunRequest_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * ScheduleGetCurrent
	 * Get the current company schedules.
	 *
	 * @param Schedule_GetCurrent $parameters
	 * @return Schedule_GetCurrentResponse
	 */
	public function ScheduleGetCurrent(Schedule_GetCurrent $parameters) {
        return $this->__soapCall(
            'Schedule_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * HourModelGetHourCodes
	 * Returns hour codes that belong to a company's hour model
	 *
	 * @param HourModel_GetHourCodes $parameters
	 * @return HourModel_GetHourCodesResponse
	 */
	public function HourModelGetHourCodes(HourModel_GetHourCodes $parameters) {
        return $this->__soapCall(
            'HourModel_GetHourCodes',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * WageModelGetWageCodes
	 * Returns wagec odes that belong to a company's wagemodel
	 *
	 * @param WageModel_GetWageCodes $parameters
	 * @return WageModel_GetWageCodesResponse
	 */
	public function WageModelGetWageCodes(WageModel_GetWageCodes $parameters) {
        return $this->__soapCall(
            'WageModel_GetWageCodes',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * ListGetAll
	 * Returns all companies
	 *
	 * @param List_GetAll $parameters
	 * @return List_GetAllResponse
	 */
	public function ListGetAll(List_GetAll $parameters) {
        return $this->__soapCall(
            'List_GetAll',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}

	/**
	 * ListGetByDebtor
	 * Returns companies that belong to a debtor
	 *
	 * @param List_GetByDebtor $parameters
	 * @return List_GetByDebtorResponse
	 */
	public function ListGetByDebtor(List_GetByDebtor $parameters) {
        return $this->__soapCall(
            'List_GetByDebtor',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}
}
