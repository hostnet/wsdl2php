<?php

namespace Controle\sub1\sub2\Controlelist;

/**
 * CompanyServiceClient
 */
class CompanyServiceClient extends \SoapClient {

	const WSDL_FILE = "CompanyService.wsdl";
	private $classmap = array(
        'Payslip' =>
            '\Controle\sub1\sub2\Payslip',
        'BankAccount' =>
            '\Controle\sub1\sub2\BankAccount',
        'BankAccountType' =>
            '\Controle\sub1\sub2\BankAccountType',
        'RunInfo' =>
            '\Controle\sub1\sub2\RunInfo',
        'Sector' =>
            '\Controle\sub1\sub2\Sector',
        'Risicogroep' =>
            '\Controle\sub1\sub2\Risicogroep',
        'SalaryTableScale' =>
            '\Controle\sub1\sub2\SalaryTableScale',
        'SalaryTableStep' =>
            '\Controle\sub1\sub2\SalaryTableStep',
        'SalaryTable' =>
            '\Controle\sub1\sub2\SalaryTable',
        'CostCenter' =>
            '\Controle\sub1\sub2\CostCenter',
        'Address' =>
            '\Controle\sub1\sub2\Address',
        'RunRequest' =>
            '\Controle\sub1\sub2\RunRequest',
        'RunRequestStatus' =>
            '\Controle\sub1\sub2\RunRequestStatus',
        'BedrijfFulltimeSchedule' =>
            '\Controle\sub1\sub2\BedrijfFulltimeSchedule',
        'FulltimeSchedule' =>
            '\Controle\sub1\sub2\FulltimeSchedule',
        'ScheduleCalcMethod' =>
            '\Controle\sub1\sub2\ScheduleCalcMethod',
        'HourCode' =>
            '\Controle\sub1\sub2\HourCode',
        'WageCode' =>
            '\Controle\sub1\sub2\WageCode',
        'Company' =>
            '\Controle\sub1\sub2\Company',
        'LoonaangifteTijdvak' =>
            '\Controle\sub1\sub2\LoonaangifteTijdvak',
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
	 * @param \Controle\sub1\sub2\SalaryDocuments\GetEmployeePayslipsPDFByRunCompany $parameters
	 * @return \Controle\sub1\sub2\SalaryDocuments\GetEmployeePayslipsPDFByRunCompanyResponse
	 */
	public function SalaryDocumentsGetEmployeePayslipsPDFByRunCompany(\Controle\sub1\sub2\SalaryDocuments\GetEmployeePayslipsPDFByRunCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\SalaryDocuments\GetAllPayslipsPDFByRunCompany $parameters
	 * @return \Controle\sub1\sub2\SalaryDocuments\GetAllPayslipsPDFByRunCompanyResponse
	 */
	public function SalaryDocumentsGetAllPayslipsPDFByRunCompany(\Controle\sub1\sub2\SalaryDocuments\GetAllPayslipsPDFByRunCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Company\GetCurrentPeriod $parameters
	 * @return \Controle\sub1\sub2\Company\GetCurrentPeriodResponse
	 */
	public function CompanyGetCurrentPeriod(\Controle\sub1\sub2\Company\GetCurrentPeriod $parameters) {
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
	 * @param \Controle\sub1\sub2\BankAccount\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\BankAccount\GetCurrentResponse
	 */
	public function BankAccountGetCurrent(\Controle\sub1\sub2\BankAccount\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\BankAccount\Update $parameters
	 * @return \Controle\sub1\sub2\BankAccount\UpdateResponse
	 */
	public function BankAccountUpdate(\Controle\sub1\sub2\BankAccount\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\BankAccount\Insert $parameters
	 * @return \Controle\sub1\sub2\BankAccount\InsertResponse
	 */
	public function BankAccountInsert(\Controle\sub1\sub2\BankAccount\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\FileExplorer\UploadFile $parameters
	 * @return \Controle\sub1\sub2\FileExplorer\UploadFileResponse
	 */
	public function FileExplorerUploadFile(\Controle\sub1\sub2\FileExplorer\UploadFile $parameters) {
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
	 * @param \Controle\sub1\sub2\Reports\GetPayslipByRunCompany $parameters
	 * @return \Controle\sub1\sub2\Reports\GetPayslipByRunCompanyResponse
	 */
	public function ReportsGetPayslipByRunCompany(\Controle\sub1\sub2\Reports\GetPayslipByRunCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Reports\GetWageCodesByRunCompany $parameters
	 * @return \Controle\sub1\sub2\Reports\GetWageCodesByRunCompanyResponse
	 */
	public function ReportsGetWageCodesByRunCompany(\Controle\sub1\sub2\Reports\GetWageCodesByRunCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Reports\GetWageCodesByYear $parameters
	 * @return \Controle\sub1\sub2\Reports\GetWageCodesByYearResponse
	 */
	public function ReportsGetWageCodesByYear(\Controle\sub1\sub2\Reports\GetWageCodesByYear $parameters) {
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
	 * @param \Controle\sub1\sub2\Journals\GetByRunCompany $parameters
	 * @return \Controle\sub1\sub2\Journals\GetByRunCompanyResponse
	 */
	public function JournalsGetByRunCompany(\Controle\sub1\sub2\Journals\GetByRunCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Journals\GetByRunEmployee $parameters
	 * @return \Controle\sub1\sub2\Journals\GetByRunEmployeeResponse
	 */
	public function JournalsGetByRunEmployee(\Controle\sub1\sub2\Journals\GetByRunEmployee $parameters) {
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
	 * @param \Controle\sub1\sub2\Journals\GetByRunCostCenter $parameters
	 * @return \Controle\sub1\sub2\Journals\GetByRunCostCenterResponse
	 */
	public function JournalsGetByRunCostCenter(\Controle\sub1\sub2\Journals\GetByRunCostCenter $parameters) {
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
	 * @param \Controle\sub1\sub2\Journals\GetByRunDepartment $parameters
	 * @return \Controle\sub1\sub2\Journals\GetByRunDepartmentResponse
	 */
	public function JournalsGetByRunDepartment(\Controle\sub1\sub2\Journals\GetByRunDepartment $parameters) {
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
	 * @param \Controle\sub1\sub2\Run\GetList $parameters
	 * @return \Controle\sub1\sub2\Run\GetListResponse
	 */
	public function RunGetList(\Controle\sub1\sub2\Run\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\SVW\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\SVW\GetCurrentResponse
	 */
	public function SVWGetCurrent(\Controle\sub1\sub2\SVW\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\SVW\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\SVW\UpdateCurrentResponse
	 */
	public function SVWUpdateCurrent(\Controle\sub1\sub2\SVW\UpdateCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\SalaryTable\GetScales $parameters
	 * @return \Controle\sub1\sub2\SalaryTable\GetScalesResponse
	 */
	public function SalaryTableGetScales(\Controle\sub1\sub2\SalaryTable\GetScales $parameters) {
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
	 * @param \Controle\sub1\sub2\SalaryTable\GetSteps $parameters
	 * @return \Controle\sub1\sub2\SalaryTable\GetStepsResponse
	 */
	public function SalaryTableGetSteps(\Controle\sub1\sub2\SalaryTable\GetSteps $parameters) {
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
	 * @param \Controle\sub1\sub2\SalaryTable\Get $parameters
	 * @return \Controle\sub1\sub2\SalaryTable\GetResponse
	 */
	public function SalaryTableGet(\Controle\sub1\sub2\SalaryTable\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\CostCenter\GetList $parameters
	 * @return \Controle\sub1\sub2\CostCenter\GetListResponse
	 */
	public function CostCenterGetList(\Controle\sub1\sub2\CostCenter\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\CostCenter\Insert $parameters
	 * @return \Controle\sub1\sub2\CostCenter\InsertResponse
	 */
	public function CostCenterInsert(\Controle\sub1\sub2\CostCenter\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Address\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\Address\GetCurrentResponse
	 */
	public function AddressGetCurrent(\Controle\sub1\sub2\Address\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Address\Update $parameters
	 * @return \Controle\sub1\sub2\Address\UpdateResponse
	 */
	public function AddressUpdate(\Controle\sub1\sub2\Address\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\Address\Insert $parameters
	 * @return \Controle\sub1\sub2\Address\InsertResponse
	 */
	public function AddressInsert(\Controle\sub1\sub2\Address\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\RunRequest\Insert $parameters
	 * @return \Controle\sub1\sub2\RunRequest\InsertResponse
	 */
	public function RunRequestInsert(\Controle\sub1\sub2\RunRequest\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\RunRequest\GetList $parameters
	 * @return \Controle\sub1\sub2\RunRequest\GetListResponse
	 */
	public function RunRequestGetList(\Controle\sub1\sub2\RunRequest\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Schedule\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\Schedule\GetCurrentResponse
	 */
	public function ScheduleGetCurrent(\Controle\sub1\sub2\Schedule\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\HourModel\GetHourCodes $parameters
	 * @return \Controle\sub1\sub2\HourModel\GetHourCodesResponse
	 */
	public function HourModelGetHourCodes(\Controle\sub1\sub2\HourModel\GetHourCodes $parameters) {
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
	 * @param \Controle\sub1\sub2\WageModel\GetWageCodes $parameters
	 * @return \Controle\sub1\sub2\WageModel\GetWageCodesResponse
	 */
	public function WageModelGetWageCodes(\Controle\sub1\sub2\WageModel\GetWageCodes $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlelist\GetAll $parameters
	 * @return \Controle\sub1\sub2\Controlelist\GetAllResponse
	 */
	public function ListGetAll(\Controle\sub1\sub2\Controlelist\GetAll $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlelist\GetByDebtor $parameters
	 * @return \Controle\sub1\sub2\Controlelist\GetByDebtorResponse
	 */
	public function ListGetByDebtor(\Controle\sub1\sub2\Controlelist\GetByDebtor $parameters) {
        return $this->__soapCall(
            'List_GetByDebtor',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
	}
}
