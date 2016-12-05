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
        $this->session = ()$val;
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
        $this->Account = ()$val;
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
        $this->Password = ()$val;
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
        $this->LogInResult = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->Message = ()$val;
	}

	/**
	 * @param short $val
	 * @throws Exception
	 */
	public function setResultCode($val)
	{
        $this->ResultCode = ()$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setValues($val)
	{
        $this->Values = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->LogOutResult = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->orderId = ()$val;
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
        $this->GetOrderResult = ()$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = ()$val;
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
        $this->OrderId = ()$val;
	}

	/**
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = ()$val;
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
        $this->AccountReference = ()$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->Status = ()$val;
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
        $this->TransactionComment = ()$val;
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
        $this->Comments = ()$val;
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
        $this->Options = ()$val;
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
        $this->LocalPresence = ()$val;
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
        $this->Batch = ()$val;
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
        $this->Documentation = ()$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val)
	{
        $this->Domain = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->CreDate = ()$val;
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
        $this->DomainName = ()$val;
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
        $this->DomainHandle = ()$val;
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
        $this->RegPeriod = ()$val;
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
        $this->RenewPeriod = ()$val;
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
        $this->Status = ()$val;
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
        $this->AuthInfo = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->CreDate = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setExpDate($val)
	{
        $this->ExpDate = ()$val;
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
        $this->EncodingType = ()$val;
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
        $this->DomainPurpose = ()$val;
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
        $this->Comment = ()$val;
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
        $this->TransferLock = ()$val;
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
        $this->DeleteLock = ()$val;
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
        $this->UpdateLock = ()$val;
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
        $this->QueueType = ()$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->Registrant = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setAdminContact($val)
	{
        $this->AdminContact = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setTechContact($val)
	{
        $this->TechContact = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setBillingContact($val)
	{
        $this->BillingContact = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setResellerContact($val)
	{
        $this->ResellerContact = ()$val;
	}

	/**
	 * @param NameServers $val
	 * @throws Exception
	 */
	public function setNameServers($val)
	{
        $this->NameServers = ()$val;
	}

	/**
	 * @param TradeMark $val
	 * @throws Exception
	 */
	public function setTrademark($val)
	{
        $this->Trademark = ()$val;
	}

	/**
	 * @param DnsSecKeys $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val)
	{
        $this->DnsSecKeys = ()$val;
	}

	/**
	 * @param PrivacyProxy $val
	 * @throws Exception
	 */
	public function setPrivacyProxy($val)
	{
        $this->PrivacyProxy = ()$val;
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
        $this->CreDate = ()$val;
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
        $this->Status = ()$val;
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
        $this->Handle = ()$val;
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
        $this->Name = ()$val;
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
        $this->OrgName = ()$val;
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
        $this->Address1 = ()$val;
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
        $this->Address2 = ()$val;
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
        $this->City = ()$val;
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
        $this->State = ()$val;
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
        $this->PostalCode = ()$val;
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
        $this->CountryCode = ()$val;
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
        $this->Email = ()$val;
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
        $this->Phone = ()$val;
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
        $this->Fax = ()$val;
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
        $this->RegistrantType = ()$val;
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
        $this->VatNumber = ()$val;
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
        $this->RegistrantDate = ()$val;
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
        $this->NexusCategory = ()$val;
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
        $this->RegistrantNumber = ()$val;
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
        $this->Details = ()$val;
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
        $this->CreDate = ()$val;
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
        $this->Status = ()$val;
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
        $this->Handle = ()$val;
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
        $this->FirstName = ()$val;
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
        $this->LastName = ()$val;
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
        $this->OrgName = ()$val;
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
        $this->Address1 = ()$val;
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
        $this->Address2 = ()$val;
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
        $this->PostalCode = ()$val;
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
        $this->City = ()$val;
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
        $this->State = ()$val;
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
        $this->CountryCode = ()$val;
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
        $this->Email = ()$val;
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
        $this->Phone = ()$val;
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
        $this->Fax = ()$val;
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
        $this->Type = ()$val;
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
        $this->Details = ()$val;
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
        $this->OrganisationNumber = ()$val;
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
        $this->NameServer1 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer2($val)
	{
        $this->NameServer2 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer3($val)
	{
        $this->NameServer3 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer4($val)
	{
        $this->NameServer4 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer5($val)
	{
        $this->NameServer5 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer6($val)
	{
        $this->NameServer6 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer7($val)
	{
        $this->NameServer7 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer8($val)
	{
        $this->NameServer8 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer9($val)
	{
        $this->NameServer9 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer10($val)
	{
        $this->NameServer10 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer11($val)
	{
        $this->NameServer11 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer12($val)
	{
        $this->NameServer12 = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer13($val)
	{
        $this->NameServer13 = ()$val;
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
        $this->CreDate = ()$val;
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
        $this->Handle = ()$val;
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
        $this->HostName = ()$val;
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
        $this->IpAddress = ()$val;
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
        $this->Status = ()$val;
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
        $this->IpV6Address = ()$val;
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
        $this->Details = ()$val;
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
        $this->Name = ()$val;
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
        $this->Country = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setDate($val)
	{
        $this->Date = ()$val;
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
        $this->Number = ()$val;
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
        $this->Type = ()$val;
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
        $this->Contact = ()$val;
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
        $this->ContactLanguage = ()$val;
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
        $this->DocumentationLanguage = ()$val;
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
        $this->SecondContact = ()$val;
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
        $this->ThirdContact = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setRegDate($val)
	{
        $this->RegDate = ()$val;
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
        $this->DnsSecKey1 = ()$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey2($val)
	{
        $this->DnsSecKey2 = ()$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey3($val)
	{
        $this->DnsSecKey3 = ()$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey4($val)
	{
        $this->DnsSecKey4 = ()$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey5($val)
	{
        $this->DnsSecKey5 = ()$val;
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
        $this->Handle = ()$val;
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
        $this->Status = ()$val;
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
        $this->DigestAlgorithm = ()$val;
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
        $this->DigestType = ()$val;
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
        $this->Digest = ()$val;
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
        $this->Protocol = ()$val;
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
        $this->KeyType = ()$val;
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
        $this->KeyAlgorithm = ()$val;
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
        $this->KeyTag = ()$val;
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
        $this->PublicKey = ()$val;
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
        $this->CreDate = ()$val;
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
        $this->Type = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyAdmin($val)
	{
        $this->PrivacyAdmin = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyTech($val)
	{
        $this->PrivacyTech = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyBilling($val)
	{
        $this->PrivacyBilling = ()$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->Extensions = ()$val;
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
        $this->Extension = ()$val;
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
        $this->Key = ()$val;
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
        $this->Value = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = ()$val;
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
        $this->CreateOrderResult = ()$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param SearchOrderRequest $val
	 * @throws Exception
	 */
	public function setOrderRequest($val)
	{
        $this->orderRequest = ()$val;
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
        $this->OrderTypes = ()$val;
	}

	/**
	 * @param ArrayOfOrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatusTypes($val)
	{
        $this->OrderStatusTypes = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setFromDate($val)
	{
        $this->FromDate = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setToDate($val)
	{
        $this->ToDate = ()$val;
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
        $this->DomainName = ()$val;
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
        $this->TransactionComment = ()$val;
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
        $this->Comments = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIncludeDomainDetails($val)
	{
        $this->IncludeDomainDetails = ()$val;
	}

	/**
	 * @param PagingInfo $val
	 * @throws Exception
	 */
	public function setPageInfo($val)
	{
        $this->PageInfo = ()$val;
	}

	/**
	 * @param SearchOrderSortType $val
	 * @throws Exception
	 */
	public function setOrderSort($val)
	{
        $this->OrderSort = ()$val;
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
        $this->PageIndex = ()$val;
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
        $this->PageSize = ()$val;
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
        $this->SearchOrderResult = ()$val;
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
        $this->totalOrders = ()$val;
	}

	/**
	 * @param ArrayOfOrder $val
	 * @throws Exception
	 */
	public function setOrders($val)
	{
        $this->orders = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->orderId = ()$val;
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
        $this->GetMessagesResult = ()$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val)
	{
        $this->messages = ()$val;
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
        $this->Attachments = ()$val;
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
        $this->Body = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreated($val)
	{
        $this->Created = ()$val;
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
        $this->FromAddress = ()$val;
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
        $this->Subject = ()$val;
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
        $this->ToAddress = ()$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->Type = ()$val;
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
        $this->Data = ()$val;
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
        $this->FileName = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = ()$val;
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
        $this->ValidateOrderResult = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->orderId = ()$val;
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
        $this->fileName = ()$val;
	}

	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setContent($val)
	{
        $this->content = ()$val;
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
        $this->UploadDocumentationResult = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->subject = ()$val;
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
        $this->body = ()$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = ()$val;
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
        $this->CreateSupportOrderResult = ()$val;
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
        $this->orderId = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->orderId = ()$val;
	}

	/**
	 * @param Message $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        $this->message = ()$val;
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
        $this->UploadMessageResult = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->domainHandle = ()$val;
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
        $this->GetDomainResult = ()$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val)
	{
        $this->domain = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = ()$val;
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
        $this->Clauses = ()$val;
	}

	/**
	 * @param SearchModeType $val
	 * @throws Exception
	 */
	public function setMode($val)
	{
        $this->Mode = ()$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setWithoutstates($val)
	{
        $this->Withoutstates = ()$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setWithstates($val)
	{
        $this->Withstates = ()$val;
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
        $this->Attribute = ()$val;
	}

	/**
	 * @param SearchOperatorType $val
	 * @throws Exception
	 */
	public function setOperator($val)
	{
        $this->Operator = ()$val;
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
        $this->Value = ()$val;
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
        $this->SearchDomainResult = ()$val;
	}

	/**
	 * @param ArrayOfDomain $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->domainName = ()$val;
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
        $this->WhoisResult = ()$val;
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
        $this->whoisData = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = ()$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setTlds($val)
	{
        $this->tlds = ()$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val)
	{
        $this->quality = ()$val;
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
        $this->AvailabilityCheckResult = ()$val;
	}

	/**
	 * @param ArrayOfAvailabilityCheckResult $val
	 * @throws Exception
	 */
	public function setResults($val)
	{
        $this->results = ()$val;
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
        $this->DomainName = ()$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val)
	{
        $this->Quality = ()$val;
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
        $this->StatusCode = ()$val;
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
        $this->StatusMessage = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->registrantHandle = ()$val;
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
        $this->GetRegistrantResult = ()$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = ()$val;
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
        $this->CreateRegistrantResult = ()$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->registrantHandle = ()$val;
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
        $this->DeleteRegistrantResult = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = ()$val;
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
        $this->SearchRegistrantResult = ()$val;
	}

	/**
	 * @param ArrayOfRegistrant $val
	 * @throws Exception
	 */
	public function setRegistrants($val)
	{
        $this->registrants = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->contactHandle = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->value = ()$val;
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
        $this->GetRegistrantVerificationInfoResult = ()$val;
	}

	/**
	 * @param RegistrantVerificationInfo $val
	 * @throws Exception
	 */
	public function setVerificationInfo($val)
	{
        $this->verificationInfo = ()$val;
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
        $this->EmailAddress = ()$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->VerificationStatus = ()$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setVerificationDetails($val)
	{
        $this->VerificationDetails = ()$val;
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
        $this->VerifiedBy = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setVerificationDate($val)
	{
        $this->VerificationDate = ()$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val)
	{
        $this->Messages = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->value = ()$val;
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
        $this->DoRegistrantVerificationResult = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->value = ()$val;
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
        $this->GetRegistrantVerificationStatusResult = ()$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->verificationStatus = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->value = ()$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setDetails($val)
	{
        $this->details = ()$val;
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
        $this->UploadRegistrantVerificationMessageResult = ()$val;
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
        $this->GetContactResult = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = ()$val;
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
        $this->CreateContactResult = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = ()$val;
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
        $this->UpdateContactResult = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->contactHandle = ()$val;
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
        $this->DeleteContactResult = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = ()$val;
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
        $this->SearchContactResult = ()$val;
	}

	/**
	 * @param ArrayOfContact $val
	 * @throws Exception
	 */
	public function setContacts($val)
	{
        $this->contacts = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->nameServerHandle = ()$val;
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
        $this->GetNameServerResult = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = ()$val;
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
        $this->CreateNameServerResult = ()$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->nameServerHandle = ()$val;
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
        $this->DeleteNameServerResult = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = ()$val;
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
        $this->SearchNameServerResult = ()$val;
	}

	/**
	 * @param ArrayOfNameServer $val
	 * @throws Exception
	 */
	public function setNameServers($val)
	{
        $this->nameServers = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val)
	{
        $this->msgType = ()$val;
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
        $this->PollMessageResult = ()$val;
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
        $this->msgCount = ()$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val)
	{
        $this->item = ()$val;
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
        $this->Attachments = ()$val;
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
        $this->DomainHandle = ()$val;
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
        $this->DomainName = ()$val;
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
        $this->Msg = ()$val;
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
        $this->MsgId = ()$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val)
	{
        $this->MsgType = ()$val;
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
        $this->OrderId = ()$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatus($val)
	{
        $this->OrderStatus = ()$val;
	}

	/**
	 * @param ArrayOfCallbackStatus $val
	 * @throws Exception
	 */
	public function setStatusList($val)
	{
        $this->StatusList = ()$val;
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
        $this->Message = ()$val;
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
        $this->Status = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->msgId = ()$val;
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
        $this->AckMessageResult = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->msgId = ()$val;
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
        $this->GetMessageQueueResult = ()$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val)
	{
        $this->item = ()$val;
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
        $this->sessionId = ()$val;
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
        $this->dnsSecKeyHandle = ()$val;
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
        $this->GetDnsSecKeyResult = ()$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsSecKey = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsSecKey = ()$val;
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
        $this->CreateDnsSecKeyResult = ()$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsSecKey = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = ()$val;
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
        $this->SearchDnsSecKeyResult = ()$val;
	}

	/**
	 * @param ArrayOfDnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val)
	{
        $this->dnsSecKeys = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = ()$val;
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
        $this->CreateDocumentationResult = ()$val;
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
        $this->documentationId = ()$val;
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
        $this->sessionId = ()$val;
	}

	/**
	 * @param ApprovalDocumentation $val
	 * @throws Exception
	 */
	public function setApprovalDocumentation($val)
	{
        $this->approvalDocumentation = ()$val;
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
        $this->Type = ()$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setObjectNames($val)
	{
        $this->ObjectNames = ()$val;
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
        $this->OrderId = ()$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->Attachments = ()$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->Extensions = ()$val;
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
        $this->CreateApprovalDocumentationResult = ()$val;
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
        $this->documentationId = ()$val;
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
