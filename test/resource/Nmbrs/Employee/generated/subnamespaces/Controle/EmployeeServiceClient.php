<?php

namespace Controle\sub1\sub2;

/**
 * EmployeeServiceClient
 */
class EmployeeServiceClient extends \SoapClient {

	const WSDL_FILE = "EmployeeService.wsdl";
	private $classmap = array(
        'HourComponent' =>
            '\Controle\sub1\sub2\HourComponent',
        'EmployeeHourComponent' =>
            '\Controle\sub1\sub2\EmployeeHourComponent',
        'WageComponent' =>
            '\Controle\sub1\sub2\WageComponent',
        'EmployeeWageComponent' =>
            '\Controle\sub1\sub2\EmployeeWageComponent',
        'PersonalInfo' =>
            '\Controle\sub1\sub2\PersonalInfo',
        'Employee' =>
            '\Controle\sub1\sub2\Employee',
        'Gender' =>
            '\Controle\sub1\sub2\Gender',
        'PersonalInfoItem' =>
            '\Controle\sub1\sub2\PersonalInfoItem',
        'Active' =>
            '\Controle\sub1\sub2\Active',
        'EmployeeAddress' =>
            '\Controle\sub1\sub2\EmployeeAddress',
        'AddressType' =>
            '\Controle\sub1\sub2\AddressType',
        'EmployeeAddressItem' =>
            '\Controle\sub1\sub2\EmployeeAddressItem',
        'BankAccount' =>
            '\Controle\sub1\sub2\BankAccount',
        'BankAccountType' =>
            '\Controle\sub1\sub2\BankAccountType',
        'EmployeeContractItem' =>
            '\Controle\sub1\sub2\EmployeeContractItem',
        'Absence' =>
            '\Controle\sub1\sub2\Absence',
        'Leave' =>
            '\Controle\sub1\sub2\Leave',
        'LeaveUsageType' =>
            '\Controle\sub1\sub2\LeaveUsageType',
        'LeaveType' =>
            '\Controle\sub1\sub2\LeaveType',
        'LeaveStatus' =>
            '\Controle\sub1\sub2\LeaveStatus',
        'Levensloop' =>
            '\Controle\sub1\sub2\Levensloop',
        'Spaarloon' =>
            '\Controle\sub1\sub2\Spaarloon',
        'ServiceInterval' =>
            '\Controle\sub1\sub2\ServiceInterval',
        'Schedule' =>
            '\Controle\sub1\sub2\Schedule',
        'EmployeeScheduleItem' =>
            '\Controle\sub1\sub2\EmployeeScheduleItem',
        'SalaryInput' =>
            '\Controle\sub1\sub2\SalaryInput',
        'SalaryType' =>
            '\Controle\sub1\sub2\SalaryType',
        'SalaryTableEmployeeInput' =>
            '\Controle\sub1\sub2\SalaryTableEmployeeInput',
        'SalaryTableScaleInput' =>
            '\Controle\sub1\sub2\SalaryTableScaleInput',
        'SalaryTableStepInput' =>
            '\Controle\sub1\sub2\SalaryTableStepInput',
        'Salary' =>
            '\Controle\sub1\sub2\Salary',
        'SalaryTableEmployee' =>
            '\Controle\sub1\sub2\SalaryTableEmployee',
        'SalaryTable' =>
            '\Controle\sub1\sub2\SalaryTable',
        'SalaryTableScale' =>
            '\Controle\sub1\sub2\SalaryTableScale',
        'SalaryTableStep' =>
            '\Controle\sub1\sub2\SalaryTableStep',
        'EmployeeSalaryItem' =>
            '\Controle\sub1\sub2\EmployeeSalaryItem',
        'WageTaxSettings' =>
            '\Controle\sub1\sub2\WageTaxSettings',
        'EmployeeCostCenter' =>
            '\Controle\sub1\sub2\EmployeeCostCenter',
        'CostCenter' =>
            '\Controle\sub1\sub2\CostCenter',
        'Kostensoort' =>
            '\Controle\sub1\sub2\Kostensoort',
        'EmployeeFunctionItem' =>
            '\Controle\sub1\sub2\EmployeeFunctionItem',
        'Department' =>
            '\Controle\sub1\sub2\Department',
        'EmployeeDepartmentItem' =>
            '\Controle\sub1\sub2\EmployeeDepartmentItem',
        'EmployeeLeaseCar' =>
            '\Controle\sub1\sub2\EmployeeLeaseCar',
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
	 * @param \Controle\sub1\sub2\DaysVar\Get $parameters
	 * @return \Controle\sub1\sub2\DaysVar\GetResponse
	 */
	public function DaysVarGet(\Controle\sub1\sub2\DaysVar\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\DaysVar\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\DaysVar\GetCurrentResponse
	 */
	public function DaysVarGetCurrent(\Controle\sub1\sub2\DaysVar\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\DaysVar\SetCurrent $parameters
	 * @return \Controle\sub1\sub2\DaysVar\SetCurrentResponse
	 */
	public function DaysVarSetCurrent(\Controle\sub1\sub2\DaysVar\SetCurrent $parameters) {
        return $this->__soapCall(
            'DaysVar_SetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysVarSet
	 * Set days worked for the given period. If the period is before the company's current period,
	 * unprotected mode flag is required, else a TWK exception in thrown.
	 *
	 * @param \Controle\sub1\sub2\DaysVar\Set $parameters
	 * @return \Controle\sub1\sub2\DaysVar\SetResponse
	 */
	public function DaysVarSet(\Controle\sub1\sub2\DaysVar\Set $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentVar\Get $parameters
	 * @return \Controle\sub1\sub2\HourComponentVar\GetResponse
	 */
	public function HourComponentVarGet(\Controle\sub1\sub2\HourComponentVar\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentVar\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\HourComponentVar\GetCurrentResponse
	 */
	public function HourComponentVarGetCurrent(\Controle\sub1\sub2\HourComponentVar\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentVar\ClearCurrent $parameters
	 * @return \Controle\sub1\sub2\HourComponentVar\ClearCurrentResponse
	 */
	public function HourComponentVarClearCurrent(\Controle\sub1\sub2\HourComponentVar\ClearCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentVar\Clear $parameters
	 * @return \Controle\sub1\sub2\HourComponentVar\ClearResponse
	 */
	public function HourComponentVarClear(\Controle\sub1\sub2\HourComponentVar\Clear $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentVar\InsertCurrent $parameters
	 * @return \Controle\sub1\sub2\HourComponentVar\InsertCurrentResponse
	 */
	public function HourComponentVarInsertCurrent(\Controle\sub1\sub2\HourComponentVar\InsertCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentVar_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarInsert
	 * Insert an extra hourcomponent to given period. If the period is before the company's current
	 * period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\HourComponentVar\Insert $parameters
	 * @return \Controle\sub1\sub2\HourComponentVar\InsertResponse
	 */
	public function HourComponentVarInsert(\Controle\sub1\sub2\HourComponentVar\Insert $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarInsertBatch
	 * Insert a batch of extra hourcomponents to given period. If the period is before the company's
	 * current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\HourComponentVar\Insert\Batch $parameters
	 * @return \Controle\sub1\sub2\HourComponentVar\Insert\BatchResponse
	 */
	public function HourComponentVarInsertBatch(\Controle\sub1\sub2\HourComponentVar\Insert\Batch $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentVar\Get $parameters
	 * @return \Controle\sub1\sub2\WageComponentVar\GetResponse
	 */
	public function WageComponentVarGet(\Controle\sub1\sub2\WageComponentVar\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentVar\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\WageComponentVar\GetCurrentResponse
	 */
	public function WageComponentVarGetCurrent(\Controle\sub1\sub2\WageComponentVar\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentVar\ClearCurrent $parameters
	 * @return \Controle\sub1\sub2\WageComponentVar\ClearCurrentResponse
	 */
	public function WageComponentVarClearCurrent(\Controle\sub1\sub2\WageComponentVar\ClearCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentVar\Clear $parameters
	 * @return \Controle\sub1\sub2\WageComponentVar\ClearResponse
	 */
	public function WageComponentVarClear(\Controle\sub1\sub2\WageComponentVar\Clear $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentVar\InsertCurrent $parameters
	 * @return \Controle\sub1\sub2\WageComponentVar\InsertCurrentResponse
	 */
	public function WageComponentVarInsertCurrent(\Controle\sub1\sub2\WageComponentVar\InsertCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentVar_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentVarInsert
	 * Insert a looncomponent to given period. If the period is before the company's current period,
	 * unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\WageComponentVar\Insert $parameters
	 * @return \Controle\sub1\sub2\WageComponentVar\InsertResponse
	 */
	public function WageComponentVarInsert(\Controle\sub1\sub2\WageComponentVar\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentVar\Insert\Batch $parameters
	 * @return \Controle\sub1\sub2\WageComponentVar\Insert\BatchResponse
	 */
	public function WageComponentVarInsertBatch(\Controle\sub1\sub2\WageComponentVar\Insert\Batch $parameters) {
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
	 * @param \Controle\sub1\sub2\PersonalInfo\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\PersonalInfo\GetCurrentResponse
	 */
	public function PersonalInfoGetCurrent(\Controle\sub1\sub2\PersonalInfo\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\PersonalInfo\Get $parameters
	 * @return \Controle\sub1\sub2\PersonalInfo\GetResponse
	 */
	public function PersonalInfoGet(\Controle\sub1\sub2\PersonalInfo\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\PersonalInfo\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\PersonalInfo\UpdateCurrentResponse
	 */
	public function PersonalInfoUpdateCurrent(\Controle\sub1\sub2\PersonalInfo\UpdateCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\PersonalInfo\Update $parameters
	 * @return \Controle\sub1\sub2\PersonalInfo\UpdateResponse
	 */
	public function PersonalInfoUpdate(\Controle\sub1\sub2\PersonalInfo\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\PersonalInfo\GetAll\AllEmployeesByCompany $parameters
	 * @return \Controle\sub1\sub2\PersonalInfo\GetAll\AllEmployeesByCompanyResponse
	 */
	public function PersonalInfoGetAllAllEmployeesByCompany(\Controle\sub1\sub2\PersonalInfo\GetAll\AllEmployeesByCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlelist\GetByCompany $parameters
	 * @return \Controle\sub1\sub2\Controlelist\GetByCompanyResponse
	 */
	public function ListGetByCompany(\Controle\sub1\sub2\Controlelist\GetByCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlelist\GetByDebtor $parameters
	 * @return \Controle\sub1\sub2\Controlelist\GetByDebtorResponse
	 */
	public function ListGetByDebtor(\Controle\sub1\sub2\Controlelist\GetByDebtor $parameters) {
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
	 * @param \Controle\sub1\sub2\Employee\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\Employee\GetCurrentResponse
	 */
	public function EmployeeGetCurrent(\Controle\sub1\sub2\Employee\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Employee\Insert $parameters
	 * @return \Controle\sub1\sub2\Employee\InsertResponse
	 */
	public function EmployeeInsert(\Controle\sub1\sub2\Employee\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\EmployeeDocument\UploadDocument $parameters
	 * @return \Controle\sub1\sub2\EmployeeDocument\UploadDocumentResponse
	 */
	public function EmployeeDocumentUploadDocument(\Controle\sub1\sub2\EmployeeDocument\UploadDocument $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentFixed\Get $parameters
	 * @return \Controle\sub1\sub2\HourComponentFixed\GetResponse
	 */
	public function HourComponentFixedGet(\Controle\sub1\sub2\HourComponentFixed\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentFixed\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\HourComponentFixed\GetCurrentResponse
	 */
	public function HourComponentFixedGetCurrent(\Controle\sub1\sub2\HourComponentFixed\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentFixed\InsertCurrent $parameters
	 * @return \Controle\sub1\sub2\HourComponentFixed\InsertCurrentResponse
	 */
	public function HourComponentFixedInsertCurrent(\Controle\sub1\sub2\HourComponentFixed\InsertCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentFixedInsert
	 * Insert an extra hourcomponent to given period. If the period is before the company's current
	 * period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\HourComponentFixed\Insert $parameters
	 * @return \Controle\sub1\sub2\HourComponentFixed\InsertResponse
	 */
	public function HourComponentFixedInsert(\Controle\sub1\sub2\HourComponentFixed\Insert $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentFixedInsertBatch
	 * Insert a batch of extra hourcomponents to given period. If the period is before the company's
	 * current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\HourComponentFixed\Insert\Batch $parameters
	 * @return \Controle\sub1\sub2\HourComponentFixed\Insert\BatchResponse
	 */
	public function HourComponentFixedInsertBatch(\Controle\sub1\sub2\HourComponentFixed\Insert\Batch $parameters) {
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
	 * @param \Controle\sub1\sub2\HourComponentFixed\Stop $parameters
	 * @return \Controle\sub1\sub2\HourComponentFixed\StopResponse
	 */
	public function HourComponentFixedStop(\Controle\sub1\sub2\HourComponentFixed\Stop $parameters) {
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
	 * @param \Controle\sub1\sub2\Address\InsertCurrent $parameters
	 * @return \Controle\sub1\sub2\Address\InsertCurrentResponse
	 */
	public function AddressInsertCurrent(\Controle\sub1\sub2\Address\InsertCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Address\GetListCurrent $parameters
	 * @return \Controle\sub1\sub2\Address\GetListCurrentResponse
	 */
	public function AddressGetListCurrent(\Controle\sub1\sub2\Address\GetListCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Address\GetList $parameters
	 * @return \Controle\sub1\sub2\Address\GetListResponse
	 */
	public function AddressGetList(\Controle\sub1\sub2\Address\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Address\GetAll\AllEmployeesByCompany $parameters
	 * @return \Controle\sub1\sub2\Address\GetAll\AllEmployeesByCompanyResponse
	 */
	public function AddressGetAllAllEmployeesByCompany(\Controle\sub1\sub2\Address\GetAll\AllEmployeesByCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\BankAccount\InsertCurrent $parameters
	 * @return \Controle\sub1\sub2\BankAccount\InsertCurrentResponse
	 */
	public function BankAccountInsertCurrent(\Controle\sub1\sub2\BankAccount\InsertCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\BankAccount\GetListCurrent $parameters
	 * @return \Controle\sub1\sub2\BankAccount\GetListCurrentResponse
	 */
	public function BankAccountGetListCurrent(\Controle\sub1\sub2\BankAccount\GetListCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\BankAccount\GetList $parameters
	 * @return \Controle\sub1\sub2\BankAccount\GetListResponse
	 */
	public function BankAccountGetList(\Controle\sub1\sub2\BankAccount\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Contract\Delete $parameters
	 * @return \Controle\sub1\sub2\Contract\DeleteResponse
	 */
	public function ContractDelete(\Controle\sub1\sub2\Contract\Delete $parameters) {
        return $this->__soapCall(
            'Contract_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ContractInsertv2
	 * Insert Contract. If the startdate is before the company's current period, unprotected mode
	 * flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\Contract\Insert\v2 $parameters
	 * @return \Controle\sub1\sub2\Contract\Insert\v2Response
	 */
	public function ContractInsertv2(\Controle\sub1\sub2\Contract\Insert\v2 $parameters) {
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
	 * @param \Controle\sub1\sub2\Contract\InsertCurrentPeriod\v2 $parameters
	 * @return \Controle\sub1\sub2\Contract\InsertCurrentPeriod\v2Response
	 */
	public function ContractInsertCurrentPeriodv2(\Controle\sub1\sub2\Contract\InsertCurrentPeriod\v2 $parameters) {
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
	 * @param \Controle\sub1\sub2\Contract\GetAll\v2 $parameters
	 * @return \Controle\sub1\sub2\Contract\GetAll\v2Response
	 */
	public function ContractGetAllv2(\Controle\sub1\sub2\Contract\GetAll\v2 $parameters) {
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
	 * @param \Controle\sub1\sub2\Contract\GetAll\AllEmployeesByCompany $parameters
	 * @return \Controle\sub1\sub2\Contract\GetAll\AllEmployeesByCompanyResponse
	 */
	public function ContractGetAllAllEmployeesByCompany(\Controle\sub1\sub2\Contract\GetAll\AllEmployeesByCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Absence\Insert $parameters
	 * @return \Controle\sub1\sub2\Absence\InsertResponse
	 */
	public function AbsenceInsert(\Controle\sub1\sub2\Absence\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Absence\GetList $parameters
	 * @return \Controle\sub1\sub2\Absence\GetListResponse
	 */
	public function AbsenceGetList(\Controle\sub1\sub2\Absence\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Leave\Insert $parameters
	 * @return \Controle\sub1\sub2\Leave\InsertResponse
	 */
	public function LeaveInsert(\Controle\sub1\sub2\Leave\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Leave\GetList $parameters
	 * @return \Controle\sub1\sub2\Leave\GetListResponse
	 */
	public function LeaveGetList(\Controle\sub1\sub2\Leave\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Levensloop\Insert $parameters
	 * @return \Controle\sub1\sub2\Levensloop\InsertResponse
	 */
	public function LevensloopInsert(\Controle\sub1\sub2\Levensloop\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Levensloop\Stop $parameters
	 * @return \Controle\sub1\sub2\Levensloop\StopResponse
	 */
	public function LevensloopStop(\Controle\sub1\sub2\Levensloop\Stop $parameters) {
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
	 * @param \Controle\sub1\sub2\Levensloop\Delete $parameters
	 * @return \Controle\sub1\sub2\Levensloop\DeleteResponse
	 */
	public function LevensloopDelete(\Controle\sub1\sub2\Levensloop\Delete $parameters) {
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
	 * @param \Controle\sub1\sub2\Levensloop\Get $parameters
	 * @return \Controle\sub1\sub2\Levensloop\GetResponse
	 */
	public function LevensloopGet(\Controle\sub1\sub2\Levensloop\Get $parameters) {
        return $this->__soapCall(
            'Levensloop_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SpaarloonInsert
	 * Start spaarloon for given date and amount. If the startdate is before the company's current
	 * period, unprotected mode flag is required, else a TWK exception in thrown.
	 *
	 * @param \Controle\sub1\sub2\Spaarloon\Insert $parameters
	 * @return \Controle\sub1\sub2\Spaarloon\InsertResponse
	 */
	public function SpaarloonInsert(\Controle\sub1\sub2\Spaarloon\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Spaarloon\Stop $parameters
	 * @return \Controle\sub1\sub2\Spaarloon\StopResponse
	 */
	public function SpaarloonStop(\Controle\sub1\sub2\Spaarloon\Stop $parameters) {
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
	 * @param \Controle\sub1\sub2\Spaarloon\Get $parameters
	 * @return \Controle\sub1\sub2\Spaarloon\GetResponse
	 */
	public function SpaarloonGet(\Controle\sub1\sub2\Spaarloon\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\Spaarloon\Delete $parameters
	 * @return \Controle\sub1\sub2\Spaarloon\DeleteResponse
	 */
	public function SpaarloonDelete(\Controle\sub1\sub2\Spaarloon\Delete $parameters) {
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
	 * @param \Controle\sub1\sub2\Spaarloon\GetList $parameters
	 * @return \Controle\sub1\sub2\Spaarloon\GetListResponse
	 */
	public function SpaarloonGetList(\Controle\sub1\sub2\Spaarloon\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Service\GetList $parameters
	 * @return \Controle\sub1\sub2\Service\GetListResponse
	 */
	public function ServiceGetList(\Controle\sub1\sub2\Service\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Service\StopCurrent $parameters
	 * @return \Controle\sub1\sub2\Service\StopCurrentResponse
	 */
	public function ServiceStopCurrent(\Controle\sub1\sub2\Service\StopCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Service\Insert $parameters
	 * @return \Controle\sub1\sub2\Service\InsertResponse
	 */
	public function ServiceInsert(\Controle\sub1\sub2\Service\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Service\Insert2 $parameters
	 * @return \Controle\sub1\sub2\Service\Insert2Response
	 */
	public function ServiceInsert2(\Controle\sub1\sub2\Service\Insert2 $parameters) {
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
	 * @param \Controle\sub1\sub2\DaysFixed\Get $parameters
	 * @return \Controle\sub1\sub2\DaysFixed\GetResponse
	 */
	public function DaysFixedGet(\Controle\sub1\sub2\DaysFixed\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\DaysFixed\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\DaysFixed\GetCurrentResponse
	 */
	public function DaysFixedGetCurrent(\Controle\sub1\sub2\DaysFixed\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\DaysFixed\SetCurrent $parameters
	 * @return \Controle\sub1\sub2\DaysFixed\SetCurrentResponse
	 */
	public function DaysFixedSetCurrent(\Controle\sub1\sub2\DaysFixed\SetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\DaysFixed\Set $parameters
	 * @return \Controle\sub1\sub2\DaysFixed\SetResponse
	 */
	public function DaysFixedSet(\Controle\sub1\sub2\DaysFixed\Set $parameters) {
        return $this->__soapCall(
            'DaysFixed_Set',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysFixedStop
	 * Stop vaste days, the given period is the last for these days. If the period is before the
	 * company's current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\DaysFixed\Stop $parameters
	 * @return \Controle\sub1\sub2\DaysFixed\StopResponse
	 */
	public function DaysFixedStop(\Controle\sub1\sub2\DaysFixed\Stop $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentFixed\Get $parameters
	 * @return \Controle\sub1\sub2\WageComponentFixed\GetResponse
	 */
	public function WageComponentFixedGet(\Controle\sub1\sub2\WageComponentFixed\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentFixed\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\WageComponentFixed\GetCurrentResponse
	 */
	public function WageComponentFixedGetCurrent(\Controle\sub1\sub2\WageComponentFixed\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentFixed\Insert\Batch $parameters
	 * @return \Controle\sub1\sub2\WageComponentFixed\Insert\BatchResponse
	 */
	public function WageComponentFixedInsertBatch(\Controle\sub1\sub2\WageComponentFixed\Insert\Batch $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentFixedInsert
	 * Insert a looncomponent to given period. If the period is before the company's current period,
	 * unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\WageComponentFixed\Insert $parameters
	 * @return \Controle\sub1\sub2\WageComponentFixed\InsertResponse
	 */
	public function WageComponentFixedInsert(\Controle\sub1\sub2\WageComponentFixed\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\WageComponentFixed\InsertCurrent $parameters
	 * @return \Controle\sub1\sub2\WageComponentFixed\InsertCurrentResponse
	 */
	public function WageComponentFixedInsertCurrent(\Controle\sub1\sub2\WageComponentFixed\InsertCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentFixedStop
	 * Stop a looncomponent ending after given period. If the period is before the company's current
	 * period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param \Controle\sub1\sub2\WageComponentFixed\Stop $parameters
	 * @return \Controle\sub1\sub2\WageComponentFixed\StopResponse
	 */
	public function WageComponentFixedStop(\Controle\sub1\sub2\WageComponentFixed\Stop $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ScheduleUpdateCurrent
	 * Update schedule starting from the current period. The company default rooster number can
	 * be specified.
	 *
	 * @param \Controle\sub1\sub2\Schedule\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\Schedule\UpdateCurrentResponse
	 */
	public function ScheduleUpdateCurrent(\Controle\sub1\sub2\Schedule\UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Schedule_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ScheduleUpdate
	 * Update schedule starting from the given date. The company default rooster number can be
	 * specified.
	 *
	 * @param \Controle\sub1\sub2\Schedule\Update $parameters
	 * @return \Controle\sub1\sub2\Schedule\UpdateResponse
	 */
	public function ScheduleUpdate(\Controle\sub1\sub2\Schedule\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\Schedule\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\Schedule\GetCurrentResponse
	 */
	public function ScheduleGetCurrent(\Controle\sub1\sub2\Schedule\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Schedule\Get $parameters
	 * @return \Controle\sub1\sub2\Schedule\GetResponse
	 */
	public function ScheduleGet(\Controle\sub1\sub2\Schedule\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\Schedule\GetList $parameters
	 * @return \Controle\sub1\sub2\Schedule\GetListResponse
	 */
	public function ScheduleGetList(\Controle\sub1\sub2\Schedule\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Schedule\GetAll\AllEmployeesByCompany $parameters
	 * @return \Controle\sub1\sub2\Schedule\GetAll\AllEmployeesByCompanyResponse
	 */
	public function ScheduleGetAllAllEmployeesByCompany(\Controle\sub1\sub2\Schedule\GetAll\AllEmployeesByCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Salary\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\Salary\UpdateCurrentResponse
	 */
	public function SalaryUpdateCurrent(\Controle\sub1\sub2\Salary\UpdateCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Salary\Update $parameters
	 * @return \Controle\sub1\sub2\Salary\UpdateResponse
	 */
	public function SalaryUpdate(\Controle\sub1\sub2\Salary\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\Salary\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\Salary\GetCurrentResponse
	 */
	public function SalaryGetCurrent(\Controle\sub1\sub2\Salary\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Salary\Get $parameters
	 * @return \Controle\sub1\sub2\Salary\GetResponse
	 */
	public function SalaryGet(\Controle\sub1\sub2\Salary\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\Salary\GetList $parameters
	 * @return \Controle\sub1\sub2\Salary\GetListResponse
	 */
	public function SalaryGetList(\Controle\sub1\sub2\Salary\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Salary\GetAll\AllEmployeesByCompany $parameters
	 * @return \Controle\sub1\sub2\Salary\GetAll\AllEmployeesByCompanyResponse
	 */
	public function SalaryGetAllAllEmployeesByCompany(\Controle\sub1\sub2\Salary\GetAll\AllEmployeesByCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\SVW\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\SVW\UpdateCurrentResponse
	 */
	public function SVWUpdateCurrent(\Controle\sub1\sub2\SVW\UpdateCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\SVW\Update $parameters
	 * @return \Controle\sub1\sub2\SVW\UpdateResponse
	 */
	public function SVWUpdate(\Controle\sub1\sub2\SVW\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\SVW\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\SVW\GetCurrentResponse
	 */
	public function SVWGetCurrent(\Controle\sub1\sub2\SVW\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\SVW\Get $parameters
	 * @return \Controle\sub1\sub2\SVW\GetResponse
	 */
	public function SVWGet(\Controle\sub1\sub2\SVW\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\SVW\GetList $parameters
	 * @return \Controle\sub1\sub2\SVW\GetListResponse
	 */
	public function SVWGetList(\Controle\sub1\sub2\SVW\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\WageTax\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\WageTax\UpdateCurrentResponse
	 */
	public function WageTaxUpdateCurrent(\Controle\sub1\sub2\WageTax\UpdateCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\WageTax\Update $parameters
	 * @return \Controle\sub1\sub2\WageTax\UpdateResponse
	 */
	public function WageTaxUpdate(\Controle\sub1\sub2\WageTax\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\WageTax\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\WageTax\GetCurrentResponse
	 */
	public function WageTaxGetCurrent(\Controle\sub1\sub2\WageTax\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\WageTax\GetList $parameters
	 * @return \Controle\sub1\sub2\WageTax\GetListResponse
	 */
	public function WageTaxGetList(\Controle\sub1\sub2\WageTax\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\WageTax\Get $parameters
	 * @return \Controle\sub1\sub2\WageTax\GetResponse
	 */
	public function WageTaxGet(\Controle\sub1\sub2\WageTax\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\CostCenter\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\CostCenter\UpdateCurrentResponse
	 */
	public function CostCenterUpdateCurrent(\Controle\sub1\sub2\CostCenter\UpdateCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\CostCenter\Update $parameters
	 * @return \Controle\sub1\sub2\CostCenter\UpdateResponse
	 */
	public function CostCenterUpdate(\Controle\sub1\sub2\CostCenter\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\CostCenter\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\CostCenter\GetCurrentResponse
	 */
	public function CostCenterGetCurrent(\Controle\sub1\sub2\CostCenter\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\CostCenter\Get $parameters
	 * @return \Controle\sub1\sub2\CostCenter\GetResponse
	 */
	public function CostCenterGet(\Controle\sub1\sub2\CostCenter\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlefunction\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\Controlefunction\UpdateCurrentResponse
	 */
	public function FunctionUpdateCurrent(\Controle\sub1\sub2\Controlefunction\UpdateCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlefunction\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\Controlefunction\GetCurrentResponse
	 */
	public function FunctionGetCurrent(\Controle\sub1\sub2\Controlefunction\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlefunction\GetAll\AllEmployeesByCompany $parameters
	 * @return \Controle\sub1\sub2\Controlefunction\GetAll\AllEmployeesByCompanyResponse
	 */
	public function FunctionGetAllAllEmployeesByCompany(\Controle\sub1\sub2\Controlefunction\GetAll\AllEmployeesByCompany $parameters) {
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
	 * @param \Controle\sub1\sub2\Department\UpdateCurrent $parameters
	 * @return \Controle\sub1\sub2\Department\UpdateCurrentResponse
	 */
	public function DepartmentUpdateCurrent(\Controle\sub1\sub2\Department\UpdateCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Department\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\Department\GetCurrentResponse
	 */
	public function DepartmentGetCurrent(\Controle\sub1\sub2\Department\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\Department\GetAll\AllEmployeesByCompany $parameters
	 * @return \Controle\sub1\sub2\Department\GetAll\AllEmployeesByCompanyResponse
	 */
	public function DepartmentGetAllAllEmployeesByCompany(\Controle\sub1\sub2\Department\GetAll\AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Department_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaseCarInsert
	 * Insert a new leaseauto contract, this contract will start from given date within the object.
	 *
	 * @param \Controle\sub1\sub2\LeaseCar\Insert $parameters
	 * @return \Controle\sub1\sub2\LeaseCar\InsertResponse
	 */
	public function LeaseCarInsert(\Controle\sub1\sub2\LeaseCar\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\LeaseCar\GetCurrent $parameters
	 * @return \Controle\sub1\sub2\LeaseCar\GetCurrentResponse
	 */
	public function LeaseCarGetCurrent(\Controle\sub1\sub2\LeaseCar\GetCurrent $parameters) {
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
	 * @param \Controle\sub1\sub2\LeaseCar\Get $parameters
	 * @return \Controle\sub1\sub2\LeaseCar\GetResponse
	 */
	public function LeaseCarGet(\Controle\sub1\sub2\LeaseCar\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\LeaseCar\GetList $parameters
	 * @return \Controle\sub1\sub2\LeaseCar\GetListResponse
	 */
	public function LeaseCarGetList(\Controle\sub1\sub2\LeaseCar\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\LeaseCar\Delete $parameters
	 * @return \Controle\sub1\sub2\LeaseCar\DeleteResponse
	 */
	public function LeaseCarDelete(\Controle\sub1\sub2\LeaseCar\Delete $parameters) {
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
	 * @param \Controle\sub1\sub2\LeaseCar\Stop $parameters
	 * @return \Controle\sub1\sub2\LeaseCar\StopResponse
	 */
	public function LeaseCarStop(\Controle\sub1\sub2\LeaseCar\Stop $parameters) {
        return $this->__soapCall(
            'LeaseCar_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}
}
