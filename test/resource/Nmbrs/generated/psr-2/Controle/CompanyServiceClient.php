<?php

namespace Controle\Controlelist;

/**
 * CompanyServiceClient
 */
class CompanyServiceClient extends \SoapClient {

    const WSDL_FILE = "CompanyService.wsdl";
    private $classmap = array(
        'Payslip' =>
            '\Controle\Payslip',
        'BankAccount' =>
            '\Controle\BankAccount',
        'BankAccountType' =>
            '\Controle\BankAccountType',
        'RunInfo' =>
            '\Controle\RunInfo',
        'Sector' =>
            '\Controle\Sector',
        'Risicogroep' =>
            '\Controle\Risicogroep',
        'SalaryTableScale' =>
            '\Controle\SalaryTableScale',
        'SalaryTableStep' =>
            '\Controle\SalaryTableStep',
        'SalaryTable' =>
            '\Controle\SalaryTable',
        'CostCenter' =>
            '\Controle\CostCenter',
        'Address' =>
            '\Controle\Address',
        'RunRequest' =>
            '\Controle\RunRequest',
        'RunRequestStatus' =>
            '\Controle\RunRequestStatus',
        'BedrijfFulltimeSchedule' =>
            '\Controle\BedrijfFulltimeSchedule',
        'FulltimeSchedule' =>
            '\Controle\FulltimeSchedule',
        'ScheduleCalcMethod' =>
            '\Controle\ScheduleCalcMethod',
        'HourCode' =>
            '\Controle\HourCode',
        'WageCode' =>
            '\Controle\WageCode',
        'Company' =>
            '\Controle\Company',
        'LoonaangifteTijdvak' =>
            '\Controle\LoonaangifteTijdvak',
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
     * @param \Controle\SalaryDocuments\GetEmployeePayslipsPDFByRunCompany $parameters
     * @return \Controle\SalaryDocuments\GetEmployeePayslipsPDFByRunCompanyResponse
     */
    public function SalaryDocumentsGetEmployeePayslipsPDFByRunCompany(\Controle\SalaryDocuments\GetEmployeePayslipsPDFByRunCompany $parameters) {
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
     * @param \Controle\SalaryDocuments\GetAllPayslipsPDFByRunCompany $parameters
     * @return \Controle\SalaryDocuments\GetAllPayslipsPDFByRunCompanyResponse
     */
    public function SalaryDocumentsGetAllPayslipsPDFByRunCompany(\Controle\SalaryDocuments\GetAllPayslipsPDFByRunCompany $parameters) {
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
     * @param \Controle\Company\GetCurrentPeriod $parameters
     * @return \Controle\Company\GetCurrentPeriodResponse
     */
    public function CompanyGetCurrentPeriod(\Controle\Company\GetCurrentPeriod $parameters) {
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
     * @param \Controle\BankAccount\GetCurrent $parameters
     * @return \Controle\BankAccount\GetCurrentResponse
     */
    public function BankAccountGetCurrent(\Controle\BankAccount\GetCurrent $parameters) {
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
     * @param \Controle\BankAccount\Update $parameters
     * @return \Controle\BankAccount\UpdateResponse
     */
    public function BankAccountUpdate(\Controle\BankAccount\Update $parameters) {
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
     * @param \Controle\BankAccount\Insert $parameters
     * @return \Controle\BankAccount\InsertResponse
     */
    public function BankAccountInsert(\Controle\BankAccount\Insert $parameters) {
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
     * @param \Controle\FileExplorer\UploadFile $parameters
     * @return \Controle\FileExplorer\UploadFileResponse
     */
    public function FileExplorerUploadFile(\Controle\FileExplorer\UploadFile $parameters) {
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
     * @param \Controle\Reports\GetPayslipByRunCompany $parameters
     * @return \Controle\Reports\GetPayslipByRunCompanyResponse
     */
    public function ReportsGetPayslipByRunCompany(\Controle\Reports\GetPayslipByRunCompany $parameters) {
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
     * @param \Controle\Reports\GetWageCodesByRunCompany $parameters
     * @return \Controle\Reports\GetWageCodesByRunCompanyResponse
     */
    public function ReportsGetWageCodesByRunCompany(\Controle\Reports\GetWageCodesByRunCompany $parameters) {
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
     * @param \Controle\Reports\GetWageCodesByYear $parameters
     * @return \Controle\Reports\GetWageCodesByYearResponse
     */
    public function ReportsGetWageCodesByYear(\Controle\Reports\GetWageCodesByYear $parameters) {
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
     * @param \Controle\Journals\GetByRunCompany $parameters
     * @return \Controle\Journals\GetByRunCompanyResponse
     */
    public function JournalsGetByRunCompany(\Controle\Journals\GetByRunCompany $parameters) {
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
     * @param \Controle\Journals\GetByRunEmployee $parameters
     * @return \Controle\Journals\GetByRunEmployeeResponse
     */
    public function JournalsGetByRunEmployee(\Controle\Journals\GetByRunEmployee $parameters) {
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
     * @param \Controle\Journals\GetByRunCostCenter $parameters
     * @return \Controle\Journals\GetByRunCostCenterResponse
     */
    public function JournalsGetByRunCostCenter(\Controle\Journals\GetByRunCostCenter $parameters) {
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
     * @param \Controle\Journals\GetByRunDepartment $parameters
     * @return \Controle\Journals\GetByRunDepartmentResponse
     */
    public function JournalsGetByRunDepartment(\Controle\Journals\GetByRunDepartment $parameters) {
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
     * @param \Controle\Run\GetList $parameters
     * @return \Controle\Run\GetListResponse
     */
    public function RunGetList(\Controle\Run\GetList $parameters) {
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
     * @param \Controle\SVW\GetCurrent $parameters
     * @return \Controle\SVW\GetCurrentResponse
     */
    public function SVWGetCurrent(\Controle\SVW\GetCurrent $parameters) {
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
     * @param \Controle\SVW\UpdateCurrent $parameters
     * @return \Controle\SVW\UpdateCurrentResponse
     */
    public function SVWUpdateCurrent(\Controle\SVW\UpdateCurrent $parameters) {
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
     * @param \Controle\SalaryTable\GetScales $parameters
     * @return \Controle\SalaryTable\GetScalesResponse
     */
    public function SalaryTableGetScales(\Controle\SalaryTable\GetScales $parameters) {
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
     * @param \Controle\SalaryTable\GetSteps $parameters
     * @return \Controle\SalaryTable\GetStepsResponse
     */
    public function SalaryTableGetSteps(\Controle\SalaryTable\GetSteps $parameters) {
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
     * @param \Controle\SalaryTable\Get $parameters
     * @return \Controle\SalaryTable\GetResponse
     */
    public function SalaryTableGet(\Controle\SalaryTable\Get $parameters) {
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
     * @param \Controle\CostCenter\GetList $parameters
     * @return \Controle\CostCenter\GetListResponse
     */
    public function CostCenterGetList(\Controle\CostCenter\GetList $parameters) {
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
     * @param \Controle\CostCenter\Insert $parameters
     * @return \Controle\CostCenter\InsertResponse
     */
    public function CostCenterInsert(\Controle\CostCenter\Insert $parameters) {
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
     * @param \Controle\Address\GetCurrent $parameters
     * @return \Controle\Address\GetCurrentResponse
     */
    public function AddressGetCurrent(\Controle\Address\GetCurrent $parameters) {
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
     * @param \Controle\Address\Update $parameters
     * @return \Controle\Address\UpdateResponse
     */
    public function AddressUpdate(\Controle\Address\Update $parameters) {
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
     * @param \Controle\Address\Insert $parameters
     * @return \Controle\Address\InsertResponse
     */
    public function AddressInsert(\Controle\Address\Insert $parameters) {
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
     * @param \Controle\RunRequest\Insert $parameters
     * @return \Controle\RunRequest\InsertResponse
     */
    public function RunRequestInsert(\Controle\RunRequest\Insert $parameters) {
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
     * @param \Controle\RunRequest\GetList $parameters
     * @return \Controle\RunRequest\GetListResponse
     */
    public function RunRequestGetList(\Controle\RunRequest\GetList $parameters) {
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
     * @param \Controle\Schedule\GetCurrent $parameters
     * @return \Controle\Schedule\GetCurrentResponse
     */
    public function ScheduleGetCurrent(\Controle\Schedule\GetCurrent $parameters) {
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
     * @param \Controle\HourModel\GetHourCodes $parameters
     * @return \Controle\HourModel\GetHourCodesResponse
     */
    public function HourModelGetHourCodes(\Controle\HourModel\GetHourCodes $parameters) {
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
     * @param \Controle\WageModel\GetWageCodes $parameters
     * @return \Controle\WageModel\GetWageCodesResponse
     */
    public function WageModelGetWageCodes(\Controle\WageModel\GetWageCodes $parameters) {
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
     * @param \Controle\Controlelist\GetAll $parameters
     * @return \Controle\Controlelist\GetAllResponse
     */
    public function ListGetAll(\Controle\Controlelist\GetAll $parameters) {
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
     * @param \Controle\Controlelist\GetByDebtor $parameters
     * @return \Controle\Controlelist\GetByDebtorResponse
     */
    public function ListGetByDebtor(\Controle\Controlelist\GetByDebtor $parameters) {
        return $this->__soapCall(
            'List_GetByDebtor',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
    }
}
