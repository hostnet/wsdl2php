<?php

namespace Controle\Hostnet\Namesp;

/**
 * EmployeeServiceClient
 */
class EmployeeServiceClient extends \SoapClient
{
    const WSDL_FILE = "EmployeeService.wsdl";

    private $classmap = array(
        'DaysVar_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\Get',
        'DaysVar_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\GetResponse',
        'AuthHeader\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AuthHeader',
        'DaysVar_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\GetCurrent',
        'DaysVar_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\GetCurrentResponse',
        'DaysVar_SetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\SetCurrent',
        'DaysVar_SetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\SetCurrentResponse',
        'DaysVar_Set\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\Set',
        'DaysVar_SetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\SetResponse',
        'HourComponentVar_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Get',
        'HourComponentVar_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\GetResponse',
        'HourComponent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponent',
        'HourComponentVar_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\GetCurrent',
        'HourComponentVar_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\GetCurrentResponse',
        'HourComponentVar_ClearCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\ClearCurrent',
        'HourComponentVar_ClearCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\ClearCurrentResponse',
        'HourComponentVar_Clear\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Clear',
        'HourComponentVar_ClearResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\ClearResponse',
        'HourComponentVar_InsertCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\InsertCurrent',
        'HourComponentVar_InsertCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\InsertCurrentResponse',
        'HourComponentVar_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Insert',
        'HourComponentVar_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\InsertResponse',
        'HourComponentVar_Insert_Batch\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Insert\Batch',
        'EmployeeHourComponent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeHourComponent',
        'HourComponentVar_Insert_BatchResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Insert\BatchResponse',
        'WageComponentVar_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Get',
        'WageComponentVar_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\GetResponse',
        'WageComponent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponent',
        'WageComponentVar_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\GetCurrent',
        'WageComponentVar_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\GetCurrentResponse',
        'WageComponentVar_ClearCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\ClearCurrent',
        'WageComponentVar_ClearCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\ClearCurrentResponse',
        'WageComponentVar_Clear\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Clear',
        'WageComponentVar_ClearResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\ClearResponse',
        'WageComponentVar_InsertCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\InsertCurrent',
        'WageComponentVar_InsertCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\InsertCurrentResponse',
        'WageComponentVar_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Insert',
        'WageComponentVar_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\InsertResponse',
        'WageComponentVar_Insert_Batch\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Insert\Batch',
        'EmployeeWageComponent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeWageComponent',
        'WageComponentVar_Insert_BatchResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Insert\BatchResponse',
        'PersonalInfo_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetCurrent',
        'PersonalInfo_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetCurrentResponse',
        'PersonalInfo\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo',
        'Employee\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Employee',
        'Gender\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Gender',
        'PersonalInfo_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\Get',
        'PersonalInfo_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetResponse',
        'PersonalInfo_UpdateCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\UpdateCurrent',
        'PersonalInfo_UpdateCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\UpdateCurrentResponse',
        'PersonalInfo_Update\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\Update',
        'PersonalInfo_UpdateResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\UpdateResponse',
        'PersonalInfo_GetAll_AllEmployeesByCompany\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetAll\AllEmployeesByCompany',
        'PersonalInfo_GetAll_AllEmployeesByCompanyResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetAll\AllEmployeesByCompanyResponse',
        'PersonalInfoItem\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfoItem',
        'PersonalInfo_V2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\V2',
        'List_GetByCompany\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByCompany',
        'Active\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Active',
        'List_GetByCompanyResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByCompanyResponse',
        'List_GetByDebtor\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByDebtor',
        'List_GetByDebtorResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByDebtorResponse',
        'Employee_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Employee\GetCurrent',
        'Employee_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Employee\GetCurrentResponse',
        'Employee_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Employee\Insert',
        'Employee_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Employee\InsertResponse',
        'EmployeeDocument_UploadDocument\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDocument\UploadDocument',
        'EmployeeDocument_UploadDocumentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDocument\UploadDocumentResponse',
        'HourComponentFixed_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Get',
        'HourComponentFixed_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\GetResponse',
        'HourComponentFixed_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\GetCurrent',
        'HourComponentFixed_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\GetCurrentResponse',
        'HourComponentFixed_InsertCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\InsertCurrent',
        'HourComponentFixed_InsertCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\InsertCurrentResponse',
        'HourComponentFixed_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert',
        'HourComponentFixed_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\InsertResponse',
        'HourComponentFixed_Insert_Batch\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert\Batch',
        'HourComponentFixed_Insert_BatchResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert\BatchResponse',
        'HourComponentFixed_Stop\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Stop',
        'HourComponentFixed_StopResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\StopResponse',
        'Address_InsertCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\InsertCurrent',
        'EmployeeAddress\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddress',
        'AddressType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddressType',
        'Address_InsertCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\InsertCurrentResponse',
        'Address_GetListCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\GetListCurrent',
        'Address_GetListCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\GetListCurrentResponse',
        'Address_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\GetList',
        'Address_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\GetListResponse',
        'Address_GetAll_AllEmployeesByCompany\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\GetAll\AllEmployeesByCompany',
        'Address_GetAll_AllEmployeesByCompanyResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\GetAll\AllEmployeesByCompanyResponse',
        'EmployeeAddressItem\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddressItem',
        'EmployeeAddress_V2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeAddress\V2',
        'BankAccount_InsertCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\InsertCurrent',
        'BankAccount\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount',
        'BankAccountType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccountType',
        'BankAccount_InsertCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\InsertCurrentResponse',
        'BankAccount_GetListCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetListCurrent',
        'BankAccount_GetListCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetListCurrentResponse',
        'BankAccount_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetList',
        'BankAccount_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetListResponse',
        'Contract_Delete\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\Delete',
        'Contract_DeleteResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\DeleteResponse',
        'Contract_Insert_v2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert\V2',
        'Contract_v2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\V2',
        'Contract_Insert_v2Response\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert\V2Response',
        'Contract_InsertCurrentPeriod_v2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod\V2',
        'Contract_InsertCurrentPeriod_v2Response\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod\V2Response',
        'Contract_GetAll_v2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\V2',
        'Contract_GetAll_v2Response\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\V2Response',
        'Contract_GetAll_AllEmployeesByCompany\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\AllEmployeesByCompany',
        'Contract_GetAll_AllEmployeesByCompanyResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\AllEmployeesByCompanyResponse',
        'EmployeeContractItem\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeContractItem',
        'Contract_v3\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contract\V3',
        'Absence_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Absence\Insert',
        'Absence\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Absence',
        'Absence_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Absence\InsertResponse',
        'Absence_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Absence\GetList',
        'Absence_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Absence\GetListResponse',
        'Leave_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Leave\Insert',
        'Leave\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Leave',
        'LeaveUsageType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaveUsageType',
        'LeaveType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaveType',
        'LeaveStatus\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaveStatus',
        'Leave_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Leave\InsertResponse',
        'Leave_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Leave\GetList',
        'Leave_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Leave\GetListResponse',
        'Levensloop_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Insert',
        'Levensloop_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\InsertResponse',
        'Levensloop_Stop\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Stop',
        'Levensloop_StopResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\StopResponse',
        'Levensloop_Delete\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Delete',
        'Levensloop_DeleteResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\DeleteResponse',
        'Levensloop_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Get',
        'Levensloop_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\GetResponse',
        'Levensloop\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Levensloop',
        'Spaarloon_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Insert',
        'Spaarloon_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\InsertResponse',
        'Spaarloon_Stop\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Stop',
        'Spaarloon_StopResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\StopResponse',
        'Spaarloon_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Get',
        'Spaarloon_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\GetResponse',
        'Spaarloon\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon',
        'Spaarloon_Delete\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Delete',
        'Spaarloon_DeleteResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\DeleteResponse',
        'Spaarloon_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\GetList',
        'Spaarloon_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\GetListResponse',
        'Service_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Service\GetList',
        'Service_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Service\GetListResponse',
        'ServiceInterval\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ServiceInterval',
        'Service_StopCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Service\StopCurrent',
        'Service_StopCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Service\StopCurrentResponse',
        'Service_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Service\Insert',
        'Service_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Service\InsertResponse',
        'Service_Insert2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Service\Insert2',
        'Service_Insert2Response\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Service\Insert2Response',
        'DaysFixed_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Get',
        'DaysFixed_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\GetResponse',
        'DaysFixed_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\GetCurrent',
        'DaysFixed_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\GetCurrentResponse',
        'DaysFixed_SetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\SetCurrent',
        'DaysFixed_SetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\SetCurrentResponse',
        'DaysFixed_Set\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Set',
        'DaysFixed_SetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\SetResponse',
        'DaysFixed_Stop\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Stop',
        'DaysFixed_StopResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\StopResponse',
        'WageComponentFixed_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Get',
        'WageComponentFixed_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\GetResponse',
        'WageComponentFixed_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\GetCurrent',
        'WageComponentFixed_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\GetCurrentResponse',
        'WageComponentFixed_Insert_Batch\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert\Batch',
        'WageComponentFixed_Insert_BatchResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert\BatchResponse',
        'WageComponentFixed_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert',
        'WageComponentFixed_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\InsertResponse',
        'WageComponentFixed_InsertCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\InsertCurrent',
        'WageComponentFixed_InsertCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\InsertCurrentResponse',
        'WageComponentFixed_Stop\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Stop',
        'WageComponentFixed_StopResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\StopResponse',
        'Schedule_UpdateCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\UpdateCurrent',
        'Schedule\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule',
        'Schedule_UpdateCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\UpdateCurrentResponse',
        'Schedule_Update\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\Update',
        'Schedule_UpdateResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\UpdateResponse',
        'Schedule_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetCurrent',
        'Schedule_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetCurrentResponse',
        'Schedule_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\Get',
        'Schedule_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetResponse',
        'Schedule_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetList',
        'Schedule_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetListResponse',
        'Schedule_GetAll_AllEmployeesByCompany\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetAll\AllEmployeesByCompany',
        'Schedule_GetAll_AllEmployeesByCompanyResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetAll\AllEmployeesByCompanyResponse',
        'EmployeeScheduleItem\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeScheduleItem',
        'Schedule_V2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Schedule\V2',
        'Salary_UpdateCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\UpdateCurrent',
        'SalaryInput\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryInput',
        'SalaryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryType',
        'SalaryTableEmployeeInput\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableEmployeeInput',
        'SalaryTableScaleInput\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableScaleInput',
        'SalaryTableStepInput\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableStepInput',
        'Salary_UpdateCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\UpdateCurrentResponse',
        'Salary_Update\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\Update',
        'Salary_UpdateResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\UpdateResponse',
        'Salary_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetCurrent',
        'Salary_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetCurrentResponse',
        'Salary\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary',
        'SalaryTableEmployee\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableEmployee',
        'SalaryTable\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTable',
        'SalaryTableScale\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableScale',
        'SalaryTableStep\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalaryTableStep',
        'Salary_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\Get',
        'Salary_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetResponse',
        'Salary_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetList',
        'Salary_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetListResponse',
        'Salary_GetAll_AllEmployeesByCompany\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetAll\AllEmployeesByCompany',
        'Salary_GetAll_AllEmployeesByCompanyResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetAll\AllEmployeesByCompanyResponse',
        'EmployeeSalaryItem\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeSalaryItem',
        'Salary_V2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Salary\V2',
        'SVW_UpdateCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\UpdateCurrent',
        'SVWSettings\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvWsettings',
        'SVW_UpdateCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\UpdateCurrentResponse',
        'SVW_Update\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\Update',
        'SVW_UpdateResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\UpdateResponse',
        'SVW_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\GetCurrent',
        'SVW_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\GetCurrentResponse',
        'SVW_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\Get',
        'SVW_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\GetResponse',
        'SVW_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\GetList',
        'SVW_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SvW\GetListResponse',
        'WageTax_UpdateCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\UpdateCurrent',
        'WageTaxSettings\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTaxSettings',
        'WageTax_UpdateCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\UpdateCurrentResponse',
        'WageTax_Update\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\Update',
        'WageTax_UpdateResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\UpdateResponse',
        'WageTax_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetCurrent',
        'WageTax_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetCurrentResponse',
        'WageTax_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetList',
        'WageTax_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetListResponse',
        'WageTax_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\Get',
        'WageTax_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetResponse',
        'CostCenter_UpdateCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\UpdateCurrent',
        'EmployeeCostCenter\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeCostCenter',
        'CostCenter\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter',
        'Kostensoort\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Kostensoort',
        'CostCenter_UpdateCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\UpdateCurrentResponse',
        'CostCenter_Update\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\Update',
        'CostCenter_UpdateResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\UpdateResponse',
        'CostCenter_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetCurrent',
        'CostCenter_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetCurrentResponse',
        'CostCenter_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\Get',
        'CostCenter_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetResponse',
        'Function_UpdateCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\UpdateCurrent',
        'Function_UpdateCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\UpdateCurrentResponse',
        'Function_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetCurrent',
        'Function_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetCurrentResponse',
        'function\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction',
        'Function_GetAll_AllEmployeesByCompany\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetAll\AllEmployeesByCompany',
        'Function_GetAll_AllEmployeesByCompanyResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetAll\AllEmployeesByCompanyResponse',
        'EmployeeFunctionItem\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeFunctionItem',
        'Function_V2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\V2',
        'Department_UpdateCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\UpdateCurrent',
        'Department_UpdateCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\UpdateCurrentResponse',
        'Department_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\GetCurrent',
        'Department_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\GetCurrentResponse',
        'Department\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department',
        'Department_GetAll_AllEmployeesByCompany\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\GetAll\AllEmployeesByCompany',
        'Department_GetAll_AllEmployeesByCompanyResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\GetAll\AllEmployeesByCompanyResponse',
        'EmployeeDepartmentItem\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDepartmentItem',
        'Department_V2\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\V2',
        'LeaseCar_Insert\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Insert',
        'EmployeeLeaseCar\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EmployeeLeaseCar',
        'LeaseCar_InsertResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\InsertResponse',
        'LeaseCar_GetCurrent\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetCurrent',
        'LeaseCar_GetCurrentResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetCurrentResponse',
        'LeaseCar_Get\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Get',
        'LeaseCar_GetResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetResponse',
        'LeaseCar_GetList\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetList',
        'LeaseCar_GetListResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetListResponse',
        'LeaseCar_Delete\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Delete',
        'LeaseCar_DeleteResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\DeleteResponse',
        'LeaseCar_Stop\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Stop',
        'LeaseCar_StopResponse\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\StopResponse',
        'guid\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Guid',
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
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
    }

    /**
     * DaysVarGet
     * Get days worked filled in for given period.
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\GetResponse
     */
    public function daysVarGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\GetCurrentResponse
     */
    public function daysVarGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\SetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\SetCurrentResponse
     */
    public function daysVarSetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\SetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\Set $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\SetResponse
     */
    public function daysVarSet(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysVar\Set $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\GetResponse
     */
    public function hourComponentVarGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\GetCurrentResponse
     */
    public function hourComponentVarGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\ClearCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\ClearCurrentResponse
     */
    public function hourComponentVarClearCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\ClearCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Clear $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\ClearResponse
     */
    public function hourComponentVarClear(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Clear $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\InsertCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\InsertCurrentResponse
     */
    public function hourComponentVarInsertCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\InsertCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\InsertResponse
     */
    public function hourComponentVarInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Insert\Batch $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Insert\BatchResponse
     */
    public function hourComponentVarInsertBatch(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentVar\Insert\Batch $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\GetResponse
     */
    public function wageComponentVarGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\GetCurrentResponse
     */
    public function wageComponentVarGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\ClearCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\ClearCurrentResponse
     */
    public function wageComponentVarClearCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\ClearCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Clear $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\ClearResponse
     */
    public function wageComponentVarClear(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Clear $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\InsertCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\InsertCurrentResponse
     */
    public function wageComponentVarInsertCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\InsertCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\InsertResponse
     */
    public function wageComponentVarInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Insert\Batch $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Insert\BatchResponse
     */
    public function wageComponentVarInsertBatch(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentVar\Insert\Batch $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetCurrentResponse
     */
    public function personalInfoGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetResponse
     */
    public function personalInfoGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\UpdateCurrentResponse
     */
    public function personalInfoUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\UpdateResponse
     */
    public function personalInfoUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetAll\AllEmployeesByCompanyResponse
     */
    public function personalInfoGetAllAllEmployeesByCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\PersonalInfo\GetAll\AllEmployeesByCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByCompanyResponse
     */
    public function listGetByCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByDebtor $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByDebtorResponse
     */
    public function listGetByDebtor(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByDebtor $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Employee\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Employee\GetCurrentResponse
     */
    public function employeeGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Employee\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Employee\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Employee\InsertResponse
     */
    public function employeeInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Employee\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDocument\UploadDocument $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDocument\UploadDocumentResponse
     */
    public function employeeDocumentUploadDocument(
        \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDocument\UploadDocument $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\GetResponse
     */
    public function hourComponentFixedGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\GetCurrentResponse
     */
    public function hourComponentFixedGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\InsertCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\InsertCurrentResponse
     */
    public function hourComponentFixedInsertCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\InsertCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\InsertResponse
     */
    public function hourComponentFixedInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert\Batch $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert\BatchResponse
     */
    public function hourComponentFixedInsertBatch(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Insert\Batch $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Stop $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\StopResponse
     */
    public function hourComponentFixedStop(
        \Controle\Hostnet\Namesp\Sub4\Complex\HourComponentFixed\Stop $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Address\InsertCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Address\InsertCurrentResponse
     */
    public function addressInsertCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Address\InsertCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetListCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetListCurrentResponse
     */
    public function addressGetListCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetListCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetListResponse
     */
    public function addressGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetAll\AllEmployeesByCompanyResponse
     */
    public function addressGetAllAllEmployeesByCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetAll\AllEmployeesByCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\InsertCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\InsertCurrentResponse
     */
    public function bankAccountInsertCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\InsertCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetListCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetListCurrentResponse
     */
    public function bankAccountGetListCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetListCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetListResponse
     */
    public function bankAccountGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Contract\Delete $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Contract\DeleteResponse
     */
    public function contractDelete(
        \Controle\Hostnet\Namesp\Sub4\Complex\Contract\Delete $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert\v2 $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert\v2Response
     */
    public function contractInsertv2(
        \Controle\Hostnet\Namesp\Sub4\Complex\Contract\Insert\v2 $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod\v2 $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod\v2Response
     */
    public function contractInsertCurrentPeriodv2(
        \Controle\Hostnet\Namesp\Sub4\Complex\Contract\InsertCurrentPeriod\v2 $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\v2 $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\v2Response
     */
    public function contractGetAllv2(
        \Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\v2 $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\AllEmployeesByCompanyResponse
     */
    public function contractGetAllAllEmployeesByCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Contract\GetAll\AllEmployeesByCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Absence\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Absence\InsertResponse
     */
    public function absenceInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Absence\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Absence\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Absence\GetListResponse
     */
    public function absenceGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Absence\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Leave\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Leave\InsertResponse
     */
    public function leaveInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Leave\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Leave\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Leave\GetListResponse
     */
    public function leaveGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Leave\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\InsertResponse
     */
    public function levensloopInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Stop $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\StopResponse
     */
    public function levensloopStop(
        \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Stop $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Delete $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\DeleteResponse
     */
    public function levensloopDelete(
        \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Delete $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\GetResponse
     */
    public function levensloopGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\Levensloop\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\InsertResponse
     */
    public function spaarloonInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Stop $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\StopResponse
     */
    public function spaarloonStop(
        \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Stop $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\GetResponse
     */
    public function spaarloonGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Delete $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\DeleteResponse
     */
    public function spaarloonDelete(
        \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\Delete $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\GetListResponse
     */
    public function spaarloonGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Spaarloon\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Service\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Service\GetListResponse
     */
    public function serviceGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Service\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Service\StopCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Service\StopCurrentResponse
     */
    public function serviceStopCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Service\StopCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Service\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Service\InsertResponse
     */
    public function serviceInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Service\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Service\Insert2 $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Service\Insert2Response
     */
    public function serviceInsert2(
        \Controle\Hostnet\Namesp\Sub4\Complex\Service\Insert2 $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\GetResponse
     */
    public function daysFixedGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\GetCurrentResponse
     */
    public function daysFixedGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\SetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\SetCurrentResponse
     */
    public function daysFixedSetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\SetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Set $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\SetResponse
     */
    public function daysFixedSet(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Set $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Stop $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\StopResponse
     */
    public function daysFixedStop(
        \Controle\Hostnet\Namesp\Sub4\Complex\DaysFixed\Stop $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\GetResponse
     */
    public function wageComponentFixedGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\GetCurrentResponse
     */
    public function wageComponentFixedGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert\Batch $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert\BatchResponse
     */
    public function wageComponentFixedInsertBatch(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert\Batch $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\InsertResponse
     */
    public function wageComponentFixedInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\InsertCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\InsertCurrentResponse
     */
    public function wageComponentFixedInsertCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\InsertCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Stop $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\StopResponse
     */
    public function wageComponentFixedStop(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageComponentFixed\Stop $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\UpdateCurrentResponse
     */
    public function scheduleUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\UpdateResponse
     */
    public function scheduleUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetCurrentResponse
     */
    public function scheduleGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetResponse
     */
    public function scheduleGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetListResponse
     */
    public function scheduleGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetAll\AllEmployeesByCompanyResponse
     */
    public function scheduleGetAllAllEmployeesByCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetAll\AllEmployeesByCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Salary\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Salary\UpdateCurrentResponse
     */
    public function salaryUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Salary\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Salary\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Salary\UpdateResponse
     */
    public function salaryUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\Salary\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetCurrentResponse
     */
    public function salaryGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Salary\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetResponse
     */
    public function salaryGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\Salary\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetListResponse
     */
    public function salaryGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetAll\AllEmployeesByCompanyResponse
     */
    public function salaryGetAllAllEmployeesByCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Salary\GetAll\AllEmployeesByCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SVW\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SVW\UpdateCurrentResponse
     */
    public function sVWUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\SVW\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SVW\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SVW\UpdateResponse
     */
    public function sVWUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\SVW\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetCurrentResponse
     */
    public function sVWGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SVW\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetResponse
     */
    public function sVWGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\SVW\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetListResponse
     */
    public function sVWGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\SVW\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\UpdateCurrentResponse
     */
    public function wageTaxUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\UpdateResponse
     */
    public function wageTaxUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetCurrentResponse
     */
    public function wageTaxGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetListResponse
     */
    public function wageTaxGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\GetResponse
     */
    public function wageTaxGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\WageTax\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\UpdateCurrentResponse
     */
    public function costCenterUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\UpdateResponse
     */
    public function costCenterUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetCurrentResponse
     */
    public function costCenterGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\GetResponse
     */
    public function costCenterGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\UpdateCurrentResponse
     */
    public function functionUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetCurrentResponse
     */
    public function functionGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetAll\AllEmployeesByCompanyResponse
     */
    public function functionGetAllAllEmployeesByCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetAll\AllEmployeesByCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Department\UpdateCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Department\UpdateCurrentResponse
     */
    public function departmentUpdateCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Department\UpdateCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetCurrentResponse
     */
    public function departmentGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetAll\AllEmployeesByCompany $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetAll\AllEmployeesByCompanyResponse
     */
    public function departmentGetAllAllEmployeesByCompany(
        \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetAll\AllEmployeesByCompany $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\InsertResponse
     */
    public function leaseCarInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetCurrent $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetCurrentResponse
     */
    public function leaseCarGetCurrent(
        \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetCurrent $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetResponse
     */
    public function leaseCarGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetListResponse
     */
    public function leaseCarGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Delete $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\DeleteResponse
     */
    public function leaseCarDelete(
        \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Delete $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Stop $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\StopResponse
     */
    public function leaseCarStop(
        \Controle\Hostnet\Namesp\Sub4\Complex\LeaseCar\Stop $parameters
    ) {
        return $this->__soapCall(
            'LeaseCar_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
    }
}
