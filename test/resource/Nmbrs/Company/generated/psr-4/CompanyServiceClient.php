<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

/**
 * CompanyServiceClient
 */
class CompanyServiceClient extends \SoapClient
{
    const WSDL_FILE = "CompanyService.wsdl";

    private $classmap = array(
        'Payslip' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Payslip',
        'BankAccount' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount',
        'BankAccountType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccountType',
        'RunInfo' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RunInfo',
        'Sector' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Sector',
        'Risicogroep' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Risicogroep',
        'SalaryTableScale' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableScale',
        'SalaryTableStep' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableStep',
        'SalaryTable' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable',
        'CostCenter' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter',
        'Address' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address',
        'RunRequest' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RunRequest',
        'RunRequestStatus' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RunRequestStatus',
        'BedrijfFulltimeSchedule' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BedrijfFulltimeSchedule',
        'FulltimeSchedule' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FulltimeSchedule',
        'ScheduleCalcMethod' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ScheduleCalcMethod',
        'HourCode' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourCode',
        'WageCode' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageCode',
        'Company' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Company',
        'LoonaangifteTijdvak' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LoonaangifteTijdvak',
    );

    public function __construct(
        $wsdl = null,
        $options = array()
    ) {
        foreach ($this->classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
    }

    /**
     * SalaryDocumentsGetEmployeePayslipsPDFByRunCompany
     * Get employee payslips in PDF by run company for a specific run period
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SalaryDocuments\GetEmployeePayslipsPDFByRunCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SalaryDocuments\GetEmployeePayslipsPDFByRunCompanyResponse
     */
    public function salaryDocumentsGetEmployeePayslipsPDFByRunCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\SalaryDocuments\GetEmployeePayslipsPDFByRunCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SalaryDocuments\GetAllPayslipsPDFByRunCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SalaryDocuments\GetAllPayslipsPDFByRunCompanyResponse
     */
    public function salaryDocumentsGetAllPayslipsPDFByRunCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\SalaryDocuments\GetAllPayslipsPDFByRunCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Company\GetCurrentPeriod $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Company\GetCurrentPeriodResponse
     */
    public function companyGetCurrentPeriod(
        \Controle\Hostnet\Namesp\Sub4\Complex\Company\GetCurrentPeriod $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetCurrentResponse
     */
    public function bankAccountGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\UpdateResponse
     */
    public function bankAccountUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\InsertResponse
     */
    public function bankAccountInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\FileExplorer\UploadFile $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\FileExplorer\UploadFileResponse
     */
    public function fileExplorerUploadFile(
        \Controle\Hostnet\Namesp\Sub4\Complex\FileExplorer\UploadFile $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetPayslipByRunCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetPayslipByRunCompanyResponse
     */
    public function reportsGetPayslipByRunCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetPayslipByRunCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetWageCodesByRunCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetWageCodesByRunCompanyResponse
     */
    public function reportsGetWageCodesByRunCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetWageCodesByRunCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetWageCodesByYear $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetWageCodesByYearResponse
     */
    public function reportsGetWageCodesByYear(
        \Controle\Hostnet\Namesp\Sub4\Complex\Reports\GetWageCodesByYear $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunCompanyResponse
     */
    public function journalsGetByRunCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunEmployee $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunEmployeeResponse
     */
    public function journalsGetByRunEmployee(
        \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunEmployee $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunCostCenter $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunCostCenterResponse
     */
    public function journalsGetByRunCostCenter(
        \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunCostCenter $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunDepartment $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunDepartmentResponse
     */
    public function journalsGetByRunDepartment(
        \Controle\Hostnet\Namesp\Sub4\Complex\Journals\GetByRunDepartment $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Run\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Run\GetListResponse
     */
    public function runGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Run\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetCurrentResponse
     */
    public function sVWGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SVW\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SVW\UpdateCurrentResponse
     */
    public function sVWUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\SVW\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\GetScales $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\GetScalesResponse
     */
    public function salaryTableGetScales(
        \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\GetScales $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\GetSteps $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\GetStepsResponse
     */
    public function salaryTableGetSteps(
        \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\GetSteps $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\GetResponse
     */
    public function salaryTableGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetListResponse
     */
    public function costCenterGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\InsertResponse
     */
    public function costCenterInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetCurrentResponse
     */
    public function addressGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Address\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Address\UpdateResponse
     */
    public function addressUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\Address\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Address\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Address\InsertResponse
     */
    public function addressInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Address\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\RunRequest\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\RunRequest\InsertResponse
     */
    public function runRequestInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\RunRequest\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\RunRequest\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\RunRequest\GetListResponse
     */
    public function runRequestGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\RunRequest\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetCurrentResponse
     */
    public function scheduleGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourModel\GetHourCodes $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourModel\GetHourCodesResponse
     */
    public function hourModelGetHourCodes(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourModel\GetHourCodes $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageModel\GetWageCodes $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageModel\GetWageCodesResponse
     */
    public function wageModelGetWageCodes(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageModel\GetWageCodes $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetAll $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetAllResponse
     */
    public function listGetAll(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetAll $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByDebtor $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByDebtorResponse
     */
    public function listGetByDebtor(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByDebtor $parameters
    ) {
        return $this->__soapCall(
            'List_GetByDebtor',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/CompanyService')
        );
    }
}
