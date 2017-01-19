<?php

namespace Controle;

/**
 * EmployeeServiceClient
 */
class EmployeeServiceClient extends \SoapClient {

    const WSDL_FILE = "EmployeeService.wsdl";
    private $classmap = array(
        'HourComponent' =>
            '\Controle\HourComponent',
        'EmployeeHourComponent' =>
            '\Controle\EmployeeHourComponent',
        'WageComponent' =>
            '\Controle\WageComponent',
        'EmployeeWageComponent' =>
            '\Controle\EmployeeWageComponent',
        'PersonalInfo' =>
            '\Controle\PersonalInfo',
        'Employee' =>
            '\Controle\Employee',
        'Gender' =>
            '\Controle\Gender',
        'PersonalInfoItem' =>
            '\Controle\PersonalInfoItem',
        'Active' =>
            '\Controle\Active',
        'EmployeeAddress' =>
            '\Controle\EmployeeAddress',
        'AddressType' =>
            '\Controle\AddressType',
        'EmployeeAddressItem' =>
            '\Controle\EmployeeAddressItem',
        'BankAccount' =>
            '\Controle\BankAccount',
        'BankAccountType' =>
            '\Controle\BankAccountType',
        'EmployeeContractItem' =>
            '\Controle\EmployeeContractItem',
        'Absence' =>
            '\Controle\Absence',
        'Leave' =>
            '\Controle\Leave',
        'LeaveUsageType' =>
            '\Controle\LeaveUsageType',
        'LeaveType' =>
            '\Controle\LeaveType',
        'LeaveStatus' =>
            '\Controle\LeaveStatus',
        'Levensloop' =>
            '\Controle\Levensloop',
        'Spaarloon' =>
            '\Controle\Spaarloon',
        'ServiceInterval' =>
            '\Controle\ServiceInterval',
        'Schedule' =>
            '\Controle\Schedule',
        'EmployeeScheduleItem' =>
            '\Controle\EmployeeScheduleItem',
        'SalaryInput' =>
            '\Controle\SalaryInput',
        'SalaryType' =>
            '\Controle\SalaryType',
        'SalaryTableEmployeeInput' =>
            '\Controle\SalaryTableEmployeeInput',
        'SalaryTableScaleInput' =>
            '\Controle\SalaryTableScaleInput',
        'SalaryTableStepInput' =>
            '\Controle\SalaryTableStepInput',
        'Salary' =>
            '\Controle\Salary',
        'SalaryTableEmployee' =>
            '\Controle\SalaryTableEmployee',
        'SalaryTable' =>
            '\Controle\SalaryTable',
        'SalaryTableScale' =>
            '\Controle\SalaryTableScale',
        'SalaryTableStep' =>
            '\Controle\SalaryTableStep',
        'EmployeeSalaryItem' =>
            '\Controle\EmployeeSalaryItem',
        'WageTaxSettings' =>
            '\Controle\WageTaxSettings',
        'EmployeeCostCenter' =>
            '\Controle\EmployeeCostCenter',
        'CostCenter' =>
            '\Controle\CostCenter',
        'Kostensoort' =>
            '\Controle\Kostensoort',
        'EmployeeFunctionItem' =>
            '\Controle\EmployeeFunctionItem',
        'Department' =>
            '\Controle\Department',
        'EmployeeDepartmentItem' =>
            '\Controle\EmployeeDepartmentItem',
        'EmployeeLeaseCar' =>
            '\Controle\EmployeeLeaseCar',
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
     * DaysVarGet
     * Get days worked filled in for given period.
     *
     * @param \Controle\DaysVar\Get $parameters
     * @return \Controle\DaysVar\GetResponse
     */
    public function DaysVarGet(\Controle\DaysVar\Get $parameters) {
        return $this->__soapCall(
            'DaysVar_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DaysVarGetCurrent
     * Get filled in days worked for the current period.
     *
     * @param \Controle\DaysVar\GetCurrent $parameters
     * @return \Controle\DaysVar\GetCurrentResponse
     */
    public function DaysVarGetCurrent(\Controle\DaysVar\GetCurrent $parameters) {
        return $this->__soapCall(
            'DaysVar_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DaysVarSetCurrent
     * Set days worked to the current period.
     *
     * @param \Controle\DaysVar\SetCurrent $parameters
     * @return \Controle\DaysVar\SetCurrentResponse
     */
    public function DaysVarSetCurrent(\Controle\DaysVar\SetCurrent $parameters) {
        return $this->__soapCall(
            'DaysVar_SetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DaysVarSet
     * Set days worked for the given period. If the period is before the company's current
     * period, unprotected mode flag is required, else a TWK exception in thrown.
     *
     * @param \Controle\DaysVar\Set $parameters
     * @return \Controle\DaysVar\SetResponse
     */
    public function DaysVarSet(\Controle\DaysVar\Set $parameters) {
        return $this->__soapCall(
            'DaysVar_Set',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentVarGet
     * Get all extra hourcomponents for given period.
     *
     * @param \Controle\HourComponentVar\Get $parameters
     * @return \Controle\HourComponentVar\GetResponse
     */
    public function HourComponentVarGet(\Controle\HourComponentVar\Get $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentVarGetCurrent
     * Get all extra hourcomponents for the current period.
     *
     * @param \Controle\HourComponentVar\GetCurrent $parameters
     * @return \Controle\HourComponentVar\GetCurrentResponse
     */
    public function HourComponentVarGetCurrent(\Controle\HourComponentVar\GetCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentVar_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentVarClearCurrent
     * Clear all extra hourcomponents for current period.
     *
     * @param \Controle\HourComponentVar\ClearCurrent $parameters
     * @return \Controle\HourComponentVar\ClearCurrentResponse
     */
    public function HourComponentVarClearCurrent(\Controle\HourComponentVar\ClearCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentVar_ClearCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentVarClear
     * Clear all extra hourcomponents for given period.
     *
     * @param \Controle\HourComponentVar\Clear $parameters
     * @return \Controle\HourComponentVar\ClearResponse
     */
    public function HourComponentVarClear(\Controle\HourComponentVar\Clear $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Clear',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentVarInsertCurrent
     * Insert an extra hourcomponent to the current period.
     *
     * @param \Controle\HourComponentVar\InsertCurrent $parameters
     * @return \Controle\HourComponentVar\InsertCurrentResponse
     */
    public function HourComponentVarInsertCurrent(\Controle\HourComponentVar\InsertCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentVar_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentVarInsert
     * Insert an extra hourcomponent to given period. If the period is before the company's
     * current period, unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\HourComponentVar\Insert $parameters
     * @return \Controle\HourComponentVar\InsertResponse
     */
    public function HourComponentVarInsert(\Controle\HourComponentVar\Insert $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentVarInsertBatch
     * Insert a batch of extra hourcomponents to given period. If the period is before the
     * company's current period, unprotected mode flag is required, else a TWK exception is
     * thrown.
     *
     * @param \Controle\HourComponentVar\Insert\Batch $parameters
     * @return \Controle\HourComponentVar\Insert\BatchResponse
     */
    public function HourComponentVarInsertBatch(\Controle\HourComponentVar\Insert\Batch $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentVarGet
     * Get all variable looncomponents for given period.
     *
     * @param \Controle\WageComponentVar\Get $parameters
     * @return \Controle\WageComponentVar\GetResponse
     */
    public function WageComponentVarGet(\Controle\WageComponentVar\Get $parameters) {
        return $this->__soapCall(
            'WageComponentVar_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentVarGetCurrent
     * Get all variable looncomponents for the current period.
     *
     * @param \Controle\WageComponentVar\GetCurrent $parameters
     * @return \Controle\WageComponentVar\GetCurrentResponse
     */
    public function WageComponentVarGetCurrent(\Controle\WageComponentVar\GetCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentVar_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentVarClearCurrent
     * Clear all variable looncomponents for the current period.
     *
     * @param \Controle\WageComponentVar\ClearCurrent $parameters
     * @return \Controle\WageComponentVar\ClearCurrentResponse
     */
    public function WageComponentVarClearCurrent(\Controle\WageComponentVar\ClearCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentVar_ClearCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentVarClear
     * Clear all variable looncomponents for given period.
     *
     * @param \Controle\WageComponentVar\Clear $parameters
     * @return \Controle\WageComponentVar\ClearResponse
     */
    public function WageComponentVarClear(\Controle\WageComponentVar\Clear $parameters) {
        return $this->__soapCall(
            'WageComponentVar_Clear',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentVarInsertCurrent
     * Insert a looncomponent to the current period.
     *
     * @param \Controle\WageComponentVar\InsertCurrent $parameters
     * @return \Controle\WageComponentVar\InsertCurrentResponse
     */
    public function WageComponentVarInsertCurrent(\Controle\WageComponentVar\InsertCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentVar_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentVarInsert
     * Insert a looncomponent to given period. If the period is before the company's current
     * period, unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\WageComponentVar\Insert $parameters
     * @return \Controle\WageComponentVar\InsertResponse
     */
    public function WageComponentVarInsert(\Controle\WageComponentVar\Insert $parameters) {
        return $this->__soapCall(
            'WageComponentVar_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentVarInsertBatch
     * Insert a batch of looncomponents to given period. If the period is before the company's
     * current period, unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\WageComponentVar\Insert\Batch $parameters
     * @return \Controle\WageComponentVar\Insert\BatchResponse
     */
    public function WageComponentVarInsertBatch(\Controle\WageComponentVar\Insert\Batch $parameters) {
        return $this->__soapCall(
            'WageComponentVar_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * PersonalInfoGetCurrent
     * Get the currently active personal info.
     *
     * @param \Controle\PersonalInfo\GetCurrent $parameters
     * @return \Controle\PersonalInfo\GetCurrentResponse
     */
    public function PersonalInfoGetCurrent(\Controle\PersonalInfo\GetCurrent $parameters) {
        return $this->__soapCall(
            'PersonalInfo_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * PersonalInfoGet
     * Get the active personal info for given period.
     *
     * @param \Controle\PersonalInfo\Get $parameters
     * @return \Controle\PersonalInfo\GetResponse
     */
    public function PersonalInfoGet(\Controle\PersonalInfo\Get $parameters) {
        return $this->__soapCall(
            'PersonalInfo_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * PersonalInfoUpdateCurrent
     * Update personal info starting from the current period.
     *
     * @param \Controle\PersonalInfo\UpdateCurrent $parameters
     * @return \Controle\PersonalInfo\UpdateCurrentResponse
     */
    public function PersonalInfoUpdateCurrent(\Controle\PersonalInfo\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'PersonalInfo_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * PersonalInfoUpdate
     * Update personal info starting from the given period.
     *
     * @param \Controle\PersonalInfo\Update $parameters
     * @return \Controle\PersonalInfo\UpdateResponse
     */
    public function PersonalInfoUpdate(\Controle\PersonalInfo\Update $parameters) {
        return $this->__soapCall(
            'PersonalInfo_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * PersonalInfoGetAllAllEmployeesByCompany
     * Get all personal infos of all employees.
     *
     * @param \Controle\PersonalInfo\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\PersonalInfo\GetAll\AllEmployeesByCompanyResponse
     */
    public function PersonalInfoGetAllAllEmployeesByCompany(\Controle\PersonalInfo\GetAll\AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'PersonalInfo_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ListGetByCompany
     * Get all employees that belong to a company and are active as given.
     *
     * @param \Controle\Controlelist\GetByCompany $parameters
     * @return \Controle\Controlelist\GetByCompanyResponse
     */
    public function ListGetByCompany(\Controle\Controlelist\GetByCompany $parameters) {
        return $this->__soapCall(
            'List_GetByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ListGetByDebtor
     * Get all employees that belong to a debtor and are active as given.
     *
     * @param \Controle\Controlelist\GetByDebtor $parameters
     * @return \Controle\Controlelist\GetByDebtorResponse
     */
    public function ListGetByDebtor(\Controle\Controlelist\GetByDebtor $parameters) {
        return $this->__soapCall(
            'List_GetByDebtor',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * EmployeeGetCurrent
     * Get the company's current period, Format = yyyy-pp-type, example: 2010-5-M or 2010-4-4W.
     *
     * @param \Controle\Employee\GetCurrent $parameters
     * @return \Controle\Employee\GetCurrentResponse
     */
    public function EmployeeGetCurrent(\Controle\Employee\GetCurrent $parameters) {
        return $this->__soapCall(
            'Employee_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * EmployeeInsert
     * Create a new Employee, returns the Id of this Employee. If the date is before the company's
     * current period, unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\Employee\Insert $parameters
     * @return \Controle\Employee\InsertResponse
     */
    public function EmployeeInsert(\Controle\Employee\Insert $parameters) {
        return $this->__soapCall(
            'Employee_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * EmployeeDocumentUploadDocument
     * Uploads document for employee
     *
     * @param \Controle\EmployeeDocument\UploadDocument $parameters
     * @return \Controle\EmployeeDocument\UploadDocumentResponse
     */
    public function EmployeeDocumentUploadDocument(\Controle\EmployeeDocument\UploadDocument $parameters) {
        return $this->__soapCall(
            'EmployeeDocument_UploadDocument',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentFixedGet
     * Get all extra hourcomponents for given period.
     *
     * @param \Controle\HourComponentFixed\Get $parameters
     * @return \Controle\HourComponentFixed\GetResponse
     */
    public function HourComponentFixedGet(\Controle\HourComponentFixed\Get $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentFixedGetCurrent
     * Get all extra hourcomponents for the current period.
     *
     * @param \Controle\HourComponentFixed\GetCurrent $parameters
     * @return \Controle\HourComponentFixed\GetCurrentResponse
     */
    public function HourComponentFixedGetCurrent(\Controle\HourComponentFixed\GetCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentFixedInsertCurrent
     * Insert an extra hourcomponent to the current period.
     *
     * @param \Controle\HourComponentFixed\InsertCurrent $parameters
     * @return \Controle\HourComponentFixed\InsertCurrentResponse
     */
    public function HourComponentFixedInsertCurrent(\Controle\HourComponentFixed\InsertCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentFixedInsert
     * Insert an extra hourcomponent to given period. If the period is before the company's
     * current period, unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\HourComponentFixed\Insert $parameters
     * @return \Controle\HourComponentFixed\InsertResponse
     */
    public function HourComponentFixedInsert(\Controle\HourComponentFixed\Insert $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentFixedInsertBatch
     * Insert a batch of extra hourcomponents to given period. If the period is before the
     * company's current period, unprotected mode flag is required, else a TWK exception is
     * thrown.
     *
     * @param \Controle\HourComponentFixed\Insert\Batch $parameters
     * @return \Controle\HourComponentFixed\Insert\BatchResponse
     */
    public function HourComponentFixedInsertBatch(\Controle\HourComponentFixed\Insert\Batch $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * HourComponentFixedStop
     * Stop an extra Hourcomponent. If the period is before the company's current period, unprotected
     * mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\HourComponentFixed\Stop $parameters
     * @return \Controle\HourComponentFixed\StopResponse
     */
    public function HourComponentFixedStop(\Controle\HourComponentFixed\Stop $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * AddressInsertCurrent
     * Insert given address to the current period.
     *
     * @param \Controle\Address\InsertCurrent $parameters
     * @return \Controle\Address\InsertCurrentResponse
     */
    public function AddressInsertCurrent(\Controle\Address\InsertCurrent $parameters) {
        return $this->__soapCall(
            'Address_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * AddressGetListCurrent
     * Get all currently active adresses.
     *
     * @param \Controle\Address\GetListCurrent $parameters
     * @return \Controle\Address\GetListCurrentResponse
     */
    public function AddressGetListCurrent(\Controle\Address\GetListCurrent $parameters) {
        return $this->__soapCall(
            'Address_GetListCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * AddressGetList
     * Get all adresses which are active in given period.
     *
     * @param \Controle\Address\GetList $parameters
     * @return \Controle\Address\GetListResponse
     */
    public function AddressGetList(\Controle\Address\GetList $parameters) {
        return $this->__soapCall(
            'Address_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * AddressGetAllAllEmployeesByCompany
     * Get all adresses of all employees.
     *
     * @param \Controle\Address\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Address\GetAll\AllEmployeesByCompanyResponse
     */
    public function AddressGetAllAllEmployeesByCompany(\Controle\Address\GetAll\AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Address_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * BankAccountInsertCurrent
     * Insert given bankaccount to the current period.
     *
     * @param \Controle\BankAccount\InsertCurrent $parameters
     * @return \Controle\BankAccount\InsertCurrentResponse
     */
    public function BankAccountInsertCurrent(\Controle\BankAccount\InsertCurrent $parameters) {
        return $this->__soapCall(
            'BankAccount_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * BankAccountGetListCurrent
     * Get all active bankaccounts for the current period.
     *
     * @param \Controle\BankAccount\GetListCurrent $parameters
     * @return \Controle\BankAccount\GetListCurrentResponse
     */
    public function BankAccountGetListCurrent(\Controle\BankAccount\GetListCurrent $parameters) {
        return $this->__soapCall(
            'BankAccount_GetListCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * BankAccountGetList
     * Get all active bankaccounts for given period.
     *
     * @param \Controle\BankAccount\GetList $parameters
     * @return \Controle\BankAccount\GetListResponse
     */
    public function BankAccountGetList(\Controle\BankAccount\GetList $parameters) {
        return $this->__soapCall(
            'BankAccount_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ContractDelete
     * Delete a contract from the system. This action can not be undone.
     *
     * @param \Controle\Contract\Delete $parameters
     * @return \Controle\Contract\DeleteResponse
     */
    public function ContractDelete(\Controle\Contract\Delete $parameters) {
        return $this->__soapCall(
            'Contract_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ContractInsertv2
     * Insert Contract. If the startdate is before the company's current period, unprotected
     * mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\Contract\Insert\v2 $parameters
     * @return \Controle\Contract\Insert\v2Response
     */
    public function ContractInsertv2(\Controle\Contract\Insert\v2 $parameters) {
        return $this->__soapCall(
            'Contract_Insert_v2',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ContractInsertCurrentPeriodv2
     * Insert Contract in current period for specified employee.
     *
     * @param \Controle\Contract\InsertCurrentPeriod\v2 $parameters
     * @return \Controle\Contract\InsertCurrentPeriod\v2Response
     */
    public function ContractInsertCurrentPeriodv2(\Controle\Contract\InsertCurrentPeriod\v2 $parameters) {
        return $this->__soapCall(
            'Contract_InsertCurrentPeriod_v2',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ContractGetAllv2
     * Get all contracts for the specified employee.
     *
     * @param \Controle\Contract\GetAll\v2 $parameters
     * @return \Controle\Contract\GetAll\v2Response
     */
    public function ContractGetAllv2(\Controle\Contract\GetAll\v2 $parameters) {
        return $this->__soapCall(
            'Contract_GetAll_v2',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ContractGetAllAllEmployeesByCompany
     * Get all contracts of all employees.
     *
     * @param \Controle\Contract\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Contract\GetAll\AllEmployeesByCompanyResponse
     */
    public function ContractGetAllAllEmployeesByCompany(\Controle\Contract\GetAll\AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Contract_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * AbsenceInsert
     * Insert a verzuimitem, this item will start from the given date in the object.
     *
     * @param \Controle\Absence\Insert $parameters
     * @return \Controle\Absence\InsertResponse
     */
    public function AbsenceInsert(\Controle\Absence\Insert $parameters) {
        return $this->__soapCall(
            'Absence_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * AbsenceGetList
     * Get a list of all verzuimitems.
     *
     * @param \Controle\Absence\GetList $parameters
     * @return \Controle\Absence\GetListResponse
     */
    public function AbsenceGetList(\Controle\Absence\GetList $parameters) {
        return $this->__soapCall(
            'Absence_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LeaveInsert
     * Insert a new verlof, starting from the date given in the object.
     *
     * @param \Controle\Leave\Insert $parameters
     * @return \Controle\Leave\InsertResponse
     */
    public function LeaveInsert(\Controle\Leave\Insert $parameters) {
        return $this->__soapCall(
            'Leave_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LeaveGetList
     * Get a list of verlofitems for the given year, type and soort.
     *
     * @param \Controle\Leave\GetList $parameters
     * @return \Controle\Leave\GetListResponse
     */
    public function LeaveGetList(\Controle\Leave\GetList $parameters) {
        return $this->__soapCall(
            'Leave_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LevensloopInsert
     * Start levensloop for given date and amount.
     *
     * @param \Controle\Levensloop\Insert $parameters
     * @return \Controle\Levensloop\InsertResponse
     */
    public function LevensloopInsert(\Controle\Levensloop\Insert $parameters) {
        return $this->__soapCall(
            'Levensloop_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LevensloopStop
     * Stop the active levensloop for given date.
     *
     * @param \Controle\Levensloop\Stop $parameters
     * @return \Controle\Levensloop\StopResponse
     */
    public function LevensloopStop(\Controle\Levensloop\Stop $parameters) {
        return $this->__soapCall(
            'Levensloop_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LevensloopDelete
     * Delete the given levensloop. This action can not be undone.
     *
     * @param \Controle\Levensloop\Delete $parameters
     * @return \Controle\Levensloop\DeleteResponse
     */
    public function LevensloopDelete(\Controle\Levensloop\Delete $parameters) {
        return $this->__soapCall(
            'Levensloop_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LevensloopGet
     * Get the active levensloop for given period.
     *
     * @param \Controle\Levensloop\Get $parameters
     * @return \Controle\Levensloop\GetResponse
     */
    public function LevensloopGet(\Controle\Levensloop\Get $parameters) {
        return $this->__soapCall(
            'Levensloop_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SpaarloonInsert
     * Start spaarloon for given date and amount. If the startdate is before the company's
     * current period, unprotected mode flag is required, else a TWK exception in thrown.
     *
     * @param \Controle\Spaarloon\Insert $parameters
     * @return \Controle\Spaarloon\InsertResponse
     */
    public function SpaarloonInsert(\Controle\Spaarloon\Insert $parameters) {
        return $this->__soapCall(
            'Spaarloon_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SpaarloonStop
     * Stop the active spaarloon for given date.
     *
     * @param \Controle\Spaarloon\Stop $parameters
     * @return \Controle\Spaarloon\StopResponse
     */
    public function SpaarloonStop(\Controle\Spaarloon\Stop $parameters) {
        return $this->__soapCall(
            'Spaarloon_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SpaarloonGet
     * Get the active spaarloon for given period.
     *
     * @param \Controle\Spaarloon\Get $parameters
     * @return \Controle\Spaarloon\GetResponse
     */
    public function SpaarloonGet(\Controle\Spaarloon\Get $parameters) {
        return $this->__soapCall(
            'Spaarloon_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SpaarloonDelete
     * Delete the given spaarloon from the system. This action can not be undone.
     *
     * @param \Controle\Spaarloon\Delete $parameters
     * @return \Controle\Spaarloon\DeleteResponse
     */
    public function SpaarloonDelete(\Controle\Spaarloon\Delete $parameters) {
        return $this->__soapCall(
            'Spaarloon_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SpaarloonGetList
     * Get a list of spaarloonvalues.
     *
     * @param \Controle\Spaarloon\GetList $parameters
     * @return \Controle\Spaarloon\GetListResponse
     */
    public function SpaarloonGetList(\Controle\Spaarloon\GetList $parameters) {
        return $this->__soapCall(
            'Spaarloon_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ServiceGetList
     * Get all service intervals.
     *
     * @param \Controle\Service\GetList $parameters
     * @return \Controle\Service\GetListResponse
     */
    public function ServiceGetList(\Controle\Service\GetList $parameters) {
        return $this->__soapCall(
            'Service_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ServiceStopCurrent
     * Stop the current service interval. If the date is before the company's current period,
     * unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\Service\StopCurrent $parameters
     * @return \Controle\Service\StopCurrentResponse
     */
    public function ServiceStopCurrent(\Controle\Service\StopCurrent $parameters) {
        return $this->__soapCall(
            'Service_StopCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ServiceInsert
     * Start a new service interval. If the date is before the company's current period, unprotected
     * mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\Service\Insert $parameters
     * @return \Controle\Service\InsertResponse
     */
    public function ServiceInsert(\Controle\Service\Insert $parameters) {
        return $this->__soapCall(
            'Service_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ServiceInsert2
     * Start a new service interval. If the date is before the company's current period, unprotected
     * mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\Service\Insert2 $parameters
     * @return \Controle\Service\Insert2Response
     */
    public function ServiceInsert2(\Controle\Service\Insert2 $parameters) {
        return $this->__soapCall(
            'Service_Insert2',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DaysFixedGet
     * Get fixed days worked for given period.
     *
     * @param \Controle\DaysFixed\Get $parameters
     * @return \Controle\DaysFixed\GetResponse
     */
    public function DaysFixedGet(\Controle\DaysFixed\Get $parameters) {
        return $this->__soapCall(
            'DaysFixed_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DaysFixedGetCurrent
     * Get fixed days worked for the current period.
     *
     * @param \Controle\DaysFixed\GetCurrent $parameters
     * @return \Controle\DaysFixed\GetCurrentResponse
     */
    public function DaysFixedGetCurrent(\Controle\DaysFixed\GetCurrent $parameters) {
        return $this->__soapCall(
            'DaysFixed_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DaysFixedSetCurrent
     * Set fixed days worked for the current period.
     *
     * @param \Controle\DaysFixed\SetCurrent $parameters
     * @return \Controle\DaysFixed\SetCurrentResponse
     */
    public function DaysFixedSetCurrent(\Controle\DaysFixed\SetCurrent $parameters) {
        return $this->__soapCall(
            'DaysFixed_SetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DaysFixedSet
     * Set fixed days for given period. If the period is before the company's current period,
     * unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\DaysFixed\Set $parameters
     * @return \Controle\DaysFixed\SetResponse
     */
    public function DaysFixedSet(\Controle\DaysFixed\Set $parameters) {
        return $this->__soapCall(
            'DaysFixed_Set',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DaysFixedStop
     * Stop vaste days, the given period is the last for these days. If the period is before
     * the company's current period, unprotected mode flag is required, else a TWK exception
     * is thrown.
     *
     * @param \Controle\DaysFixed\Stop $parameters
     * @return \Controle\DaysFixed\StopResponse
     */
    public function DaysFixedStop(\Controle\DaysFixed\Stop $parameters) {
        return $this->__soapCall(
            'DaysFixed_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentFixedGet
     * Get all vaste looncomponents for given period.
     *
     * @param \Controle\WageComponentFixed\Get $parameters
     * @return \Controle\WageComponentFixed\GetResponse
     */
    public function WageComponentFixedGet(\Controle\WageComponentFixed\Get $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentFixedGetCurrent
     * Get all vaste looncomponents for the current period.
     *
     * @param \Controle\WageComponentFixed\GetCurrent $parameters
     * @return \Controle\WageComponentFixed\GetCurrentResponse
     */
    public function WageComponentFixedGetCurrent(\Controle\WageComponentFixed\GetCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentFixedInsertBatch
     * Insert a batch of looncomponents to given period. If the period is before the company's
     * current period, unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\WageComponentFixed\Insert\Batch $parameters
     * @return \Controle\WageComponentFixed\Insert\BatchResponse
     */
    public function WageComponentFixedInsertBatch(\Controle\WageComponentFixed\Insert\Batch $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentFixedInsert
     * Insert a looncomponent to given period. If the period is before the company's current
     * period, unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\WageComponentFixed\Insert $parameters
     * @return \Controle\WageComponentFixed\InsertResponse
     */
    public function WageComponentFixedInsert(\Controle\WageComponentFixed\Insert $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentFixedInsertCurrent
     * Insert a looncomponent to the current period.
     *
     * @param \Controle\WageComponentFixed\InsertCurrent $parameters
     * @return \Controle\WageComponentFixed\InsertCurrentResponse
     */
    public function WageComponentFixedInsertCurrent(\Controle\WageComponentFixed\InsertCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageComponentFixedStop
     * Stop a looncomponent ending after given period. If the period is before the company's
     * current period, unprotected mode flag is required, else a TWK exception is thrown.
     *
     * @param \Controle\WageComponentFixed\Stop $parameters
     * @return \Controle\WageComponentFixed\StopResponse
     */
    public function WageComponentFixedStop(\Controle\WageComponentFixed\Stop $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ScheduleUpdateCurrent
     * Update schedule starting from the current period. The company default rooster number
     * can be specified.
     *
     * @param \Controle\Schedule\UpdateCurrent $parameters
     * @return \Controle\Schedule\UpdateCurrentResponse
     */
    public function ScheduleUpdateCurrent(\Controle\Schedule\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Schedule_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ScheduleUpdate
     * Update schedule starting from the given date. The company default rooster number can
     * be specified.
     *
     * @param \Controle\Schedule\Update $parameters
     * @return \Controle\Schedule\UpdateResponse
     */
    public function ScheduleUpdate(\Controle\Schedule\Update $parameters) {
        return $this->__soapCall(
            'Schedule_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ScheduleGetCurrent
     * Get currently active schedule.
     *
     * @param \Controle\Schedule\GetCurrent $parameters
     * @return \Controle\Schedule\GetCurrentResponse
     */
    public function ScheduleGetCurrent(\Controle\Schedule\GetCurrent $parameters) {
        return $this->__soapCall(
            'Schedule_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ScheduleGet
     * Get schedule the active schedule for given period.
     *
     * @param \Controle\Schedule\Get $parameters
     * @return \Controle\Schedule\GetResponse
     */
    public function ScheduleGet(\Controle\Schedule\Get $parameters) {
        return $this->__soapCall(
            'Schedule_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ScheduleGetList
     * Get all schedules, untill given period.
     *
     * @param \Controle\Schedule\GetList $parameters
     * @return \Controle\Schedule\GetListResponse
     */
    public function ScheduleGetList(\Controle\Schedule\GetList $parameters) {
        return $this->__soapCall(
            'Schedule_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * ScheduleGetAllAllEmployeesByCompany
     * Get all schedules of all employees from company
     *
     * @param \Controle\Schedule\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Schedule\GetAll\AllEmployeesByCompanyResponse
     */
    public function ScheduleGetAllAllEmployeesByCompany(\Controle\Schedule\GetAll\AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Schedule_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SalaryUpdateCurrent
     * Update salary. This salary will start from the first date of the current period.
     *
     * @param \Controle\Salary\UpdateCurrent $parameters
     * @return \Controle\Salary\UpdateCurrentResponse
     */
    public function SalaryUpdateCurrent(\Controle\Salary\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Salary_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SalaryUpdate
     * Update salary. This salary will start from the date given.
     *
     * @param \Controle\Salary\Update $parameters
     * @return \Controle\Salary\UpdateResponse
     */
    public function SalaryUpdate(\Controle\Salary\Update $parameters) {
        return $this->__soapCall(
            'Salary_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SalaryGetCurrent
     * Get the currently active salary.
     *
     * @param \Controle\Salary\GetCurrent $parameters
     * @return \Controle\Salary\GetCurrentResponse
     */
    public function SalaryGetCurrent(\Controle\Salary\GetCurrent $parameters) {
        return $this->__soapCall(
            'Salary_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SalaryGet
     * Get the active salary for the given period.
     *
     * @param \Controle\Salary\Get $parameters
     * @return \Controle\Salary\GetResponse
     */
    public function SalaryGet(\Controle\Salary\Get $parameters) {
        return $this->__soapCall(
            'Salary_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SalaryGetList
     * Get all salary, untill given period.
     *
     * @param \Controle\Salary\GetList $parameters
     * @return \Controle\Salary\GetListResponse
     */
    public function SalaryGetList(\Controle\Salary\GetList $parameters) {
        return $this->__soapCall(
            'Salary_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SalaryGetAllAllEmployeesByCompany
     * Get all salary, untill given period.
     *
     * @param \Controle\Salary\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Salary\GetAll\AllEmployeesByCompanyResponse
     */
    public function SalaryGetAllAllEmployeesByCompany(\Controle\Salary\GetAll\AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Salary_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SVWUpdateCurrent
     * Update SVW settings starting from the current period.
     *
     * @param \Controle\SVW\UpdateCurrent $parameters
     * @return \Controle\SVW\UpdateCurrentResponse
     */
    public function SVWUpdateCurrent(\Controle\SVW\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'SVW_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SVWUpdate
     * Update SVW settings starting from given period.
     *
     * @param \Controle\SVW\Update $parameters
     * @return \Controle\SVW\UpdateResponse
     */
    public function SVWUpdate(\Controle\SVW\Update $parameters) {
        return $this->__soapCall(
            'SVW_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SVWGetCurrent
     * Get the currently active SVW settings.
     *
     * @param \Controle\SVW\GetCurrent $parameters
     * @return \Controle\SVW\GetCurrentResponse
     */
    public function SVWGetCurrent(\Controle\SVW\GetCurrent $parameters) {
        return $this->__soapCall(
            'SVW_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SVWGet
     * Get the active SVW settings for given period.
     *
     * @param \Controle\SVW\Get $parameters
     * @return \Controle\SVW\GetResponse
     */
    public function SVWGet(\Controle\SVW\Get $parameters) {
        return $this->__soapCall(
            'SVW_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * SVWGetList
     * Get a list of all SVW settings.
     *
     * @param \Controle\SVW\GetList $parameters
     * @return \Controle\SVW\GetListResponse
     */
    public function SVWGetList(\Controle\SVW\GetList $parameters) {
        return $this->__soapCall(
            'SVW_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageTaxUpdateCurrent
     * Update loonheffing settings starting from the current period.
     *
     * @param \Controle\WageTax\UpdateCurrent $parameters
     * @return \Controle\WageTax\UpdateCurrentResponse
     */
    public function WageTaxUpdateCurrent(\Controle\WageTax\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'WageTax_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageTaxUpdate
     * Update loonheffing settings starting from given period.
     *
     * @param \Controle\WageTax\Update $parameters
     * @return \Controle\WageTax\UpdateResponse
     */
    public function WageTaxUpdate(\Controle\WageTax\Update $parameters) {
        return $this->__soapCall(
            'WageTax_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageTaxGetCurrent
     * Get the currently active loonheffing settings.
     *
     * @param \Controle\WageTax\GetCurrent $parameters
     * @return \Controle\WageTax\GetCurrentResponse
     */
    public function WageTaxGetCurrent(\Controle\WageTax\GetCurrent $parameters) {
        return $this->__soapCall(
            'WageTax_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageTaxGetList
     * Get a list of all loonheffing settings.
     *
     * @param \Controle\WageTax\GetList $parameters
     * @return \Controle\WageTax\GetListResponse
     */
    public function WageTaxGetList(\Controle\WageTax\GetList $parameters) {
        return $this->__soapCall(
            'WageTax_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * WageTaxGet
     * Get the active loonheffing settings for given period.
     *
     * @param \Controle\WageTax\Get $parameters
     * @return \Controle\WageTax\GetResponse
     */
    public function WageTaxGet(\Controle\WageTax\Get $parameters) {
        return $this->__soapCall(
            'WageTax_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * CostCenterUpdateCurrent
     * Update the cost centers starting from the current period.
     *
     * @param \Controle\CostCenter\UpdateCurrent $parameters
     * @return \Controle\CostCenter\UpdateCurrentResponse
     */
    public function CostCenterUpdateCurrent(\Controle\CostCenter\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'CostCenter_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * CostCenterUpdate
     * Update the kostenplaatsen starting from given period.
     *
     * @param \Controle\CostCenter\Update $parameters
     * @return \Controle\CostCenter\UpdateResponse
     */
    public function CostCenterUpdate(\Controle\CostCenter\Update $parameters) {
        return $this->__soapCall(
            'CostCenter_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * CostCenterGetCurrent
     * Get the kostenplaatsen for the current period.
     *
     * @param \Controle\CostCenter\GetCurrent $parameters
     * @return \Controle\CostCenter\GetCurrentResponse
     */
    public function CostCenterGetCurrent(\Controle\CostCenter\GetCurrent $parameters) {
        return $this->__soapCall(
            'CostCenter_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * CostCenterGet
     * Get the kostenplaatsen for given period.
     *
     * @param \Controle\CostCenter\Get $parameters
     * @return \Controle\CostCenter\GetResponse
     */
    public function CostCenterGet(\Controle\CostCenter\Get $parameters) {
        return $this->__soapCall(
            'CostCenter_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * FunctionUpdateCurrent
     * Update the function starting from current period.
     *
     * @param \Controle\Controlefunction\UpdateCurrent $parameters
     * @return \Controle\Controlefunction\UpdateCurrentResponse
     */
    public function FunctionUpdateCurrent(\Controle\Controlefunction\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Function_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * FunctionGetCurrent
     * Get the currently active function.
     *
     * @param \Controle\Controlefunction\GetCurrent $parameters
     * @return \Controle\Controlefunction\GetCurrentResponse
     */
    public function FunctionGetCurrent(\Controle\Controlefunction\GetCurrent $parameters) {
        return $this->__soapCall(
            'Function_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * FunctionGetAllAllEmployeesByCompany
     * Get all Function history of all employees.
     *
     * @param \Controle\Controlefunction\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Controlefunction\GetAll\AllEmployeesByCompanyResponse
     */
    public function FunctionGetAllAllEmployeesByCompany(\Controle\Controlefunction\GetAll\AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Function_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DepartmentUpdateCurrent
     * Update the department starting the current period.
     *
     * @param \Controle\Department\UpdateCurrent $parameters
     * @return \Controle\Department\UpdateCurrentResponse
     */
    public function DepartmentUpdateCurrent(\Controle\Department\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Department_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DepartmentGetCurrent
     * Get the currently active department.
     *
     * @param \Controle\Department\GetCurrent $parameters
     * @return \Controle\Department\GetCurrentResponse
     */
    public function DepartmentGetCurrent(\Controle\Department\GetCurrent $parameters) {
        return $this->__soapCall(
            'Department_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * DepartmentGetAllAllEmployeesByCompany
     * Get all department history of all employees.
     *
     * @param \Controle\Department\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Department\GetAll\AllEmployeesByCompanyResponse
     */
    public function DepartmentGetAllAllEmployeesByCompany(\Controle\Department\GetAll\AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Department_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LeaseCarInsert
     * Insert a new leaseauto contract, this contract will start from given date within the
     * object.
     *
     * @param \Controle\LeaseCar\Insert $parameters
     * @return \Controle\LeaseCar\InsertResponse
     */
    public function LeaseCarInsert(\Controle\LeaseCar\Insert $parameters) {
        return $this->__soapCall(
            'LeaseCar_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LeaseCarGetCurrent
     * Get currently active leaseauto contract.
     *
     * @param \Controle\LeaseCar\GetCurrent $parameters
     * @return \Controle\LeaseCar\GetCurrentResponse
     */
    public function LeaseCarGetCurrent(\Controle\LeaseCar\GetCurrent $parameters) {
        return $this->__soapCall(
            'LeaseCar_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LeaseCarGet
     * Get the active leaseauto contract for given period.
     *
     * @param \Controle\LeaseCar\Get $parameters
     * @return \Controle\LeaseCar\GetResponse
     */
    public function LeaseCarGet(\Controle\LeaseCar\Get $parameters) {
        return $this->__soapCall(
            'LeaseCar_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LeaseCarGetList
     * Get leaseauto contract list, untill given period.
     *
     * @param \Controle\LeaseCar\GetList $parameters
     * @return \Controle\LeaseCar\GetListResponse
     */
    public function LeaseCarGetList(\Controle\LeaseCar\GetList $parameters) {
        return $this->__soapCall(
            'LeaseCar_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LeaseCarDelete
     * Delete a leaseauto contract. This action can not be undone.
     *
     * @param \Controle\LeaseCar\Delete $parameters
     * @return \Controle\LeaseCar\DeleteResponse
     */
    public function LeaseCarDelete(\Controle\LeaseCar\Delete $parameters) {
        return $this->__soapCall(
            'LeaseCar_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }

    /**
     * LeaseCarStop
     * Stop the currently active leaseauto contract.
     *
     * @param \Controle\LeaseCar\Stop $parameters
     * @return \Controle\LeaseCar\StopResponse
     */
    public function LeaseCarStop(\Controle\LeaseCar\Stop $parameters) {
        return $this->__soapCall(
            'LeaseCar_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }
}
