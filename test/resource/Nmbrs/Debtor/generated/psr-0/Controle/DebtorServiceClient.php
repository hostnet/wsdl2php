<?php

namespace Controle\Title;

/**
 * DebtorServiceClient
 */
class DebtorServiceClient extends \SoapClient {

	const WSDL_FILE = "DebtorService.wsdl";
	private $classmap = array(
        'AbsenceVerzuim' =>
            '\Controle\AbsenceVerzuim',
        'Address' =>
            '\Controle\Address',
        'BankAccount' =>
            '\Controle\BankAccount',
        'BankAccountType' =>
            '\Controle\BankAccountType',
        'Department' =>
            '\Controle\Department',
        'DebtorTag' =>
            '\Controle\DebtorTag',
        'DebtorContactPerson' =>
            '\Controle\DebtorContactPerson',
        'DebtorServicelevel' =>
            '\Controle\DebtorServicelevel',
        'Debtor' =>
            '\Controle\Debtor',
        'Title' =>
            '\Controle\Title',
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
	 * @param \Controle\AbsenceXML\Get $parameters
	 * @return \Controle\AbsenceXML\GetResponse
	 */
	public function AbsenceXMLGet(\Controle\AbsenceXML\Get $parameters) {
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
	 * @param \Controle\Address\Get $parameters
	 * @return \Controle\Address\GetResponse
	 */
	public function AddressGet(\Controle\Address\Get $parameters) {
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
	 * @param \Controle\BankAccount\Get $parameters
	 * @return \Controle\BankAccount\GetResponse
	 */
	public function BankAccountGet(\Controle\BankAccount\Get $parameters) {
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
	 * @param \Controle\Department\GetList $parameters
	 * @return \Controle\Department\GetListResponse
	 */
	public function DepartmentGetList(\Controle\Department\GetList $parameters) {
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
	 * @param \Controle\Department\Insert $parameters
	 * @return \Controle\Department\InsertResponse
	 */
	public function DepartmentInsert(\Controle\Department\Insert $parameters) {
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
	 * @param \Controle\Department\Update $parameters
	 * @return \Controle\Department\UpdateResponse
	 */
	public function DepartmentUpdate(\Controle\Department\Update $parameters) {
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
	 * @param \Controle\Department\Delete $parameters
	 * @return \Controle\Department\DeleteResponse
	 */
	public function DepartmentDelete(\Controle\Department\Delete $parameters) {
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
	 * @param \Controle\Controlefunction\GetList $parameters
	 * @return \Controle\Controlefunction\GetListResponse
	 */
	public function FunctionGetList(\Controle\Controlefunction\GetList $parameters) {
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
	 * @param \Controle\Controlefunction\Insert $parameters
	 * @return \Controle\Controlefunction\InsertResponse
	 */
	public function FunctionInsert(\Controle\Controlefunction\Insert $parameters) {
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
	 * @param \Controle\Controlefunction\Update $parameters
	 * @return \Controle\Controlefunction\UpdateResponse
	 */
	public function FunctionUpdate(\Controle\Controlefunction\Update $parameters) {
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
	 * @param \Controle\Controlefunction\Delete $parameters
	 * @return \Controle\Controlefunction\DeleteResponse
	 */
	public function FunctionDelete(\Controle\Controlefunction\Delete $parameters) {
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
	 * @param \Controle\Tags\Get $parameters
	 * @return \Controle\Tags\GetResponse
	 */
	public function TagsGet(\Controle\Tags\Get $parameters) {
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
	 * @param \Controle\ContactPerson\Get $parameters
	 * @return \Controle\ContactPerson\GetResponse
	 */
	public function ContactPersonGet(\Controle\ContactPerson\Get $parameters) {
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
	 * @param \Controle\AccountantContact\GetList $parameters
	 * @return \Controle\AccountantContact\GetListResponse
	 */
	public function AccountantContactGetList(\Controle\AccountantContact\GetList $parameters) {
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
	 * @param \Controle\ServiceLevel\Get $parameters
	 * @return \Controle\ServiceLevel\GetResponse
	 */
	public function ServiceLevelGet(\Controle\ServiceLevel\Get $parameters) {
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
	 * @param \Controle\Debtor\Get $parameters
	 * @return \Controle\Debtor\GetResponse
	 */
	public function DebtorGet(\Controle\Debtor\Get $parameters) {
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
	 * @param \Controle\Debtor\Insert $parameters
	 * @return \Controle\Debtor\InsertResponse
	 */
	public function DebtorInsert(\Controle\Debtor\Insert $parameters) {
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
	 * @param \Controle\Debtor\Update $parameters
	 * @return \Controle\Debtor\UpdateResponse
	 */
	public function DebtorUpdate(\Controle\Debtor\Update $parameters) {
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
	 * @param \Controle\Controlelist\GetAll $parameters
	 * @return \Controle\Controlelist\GetAllResponse
	 */
	public function ListGetAll(\Controle\Controlelist\GetAll $parameters) {
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
	 * @param \Controle\Controlelist\GetByNumber $parameters
	 * @return \Controle\Controlelist\GetByNumberResponse
	 */
	public function ListGetByNumber(\Controle\Controlelist\GetByNumber $parameters) {
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
	 * @param \Controle\Title\GetList $parameters
	 * @return \Controle\Title\GetListResponse
	 */
	public function TitleGetList(\Controle\Title\GetList $parameters) {
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
	 * @param \Controle\Title\Insert $parameters
	 * @return \Controle\Title\InsertResponse
	 */
	public function TitleInsert(\Controle\Title\Insert $parameters) {
        return $this->__soapCall(
            'Title_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}
}
