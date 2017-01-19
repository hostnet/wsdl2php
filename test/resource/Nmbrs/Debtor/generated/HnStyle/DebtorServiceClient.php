<?php

namespace Controle\Hostnet\Namesp;

/**
 * DebtorServiceClient
 */
class DebtorServiceClient extends \SoapClient
{
    const WSDL_FILE = "DebtorService.wsdl";

    private $classmap = array(
        'AbsenceXML_Get' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AbsenceXmL\Get',
        'AbsenceXML_GetResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AbsenceXmL\GetResponse',
        'AbsenceVerzuim' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AbsenceVerzuim',
        'AuthHeader' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AuthHeader',
        'Address_Get' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\Get',
        'Address_GetResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address\GetResponse',
        'Address' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Address',
        'BankAccount_Get' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\Get',
        'BankAccount_GetResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetResponse',
        'BankAccount' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccount',
        'BankAccountType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BankAccountType',
        'Department_GetList' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\GetList',
        'Department_GetListResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\GetListResponse',
        'Department' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department',
        'Department_Insert' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\Insert',
        'Department_InsertResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\InsertResponse',
        'Department_Update' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\Update',
        'Department_UpdateResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\UpdateResponse',
        'Department_Delete' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\Delete',
        'Department_DeleteResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Department\DeleteResponse',
        'Function_GetList' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetList',
        'Function_GetListResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetListResponse',
        'function' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction',
        'Function_Insert' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Insert',
        'Function_InsertResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\InsertResponse',
        'Function_Update' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Update',
        'Function_UpdateResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\UpdateResponse',
        'Function_Delete' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Delete',
        'Function_DeleteResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\DeleteResponse',
        'Tags_Get' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Tags\Get',
        'Tags_GetResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Tags\GetResponse',
        'DebtorTag' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DebtorTag',
        'ContactPerson_Get' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ContactPerson\Get',
        'ContactPerson_GetResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ContactPerson\GetResponse',
        'DebtorContactPerson' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DebtorContactPerson',
        'AccountantContact_GetList' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountantContact\GetList',
        'AccountantContact_GetListResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountantContact\GetListResponse',
        'ServiceLevel_Get' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ServiceLevel\Get',
        'ServiceLevel_GetResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ServiceLevel\GetResponse',
        'DebtorServicelevel' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DebtorServicelevel',
        'Debtor_Get' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Get',
        'Debtor_GetResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Debtor\GetResponse',
        'Debtor' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Debtor',
        'Debtor_Insert' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Insert',
        'Debtor_InsertResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Debtor\InsertResponse',
        'Debtor_Update' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Update',
        'Debtor_UpdateResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Debtor\UpdateResponse',
        'List_GetAll' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetAll',
        'List_GetAllResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetAllResponse',
        'List_GetByNumber' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByNumber',
        'List_GetByNumberResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByNumberResponse',
        'Title_GetList' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Title\GetList',
        'Title_GetListResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Title\GetListResponse',
        'Title' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Title',
        'Title_Insert' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Title\Insert',
        'Title_InsertResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Title\InsertResponse',
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
     * AbsenceXMLGet
     * Get verzuim XML abcense list
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AbsenceXML\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AbsenceXML\GetResponse
     */
    public function absenceXMLGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\AbsenceXML\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Address\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Address\GetResponse
     */
    public function addressGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\Address\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\GetResponse
     */
    public function bankAccountGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\BankAccount\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetListResponse
     */
    public function departmentGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Department\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Department\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Department\InsertResponse
     */
    public function departmentInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Department\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Department\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Department\UpdateResponse
     */
    public function departmentUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\Department\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Department\Delete $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Department\DeleteResponse
     */
    public function departmentDelete(
        \Controle\Hostnet\Namesp\Sub4\Complex\Department\Delete $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetListResponse
     */
    public function functionGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\InsertResponse
     */
    public function functionInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\UpdateResponse
     */
    public function functionUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Delete $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\DeleteResponse
     */
    public function functionDelete(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlefunction\Delete $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Tags\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Tags\GetResponse
     */
    public function tagsGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\Tags\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ContactPerson\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ContactPerson\GetResponse
     */
    public function contactPersonGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\ContactPerson\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AccountantContact\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AccountantContact\GetListResponse
     */
    public function accountantContactGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\AccountantContact\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ServiceLevel\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ServiceLevel\GetResponse
     */
    public function serviceLevelGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\ServiceLevel\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Get $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\GetResponse
     */
    public function debtorGet(
        \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Get $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\InsertResponse
     */
    public function debtorInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Insert $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Update $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\UpdateResponse
     */
    public function debtorUpdate(
        \Controle\Hostnet\Namesp\Sub4\Complex\Debtor\Update $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetAll $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetAllResponse
     */
    public function listGetAll(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetAll $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByNumber $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByNumberResponse
     */
    public function listGetByNumber(
        \Controle\Hostnet\Namesp\Sub4\Complex\Controlelist\GetByNumber $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Title\GetList $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Title\GetListResponse
     */
    public function titleGetList(
        \Controle\Hostnet\Namesp\Sub4\Complex\Title\GetList $parameters
    ) {
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
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Title\Insert $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\Title\InsertResponse
     */
    public function titleInsert(
        \Controle\Hostnet\Namesp\Sub4\Complex\Title\Insert $parameters
    ) {
        return $this->__soapCall(
            'Title_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
    }
}
