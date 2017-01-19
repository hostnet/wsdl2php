<?php

namespace Controle\sub1\sub2\Title;

/**
 * DebtorServiceClient
 */
class DebtorServiceClient extends \SoapClient {

	const WSDL_FILE = "DebtorService.wsdl";
	private $classmap = array(
        'AbsenceVerzuim' =>
            '\Controle\sub1\sub2\AbsenceVerzuim',
        'Address' =>
            '\Controle\sub1\sub2\Address',
        'BankAccount' =>
            '\Controle\sub1\sub2\BankAccount',
        'BankAccountType' =>
            '\Controle\sub1\sub2\BankAccountType',
        'Department' =>
            '\Controle\sub1\sub2\Department',
        'DebtorTag' =>
            '\Controle\sub1\sub2\DebtorTag',
        'DebtorContactPerson' =>
            '\Controle\sub1\sub2\DebtorContactPerson',
        'DebtorServicelevel' =>
            '\Controle\sub1\sub2\DebtorServicelevel',
        'Debtor' =>
            '\Controle\sub1\sub2\Debtor',
        'Title' =>
            '\Controle\sub1\sub2\Title',
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
	 * @param \Controle\sub1\sub2\AbsenceXML\Get $parameters
	 * @return \Controle\sub1\sub2\AbsenceXML\GetResponse
	 */
	public function AbsenceXMLGet(\Controle\sub1\sub2\AbsenceXML\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\Address\Get $parameters
	 * @return \Controle\sub1\sub2\Address\GetResponse
	 */
	public function AddressGet(\Controle\sub1\sub2\Address\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\BankAccount\Get $parameters
	 * @return \Controle\sub1\sub2\BankAccount\GetResponse
	 */
	public function BankAccountGet(\Controle\sub1\sub2\BankAccount\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\Department\GetList $parameters
	 * @return \Controle\sub1\sub2\Department\GetListResponse
	 */
	public function DepartmentGetList(\Controle\sub1\sub2\Department\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Department\Insert $parameters
	 * @return \Controle\sub1\sub2\Department\InsertResponse
	 */
	public function DepartmentInsert(\Controle\sub1\sub2\Department\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Department\Update $parameters
	 * @return \Controle\sub1\sub2\Department\UpdateResponse
	 */
	public function DepartmentUpdate(\Controle\sub1\sub2\Department\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\Department\Delete $parameters
	 * @return \Controle\sub1\sub2\Department\DeleteResponse
	 */
	public function DepartmentDelete(\Controle\sub1\sub2\Department\Delete $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlefunction\GetList $parameters
	 * @return \Controle\sub1\sub2\Controlefunction\GetListResponse
	 */
	public function FunctionGetList(\Controle\sub1\sub2\Controlefunction\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlefunction\Insert $parameters
	 * @return \Controle\sub1\sub2\Controlefunction\InsertResponse
	 */
	public function FunctionInsert(\Controle\sub1\sub2\Controlefunction\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlefunction\Update $parameters
	 * @return \Controle\sub1\sub2\Controlefunction\UpdateResponse
	 */
	public function FunctionUpdate(\Controle\sub1\sub2\Controlefunction\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlefunction\Delete $parameters
	 * @return \Controle\sub1\sub2\Controlefunction\DeleteResponse
	 */
	public function FunctionDelete(\Controle\sub1\sub2\Controlefunction\Delete $parameters) {
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
	 * @param \Controle\sub1\sub2\Tags\Get $parameters
	 * @return \Controle\sub1\sub2\Tags\GetResponse
	 */
	public function TagsGet(\Controle\sub1\sub2\Tags\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\ContactPerson\Get $parameters
	 * @return \Controle\sub1\sub2\ContactPerson\GetResponse
	 */
	public function ContactPersonGet(\Controle\sub1\sub2\ContactPerson\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\AccountantContact\GetList $parameters
	 * @return \Controle\sub1\sub2\AccountantContact\GetListResponse
	 */
	public function AccountantContactGetList(\Controle\sub1\sub2\AccountantContact\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\ServiceLevel\Get $parameters
	 * @return \Controle\sub1\sub2\ServiceLevel\GetResponse
	 */
	public function ServiceLevelGet(\Controle\sub1\sub2\ServiceLevel\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\Debtor\Get $parameters
	 * @return \Controle\sub1\sub2\Debtor\GetResponse
	 */
	public function DebtorGet(\Controle\sub1\sub2\Debtor\Get $parameters) {
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
	 * @param \Controle\sub1\sub2\Debtor\Insert $parameters
	 * @return \Controle\sub1\sub2\Debtor\InsertResponse
	 */
	public function DebtorInsert(\Controle\sub1\sub2\Debtor\Insert $parameters) {
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
	 * @param \Controle\sub1\sub2\Debtor\Update $parameters
	 * @return \Controle\sub1\sub2\Debtor\UpdateResponse
	 */
	public function DebtorUpdate(\Controle\sub1\sub2\Debtor\Update $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlelist\GetAll $parameters
	 * @return \Controle\sub1\sub2\Controlelist\GetAllResponse
	 */
	public function ListGetAll(\Controle\sub1\sub2\Controlelist\GetAll $parameters) {
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
	 * @param \Controle\sub1\sub2\Controlelist\GetByNumber $parameters
	 * @return \Controle\sub1\sub2\Controlelist\GetByNumberResponse
	 */
	public function ListGetByNumber(\Controle\sub1\sub2\Controlelist\GetByNumber $parameters) {
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
	 * @param \Controle\sub1\sub2\Title\GetList $parameters
	 * @return \Controle\sub1\sub2\Title\GetListResponse
	 */
	public function TitleGetList(\Controle\sub1\sub2\Title\GetList $parameters) {
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
	 * @param \Controle\sub1\sub2\Title\Insert $parameters
	 * @return \Controle\sub1\sub2\Title\InsertResponse
	 */
	public function TitleInsert(\Controle\sub1\sub2\Title\Insert $parameters) {
        return $this->__soapCall(
            'Title_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/DebtorService')
        );
	}
}
