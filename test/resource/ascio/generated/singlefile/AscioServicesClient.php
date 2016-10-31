<?php

class LogIn {
	/**
	 * @var Session
	 */
	public $session;
	/**
	 * @param Session $val
	 * @throws Exception
	 */
	public function setSession($val) {
		
		$this->session = (int)$val;
	}

}

class Session {
	/**
	 * @var string
	 */
	public $Account;
	/**
	 * @var string
	 */
	public $Password;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccount($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Account');
		$this->Account = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPassword($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Password');
		$this->Password = (int)$val;
	}

}

class LogInResponse {
	/**
	 * @var Response
	 */
	public $LogInResult;
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setLogInResult($val) {
		
		$this->LogInResult = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

}

class Response {
	/**
	 * @var string
	 */
	public $Message;
	/**
	 * @var short
	 */
	public $ResultCode;
	/**
	 * @var string[]
	 */
	public $Values;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessage($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Message');
		$this->Message = (int)$val;
	}

	/**
	 * @param short $val
	 * @throws Exception
	 */
	public function setResultCode($val) {
		
		$this->ResultCode = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setValues($val) {
		
		$this->Values = (int)$val;
	}

}

class LogOut {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

}

class LogOutResponse {
	/**
	 * @var Response
	 */
	public $LogOutResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setLogOutResult($val) {
		
		$this->LogOutResult = (int)$val;
	}

}

class GetOrder {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $orderId;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for orderId');
		$this->orderId = (int)$val;
	}

}

class GetOrderResponse {
	/**
	 * @var Response
	 */
	public $GetOrderResult;
	/**
	 * @var Order
	 */
	public $order;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetOrderResult($val) {
		
		$this->GetOrderResult = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val) {
		
		$this->order = (int)$val;
	}

}

class Order {
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var OrderType
	 */
	public $Type;
	/**
	 * @var string
	 */
	public $AccountReference;
	/**
	 * @var OrderStatusType
	 */
	public $Status;
	/**
	 * @var string
	 */
	public $TransactionComment;
	/**
	 * @var string
	 */
	public $Comments;
	/**
	 * @var string
	 */
	public $Options;
	/**
	 * @var string
	 */
	public $LocalPresence;
	/**
	 * @var string
	 */
	public $Batch;
	/**
	 * @var string
	 */
	public $Documentation;
	/**
	 * @var Domain
	 */
	public $Domain;
	/**
	 * @var dateTime
	 */
	public $CreDate;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for OrderId');
		$this->OrderId = (int)$val;
	}

	/**
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setType($val) {
		
		$this->Type = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccountReference($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for AccountReference');
		$this->AccountReference = (int)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setStatus($val) {
		
		$this->Status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionComment($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for TransactionComment');
		$this->TransactionComment = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComments($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Comments');
		$this->Comments = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOptions($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Options');
		$this->Options = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLocalPresence($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for LocalPresence');
		$this->LocalPresence = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBatch($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Batch');
		$this->Batch = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentation($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Documentation');
		$this->Documentation = (int)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val) {
		
		$this->Domain = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val) {
		
		$this->CreDate = (int)$val;
	}

}

class OrderType {}

class OrderStatusType {}

class Domain {
	/**
	 * @var string
	 */
	public $DomainName;
	/**
	 * @var string
	 */
	public $DomainHandle;
	/**
	 * @var int
	 */
	public $RegPeriod;
	/**
	 * @var int
	 */
	public $RenewPeriod;
	/**
	 * @var string
	 */
	public $Status;
	/**
	 * @var string
	 */
	public $AuthInfo;
	/**
	 * @var dateTime
	 */
	public $CreDate;
	/**
	 * @var dateTime
	 */
	public $ExpDate;
	/**
	 * @var string
	 */
	public $EncodingType;
	/**
	 * @var string
	 */
	public $DomainPurpose;
	/**
	 * @var string
	 */
	public $Comment;
	/**
	 * @var string
	 */
	public $TransferLock;
	/**
	 * @var string
	 */
	public $DeleteLock;
	/**
	 * @var string
	 */
	public $UpdateLock;
	/**
	 * @var string
	 */
	public $QueueType;
	/**
	 * @var Registrant
	 */
	public $Registrant;
	/**
	 * @var Contact
	 */
	public $AdminContact;
	/**
	 * @var Contact
	 */
	public $TechContact;
	/**
	 * @var Contact
	 */
	public $BillingContact;
	/**
	 * @var Contact
	 */
	public $ResellerContact;
	/**
	 * @var NameServers
	 */
	public $NameServers;
	/**
	 * @var TradeMark
	 */
	public $Trademark;
	/**
	 * @var DnsSecKeys
	 */
	public $DnsSecKeys;
	/**
	 * @var PrivacyProxy
	 */
	public $PrivacyProxy;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainName');
		$this->DomainName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainHandle');
		$this->DomainHandle = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRegPeriod($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->RegPeriod = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRenewPeriod($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->RenewPeriod = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Status');
		$this->Status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAuthInfo($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for AuthInfo');
		$this->AuthInfo = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val) {
		
		$this->CreDate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setExpDate($val) {
		
		$this->ExpDate = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEncodingType($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for EncodingType');
		$this->EncodingType = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainPurpose($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainPurpose');
		$this->DomainPurpose = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComment($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Comment');
		$this->Comment = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransferLock($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for TransferLock');
		$this->TransferLock = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDeleteLock($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DeleteLock');
		$this->DeleteLock = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setUpdateLock($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for UpdateLock');
		$this->UpdateLock = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setQueueType($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for QueueType');
		$this->QueueType = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val) {
		
		$this->Registrant = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setAdminContact($val) {
		
		$this->AdminContact = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setTechContact($val) {
		
		$this->TechContact = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setBillingContact($val) {
		
		$this->BillingContact = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setResellerContact($val) {
		
		$this->ResellerContact = (int)$val;
	}

	/**
	 * @param NameServers $val
	 * @throws Exception
	 */
	public function setNameServers($val) {
		
		$this->NameServers = (int)$val;
	}

	/**
	 * @param TradeMark $val
	 * @throws Exception
	 */
	public function setTrademark($val) {
		
		$this->Trademark = (int)$val;
	}

	/**
	 * @param DnsSecKeys $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val) {
		
		$this->DnsSecKeys = (int)$val;
	}

	/**
	 * @param PrivacyProxy $val
	 * @throws Exception
	 */
	public function setPrivacyProxy($val) {
		
		$this->PrivacyProxy = (int)$val;
	}

}

class Registrant {
	/**
	 * @var dateTime
	 */
	public $CreDate;
	/**
	 * @var string
	 */
	public $Status;
	/**
	 * @var string
	 */
	public $Handle;
	/**
	 * @var string
	 */
	public $Name;
	/**
	 * @var string
	 */
	public $OrgName;
	/**
	 * @var string
	 */
	public $Address1;
	/**
	 * @var string
	 */
	public $Address2;
	/**
	 * @var string
	 */
	public $City;
	/**
	 * @var string
	 */
	public $State;
	/**
	 * @var string
	 */
	public $PostalCode;
	/**
	 * @var string
	 */
	public $CountryCode;
	/**
	 * @var string
	 */
	public $Email;
	/**
	 * @var string
	 */
	public $Phone;
	/**
	 * @var string
	 */
	public $Fax;
	/**
	 * @var string
	 */
	public $RegistrantType;
	/**
	 * @var string
	 */
	public $VatNumber;
	/**
	 * @var string
	 */
	public $RegistrantDate;
	/**
	 * @var string
	 */
	public $NexusCategory;
	/**
	 * @var string
	 */
	public $RegistrantNumber;
	/**
	 * @var string
	 */
	public $Details;
	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val) {
		
		$this->CreDate = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Status');
		$this->Status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Handle');
		$this->Handle = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Name');
		$this->Name = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrgName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for OrgName');
		$this->OrgName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAddress1($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Address1');
		$this->Address1 = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAddress2($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Address2');
		$this->Address2 = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCity($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for City');
		$this->City = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setState($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for State');
		$this->State = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPostalCode($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for PostalCode');
		$this->PostalCode = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCountryCode($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for CountryCode');
		$this->CountryCode = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmail($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Email');
		$this->Email = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPhone($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Phone');
		$this->Phone = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFax($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Fax');
		$this->Fax = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantType($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for RegistrantType');
		$this->RegistrantType = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVatNumber($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for VatNumber');
		$this->VatNumber = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantDate($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for RegistrantDate');
		$this->RegistrantDate = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNexusCategory($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for NexusCategory');
		$this->NexusCategory = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantNumber($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for RegistrantNumber');
		$this->RegistrantNumber = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDetails($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Details');
		$this->Details = (int)$val;
	}

}

class Contact {
	/**
	 * @var dateTime
	 */
	public $CreDate;
	/**
	 * @var string
	 */
	public $Status;
	/**
	 * @var string
	 */
	public $Handle;
	/**
	 * @var string
	 */
	public $FirstName;
	/**
	 * @var string
	 */
	public $LastName;
	/**
	 * @var string
	 */
	public $OrgName;
	/**
	 * @var string
	 */
	public $Address1;
	/**
	 * @var string
	 */
	public $Address2;
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
	public $State;
	/**
	 * @var string
	 */
	public $CountryCode;
	/**
	 * @var string
	 */
	public $Email;
	/**
	 * @var string
	 */
	public $Phone;
	/**
	 * @var string
	 */
	public $Fax;
	/**
	 * @var string
	 */
	public $Type;
	/**
	 * @var string
	 */
	public $Details;
	/**
	 * @var string
	 */
	public $OrganisationNumber;
	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val) {
		
		$this->CreDate = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Status');
		$this->Status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Handle');
		$this->Handle = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFirstName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for FirstName');
		$this->FirstName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLastName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for LastName');
		$this->LastName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrgName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for OrgName');
		$this->OrgName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAddress1($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Address1');
		$this->Address1 = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAddress2($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Address2');
		$this->Address2 = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPostalCode($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for PostalCode');
		$this->PostalCode = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCity($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for City');
		$this->City = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setState($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for State');
		$this->State = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCountryCode($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for CountryCode');
		$this->CountryCode = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmail($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Email');
		$this->Email = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPhone($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Phone');
		$this->Phone = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFax($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Fax');
		$this->Fax = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setType($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Type');
		$this->Type = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDetails($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Details');
		$this->Details = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrganisationNumber($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for OrganisationNumber');
		$this->OrganisationNumber = (int)$val;
	}

}

class NameServers {
	/**
	 * @var NameServer
	 */
	public $NameServer1;
	/**
	 * @var NameServer
	 */
	public $NameServer2;
	/**
	 * @var NameServer
	 */
	public $NameServer3;
	/**
	 * @var NameServer
	 */
	public $NameServer4;
	/**
	 * @var NameServer
	 */
	public $NameServer5;
	/**
	 * @var NameServer
	 */
	public $NameServer6;
	/**
	 * @var NameServer
	 */
	public $NameServer7;
	/**
	 * @var NameServer
	 */
	public $NameServer8;
	/**
	 * @var NameServer
	 */
	public $NameServer9;
	/**
	 * @var NameServer
	 */
	public $NameServer10;
	/**
	 * @var NameServer
	 */
	public $NameServer11;
	/**
	 * @var NameServer
	 */
	public $NameServer12;
	/**
	 * @var NameServer
	 */
	public $NameServer13;
	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer1($val) {
		
		$this->NameServer1 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer2($val) {
		
		$this->NameServer2 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer3($val) {
		
		$this->NameServer3 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer4($val) {
		
		$this->NameServer4 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer5($val) {
		
		$this->NameServer5 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer6($val) {
		
		$this->NameServer6 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer7($val) {
		
		$this->NameServer7 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer8($val) {
		
		$this->NameServer8 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer9($val) {
		
		$this->NameServer9 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer10($val) {
		
		$this->NameServer10 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer11($val) {
		
		$this->NameServer11 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer12($val) {
		
		$this->NameServer12 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer13($val) {
		
		$this->NameServer13 = (int)$val;
	}

}

class NameServer {
	/**
	 * @var dateTime
	 */
	public $CreDate;
	/**
	 * @var string
	 */
	public $Handle;
	/**
	 * @var string
	 */
	public $HostName;
	/**
	 * @var string
	 */
	public $IpAddress;
	/**
	 * @var string
	 */
	public $Status;
	/**
	 * @var string
	 */
	public $IpV6Address;
	/**
	 * @var string
	 */
	public $Details;
	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val) {
		
		$this->CreDate = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Handle');
		$this->Handle = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHostName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for HostName');
		$this->HostName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setIpAddress($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for IpAddress');
		$this->IpAddress = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Status');
		$this->Status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setIpV6Address($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for IpV6Address');
		$this->IpV6Address = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDetails($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Details');
		$this->Details = (int)$val;
	}

}

class TradeMark {
	/**
	 * @var string
	 */
	public $Name;
	/**
	 * @var string
	 */
	public $Country;
	/**
	 * @var dateTime
	 */
	public $Date;
	/**
	 * @var string
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $Type;
	/**
	 * @var string
	 */
	public $Contact;
	/**
	 * @var string
	 */
	public $ContactLanguage;
	/**
	 * @var string
	 */
	public $DocumentationLanguage;
	/**
	 * @var string
	 */
	public $SecondContact;
	/**
	 * @var string
	 */
	public $ThirdContact;
	/**
	 * @var dateTime
	 */
	public $RegDate;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Name');
		$this->Name = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCountry($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Country');
		$this->Country = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setDate($val) {
		
		$this->Date = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNumber($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Number');
		$this->Number = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setType($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Type');
		$this->Type = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setContact($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Contact');
		$this->Contact = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setContactLanguage($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for ContactLanguage');
		$this->ContactLanguage = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentationLanguage($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DocumentationLanguage');
		$this->DocumentationLanguage = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSecondContact($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for SecondContact');
		$this->SecondContact = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setThirdContact($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for ThirdContact');
		$this->ThirdContact = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setRegDate($val) {
		
		$this->RegDate = (int)$val;
	}

}

class DnsSecKeys {
	/**
	 * @var DnsSecKey
	 */
	public $DnsSecKey1;
	/**
	 * @var DnsSecKey
	 */
	public $DnsSecKey2;
	/**
	 * @var DnsSecKey
	 */
	public $DnsSecKey3;
	/**
	 * @var DnsSecKey
	 */
	public $DnsSecKey4;
	/**
	 * @var DnsSecKey
	 */
	public $DnsSecKey5;
	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey1($val) {
		
		$this->DnsSecKey1 = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey2($val) {
		
		$this->DnsSecKey2 = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey3($val) {
		
		$this->DnsSecKey3 = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey4($val) {
		
		$this->DnsSecKey4 = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey5($val) {
		
		$this->DnsSecKey5 = (int)$val;
	}

}

class DnsSecKey {
	/**
	 * @var string
	 */
	public $Handle;
	/**
	 * @var string
	 */
	public $Status;
	/**
	 * @var string
	 */
	public $DigestAlgorithm;
	/**
	 * @var string
	 */
	public $DigestType;
	/**
	 * @var string
	 */
	public $Digest;
	/**
	 * @var string
	 */
	public $Protocol;
	/**
	 * @var string
	 */
	public $KeyType;
	/**
	 * @var string
	 */
	public $KeyAlgorithm;
	/**
	 * @var string
	 */
	public $KeyTag;
	/**
	 * @var string
	 */
	public $PublicKey;
	/**
	 * @var string
	 */
	public $CreDate;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Handle');
		$this->Handle = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Status');
		$this->Status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDigestAlgorithm($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DigestAlgorithm');
		$this->DigestAlgorithm = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDigestType($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DigestType');
		$this->DigestType = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDigest($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Digest');
		$this->Digest = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setProtocol($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Protocol');
		$this->Protocol = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeyType($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for KeyType');
		$this->KeyType = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeyAlgorithm($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for KeyAlgorithm');
		$this->KeyAlgorithm = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeyTag($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for KeyTag');
		$this->KeyTag = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPublicKey($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for PublicKey');
		$this->PublicKey = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCreDate($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for CreDate');
		$this->CreDate = (int)$val;
	}

}

class PrivacyProxy {
	/**
	 * @var PrivacyProxyType
	 */
	public $Type;
	/**
	 * @var boolean
	 */
	public $PrivacyAdmin;
	/**
	 * @var boolean
	 */
	public $PrivacyTech;
	/**
	 * @var boolean
	 */
	public $PrivacyBilling;
	/**
	 * @var Extensions
	 */
	public $Extensions;
	/**
	 * @param PrivacyProxyType $val
	 * @throws Exception
	 */
	public function setType($val) {
		
		$this->Type = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyAdmin($val) {
		
		$this->PrivacyAdmin = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyTech($val) {
		
		$this->PrivacyTech = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyBilling($val) {
		
		$this->PrivacyBilling = (int)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val) {
		
		$this->Extensions = (int)$val;
	}

}

class PrivacyProxyType {}

class Extensions {
	/**
	 * @var Extension
	 */
	public $Extension;
	/**
	 * @param Extension $val
	 * @throws Exception
	 */
	public function setExtension($val) {
		
		$this->Extension = (int)$val;
	}

}

class Extension {
	/**
	 * @var string
	 */
	public $Key;
	/**
	 * @var string
	 */
	public $Value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKey($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Key');
		$this->Key = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Value');
		$this->Value = (int)$val;
	}

}

class CreateOrder {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Order
	 */
	public $order;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val) {
		
		$this->order = (int)$val;
	}

}

class CreateOrderResponse {
	/**
	 * @var Response
	 */
	public $CreateOrderResult;
	/**
	 * @var Order
	 */
	public $order;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateOrderResult($val) {
		
		$this->CreateOrderResult = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val) {
		
		$this->order = (int)$val;
	}

}

class SearchOrder {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchOrderRequest
	 */
	public $orderRequest;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param SearchOrderRequest $val
	 * @throws Exception
	 */
	public function setOrderRequest($val) {
		
		$this->orderRequest = (int)$val;
	}

}

class SearchOrderRequest {
	/**
	 * @var OrderType[]
	 */
	public $OrderTypes;
	/**
	 * @var OrderStatusType[]
	 */
	public $OrderStatusTypes;
	/**
	 * @var dateTime
	 */
	public $FromDate;
	/**
	 * @var dateTime
	 */
	public $ToDate;
	/**
	 * @var string
	 */
	public $DomainName;
	/**
	 * @var string
	 */
	public $TransactionComment;
	/**
	 * @var string
	 */
	public $Comments;
	/**
	 * @var boolean
	 */
	public $IncludeDomainDetails;
	/**
	 * @var PagingInfo
	 */
	public $PageInfo;
	/**
	 * @var SearchOrderSortType
	 */
	public $OrderSort;
	/**
	 * @param ArrayOfOrderType $val
	 * @throws Exception
	 */
	public function setOrderTypes($val) {
		
		$this->OrderTypes = (int)$val;
	}

	/**
	 * @param ArrayOfOrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatusTypes($val) {
		
		$this->OrderStatusTypes = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setFromDate($val) {
		
		$this->FromDate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setToDate($val) {
		
		$this->ToDate = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainName');
		$this->DomainName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionComment($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for TransactionComment');
		$this->TransactionComment = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComments($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Comments');
		$this->Comments = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIncludeDomainDetails($val) {
		
		$this->IncludeDomainDetails = (int)$val;
	}

	/**
	 * @param PagingInfo $val
	 * @throws Exception
	 */
	public function setPageInfo($val) {
		
		$this->PageInfo = (int)$val;
	}

	/**
	 * @param SearchOrderSortType $val
	 * @throws Exception
	 */
	public function setOrderSort($val) {
		
		$this->OrderSort = (int)$val;
	}

}

class SearchOrderSortType {}

class PagingInfo {
	/**
	 * @var int
	 */
	public $PageIndex;
	/**
	 * @var int
	 */
	public $PageSize;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPageIndex($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->PageIndex = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPageSize($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->PageSize = (int)$val;
	}

}

class SearchOrderResponse {
	/**
	 * @var Response
	 */
	public $SearchOrderResult;
	/**
	 * @var int
	 */
	public $totalOrders;
	/**
	 * @var Order[]
	 */
	public $orders;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchOrderResult($val) {
		
		$this->SearchOrderResult = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalOrders($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->totalOrders = (int)$val;
	}

	/**
	 * @param ArrayOfOrder $val
	 * @throws Exception
	 */
	public function setOrders($val) {
		
		$this->orders = (int)$val;
	}

}

class GetMessages {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $orderId;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for orderId');
		$this->orderId = (int)$val;
	}

}

class GetMessagesResponse {
	/**
	 * @var Response
	 */
	public $GetMessagesResult;
	/**
	 * @var Message[]
	 */
	public $messages;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessagesResult($val) {
		
		$this->GetMessagesResult = (int)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val) {
		
		$this->messages = (int)$val;
	}

}

class Message {
	/**
	 * @var Attachment[]
	 */
	public $Attachments;
	/**
	 * @var string
	 */
	public $Body;
	/**
	 * @var dateTime
	 */
	public $Created;
	/**
	 * @var string
	 */
	public $FromAddress;
	/**
	 * @var string
	 */
	public $Subject;
	/**
	 * @var string
	 */
	public $ToAddress;
	/**
	 * @var MessageType
	 */
	public $Type;
	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val) {
		
		$this->Attachments = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBody($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Body');
		$this->Body = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreated($val) {
		
		$this->Created = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFromAddress($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for FromAddress');
		$this->FromAddress = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSubject($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Subject');
		$this->Subject = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setToAddress($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for ToAddress');
		$this->ToAddress = (int)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setType($val) {
		
		$this->Type = (int)$val;
	}

}

class Attachment {
	/**
	 * @var base64Binary
	 */
	public $Data;
	/**
	 * @var string
	 */
	public $FileName;
	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setData($val) {
		
		$this->Data = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFileName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for FileName');
		$this->FileName = (int)$val;
	}

}

class MessageType {}

class ValidateOrder {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Order
	 */
	public $order;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val) {
		
		$this->order = (int)$val;
	}

}

class ValidateOrderResponse {
	/**
	 * @var Response
	 */
	public $ValidateOrderResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setValidateOrderResult($val) {
		
		$this->ValidateOrderResult = (int)$val;
	}

}

class UploadDocumentation {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $orderId;
	/**
	 * @var string
	 */
	public $fileName;
	/**
	 * @var base64Binary
	 */
	public $content;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for orderId');
		$this->orderId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFileName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for fileName');
		$this->fileName = (int)$val;
	}

	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setContent($val) {
		
		$this->content = (int)$val;
	}

}

class UploadDocumentationResponse {
	/**
	 * @var Response
	 */
	public $UploadDocumentationResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadDocumentationResult($val) {
		
		$this->UploadDocumentationResult = (int)$val;
	}

}

class CreateSupportOrder {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $subject;
	/**
	 * @var string
	 */
	public $body;
	/**
	 * @var Attachment[]
	 */
	public $attachments;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSubject($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for subject');
		$this->subject = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBody($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for body');
		$this->body = (int)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val) {
		
		$this->attachments = (int)$val;
	}

}

class CreateSupportOrderResponse {
	/**
	 * @var Response
	 */
	public $CreateSupportOrderResult;
	/**
	 * @var string
	 */
	public $orderId;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateSupportOrderResult($val) {
		
		$this->CreateSupportOrderResult = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for orderId');
		$this->orderId = (int)$val;
	}

}

class UploadMessage {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $orderId;
	/**
	 * @var Message
	 */
	public $message;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for orderId');
		$this->orderId = (int)$val;
	}

	/**
	 * @param Message $val
	 * @throws Exception
	 */
	public function setMessage($val) {
		
		$this->message = (int)$val;
	}

}

class UploadMessageResponse {
	/**
	 * @var Response
	 */
	public $UploadMessageResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadMessageResult($val) {
		
		$this->UploadMessageResult = (int)$val;
	}

}

class GetDomain {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $domainHandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for domainHandle');
		$this->domainHandle = (int)$val;
	}

}

class GetDomainResponse {
	/**
	 * @var Response
	 */
	public $GetDomainResult;
	/**
	 * @var Domain
	 */
	public $domain;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDomainResult($val) {
		
		$this->GetDomainResult = (int)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val) {
		
		$this->domain = (int)$val;
	}

}

class SearchDomain {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val) {
		
		$this->criteria = (int)$val;
	}

}

class SearchCriteria {
	/**
	 * @var Clause[]
	 */
	public $Clauses;
	/**
	 * @var SearchModeType
	 */
	public $Mode;
	/**
	 * @var string[]
	 */
	public $Withoutstates;
	/**
	 * @var string[]
	 */
	public $Withstates;
	/**
	 * @param ArrayOfClause $val
	 * @throws Exception
	 */
	public function setClauses($val) {
		
		$this->Clauses = (int)$val;
	}

	/**
	 * @param SearchModeType $val
	 * @throws Exception
	 */
	public function setMode($val) {
		
		$this->Mode = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setWithoutstates($val) {
		
		$this->Withoutstates = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setWithstates($val) {
		
		$this->Withstates = (int)$val;
	}

}

class Clause {
	/**
	 * @var string
	 */
	public $Attribute;
	/**
	 * @var SearchOperatorType
	 */
	public $Operator;
	/**
	 * @var string
	 */
	public $Value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttribute($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Attribute');
		$this->Attribute = (int)$val;
	}

	/**
	 * @param SearchOperatorType $val
	 * @throws Exception
	 */
	public function setOperator($val) {
		
		$this->Operator = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Value');
		$this->Value = (int)$val;
	}

}

class SearchOperatorType {}

class SearchModeType {}

class SearchDomainResponse {
	/**
	 * @var Response
	 */
	public $SearchDomainResult;
	/**
	 * @var Domain[]
	 */
	public $domains;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDomainResult($val) {
		
		$this->SearchDomainResult = (int)$val;
	}

	/**
	 * @param ArrayOfDomain $val
	 * @throws Exception
	 */
	public function setDomains($val) {
		
		$this->domains = (int)$val;
	}

}

class Whois {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $domainName;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for domainName');
		$this->domainName = (int)$val;
	}

}

class WhoisResponse {
	/**
	 * @var Response
	 */
	public $WhoisResult;
	/**
	 * @var string
	 */
	public $whoisData;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setWhoisResult($val) {
		
		$this->WhoisResult = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setWhoisData($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for whoisData');
		$this->whoisData = (int)$val;
	}

}

class AvailabilityCheck {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var String[]
	 */
	public $domains;
	/**
	 * @var String[]
	 */
	public $tlds;
	/**
	 * @var QualityType
	 */
	public $quality;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setDomains($val) {
		
		$this->domains = (int)$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setTlds($val) {
		
		$this->tlds = (int)$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val) {
		
		$this->quality = (int)$val;
	}

}

class QualityType {}

class AvailabilityCheckResponse {
	/**
	 * @var Response
	 */
	public $AvailabilityCheckResult;
	/**
	 * @var AvailabilityCheckResult[]
	 */
	public $results;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAvailabilityCheckResult($val) {
		
		$this->AvailabilityCheckResult = (int)$val;
	}

	/**
	 * @param ArrayOfAvailabilityCheckResult $val
	 * @throws Exception
	 */
	public function setResults($val) {
		
		$this->results = (int)$val;
	}

}

class AvailabilityCheckResult {
	/**
	 * @var string
	 */
	public $DomainName;
	/**
	 * @var QualityType
	 */
	public $Quality;
	/**
	 * @var int
	 */
	public $StatusCode;
	/**
	 * @var string
	 */
	public $StatusMessage;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainName');
		$this->DomainName = (int)$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val) {
		
		$this->Quality = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setStatusCode($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->StatusCode = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatusMessage($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for StatusMessage');
		$this->StatusMessage = (int)$val;
	}

}

class GetRegistrant {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $registrantHandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for registrantHandle');
		$this->registrantHandle = (int)$val;
	}

}

class GetRegistrantResponse {
	/**
	 * @var Response
	 */
	public $GetRegistrantResult;
	/**
	 * @var Registrant
	 */
	public $registrant;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantResult($val) {
		
		$this->GetRegistrantResult = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val) {
		
		$this->registrant = (int)$val;
	}

}

class CreateRegistrant {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Registrant
	 */
	public $registrant;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val) {
		
		$this->registrant = (int)$val;
	}

}

class CreateRegistrantResponse {
	/**
	 * @var Response
	 */
	public $CreateRegistrantResult;
	/**
	 * @var Registrant
	 */
	public $registrant;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateRegistrantResult($val) {
		
		$this->CreateRegistrantResult = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val) {
		
		$this->registrant = (int)$val;
	}

}

class DeleteRegistrant {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $registrantHandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for registrantHandle');
		$this->registrantHandle = (int)$val;
	}

}

class DeleteRegistrantResponse {
	/**
	 * @var Response
	 */
	public $DeleteRegistrantResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteRegistrantResult($val) {
		
		$this->DeleteRegistrantResult = (int)$val;
	}

}

class SearchRegistrant {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val) {
		
		$this->criteria = (int)$val;
	}

}

class SearchRegistrantResponse {
	/**
	 * @var Response
	 */
	public $SearchRegistrantResult;
	/**
	 * @var Registrant[]
	 */
	public $registrants;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchRegistrantResult($val) {
		
		$this->SearchRegistrantResult = (int)$val;
	}

	/**
	 * @param ArrayOfRegistrant $val
	 * @throws Exception
	 */
	public function setRegistrants($val) {
		
		$this->registrants = (int)$val;
	}

}

class GetContact {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $contactHandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setContactHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for contactHandle');
		$this->contactHandle = (int)$val;
	}

}

class GetRegistrantVerificationInfo {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for value');
		$this->value = (int)$val;
	}

}

class GetRegistrantVerificationInfoResponse {
	/**
	 * @var Response
	 */
	public $GetRegistrantVerificationInfoResult;
	/**
	 * @var RegistrantVerificationInfo
	 */
	public $verificationInfo;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationInfoResult($val) {
		
		$this->GetRegistrantVerificationInfoResult = (int)$val;
	}

	/**
	 * @param RegistrantVerificationInfo $val
	 * @throws Exception
	 */
	public function setVerificationInfo($val) {
		
		$this->verificationInfo = (int)$val;
	}

}

class RegistrantVerificationInfo {
	/**
	 * @var string
	 */
	public $EmailAddress;
	/**
	 * @var RegistrantVerificationStatus
	 */
	public $VerificationStatus;
	/**
	 * @var RegistrantVerificationDetails
	 */
	public $VerificationDetails;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmailAddress($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for EmailAddress');
		$this->EmailAddress = (int)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val) {
		
		$this->VerificationStatus = (int)$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setVerificationDetails($val) {
		
		$this->VerificationDetails = (int)$val;
	}

}

class RegistrantVerificationStatus {}

class RegistrantVerificationDetails {
	/**
	 * @var string
	 */
	public $VerifiedBy;
	/**
	 * @var dateTime
	 */
	public $VerificationDate;
	/**
	 * @var Message[]
	 */
	public $Messages;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVerifiedBy($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for VerifiedBy');
		$this->VerifiedBy = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setVerificationDate($val) {
		
		$this->VerificationDate = (int)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val) {
		
		$this->Messages = (int)$val;
	}

}

class DoRegistrantVerification {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for value');
		$this->value = (int)$val;
	}

}

class DoRegistrantVerificationResponse {
	/**
	 * @var Response
	 */
	public $DoRegistrantVerificationResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDoRegistrantVerificationResult($val) {
		
		$this->DoRegistrantVerificationResult = (int)$val;
	}

}

class GetRegistrantVerificationStatus {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for value');
		$this->value = (int)$val;
	}

}

class GetRegistrantVerificationStatusResponse {
	/**
	 * @var Response
	 */
	public $GetRegistrantVerificationStatusResult;
	/**
	 * @var RegistrantVerificationStatus
	 */
	public $verificationStatus;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationStatusResult($val) {
		
		$this->GetRegistrantVerificationStatusResult = (int)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val) {
		
		$this->verificationStatus = (int)$val;
	}

}

class UploadRegistrantVerificationMessage {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @var RegistrantVerificationDetails
	 */
	public $details;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for value');
		$this->value = (int)$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setDetails($val) {
		
		$this->details = (int)$val;
	}

}

class UploadRegistrantVerificationMessageResponse {
	/**
	 * @var Response
	 */
	public $UploadRegistrantVerificationMessageResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadRegistrantVerificationMessageResult($val) {
		
		$this->UploadRegistrantVerificationMessageResult = (int)$val;
	}

}

class GetContactResponse {
	/**
	 * @var Response
	 */
	public $GetContactResult;
	/**
	 * @var Contact
	 */
	public $contact;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetContactResult($val) {
		
		$this->GetContactResult = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val) {
		
		$this->contact = (int)$val;
	}

}

class CreateContact {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Contact
	 */
	public $contact;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val) {
		
		$this->contact = (int)$val;
	}

}

class CreateContactResponse {
	/**
	 * @var Response
	 */
	public $CreateContactResult;
	/**
	 * @var Contact
	 */
	public $contact;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateContactResult($val) {
		
		$this->CreateContactResult = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val) {
		
		$this->contact = (int)$val;
	}

}

class UpdateContact {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Contact
	 */
	public $contact;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val) {
		
		$this->contact = (int)$val;
	}

}

class UpdateContactResponse {
	/**
	 * @var Response
	 */
	public $UpdateContactResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUpdateContactResult($val) {
		
		$this->UpdateContactResult = (int)$val;
	}

}

class DeleteContact {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $contactHandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setContactHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for contactHandle');
		$this->contactHandle = (int)$val;
	}

}

class DeleteContactResponse {
	/**
	 * @var Response
	 */
	public $DeleteContactResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteContactResult($val) {
		
		$this->DeleteContactResult = (int)$val;
	}

}

class SearchContact {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val) {
		
		$this->criteria = (int)$val;
	}

}

class SearchContactResponse {
	/**
	 * @var Response
	 */
	public $SearchContactResult;
	/**
	 * @var Contact[]
	 */
	public $contacts;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchContactResult($val) {
		
		$this->SearchContactResult = (int)$val;
	}

	/**
	 * @param ArrayOfContact $val
	 * @throws Exception
	 */
	public function setContacts($val) {
		
		$this->contacts = (int)$val;
	}

}

class GetNameServer {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $nameServerHandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNameServerHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for nameServerHandle');
		$this->nameServerHandle = (int)$val;
	}

}

class GetNameServerResponse {
	/**
	 * @var Response
	 */
	public $GetNameServerResult;
	/**
	 * @var NameServer
	 */
	public $nameServer;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetNameServerResult($val) {
		
		$this->GetNameServerResult = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val) {
		
		$this->nameServer = (int)$val;
	}

}

class CreateNameServer {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var NameServer
	 */
	public $nameServer;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val) {
		
		$this->nameServer = (int)$val;
	}

}

class CreateNameServerResponse {
	/**
	 * @var Response
	 */
	public $CreateNameServerResult;
	/**
	 * @var NameServer
	 */
	public $nameServer;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateNameServerResult($val) {
		
		$this->CreateNameServerResult = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val) {
		
		$this->nameServer = (int)$val;
	}

}

class DeleteNameServer {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $nameServerHandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNameServerHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for nameServerHandle');
		$this->nameServerHandle = (int)$val;
	}

}

class DeleteNameServerResponse {
	/**
	 * @var Response
	 */
	public $DeleteNameServerResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteNameServerResult($val) {
		
		$this->DeleteNameServerResult = (int)$val;
	}

}

class SearchNameServer {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val) {
		
		$this->criteria = (int)$val;
	}

}

class SearchNameServerResponse {
	/**
	 * @var Response
	 */
	public $SearchNameServerResult;
	/**
	 * @var NameServer[]
	 */
	public $nameServers;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchNameServerResult($val) {
		
		$this->SearchNameServerResult = (int)$val;
	}

	/**
	 * @param ArrayOfNameServer $val
	 * @throws Exception
	 */
	public function setNameServers($val) {
		
		$this->nameServers = (int)$val;
	}

}

class PollMessage {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var MessageType
	 */
	public $msgType;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val) {
		
		$this->msgType = (int)$val;
	}

}

class PollMessageResponse {
	/**
	 * @var Response
	 */
	public $PollMessageResult;
	/**
	 * @var int
	 */
	public $msgCount;
	/**
	 * @var QueueItem
	 */
	public $item;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setPollMessageResult($val) {
		
		$this->PollMessageResult = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgCount($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->msgCount = (int)$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val) {
		
		$this->item = (int)$val;
	}

}

class QueueItem {
	/**
	 * @var Attachment[]
	 */
	public $Attachments;
	/**
	 * @var string
	 */
	public $DomainHandle;
	/**
	 * @var string
	 */
	public $DomainName;
	/**
	 * @var string
	 */
	public $Msg;
	/**
	 * @var int
	 */
	public $MsgId;
	/**
	 * @var MessageType
	 */
	public $MsgType;
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var OrderStatusType
	 */
	public $OrderStatus;
	/**
	 * @var CallbackStatus[]
	 */
	public $StatusList;
	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val) {
		
		$this->Attachments = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainHandle');
		$this->DomainHandle = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainName');
		$this->DomainName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMsg($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Msg');
		$this->Msg = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgId($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->MsgId = (int)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val) {
		
		$this->MsgType = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for OrderId');
		$this->OrderId = (int)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatus($val) {
		
		$this->OrderStatus = (int)$val;
	}

	/**
	 * @param ArrayOfCallbackStatus $val
	 * @throws Exception
	 */
	public function setStatusList($val) {
		
		$this->StatusList = (int)$val;
	}

}

class CallbackStatus {
	/**
	 * @var string
	 */
	public $Message;
	/**
	 * @var string
	 */
	public $Status;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessage($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Message');
		$this->Message = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Status');
		$this->Status = (int)$val;
	}

}

class AckMessage {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var int
	 */
	public $msgId;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgId($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->msgId = (int)$val;
	}

}

class AckMessageResponse {
	/**
	 * @var Response
	 */
	public $AckMessageResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAckMessageResult($val) {
		
		$this->AckMessageResult = (int)$val;
	}

}

class GetMessageQueue {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var int
	 */
	public $msgId;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgId($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->msgId = (int)$val;
	}

}

class GetMessageQueueResponse {
	/**
	 * @var Response
	 */
	public $GetMessageQueueResult;
	/**
	 * @var QueueItem
	 */
	public $item;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessageQueueResult($val) {
		
		$this->GetMessageQueueResult = (int)$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val) {
		
		$this->item = (int)$val;
	}

}

class GetDnsSecKey {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $dnsSecKeyHandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDnsSecKeyHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for dnsSecKeyHandle');
		$this->dnsSecKeyHandle = (int)$val;
	}

}

class GetDnsSecKeyResponse {
	/**
	 * @var Response
	 */
	public $GetDnsSecKeyResult;
	/**
	 * @var DnsSecKey
	 */
	public $dnsSecKey;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDnsSecKeyResult($val) {
		
		$this->GetDnsSecKeyResult = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val) {
		
		$this->dnsSecKey = (int)$val;
	}

}

class CreateDnsSecKey {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var DnsSecKey
	 */
	public $dnsSecKey;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val) {
		
		$this->dnsSecKey = (int)$val;
	}

}

class CreateDnsSecKeyResponse {
	/**
	 * @var Response
	 */
	public $CreateDnsSecKeyResult;
	/**
	 * @var DnsSecKey
	 */
	public $dnsSecKey;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDnsSecKeyResult($val) {
		
		$this->CreateDnsSecKeyResult = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val) {
		
		$this->dnsSecKey = (int)$val;
	}

}

class SearchDnsSecKey {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val) {
		
		$this->criteria = (int)$val;
	}

}

class SearchDnsSecKeyResponse {
	/**
	 * @var Response
	 */
	public $SearchDnsSecKeyResult;
	/**
	 * @var DnsSecKey[]
	 */
	public $dnsSecKeys;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDnsSecKeyResult($val) {
		
		$this->SearchDnsSecKeyResult = (int)$val;
	}

	/**
	 * @param ArrayOfDnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val) {
		
		$this->dnsSecKeys = (int)$val;
	}

}

class CreateDocumentation {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Attachment[]
	 */
	public $attachments;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val) {
		
		$this->attachments = (int)$val;
	}

}

class CreateDocumentationResponse {
	/**
	 * @var Response
	 */
	public $CreateDocumentationResult;
	/**
	 * @var int
	 */
	public $documentationId;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDocumentationResult($val) {
		
		$this->CreateDocumentationResult = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDocumentationId($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->documentationId = (int)$val;
	}

}

class CreateApprovalDocumentation {
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var ApprovalDocumentation
	 */
	public $approvalDocumentation;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
		$this->sessionId = (int)$val;
	}

	/**
	 * @param ApprovalDocumentation $val
	 * @throws Exception
	 */
	public function setApprovalDocumentation($val) {
		
		$this->approvalDocumentation = (int)$val;
	}

}

class ApprovalDocumentationType {}

class ApprovalDocumentation {
	/**
	 * @var ApprovalDocumentationType
	 */
	public $Type;
	/**
	 * @var string[]
	 */
	public $ObjectNames;
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var Attachment[]
	 */
	public $Attachments;
	/**
	 * @var Extensions
	 */
	public $Extensions;
	/**
	 * @param ApprovalDocumentationType $val
	 * @throws Exception
	 */
	public function setType($val) {
		
		$this->Type = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setObjectNames($val) {
		
		$this->ObjectNames = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for OrderId');
		$this->OrderId = (int)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val) {
		
		$this->Attachments = (int)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val) {
		
		$this->Extensions = (int)$val;
	}

}

class CreateApprovalDocumentationResponse {
	/**
	 * @var Response
	 */
	public $CreateApprovalDocumentationResult;
	/**
	 * @var string
	 */
	public $documentationId;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateApprovalDocumentationResult($val) {
		
		$this->CreateApprovalDocumentationResult = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentationId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for documentationId');
		$this->documentationId = (int)$val;
	}

}

/**
 * AscioServicesClient
 */
class AscioServicesClient extends SoapClient {

	const WSDL_FILE = "AscioService.wsdl";
	private $classmap = array(
		'LogIn' => 'LogIn',
		'Session' => 'Session',
		'LogInResponse' => 'LogInResponse',
		'Response' => 'Response',
		'LogOut' => 'LogOut',
		'LogOutResponse' => 'LogOutResponse',
		'GetOrder' => 'GetOrder',
		'GetOrderResponse' => 'GetOrderResponse',
		'Order' => 'Order',
		'OrderType' => 'OrderType',
		'OrderStatusType' => 'OrderStatusType',
		'Domain' => 'Domain',
		'Registrant' => 'Registrant',
		'Contact' => 'Contact',
		'NameServers' => 'NameServers',
		'NameServer' => 'NameServer',
		'TradeMark' => 'TradeMark',
		'DnsSecKeys' => 'DnsSecKeys',
		'DnsSecKey' => 'DnsSecKey',
		'PrivacyProxy' => 'PrivacyProxy',
		'PrivacyProxyType' => 'PrivacyProxyType',
		'Extensions' => 'Extensions',
		'Extension' => 'Extension',
		'CreateOrder' => 'CreateOrder',
		'CreateOrderResponse' => 'CreateOrderResponse',
		'SearchOrder' => 'SearchOrder',
		'SearchOrderRequest' => 'SearchOrderRequest',
		'SearchOrderSortType' => 'SearchOrderSortType',
		'PagingInfo' => 'PagingInfo',
		'SearchOrderResponse' => 'SearchOrderResponse',
		'GetMessages' => 'GetMessages',
		'GetMessagesResponse' => 'GetMessagesResponse',
		'Message' => 'Message',
		'Attachment' => 'Attachment',
		'MessageType' => 'MessageType',
		'ValidateOrder' => 'ValidateOrder',
		'ValidateOrderResponse' => 'ValidateOrderResponse',
		'UploadDocumentation' => 'UploadDocumentation',
		'UploadDocumentationResponse' => 'UploadDocumentationResponse',
		'CreateSupportOrder' => 'CreateSupportOrder',
		'CreateSupportOrderResponse' => 'CreateSupportOrderResponse',
		'UploadMessage' => 'UploadMessage',
		'UploadMessageResponse' => 'UploadMessageResponse',
		'GetDomain' => 'GetDomain',
		'GetDomainResponse' => 'GetDomainResponse',
		'SearchDomain' => 'SearchDomain',
		'SearchCriteria' => 'SearchCriteria',
		'Clause' => 'Clause',
		'SearchOperatorType' => 'SearchOperatorType',
		'SearchModeType' => 'SearchModeType',
		'SearchDomainResponse' => 'SearchDomainResponse',
		'Whois' => 'Whois',
		'WhoisResponse' => 'WhoisResponse',
		'AvailabilityCheck' => 'AvailabilityCheck',
		'QualityType' => 'QualityType',
		'AvailabilityCheckResponse' => 'AvailabilityCheckResponse',
		'AvailabilityCheckResult' => 'AvailabilityCheckResult',
		'GetRegistrant' => 'GetRegistrant',
		'GetRegistrantResponse' => 'GetRegistrantResponse',
		'CreateRegistrant' => 'CreateRegistrant',
		'CreateRegistrantResponse' => 'CreateRegistrantResponse',
		'DeleteRegistrant' => 'DeleteRegistrant',
		'DeleteRegistrantResponse' => 'DeleteRegistrantResponse',
		'SearchRegistrant' => 'SearchRegistrant',
		'SearchRegistrantResponse' => 'SearchRegistrantResponse',
		'GetContact' => 'GetContact',
		'GetRegistrantVerificationInfo' => 'GetRegistrantVerificationInfo',
		'GetRegistrantVerificationInfoResponse' => 'GetRegistrantVerificationInfoResponse',
		'RegistrantVerificationInfo' => 'RegistrantVerificationInfo',
		'RegistrantVerificationStatus' => 'RegistrantVerificationStatus',
		'RegistrantVerificationDetails' => 'RegistrantVerificationDetails',
		'DoRegistrantVerification' => 'DoRegistrantVerification',
		'DoRegistrantVerificationResponse' => 'DoRegistrantVerificationResponse',
		'GetRegistrantVerificationStatus' => 'GetRegistrantVerificationStatus',
		'GetRegistrantVerificationStatusResponse' => 'GetRegistrantVerificationStatusResponse',
		'UploadRegistrantVerificationMessage' => 'UploadRegistrantVerificationMessage',
		'UploadRegistrantVerificationMessageResponse' => 'UploadRegistrantVerificationMessageResponse',
		'GetContactResponse' => 'GetContactResponse',
		'CreateContact' => 'CreateContact',
		'CreateContactResponse' => 'CreateContactResponse',
		'UpdateContact' => 'UpdateContact',
		'UpdateContactResponse' => 'UpdateContactResponse',
		'DeleteContact' => 'DeleteContact',
		'DeleteContactResponse' => 'DeleteContactResponse',
		'SearchContact' => 'SearchContact',
		'SearchContactResponse' => 'SearchContactResponse',
		'GetNameServer' => 'GetNameServer',
		'GetNameServerResponse' => 'GetNameServerResponse',
		'CreateNameServer' => 'CreateNameServer',
		'CreateNameServerResponse' => 'CreateNameServerResponse',
		'DeleteNameServer' => 'DeleteNameServer',
		'DeleteNameServerResponse' => 'DeleteNameServerResponse',
		'SearchNameServer' => 'SearchNameServer',
		'SearchNameServerResponse' => 'SearchNameServerResponse',
		'PollMessage' => 'PollMessage',
		'PollMessageResponse' => 'PollMessageResponse',
		'QueueItem' => 'QueueItem',
		'CallbackStatus' => 'CallbackStatus',
		'AckMessage' => 'AckMessage',
		'AckMessageResponse' => 'AckMessageResponse',
		'GetMessageQueue' => 'GetMessageQueue',
		'GetMessageQueueResponse' => 'GetMessageQueueResponse',
		'GetDnsSecKey' => 'GetDnsSecKey',
		'GetDnsSecKeyResponse' => 'GetDnsSecKeyResponse',
		'CreateDnsSecKey' => 'CreateDnsSecKey',
		'CreateDnsSecKeyResponse' => 'CreateDnsSecKeyResponse',
		'SearchDnsSecKey' => 'SearchDnsSecKey',
		'SearchDnsSecKeyResponse' => 'SearchDnsSecKeyResponse',
		'CreateDocumentation' => 'CreateDocumentation',
		'CreateDocumentationResponse' => 'CreateDocumentationResponse',
		'CreateApprovalDocumentation' => 'CreateApprovalDocumentation',
		'ApprovalDocumentationType' => 'ApprovalDocumentationType',
		'ApprovalDocumentation' => 'ApprovalDocumentation',
		'CreateApprovalDocumentationResponse' => 'CreateApprovalDocumentationResponse',
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
	 * LogIn
	 *
	 * @param LogIn $parameters
	 * @return LogInResponse
	 */
	public function LogIn(LogIn $parameters) {
		return $this->__soapCall(
			'LogIn',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * LogOut
	 *
	 * @param LogOut $parameters
	 * @return LogOutResponse
	 */
	public function LogOut(LogOut $parameters) {
		return $this->__soapCall(
			'LogOut',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetOrder
	 *
	 * @param GetOrder $parameters
	 * @return GetOrderResponse
	 */
	public function GetOrder(GetOrder $parameters) {
		return $this->__soapCall(
			'GetOrder',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * CreateOrder
	 *
	 * @param CreateOrder $parameters
	 * @return CreateOrderResponse
	 */
	public function CreateOrder(CreateOrder $parameters) {
		return $this->__soapCall(
			'CreateOrder',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * SearchOrder
	 *
	 * @param SearchOrder $parameters
	 * @return SearchOrderResponse
	 */
	public function SearchOrder(SearchOrder $parameters) {
		return $this->__soapCall(
			'SearchOrder',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetMessages
	 *
	 * @param GetMessages $parameters
	 * @return GetMessagesResponse
	 */
	public function GetMessages(GetMessages $parameters) {
		return $this->__soapCall(
			'GetMessages',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * ValidateOrder
	 *
	 * @param ValidateOrder $parameters
	 * @return ValidateOrderResponse
	 */
	public function ValidateOrder(ValidateOrder $parameters) {
		return $this->__soapCall(
			'ValidateOrder',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * UploadDocumentation
	 *
	 * @param UploadDocumentation $parameters
	 * @return UploadDocumentationResponse
	 */
	public function UploadDocumentation(UploadDocumentation $parameters) {
		return $this->__soapCall(
			'UploadDocumentation',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * CreateSupportOrder
	 *
	 * @param CreateSupportOrder $parameters
	 * @return CreateSupportOrderResponse
	 */
	public function CreateSupportOrder(CreateSupportOrder $parameters) {
		return $this->__soapCall(
			'CreateSupportOrder',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * UploadMessage
	 *
	 * @param UploadMessage $parameters
	 * @return UploadMessageResponse
	 */
	public function UploadMessage(UploadMessage $parameters) {
		return $this->__soapCall(
			'UploadMessage',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetDomain
	 *
	 * @param GetDomain $parameters
	 * @return GetDomainResponse
	 */
	public function GetDomain(GetDomain $parameters) {
		return $this->__soapCall(
			'GetDomain',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * SearchDomain
	 *
	 * @param SearchDomain $parameters
	 * @return SearchDomainResponse
	 */
	public function SearchDomain(SearchDomain $parameters) {
		return $this->__soapCall(
			'SearchDomain',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * Whois
	 *
	 * @param Whois $parameters
	 * @return WhoisResponse
	 */
	public function Whois(Whois $parameters) {
		return $this->__soapCall(
			'Whois',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * AvailabilityCheck
	 *
	 * @param AvailabilityCheck $parameters
	 * @return AvailabilityCheckResponse
	 */
	public function AvailabilityCheck(AvailabilityCheck $parameters) {
		return $this->__soapCall(
			'AvailabilityCheck',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetRegistrant
	 *
	 * @param GetRegistrant $parameters
	 * @return GetRegistrantResponse
	 */
	public function GetRegistrant(GetRegistrant $parameters) {
		return $this->__soapCall(
			'GetRegistrant',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * CreateRegistrant
	 *
	 * @param CreateRegistrant $parameters
	 * @return CreateRegistrantResponse
	 */
	public function CreateRegistrant(CreateRegistrant $parameters) {
		return $this->__soapCall(
			'CreateRegistrant',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * DeleteRegistrant
	 *
	 * @param DeleteRegistrant $parameters
	 * @return DeleteRegistrantResponse
	 */
	public function DeleteRegistrant(DeleteRegistrant $parameters) {
		return $this->__soapCall(
			'DeleteRegistrant',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * SearchRegistrant
	 *
	 * @param SearchRegistrant $parameters
	 * @return SearchRegistrantResponse
	 */
	public function SearchRegistrant(SearchRegistrant $parameters) {
		return $this->__soapCall(
			'SearchRegistrant',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetRegistrantVerificationInfo
	 *
	 * @param GetRegistrantVerificationInfo $parameters
	 * @return GetRegistrantVerificationInfoResponse
	 */
	public function GetRegistrantVerificationInfo(GetRegistrantVerificationInfo $parameters) {
		return $this->__soapCall(
			'GetRegistrantVerificationInfo',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * DoRegistrantVerification
	 *
	 * @param DoRegistrantVerification $parameters
	 * @return DoRegistrantVerificationResponse
	 */
	public function DoRegistrantVerification(DoRegistrantVerification $parameters) {
		return $this->__soapCall(
			'DoRegistrantVerification',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetRegistrantVerificationStatus
	 *
	 * @param GetRegistrantVerificationStatus $parameters
	 * @return GetRegistrantVerificationStatusResponse
	 */
	public function GetRegistrantVerificationStatus(GetRegistrantVerificationStatus $parameters) {
		return $this->__soapCall(
			'GetRegistrantVerificationStatus',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * UploadRegistrantVerificationMessage
	 *
	 * @param UploadRegistrantVerificationMessage $parameters
	 * @return UploadRegistrantVerificationMessageResponse
	 */
	public function UploadRegistrantVerificationMessage(UploadRegistrantVerificationMessage $parameters) {
		return $this->__soapCall(
			'UploadRegistrantVerificationMessage',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetContact
	 *
	 * @param GetContact $parameters
	 * @return GetContactResponse
	 */
	public function GetContact(GetContact $parameters) {
		return $this->__soapCall(
			'GetContact',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * CreateContact
	 *
	 * @param CreateContact $parameters
	 * @return CreateContactResponse
	 */
	public function CreateContact(CreateContact $parameters) {
		return $this->__soapCall(
			'CreateContact',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * UpdateContact
	 *
	 * @param UpdateContact $parameters
	 * @return UpdateContactResponse
	 */
	public function UpdateContact(UpdateContact $parameters) {
		return $this->__soapCall(
			'UpdateContact',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * DeleteContact
	 *
	 * @param DeleteContact $parameters
	 * @return DeleteContactResponse
	 */
	public function DeleteContact(DeleteContact $parameters) {
		return $this->__soapCall(
			'DeleteContact',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * SearchContact
	 *
	 * @param SearchContact $parameters
	 * @return SearchContactResponse
	 */
	public function SearchContact(SearchContact $parameters) {
		return $this->__soapCall(
			'SearchContact',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetNameServer
	 *
	 * @param GetNameServer $parameters
	 * @return GetNameServerResponse
	 */
	public function GetNameServer(GetNameServer $parameters) {
		return $this->__soapCall(
			'GetNameServer',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * CreateNameServer
	 *
	 * @param CreateNameServer $parameters
	 * @return CreateNameServerResponse
	 */
	public function CreateNameServer(CreateNameServer $parameters) {
		return $this->__soapCall(
			'CreateNameServer',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * DeleteNameServer
	 *
	 * @param DeleteNameServer $parameters
	 * @return DeleteNameServerResponse
	 */
	public function DeleteNameServer(DeleteNameServer $parameters) {
		return $this->__soapCall(
			'DeleteNameServer',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * SearchNameServer
	 *
	 * @param SearchNameServer $parameters
	 * @return SearchNameServerResponse
	 */
	public function SearchNameServer(SearchNameServer $parameters) {
		return $this->__soapCall(
			'SearchNameServer',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * PollMessage
	 *
	 * @param PollMessage $parameters
	 * @return PollMessageResponse
	 */
	public function PollMessage(PollMessage $parameters) {
		return $this->__soapCall(
			'PollMessage',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * AckMessage
	 *
	 * @param AckMessage $parameters
	 * @return AckMessageResponse
	 */
	public function AckMessage(AckMessage $parameters) {
		return $this->__soapCall(
			'AckMessage',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetMessageQueue
	 *
	 * @param GetMessageQueue $parameters
	 * @return GetMessageQueueResponse
	 */
	public function GetMessageQueue(GetMessageQueue $parameters) {
		return $this->__soapCall(
			'GetMessageQueue',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * GetDnsSecKey
	 *
	 * @param GetDnsSecKey $parameters
	 * @return GetDnsSecKeyResponse
	 */
	public function GetDnsSecKey(GetDnsSecKey $parameters) {
		return $this->__soapCall(
			'GetDnsSecKey',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * CreateDnsSecKey
	 *
	 * @param CreateDnsSecKey $parameters
	 * @return CreateDnsSecKeyResponse
	 */
	public function CreateDnsSecKey(CreateDnsSecKey $parameters) {
		return $this->__soapCall(
			'CreateDnsSecKey',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * SearchDnsSecKey
	 *
	 * @param SearchDnsSecKey $parameters
	 * @return SearchDnsSecKeyResponse
	 */
	public function SearchDnsSecKey(SearchDnsSecKey $parameters) {
		return $this->__soapCall(
			'SearchDnsSecKey',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * CreateDocumentation
	 *
	 * @param CreateDocumentation $parameters
	 * @return CreateDocumentationResponse
	 */
	public function CreateDocumentation(CreateDocumentation $parameters) {
		return $this->__soapCall(
			'CreateDocumentation',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

	/**
	 * CreateApprovalDocumentation
	 *
	 * @param CreateApprovalDocumentation $parameters
	 * @return CreateApprovalDocumentationResponse
	 */
	public function CreateApprovalDocumentation(CreateApprovalDocumentation $parameters) {
		return $this->__soapCall(
			'CreateApprovalDocumentation',
			array($parameters),
			array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
		);
	}

}
