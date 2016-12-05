<?php

class LogIn
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Session
	 */
	public $session;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Session $val
	 * @throws Exception
	 */
	public function setSession($val)
	{
        $this->session = (Session)$val;
	}
}

class Session
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Account;
	/**
	 * @var string
	 */
	public $Password;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccount($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Account');
        }
        $this->Account = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPassword($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Password');
        }
        $this->Password = (string)$val;
	}
}

class LogInResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $LogInResult;
	/**
	 * @var string
	 */
	public $sessionId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setLogInResult($val)
	{
        $this->LogInResult = (Response)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}
}

class Response
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Message');
        }
        $this->Message = (string)$val;
	}

	/**
	 * @param short $val
	 * @throws Exception
	 */
	public function setResultCode($val)
	{
        $this->ResultCode = (short)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setValues($val)
	{
        $this->Values = (ArrayOfstring)$val;
	}
}

class LogOut
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}
}

class LogOutResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $LogOutResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setLogOutResult($val)
	{
        $this->LogOutResult = (Response)$val;
	}
}

class GetOrder
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $orderId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for orderId');
        }
        $this->orderId = (string)$val;
	}
}

class GetOrderResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetOrderResult;
	/**
	 * @var Order
	 */
	public $order;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetOrderResult($val)
	{
        $this->GetOrderResult = (Response)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (Order)$val;
	}
}

class Order
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->OrderId = (string)$val;
	}

	/**
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = (OrderType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccountReference($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AccountReference');
        }
        $this->AccountReference = (string)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->Status = (OrderStatusType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionComment($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionComment');
        }
        $this->TransactionComment = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComments($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comments');
        }
        $this->Comments = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOptions($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Options');
        }
        $this->Options = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLocalPresence($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LocalPresence');
        }
        $this->LocalPresence = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBatch($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Batch');
        }
        $this->Batch = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentation($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Documentation');
        }
        $this->Documentation = (string)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val)
	{
        $this->Domain = (Domain)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->CreDate = (dateTime)$val;
	}
}

class OrderType
{}

class OrderStatusType
{}

class Domain
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->DomainName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainHandle');
        }
        $this->DomainHandle = (string)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRegPeriod($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RegPeriod = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setRenewPeriod($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RenewPeriod = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAuthInfo($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AuthInfo');
        }
        $this->AuthInfo = (string)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->CreDate = (dateTime)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setExpDate($val)
	{
        $this->ExpDate = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEncodingType($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EncodingType');
        }
        $this->EncodingType = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainPurpose($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainPurpose');
        }
        $this->DomainPurpose = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComment($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comment');
        }
        $this->Comment = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransferLock($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransferLock');
        }
        $this->TransferLock = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDeleteLock($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DeleteLock');
        }
        $this->DeleteLock = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setUpdateLock($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for UpdateLock');
        }
        $this->UpdateLock = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setQueueType($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for QueueType');
        }
        $this->QueueType = (string)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->Registrant = (Registrant)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setAdminContact($val)
	{
        $this->AdminContact = (Contact)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setTechContact($val)
	{
        $this->TechContact = (Contact)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setBillingContact($val)
	{
        $this->BillingContact = (Contact)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setResellerContact($val)
	{
        $this->ResellerContact = (Contact)$val;
	}

	/**
	 * @param NameServers $val
	 * @throws Exception
	 */
	public function setNameServers($val)
	{
        $this->NameServers = (NameServers)$val;
	}

	/**
	 * @param TradeMark $val
	 * @throws Exception
	 */
	public function setTrademark($val)
	{
        $this->Trademark = (TradeMark)$val;
	}

	/**
	 * @param DnsSecKeys $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val)
	{
        $this->DnsSecKeys = (DnsSecKeys)$val;
	}

	/**
	 * @param PrivacyProxy $val
	 * @throws Exception
	 */
	public function setPrivacyProxy($val)
	{
        $this->PrivacyProxy = (PrivacyProxy)$val;
	}
}

class Registrant
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->CreDate = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Handle');
        }
        $this->Handle = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrgName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrgName');
        }
        $this->OrgName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAddress1($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Address1');
        }
        $this->Address1 = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAddress2($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Address2');
        }
        $this->Address2 = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCity($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for City');
        }
        $this->City = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setState($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for State');
        }
        $this->State = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPostalCode($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCountryCode($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CountryCode');
        }
        $this->CountryCode = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Email');
        }
        $this->Email = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPhone($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone');
        }
        $this->Phone = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFax($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Fax');
        }
        $this->Fax = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantType($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegistrantType');
        }
        $this->RegistrantType = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVatNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for VatNumber');
        }
        $this->VatNumber = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantDate($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegistrantDate');
        }
        $this->RegistrantDate = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNexusCategory($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NexusCategory');
        }
        $this->NexusCategory = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RegistrantNumber');
        }
        $this->RegistrantNumber = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDetails($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Details');
        }
        $this->Details = (string)$val;
	}
}

class Contact
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->CreDate = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Handle');
        }
        $this->Handle = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFirstName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FirstName');
        }
        $this->FirstName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLastName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LastName');
        }
        $this->LastName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrgName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrgName');
        }
        $this->OrgName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAddress1($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Address1');
        }
        $this->Address1 = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAddress2($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Address2');
        }
        $this->Address2 = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPostalCode($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCity($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for City');
        }
        $this->City = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setState($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for State');
        }
        $this->State = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCountryCode($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CountryCode');
        }
        $this->CountryCode = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Email');
        }
        $this->Email = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPhone($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone');
        }
        $this->Phone = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFax($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Fax');
        }
        $this->Fax = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Type');
        }
        $this->Type = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDetails($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Details');
        }
        $this->Details = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrganisationNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrganisationNumber');
        }
        $this->OrganisationNumber = (string)$val;
	}
}

class NameServers
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer1($val)
	{
        $this->NameServer1 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer2($val)
	{
        $this->NameServer2 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer3($val)
	{
        $this->NameServer3 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer4($val)
	{
        $this->NameServer4 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer5($val)
	{
        $this->NameServer5 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer6($val)
	{
        $this->NameServer6 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer7($val)
	{
        $this->NameServer7 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer8($val)
	{
        $this->NameServer8 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer9($val)
	{
        $this->NameServer9 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer10($val)
	{
        $this->NameServer10 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer11($val)
	{
        $this->NameServer11 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer12($val)
	{
        $this->NameServer12 = (NameServer)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer13($val)
	{
        $this->NameServer13 = (NameServer)$val;
	}
}

class NameServer
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->CreDate = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Handle');
        }
        $this->Handle = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHostName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HostName');
        }
        $this->HostName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setIpAddress($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for IpAddress');
        }
        $this->IpAddress = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setIpV6Address($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for IpV6Address');
        }
        $this->IpV6Address = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDetails($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Details');
        }
        $this->Details = (string)$val;
	}
}

class TradeMark
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCountry($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Country');
        }
        $this->Country = (string)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setDate($val)
	{
        $this->Date = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNumber($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Number');
        }
        $this->Number = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Type');
        }
        $this->Type = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Contact');
        }
        $this->Contact = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setContactLanguage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ContactLanguage');
        }
        $this->ContactLanguage = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentationLanguage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DocumentationLanguage');
        }
        $this->DocumentationLanguage = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSecondContact($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SecondContact');
        }
        $this->SecondContact = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setThirdContact($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ThirdContact');
        }
        $this->ThirdContact = (string)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setRegDate($val)
	{
        $this->RegDate = (dateTime)$val;
	}
}

class DnsSecKeys
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey1($val)
	{
        $this->DnsSecKey1 = (DnsSecKey)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey2($val)
	{
        $this->DnsSecKey2 = (DnsSecKey)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey3($val)
	{
        $this->DnsSecKey3 = (DnsSecKey)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey4($val)
	{
        $this->DnsSecKey4 = (DnsSecKey)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey5($val)
	{
        $this->DnsSecKey5 = (DnsSecKey)$val;
	}
}

class DnsSecKey
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Handle');
        }
        $this->Handle = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDigestAlgorithm($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DigestAlgorithm');
        }
        $this->DigestAlgorithm = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDigestType($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DigestType');
        }
        $this->DigestType = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDigest($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Digest');
        }
        $this->Digest = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setProtocol($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Protocol');
        }
        $this->Protocol = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeyType($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for KeyType');
        }
        $this->KeyType = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeyAlgorithm($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for KeyAlgorithm');
        }
        $this->KeyAlgorithm = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKeyTag($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for KeyTag');
        }
        $this->KeyTag = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPublicKey($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PublicKey');
        }
        $this->PublicKey = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CreDate');
        }
        $this->CreDate = (string)$val;
	}
}

class PrivacyProxy
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param PrivacyProxyType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = (PrivacyProxyType)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyAdmin($val)
	{
        $this->PrivacyAdmin = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyTech($val)
	{
        $this->PrivacyTech = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyBilling($val)
	{
        $this->PrivacyBilling = (boolean)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->Extensions = (Extensions)$val;
	}
}

class PrivacyProxyType
{}

class Extensions
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Extension
	 */
	public $Extension;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Extension $val
	 * @throws Exception
	 */
	public function setExtension($val)
	{
        $this->Extension = (Extension)$val;
	}
}

class Extension
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Key;
	/**
	 * @var string
	 */
	public $Value;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKey($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Key');
        }
        $this->Key = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
        $this->Value = (string)$val;
	}
}

class CreateOrder
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Order
	 */
	public $order;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (Order)$val;
	}
}

class CreateOrderResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $CreateOrderResult;
	/**
	 * @var Order
	 */
	public $order;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateOrderResult($val)
	{
        $this->CreateOrderResult = (Response)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (Order)$val;
	}
}

class SearchOrder
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchOrderRequest
	 */
	public $orderRequest;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param SearchOrderRequest $val
	 * @throws Exception
	 */
	public function setOrderRequest($val)
	{
        $this->orderRequest = (SearchOrderRequest)$val;
	}
}

class SearchOrderRequest
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfOrderType $val
	 * @throws Exception
	 */
	public function setOrderTypes($val)
	{
        $this->OrderTypes = (ArrayOfOrderType)$val;
	}

	/**
	 * @param ArrayOfOrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatusTypes($val)
	{
        $this->OrderStatusTypes = (ArrayOfOrderStatusType)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setFromDate($val)
	{
        $this->FromDate = (dateTime)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setToDate($val)
	{
        $this->ToDate = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->DomainName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionComment($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionComment');
        }
        $this->TransactionComment = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComments($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comments');
        }
        $this->Comments = (string)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIncludeDomainDetails($val)
	{
        $this->IncludeDomainDetails = (boolean)$val;
	}

	/**
	 * @param PagingInfo $val
	 * @throws Exception
	 */
	public function setPageInfo($val)
	{
        $this->PageInfo = (PagingInfo)$val;
	}

	/**
	 * @param SearchOrderSortType $val
	 * @throws Exception
	 */
	public function setOrderSort($val)
	{
        $this->OrderSort = (SearchOrderSortType)$val;
	}
}

class SearchOrderSortType
{}

class PagingInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $PageIndex;
	/**
	 * @var int
	 */
	public $PageSize;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPageIndex($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PageIndex = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPageSize($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PageSize = (int)$val;
	}
}

class SearchOrderResponse
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchOrderResult($val)
	{
        $this->SearchOrderResult = (Response)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalOrders($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->totalOrders = (int)$val;
	}

	/**
	 * @param ArrayOfOrder $val
	 * @throws Exception
	 */
	public function setOrders($val)
	{
        $this->orders = (ArrayOfOrder)$val;
	}
}

class GetMessages
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $orderId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for orderId');
        }
        $this->orderId = (string)$val;
	}
}

class GetMessagesResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetMessagesResult;
	/**
	 * @var Message[]
	 */
	public $messages;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessagesResult($val)
	{
        $this->GetMessagesResult = (Response)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val)
	{
        $this->messages = (ArrayOfMessage)$val;
	}
}

class Message
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->Attachments = (ArrayOfAttachment)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBody($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Body');
        }
        $this->Body = (string)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreated($val)
	{
        $this->Created = (dateTime)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFromAddress($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FromAddress');
        }
        $this->FromAddress = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSubject($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Subject');
        }
        $this->Subject = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setToAddress($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ToAddress');
        }
        $this->ToAddress = (string)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = (MessageType)$val;
	}
}

class Attachment
{
	// @codingStandardsIgnoreStart
	/**
	 * @var base64Binary
	 */
	public $Data;
	/**
	 * @var string
	 */
	public $FileName;
	// @codingStandardsIgnoreEnd

	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setData($val)
	{
        $this->Data = (base64Binary)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFileName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FileName');
        }
        $this->FileName = (string)$val;
	}
}

class MessageType
{}

class ValidateOrder
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Order
	 */
	public $order;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (Order)$val;
	}
}

class ValidateOrderResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $ValidateOrderResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setValidateOrderResult($val)
	{
        $this->ValidateOrderResult = (Response)$val;
	}
}

class UploadDocumentation
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for orderId');
        }
        $this->orderId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFileName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for fileName');
        }
        $this->fileName = (string)$val;
	}

	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setContent($val)
	{
        $this->content = (base64Binary)$val;
	}
}

class UploadDocumentationResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $UploadDocumentationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadDocumentationResult($val)
	{
        $this->UploadDocumentationResult = (Response)$val;
	}
}

class CreateSupportOrder
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSubject($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for subject');
        }
        $this->subject = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBody($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for body');
        }
        $this->body = (string)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = (ArrayOfAttachment)$val;
	}
}

class CreateSupportOrderResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $CreateSupportOrderResult;
	/**
	 * @var string
	 */
	public $orderId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateSupportOrderResult($val)
	{
        $this->CreateSupportOrderResult = (Response)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for orderId');
        }
        $this->orderId = (string)$val;
	}
}

class UploadMessage
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for orderId');
        }
        $this->orderId = (string)$val;
	}

	/**
	 * @param Message $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        $this->message = (Message)$val;
	}
}

class UploadMessageResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $UploadMessageResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadMessageResult($val)
	{
        $this->UploadMessageResult = (Response)$val;
	}
}

class GetDomain
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $domainHandle;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for domainHandle');
        }
        $this->domainHandle = (string)$val;
	}
}

class GetDomainResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetDomainResult;
	/**
	 * @var Domain
	 */
	public $domain;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDomainResult($val)
	{
        $this->GetDomainResult = (Response)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val)
	{
        $this->domain = (Domain)$val;
	}
}

class SearchDomain
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (SearchCriteria)$val;
	}
}

class SearchCriteria
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfClause $val
	 * @throws Exception
	 */
	public function setClauses($val)
	{
        $this->Clauses = (ArrayOfClause)$val;
	}

	/**
	 * @param SearchModeType $val
	 * @throws Exception
	 */
	public function setMode($val)
	{
        $this->Mode = (SearchModeType)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setWithoutstates($val)
	{
        $this->Withoutstates = (ArrayOfstring)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setWithstates($val)
	{
        $this->Withstates = (ArrayOfstring)$val;
	}
}

class Clause
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttribute($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Attribute');
        }
        $this->Attribute = (string)$val;
	}

	/**
	 * @param SearchOperatorType $val
	 * @throws Exception
	 */
	public function setOperator($val)
	{
        $this->Operator = (SearchOperatorType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
        $this->Value = (string)$val;
	}
}

class SearchOperatorType
{}

class SearchModeType
{}

class SearchDomainResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $SearchDomainResult;
	/**
	 * @var Domain[]
	 */
	public $domains;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDomainResult($val)
	{
        $this->SearchDomainResult = (Response)$val;
	}

	/**
	 * @param ArrayOfDomain $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = (ArrayOfDomain)$val;
	}
}

class Whois
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $domainName;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for domainName');
        }
        $this->domainName = (string)$val;
	}
}

class WhoisResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $WhoisResult;
	/**
	 * @var string
	 */
	public $whoisData;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setWhoisResult($val)
	{
        $this->WhoisResult = (Response)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setWhoisData($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for whoisData');
        }
        $this->whoisData = (string)$val;
	}
}

class AvailabilityCheck
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = (ArrayOfString)$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setTlds($val)
	{
        $this->tlds = (ArrayOfString)$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val)
	{
        $this->quality = (QualityType)$val;
	}
}

class QualityType
{}

class AvailabilityCheckResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $AvailabilityCheckResult;
	/**
	 * @var AvailabilityCheckResult[]
	 */
	public $results;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAvailabilityCheckResult($val)
	{
        $this->AvailabilityCheckResult = (Response)$val;
	}

	/**
	 * @param ArrayOfAvailabilityCheckResult $val
	 * @throws Exception
	 */
	public function setResults($val)
	{
        $this->results = (ArrayOfAvailabilityCheckResult)$val;
	}
}

class AvailabilityCheckResult
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->DomainName = (string)$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val)
	{
        $this->Quality = (QualityType)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setStatusCode($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->StatusCode = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatusMessage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StatusMessage');
        }
        $this->StatusMessage = (string)$val;
	}
}

class GetRegistrant
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $registrantHandle;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for registrantHandle');
        }
        $this->registrantHandle = (string)$val;
	}
}

class GetRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetRegistrantResult;
	/**
	 * @var Registrant
	 */
	public $registrant;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantResult($val)
	{
        $this->GetRegistrantResult = (Response)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = (Registrant)$val;
	}
}

class CreateRegistrant
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Registrant
	 */
	public $registrant;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = (Registrant)$val;
	}
}

class CreateRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $CreateRegistrantResult;
	/**
	 * @var Registrant
	 */
	public $registrant;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateRegistrantResult($val)
	{
        $this->CreateRegistrantResult = (Response)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = (Registrant)$val;
	}
}

class DeleteRegistrant
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $registrantHandle;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRegistrantHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for registrantHandle');
        }
        $this->registrantHandle = (string)$val;
	}
}

class DeleteRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $DeleteRegistrantResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteRegistrantResult($val)
	{
        $this->DeleteRegistrantResult = (Response)$val;
	}
}

class SearchRegistrant
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (SearchCriteria)$val;
	}
}

class SearchRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $SearchRegistrantResult;
	/**
	 * @var Registrant[]
	 */
	public $registrants;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchRegistrantResult($val)
	{
        $this->SearchRegistrantResult = (Response)$val;
	}

	/**
	 * @param ArrayOfRegistrant $val
	 * @throws Exception
	 */
	public function setRegistrants($val)
	{
        $this->registrants = (ArrayOfRegistrant)$val;
	}
}

class GetContact
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $contactHandle;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setContactHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for contactHandle');
        }
        $this->contactHandle = (string)$val;
	}
}

class GetRegistrantVerificationInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $value;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for value');
        }
        $this->value = (string)$val;
	}
}

class GetRegistrantVerificationInfoResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetRegistrantVerificationInfoResult;
	/**
	 * @var RegistrantVerificationInfo
	 */
	public $verificationInfo;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationInfoResult($val)
	{
        $this->GetRegistrantVerificationInfoResult = (Response)$val;
	}

	/**
	 * @param RegistrantVerificationInfo $val
	 * @throws Exception
	 */
	public function setVerificationInfo($val)
	{
        $this->verificationInfo = (RegistrantVerificationInfo)$val;
	}
}

class RegistrantVerificationInfo
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmailAddress($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EmailAddress');
        }
        $this->EmailAddress = (string)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->VerificationStatus = (RegistrantVerificationStatus)$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setVerificationDetails($val)
	{
        $this->VerificationDetails = (RegistrantVerificationDetails)$val;
	}
}

class RegistrantVerificationStatus
{}

class RegistrantVerificationDetails
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVerifiedBy($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for VerifiedBy');
        }
        $this->VerifiedBy = (string)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setVerificationDate($val)
	{
        $this->VerificationDate = (dateTime)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val)
	{
        $this->Messages = (ArrayOfMessage)$val;
	}
}

class DoRegistrantVerification
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $value;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for value');
        }
        $this->value = (string)$val;
	}
}

class DoRegistrantVerificationResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $DoRegistrantVerificationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDoRegistrantVerificationResult($val)
	{
        $this->DoRegistrantVerificationResult = (Response)$val;
	}
}

class GetRegistrantVerificationStatus
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $value;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for value');
        }
        $this->value = (string)$val;
	}
}

class GetRegistrantVerificationStatusResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetRegistrantVerificationStatusResult;
	/**
	 * @var RegistrantVerificationStatus
	 */
	public $verificationStatus;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationStatusResult($val)
	{
        $this->GetRegistrantVerificationStatusResult = (Response)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->verificationStatus = (RegistrantVerificationStatus)$val;
	}
}

class UploadRegistrantVerificationMessage
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for value');
        }
        $this->value = (string)$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setDetails($val)
	{
        $this->details = (RegistrantVerificationDetails)$val;
	}
}

class UploadRegistrantVerificationMessageResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $UploadRegistrantVerificationMessageResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadRegistrantVerificationMessageResult($val)
	{
        $this->UploadRegistrantVerificationMessageResult = (Response)$val;
	}
}

class GetContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetContactResult;
	/**
	 * @var Contact
	 */
	public $contact;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetContactResult($val)
	{
        $this->GetContactResult = (Response)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (Contact)$val;
	}
}

class CreateContact
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Contact
	 */
	public $contact;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (Contact)$val;
	}
}

class CreateContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $CreateContactResult;
	/**
	 * @var Contact
	 */
	public $contact;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateContactResult($val)
	{
        $this->CreateContactResult = (Response)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (Contact)$val;
	}
}

class UpdateContact
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Contact
	 */
	public $contact;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (Contact)$val;
	}
}

class UpdateContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $UpdateContactResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUpdateContactResult($val)
	{
        $this->UpdateContactResult = (Response)$val;
	}
}

class DeleteContact
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $contactHandle;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setContactHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for contactHandle');
        }
        $this->contactHandle = (string)$val;
	}
}

class DeleteContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $DeleteContactResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteContactResult($val)
	{
        $this->DeleteContactResult = (Response)$val;
	}
}

class SearchContact
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (SearchCriteria)$val;
	}
}

class SearchContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $SearchContactResult;
	/**
	 * @var Contact[]
	 */
	public $contacts;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchContactResult($val)
	{
        $this->SearchContactResult = (Response)$val;
	}

	/**
	 * @param ArrayOfContact $val
	 * @throws Exception
	 */
	public function setContacts($val)
	{
        $this->contacts = (ArrayOfContact)$val;
	}
}

class GetNameServer
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $nameServerHandle;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNameServerHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for nameServerHandle');
        }
        $this->nameServerHandle = (string)$val;
	}
}

class GetNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetNameServerResult;
	/**
	 * @var NameServer
	 */
	public $nameServer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetNameServerResult($val)
	{
        $this->GetNameServerResult = (Response)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = (NameServer)$val;
	}
}

class CreateNameServer
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var NameServer
	 */
	public $nameServer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = (NameServer)$val;
	}
}

class CreateNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $CreateNameServerResult;
	/**
	 * @var NameServer
	 */
	public $nameServer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateNameServerResult($val)
	{
        $this->CreateNameServerResult = (Response)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = (NameServer)$val;
	}
}

class DeleteNameServer
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $nameServerHandle;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNameServerHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for nameServerHandle');
        }
        $this->nameServerHandle = (string)$val;
	}
}

class DeleteNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $DeleteNameServerResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteNameServerResult($val)
	{
        $this->DeleteNameServerResult = (Response)$val;
	}
}

class SearchNameServer
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (SearchCriteria)$val;
	}
}

class SearchNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $SearchNameServerResult;
	/**
	 * @var NameServer[]
	 */
	public $nameServers;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchNameServerResult($val)
	{
        $this->SearchNameServerResult = (Response)$val;
	}

	/**
	 * @param ArrayOfNameServer $val
	 * @throws Exception
	 */
	public function setNameServers($val)
	{
        $this->nameServers = (ArrayOfNameServer)$val;
	}
}

class PollMessage
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var MessageType
	 */
	public $msgType;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val)
	{
        $this->msgType = (MessageType)$val;
	}
}

class PollMessageResponse
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setPollMessageResult($val)
	{
        $this->PollMessageResult = (Response)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->msgCount = (int)$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val)
	{
        $this->item = (QueueItem)$val;
	}
}

class QueueItem
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->Attachments = (ArrayOfAttachment)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainHandle');
        }
        $this->DomainHandle = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->DomainName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMsg($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Msg');
        }
        $this->Msg = (string)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->MsgId = (int)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val)
	{
        $this->MsgType = (MessageType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->OrderId = (string)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatus($val)
	{
        $this->OrderStatus = (OrderStatusType)$val;
	}

	/**
	 * @param ArrayOfCallbackStatus $val
	 * @throws Exception
	 */
	public function setStatusList($val)
	{
        $this->StatusList = (ArrayOfCallbackStatus)$val;
	}
}

class CallbackStatus
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Message;
	/**
	 * @var string
	 */
	public $Status;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Message');
        }
        $this->Message = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (string)$val;
	}
}

class AckMessage
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var int
	 */
	public $msgId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->msgId = (int)$val;
	}
}

class AckMessageResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $AckMessageResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAckMessageResult($val)
	{
        $this->AckMessageResult = (Response)$val;
	}
}

class GetMessageQueue
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var int
	 */
	public $msgId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->msgId = (int)$val;
	}
}

class GetMessageQueueResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetMessageQueueResult;
	/**
	 * @var QueueItem
	 */
	public $item;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessageQueueResult($val)
	{
        $this->GetMessageQueueResult = (Response)$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val)
	{
        $this->item = (QueueItem)$val;
	}
}

class GetDnsSecKey
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var string
	 */
	public $dnsSecKeyHandle;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDnsSecKeyHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for dnsSecKeyHandle');
        }
        $this->dnsSecKeyHandle = (string)$val;
	}
}

class GetDnsSecKeyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $GetDnsSecKeyResult;
	/**
	 * @var DnsSecKey
	 */
	public $dnsSecKey;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDnsSecKeyResult($val)
	{
        $this->GetDnsSecKeyResult = (Response)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsSecKey = (DnsSecKey)$val;
	}
}

class CreateDnsSecKey
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var DnsSecKey
	 */
	public $dnsSecKey;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsSecKey = (DnsSecKey)$val;
	}
}

class CreateDnsSecKeyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $CreateDnsSecKeyResult;
	/**
	 * @var DnsSecKey
	 */
	public $dnsSecKey;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDnsSecKeyResult($val)
	{
        $this->CreateDnsSecKeyResult = (Response)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsSecKey = (DnsSecKey)$val;
	}
}

class SearchDnsSecKey
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (SearchCriteria)$val;
	}
}

class SearchDnsSecKeyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $SearchDnsSecKeyResult;
	/**
	 * @var DnsSecKey[]
	 */
	public $dnsSecKeys;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDnsSecKeyResult($val)
	{
        $this->SearchDnsSecKeyResult = (Response)$val;
	}

	/**
	 * @param ArrayOfDnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val)
	{
        $this->dnsSecKeys = (ArrayOfDnsSecKey)$val;
	}
}

class CreateDocumentation
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var Attachment[]
	 */
	public $attachments;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = (ArrayOfAttachment)$val;
	}
}

class CreateDocumentationResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $CreateDocumentationResult;
	/**
	 * @var int
	 */
	public $documentationId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDocumentationResult($val)
	{
        $this->CreateDocumentationResult = (Response)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDocumentationId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->documentationId = (int)$val;
	}
}

class CreateApprovalDocumentation
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $sessionId;
	/**
	 * @var ApprovalDocumentation
	 */
	public $approvalDocumentation;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
	}

	/**
	 * @param ApprovalDocumentation $val
	 * @throws Exception
	 */
	public function setApprovalDocumentation($val)
	{
        $this->approvalDocumentation = (ApprovalDocumentation)$val;
	}
}

class ApprovalDocumentationType
{}

class ApprovalDocumentation
{
	// @codingStandardsIgnoreStart
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
	// @codingStandardsIgnoreEnd

	/**
	 * @param ApprovalDocumentationType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = (ApprovalDocumentationType)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setObjectNames($val)
	{
        $this->ObjectNames = (ArrayOfstring)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->OrderId = (string)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->Attachments = (ArrayOfAttachment)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->Extensions = (Extensions)$val;
	}
}

class CreateApprovalDocumentationResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Response
	 */
	public $CreateApprovalDocumentationResult;
	/**
	 * @var string
	 */
	public $documentationId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateApprovalDocumentationResult($val)
	{
        $this->CreateApprovalDocumentationResult = (Response)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentationId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for documentationId');
        }
        $this->documentationId = (string)$val;
	}
}

/**
 * AscioServicesClient
 */
class AscioServicesClient extends SoapClient {

	const WSDL_FILE = "AscioService.wsdl";
	private $classmap = array(
        'LogIn' =>
            'LogIn',
        'Session' =>
            'Session',
        'LogInResponse' =>
            'LogInResponse',
        'Response' =>
            'Response',
        'LogOut' =>
            'LogOut',
        'LogOutResponse' =>
            'LogOutResponse',
        'GetOrder' =>
            'GetOrder',
        'GetOrderResponse' =>
            'GetOrderResponse',
        'Order' =>
            'Order',
        'OrderType' =>
            'OrderType',
        'OrderStatusType' =>
            'OrderStatusType',
        'Domain' =>
            'Domain',
        'Registrant' =>
            'Registrant',
        'Contact' =>
            'Contact',
        'NameServers' =>
            'NameServers',
        'NameServer' =>
            'NameServer',
        'TradeMark' =>
            'TradeMark',
        'DnsSecKeys' =>
            'DnsSecKeys',
        'DnsSecKey' =>
            'DnsSecKey',
        'PrivacyProxy' =>
            'PrivacyProxy',
        'PrivacyProxyType' =>
            'PrivacyProxyType',
        'Extensions' =>
            'Extensions',
        'Extension' =>
            'Extension',
        'CreateOrder' =>
            'CreateOrder',
        'CreateOrderResponse' =>
            'CreateOrderResponse',
        'SearchOrder' =>
            'SearchOrder',
        'SearchOrderRequest' =>
            'SearchOrderRequest',
        'SearchOrderSortType' =>
            'SearchOrderSortType',
        'PagingInfo' =>
            'PagingInfo',
        'SearchOrderResponse' =>
            'SearchOrderResponse',
        'GetMessages' =>
            'GetMessages',
        'GetMessagesResponse' =>
            'GetMessagesResponse',
        'Message' =>
            'Message',
        'Attachment' =>
            'Attachment',
        'MessageType' =>
            'MessageType',
        'ValidateOrder' =>
            'ValidateOrder',
        'ValidateOrderResponse' =>
            'ValidateOrderResponse',
        'UploadDocumentation' =>
            'UploadDocumentation',
        'UploadDocumentationResponse' =>
            'UploadDocumentationResponse',
        'CreateSupportOrder' =>
            'CreateSupportOrder',
        'CreateSupportOrderResponse' =>
            'CreateSupportOrderResponse',
        'UploadMessage' =>
            'UploadMessage',
        'UploadMessageResponse' =>
            'UploadMessageResponse',
        'GetDomain' =>
            'GetDomain',
        'GetDomainResponse' =>
            'GetDomainResponse',
        'SearchDomain' =>
            'SearchDomain',
        'SearchCriteria' =>
            'SearchCriteria',
        'Clause' =>
            'Clause',
        'SearchOperatorType' =>
            'SearchOperatorType',
        'SearchModeType' =>
            'SearchModeType',
        'SearchDomainResponse' =>
            'SearchDomainResponse',
        'Whois' =>
            'Whois',
        'WhoisResponse' =>
            'WhoisResponse',
        'AvailabilityCheck' =>
            'AvailabilityCheck',
        'QualityType' =>
            'QualityType',
        'AvailabilityCheckResponse' =>
            'AvailabilityCheckResponse',
        'AvailabilityCheckResult' =>
            'AvailabilityCheckResult',
        'GetRegistrant' =>
            'GetRegistrant',
        'GetRegistrantResponse' =>
            'GetRegistrantResponse',
        'CreateRegistrant' =>
            'CreateRegistrant',
        'CreateRegistrantResponse' =>
            'CreateRegistrantResponse',
        'DeleteRegistrant' =>
            'DeleteRegistrant',
        'DeleteRegistrantResponse' =>
            'DeleteRegistrantResponse',
        'SearchRegistrant' =>
            'SearchRegistrant',
        'SearchRegistrantResponse' =>
            'SearchRegistrantResponse',
        'GetContact' =>
            'GetContact',
        'GetRegistrantVerificationInfo' =>
            'GetRegistrantVerificationInfo',
        'GetRegistrantVerificationInfoResponse' =>
            'GetRegistrantVerificationInfoResponse',
        'RegistrantVerificationInfo' =>
            'RegistrantVerificationInfo',
        'RegistrantVerificationStatus' =>
            'RegistrantVerificationStatus',
        'RegistrantVerificationDetails' =>
            'RegistrantVerificationDetails',
        'DoRegistrantVerification' =>
            'DoRegistrantVerification',
        'DoRegistrantVerificationResponse' =>
            'DoRegistrantVerificationResponse',
        'GetRegistrantVerificationStatus' =>
            'GetRegistrantVerificationStatus',
        'GetRegistrantVerificationStatusResponse' =>
            'GetRegistrantVerificationStatusResponse',
        'UploadRegistrantVerificationMessage' =>
            'UploadRegistrantVerificationMessage',
        'UploadRegistrantVerificationMessageResponse' =>
            'UploadRegistrantVerificationMessageResponse',
        'GetContactResponse' =>
            'GetContactResponse',
        'CreateContact' =>
            'CreateContact',
        'CreateContactResponse' =>
            'CreateContactResponse',
        'UpdateContact' =>
            'UpdateContact',
        'UpdateContactResponse' =>
            'UpdateContactResponse',
        'DeleteContact' =>
            'DeleteContact',
        'DeleteContactResponse' =>
            'DeleteContactResponse',
        'SearchContact' =>
            'SearchContact',
        'SearchContactResponse' =>
            'SearchContactResponse',
        'GetNameServer' =>
            'GetNameServer',
        'GetNameServerResponse' =>
            'GetNameServerResponse',
        'CreateNameServer' =>
            'CreateNameServer',
        'CreateNameServerResponse' =>
            'CreateNameServerResponse',
        'DeleteNameServer' =>
            'DeleteNameServer',
        'DeleteNameServerResponse' =>
            'DeleteNameServerResponse',
        'SearchNameServer' =>
            'SearchNameServer',
        'SearchNameServerResponse' =>
            'SearchNameServerResponse',
        'PollMessage' =>
            'PollMessage',
        'PollMessageResponse' =>
            'PollMessageResponse',
        'QueueItem' =>
            'QueueItem',
        'CallbackStatus' =>
            'CallbackStatus',
        'AckMessage' =>
            'AckMessage',
        'AckMessageResponse' =>
            'AckMessageResponse',
        'GetMessageQueue' =>
            'GetMessageQueue',
        'GetMessageQueueResponse' =>
            'GetMessageQueueResponse',
        'GetDnsSecKey' =>
            'GetDnsSecKey',
        'GetDnsSecKeyResponse' =>
            'GetDnsSecKeyResponse',
        'CreateDnsSecKey' =>
            'CreateDnsSecKey',
        'CreateDnsSecKeyResponse' =>
            'CreateDnsSecKeyResponse',
        'SearchDnsSecKey' =>
            'SearchDnsSecKey',
        'SearchDnsSecKeyResponse' =>
            'SearchDnsSecKeyResponse',
        'CreateDocumentation' =>
            'CreateDocumentation',
        'CreateDocumentationResponse' =>
            'CreateDocumentationResponse',
        'CreateApprovalDocumentation' =>
            'CreateApprovalDocumentation',
        'ApprovalDocumentationType' =>
            'ApprovalDocumentationType',
        'ApprovalDocumentation' =>
            'ApprovalDocumentation',
        'CreateApprovalDocumentationResponse' =>
            'CreateApprovalDocumentationResponse',
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
