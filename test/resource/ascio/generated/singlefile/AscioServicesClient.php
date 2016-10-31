<?php

class LogIn
{
	/**
	 * @var Session
	 */
	public $session;
	/**
	 * @param Session $val
	 * @throws Exception
	 */
	public function setSession($val)
	{
        $this->session = (int)$val;
	}
}

class Session
{
	/**
	 * @var string
	 */
	public $account;
	/**
	 * @var string
	 */
	public $password;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccount($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Account');
        }
        $this->account = (int)$val;
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
        $this->password = (int)$val;
	}
}

class LogInResponse
{
	/**
	 * @var Response
	 */
	public $loginresult;
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setLogInResult($val)
	{
        $this->loginresult = (int)$val;
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
        $this->sessionid = (int)$val;
	}
}

class Response
{
	/**
	 * @var string
	 */
	public $message;
	/**
	 * @var short
	 */
	public $resultcode;
	/**
	 * @var string[]
	 */
	public $values;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Message');
        }
        $this->message = (int)$val;
	}

	/**
	 * @param short $val
	 * @throws Exception
	 */
	public function setResultCode($val)
	{
        $this->resultcode = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setValues($val)
	{
        $this->values = (int)$val;
	}
}

class LogOut
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}
}

class LogOutResponse
{
	/**
	 * @var Response
	 */
	public $logoutresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setLogOutResult($val)
	{
        $this->logoutresult = (int)$val;
	}
}

class GetOrder
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->orderid = (int)$val;
	}
}

class GetOrderResponse
{
	/**
	 * @var Response
	 */
	public $getorderresult;
	/**
	 * @var Order
	 */
	public $order;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetOrderResult($val)
	{
        $this->getorderresult = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (int)$val;
	}
}

class Order
{
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @var OrderType
	 */
	public $type;
	/**
	 * @var string
	 */
	public $accountreference;
	/**
	 * @var OrderStatusType
	 */
	public $status;
	/**
	 * @var string
	 */
	public $transactioncomment;
	/**
	 * @var string
	 */
	public $comments;
	/**
	 * @var string
	 */
	public $options;
	/**
	 * @var string
	 */
	public $localpresence;
	/**
	 * @var string
	 */
	public $batch;
	/**
	 * @var string
	 */
	public $documentation;
	/**
	 * @var Domain
	 */
	public $domain;
	/**
	 * @var dateTime
	 */
	public $credate;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->orderid = (int)$val;
	}

	/**
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = (int)$val;
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
        $this->accountreference = (int)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->status = (int)$val;
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
        $this->transactioncomment = (int)$val;
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
        $this->comments = (int)$val;
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
        $this->options = (int)$val;
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
        $this->localpresence = (int)$val;
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
        $this->batch = (int)$val;
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
        $this->documentation = (int)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val)
	{
        $this->domain = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->credate = (int)$val;
	}
}

class OrderType
{}

class OrderStatusType
{}

class Domain
{
	/**
	 * @var string
	 */
	public $domainname;
	/**
	 * @var string
	 */
	public $domainhandle;
	/**
	 * @var int
	 */
	public $regperiod;
	/**
	 * @var int
	 */
	public $renewperiod;
	/**
	 * @var string
	 */
	public $status;
	/**
	 * @var string
	 */
	public $authinfo;
	/**
	 * @var dateTime
	 */
	public $credate;
	/**
	 * @var dateTime
	 */
	public $expdate;
	/**
	 * @var string
	 */
	public $encodingtype;
	/**
	 * @var string
	 */
	public $domainpurpose;
	/**
	 * @var string
	 */
	public $comment;
	/**
	 * @var string
	 */
	public $transferlock;
	/**
	 * @var string
	 */
	public $deletelock;
	/**
	 * @var string
	 */
	public $updatelock;
	/**
	 * @var string
	 */
	public $queuetype;
	/**
	 * @var Registrant
	 */
	public $registrant;
	/**
	 * @var Contact
	 */
	public $admincontact;
	/**
	 * @var Contact
	 */
	public $techcontact;
	/**
	 * @var Contact
	 */
	public $billingcontact;
	/**
	 * @var Contact
	 */
	public $resellercontact;
	/**
	 * @var NameServers
	 */
	public $nameservers;
	/**
	 * @var TradeMark
	 */
	public $trademark;
	/**
	 * @var DnsSecKeys
	 */
	public $dnsseckeys;
	/**
	 * @var PrivacyProxy
	 */
	public $privacyproxy;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->domainname = (int)$val;
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
        $this->domainhandle = (int)$val;
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
        $this->regperiod = (int)$val;
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
        $this->renewperiod = (int)$val;
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
        $this->status = (int)$val;
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
        $this->authinfo = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->credate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setExpDate($val)
	{
        $this->expdate = (int)$val;
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
        $this->encodingtype = (int)$val;
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
        $this->domainpurpose = (int)$val;
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
        $this->comment = (int)$val;
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
        $this->transferlock = (int)$val;
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
        $this->deletelock = (int)$val;
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
        $this->updatelock = (int)$val;
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
        $this->queuetype = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setAdminContact($val)
	{
        $this->admincontact = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setTechContact($val)
	{
        $this->techcontact = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setBillingContact($val)
	{
        $this->billingcontact = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setResellerContact($val)
	{
        $this->resellercontact = (int)$val;
	}

	/**
	 * @param NameServers $val
	 * @throws Exception
	 */
	public function setNameServers($val)
	{
        $this->nameservers = (int)$val;
	}

	/**
	 * @param TradeMark $val
	 * @throws Exception
	 */
	public function setTrademark($val)
	{
        $this->trademark = (int)$val;
	}

	/**
	 * @param DnsSecKeys $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val)
	{
        $this->dnsseckeys = (int)$val;
	}

	/**
	 * @param PrivacyProxy $val
	 * @throws Exception
	 */
	public function setPrivacyProxy($val)
	{
        $this->privacyproxy = (int)$val;
	}
}

class Registrant
{
	/**
	 * @var dateTime
	 */
	public $credate;
	/**
	 * @var string
	 */
	public $status;
	/**
	 * @var string
	 */
	public $handle;
	/**
	 * @var string
	 */
	public $name;
	/**
	 * @var string
	 */
	public $orgname;
	/**
	 * @var string
	 */
	public $address1;
	/**
	 * @var string
	 */
	public $address2;
	/**
	 * @var string
	 */
	public $city;
	/**
	 * @var string
	 */
	public $state;
	/**
	 * @var string
	 */
	public $postalcode;
	/**
	 * @var string
	 */
	public $countrycode;
	/**
	 * @var string
	 */
	public $email;
	/**
	 * @var string
	 */
	public $phone;
	/**
	 * @var string
	 */
	public $fax;
	/**
	 * @var string
	 */
	public $registranttype;
	/**
	 * @var string
	 */
	public $vatnumber;
	/**
	 * @var string
	 */
	public $registrantdate;
	/**
	 * @var string
	 */
	public $nexuscategory;
	/**
	 * @var string
	 */
	public $registrantnumber;
	/**
	 * @var string
	 */
	public $details;
	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->credate = (int)$val;
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
        $this->status = (int)$val;
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
        $this->handle = (int)$val;
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
        $this->name = (int)$val;
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
        $this->orgname = (int)$val;
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
        $this->address1 = (int)$val;
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
        $this->address2 = (int)$val;
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
        $this->city = (int)$val;
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
        $this->state = (int)$val;
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
        $this->postalcode = (int)$val;
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
        $this->countrycode = (int)$val;
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
        $this->email = (int)$val;
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
        $this->phone = (int)$val;
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
        $this->fax = (int)$val;
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
        $this->registranttype = (int)$val;
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
        $this->vatnumber = (int)$val;
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
        $this->registrantdate = (int)$val;
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
        $this->nexuscategory = (int)$val;
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
        $this->registrantnumber = (int)$val;
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
        $this->details = (int)$val;
	}
}

class Contact
{
	/**
	 * @var dateTime
	 */
	public $credate;
	/**
	 * @var string
	 */
	public $status;
	/**
	 * @var string
	 */
	public $handle;
	/**
	 * @var string
	 */
	public $firstname;
	/**
	 * @var string
	 */
	public $lastname;
	/**
	 * @var string
	 */
	public $orgname;
	/**
	 * @var string
	 */
	public $address1;
	/**
	 * @var string
	 */
	public $address2;
	/**
	 * @var string
	 */
	public $postalcode;
	/**
	 * @var string
	 */
	public $city;
	/**
	 * @var string
	 */
	public $state;
	/**
	 * @var string
	 */
	public $countrycode;
	/**
	 * @var string
	 */
	public $email;
	/**
	 * @var string
	 */
	public $phone;
	/**
	 * @var string
	 */
	public $fax;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $details;
	/**
	 * @var string
	 */
	public $organisationnumber;
	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->credate = (int)$val;
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
        $this->status = (int)$val;
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
        $this->handle = (int)$val;
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
        $this->firstname = (int)$val;
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
        $this->lastname = (int)$val;
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
        $this->orgname = (int)$val;
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
        $this->address1 = (int)$val;
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
        $this->address2 = (int)$val;
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
        $this->postalcode = (int)$val;
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
        $this->city = (int)$val;
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
        $this->state = (int)$val;
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
        $this->countrycode = (int)$val;
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
        $this->email = (int)$val;
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
        $this->phone = (int)$val;
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
        $this->fax = (int)$val;
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
        $this->type = (int)$val;
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
        $this->details = (int)$val;
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
        $this->organisationnumber = (int)$val;
	}
}

class NameServers
{
	/**
	 * @var NameServer
	 */
	public $nameserver1;
	/**
	 * @var NameServer
	 */
	public $nameserver2;
	/**
	 * @var NameServer
	 */
	public $nameserver3;
	/**
	 * @var NameServer
	 */
	public $nameserver4;
	/**
	 * @var NameServer
	 */
	public $nameserver5;
	/**
	 * @var NameServer
	 */
	public $nameserver6;
	/**
	 * @var NameServer
	 */
	public $nameserver7;
	/**
	 * @var NameServer
	 */
	public $nameserver8;
	/**
	 * @var NameServer
	 */
	public $nameserver9;
	/**
	 * @var NameServer
	 */
	public $nameserver10;
	/**
	 * @var NameServer
	 */
	public $nameserver11;
	/**
	 * @var NameServer
	 */
	public $nameserver12;
	/**
	 * @var NameServer
	 */
	public $nameserver13;
	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer1($val)
	{
        $this->nameserver1 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer2($val)
	{
        $this->nameserver2 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer3($val)
	{
        $this->nameserver3 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer4($val)
	{
        $this->nameserver4 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer5($val)
	{
        $this->nameserver5 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer6($val)
	{
        $this->nameserver6 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer7($val)
	{
        $this->nameserver7 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer8($val)
	{
        $this->nameserver8 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer9($val)
	{
        $this->nameserver9 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer10($val)
	{
        $this->nameserver10 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer11($val)
	{
        $this->nameserver11 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer12($val)
	{
        $this->nameserver12 = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer13($val)
	{
        $this->nameserver13 = (int)$val;
	}
}

class NameServer
{
	/**
	 * @var dateTime
	 */
	public $credate;
	/**
	 * @var string
	 */
	public $handle;
	/**
	 * @var string
	 */
	public $hostname;
	/**
	 * @var string
	 */
	public $ipaddress;
	/**
	 * @var string
	 */
	public $status;
	/**
	 * @var string
	 */
	public $ipv6address;
	/**
	 * @var string
	 */
	public $details;
	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->credate = (int)$val;
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
        $this->handle = (int)$val;
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
        $this->hostname = (int)$val;
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
        $this->ipaddress = (int)$val;
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
        $this->status = (int)$val;
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
        $this->ipv6address = (int)$val;
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
        $this->details = (int)$val;
	}
}

class TradeMark
{
	/**
	 * @var string
	 */
	public $name;
	/**
	 * @var string
	 */
	public $country;
	/**
	 * @var dateTime
	 */
	public $date;
	/**
	 * @var string
	 */
	public $number;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $contact;
	/**
	 * @var string
	 */
	public $contactlanguage;
	/**
	 * @var string
	 */
	public $documentationlanguage;
	/**
	 * @var string
	 */
	public $secondcontact;
	/**
	 * @var string
	 */
	public $thirdcontact;
	/**
	 * @var dateTime
	 */
	public $regdate;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
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
        $this->country = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setDate($val)
	{
        $this->date = (int)$val;
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
        $this->number = (int)$val;
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
        $this->type = (int)$val;
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
        $this->contact = (int)$val;
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
        $this->contactlanguage = (int)$val;
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
        $this->documentationlanguage = (int)$val;
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
        $this->secondcontact = (int)$val;
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
        $this->thirdcontact = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setRegDate($val)
	{
        $this->regdate = (int)$val;
	}
}

class DnsSecKeys
{
	/**
	 * @var DnsSecKey
	 */
	public $dnsseckey1;
	/**
	 * @var DnsSecKey
	 */
	public $dnsseckey2;
	/**
	 * @var DnsSecKey
	 */
	public $dnsseckey3;
	/**
	 * @var DnsSecKey
	 */
	public $dnsseckey4;
	/**
	 * @var DnsSecKey
	 */
	public $dnsseckey5;
	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey1($val)
	{
        $this->dnsseckey1 = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey2($val)
	{
        $this->dnsseckey2 = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey3($val)
	{
        $this->dnsseckey3 = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey4($val)
	{
        $this->dnsseckey4 = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey5($val)
	{
        $this->dnsseckey5 = (int)$val;
	}
}

class DnsSecKey
{
	/**
	 * @var string
	 */
	public $handle;
	/**
	 * @var string
	 */
	public $status;
	/**
	 * @var string
	 */
	public $digestalgorithm;
	/**
	 * @var string
	 */
	public $digesttype;
	/**
	 * @var string
	 */
	public $digest;
	/**
	 * @var string
	 */
	public $protocol;
	/**
	 * @var string
	 */
	public $keytype;
	/**
	 * @var string
	 */
	public $keyalgorithm;
	/**
	 * @var string
	 */
	public $keytag;
	/**
	 * @var string
	 */
	public $publickey;
	/**
	 * @var string
	 */
	public $credate;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Handle');
        }
        $this->handle = (int)$val;
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
        $this->status = (int)$val;
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
        $this->digestalgorithm = (int)$val;
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
        $this->digesttype = (int)$val;
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
        $this->digest = (int)$val;
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
        $this->protocol = (int)$val;
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
        $this->keytype = (int)$val;
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
        $this->keyalgorithm = (int)$val;
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
        $this->keytag = (int)$val;
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
        $this->publickey = (int)$val;
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
        $this->credate = (int)$val;
	}
}

class PrivacyProxy
{
	/**
	 * @var PrivacyProxyType
	 */
	public $type;
	/**
	 * @var boolean
	 */
	public $privacyadmin;
	/**
	 * @var boolean
	 */
	public $privacytech;
	/**
	 * @var boolean
	 */
	public $privacybilling;
	/**
	 * @var Extensions
	 */
	public $extensions;
	/**
	 * @param PrivacyProxyType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyAdmin($val)
	{
        $this->privacyadmin = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyTech($val)
	{
        $this->privacytech = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyBilling($val)
	{
        $this->privacybilling = (int)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->extensions = (int)$val;
	}
}

class PrivacyProxyType
{}

class Extensions
{
	/**
	 * @var Extension
	 */
	public $extension;
	/**
	 * @param Extension $val
	 * @throws Exception
	 */
	public function setExtension($val)
	{
        $this->extension = (int)$val;
	}
}

class Extension
{
	/**
	 * @var string
	 */
	public $key;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setKey($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Key');
        }
        $this->key = (int)$val;
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
        $this->value = (int)$val;
	}
}

class CreateOrder
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var Order
	 */
	public $order;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (int)$val;
	}
}

class CreateOrderResponse
{
	/**
	 * @var Response
	 */
	public $createorderresult;
	/**
	 * @var Order
	 */
	public $order;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateOrderResult($val)
	{
        $this->createorderresult = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (int)$val;
	}
}

class SearchOrder
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var SearchOrderRequest
	 */
	public $orderrequest;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param SearchOrderRequest $val
	 * @throws Exception
	 */
	public function setOrderRequest($val)
	{
        $this->orderrequest = (int)$val;
	}
}

class SearchOrderRequest
{
	/**
	 * @var OrderType[]
	 */
	public $ordertypes;
	/**
	 * @var OrderStatusType[]
	 */
	public $orderstatustypes;
	/**
	 * @var dateTime
	 */
	public $fromdate;
	/**
	 * @var dateTime
	 */
	public $todate;
	/**
	 * @var string
	 */
	public $domainname;
	/**
	 * @var string
	 */
	public $transactioncomment;
	/**
	 * @var string
	 */
	public $comments;
	/**
	 * @var boolean
	 */
	public $includedomaindetails;
	/**
	 * @var PagingInfo
	 */
	public $pageinfo;
	/**
	 * @var SearchOrderSortType
	 */
	public $ordersort;
	/**
	 * @param ArrayOfOrderType $val
	 * @throws Exception
	 */
	public function setOrderTypes($val)
	{
        $this->ordertypes = (int)$val;
	}

	/**
	 * @param ArrayOfOrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatusTypes($val)
	{
        $this->orderstatustypes = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setFromDate($val)
	{
        $this->fromdate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setToDate($val)
	{
        $this->todate = (int)$val;
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
        $this->domainname = (int)$val;
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
        $this->transactioncomment = (int)$val;
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
        $this->comments = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setIncludeDomainDetails($val)
	{
        $this->includedomaindetails = (int)$val;
	}

	/**
	 * @param PagingInfo $val
	 * @throws Exception
	 */
	public function setPageInfo($val)
	{
        $this->pageinfo = (int)$val;
	}

	/**
	 * @param SearchOrderSortType $val
	 * @throws Exception
	 */
	public function setOrderSort($val)
	{
        $this->ordersort = (int)$val;
	}
}

class SearchOrderSortType
{}

class PagingInfo
{
	/**
	 * @var int
	 */
	public $pageindex;
	/**
	 * @var int
	 */
	public $pagesize;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPageIndex($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->pageindex = (int)$val;
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
        $this->pagesize = (int)$val;
	}
}

class SearchOrderResponse
{
	/**
	 * @var Response
	 */
	public $searchorderresult;
	/**
	 * @var int
	 */
	public $totalorders;
	/**
	 * @var Order[]
	 */
	public $orders;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchOrderResult($val)
	{
        $this->searchorderresult = (int)$val;
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
        $this->totalorders = (int)$val;
	}

	/**
	 * @param ArrayOfOrder $val
	 * @throws Exception
	 */
	public function setOrders($val)
	{
        $this->orders = (int)$val;
	}
}

class GetMessages
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->orderid = (int)$val;
	}
}

class GetMessagesResponse
{
	/**
	 * @var Response
	 */
	public $getmessagesresult;
	/**
	 * @var Message[]
	 */
	public $messages;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessagesResult($val)
	{
        $this->getmessagesresult = (int)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val)
	{
        $this->messages = (int)$val;
	}
}

class Message
{
	/**
	 * @var Attachment[]
	 */
	public $attachments;
	/**
	 * @var string
	 */
	public $body;
	/**
	 * @var dateTime
	 */
	public $created;
	/**
	 * @var string
	 */
	public $fromaddress;
	/**
	 * @var string
	 */
	public $subject;
	/**
	 * @var string
	 */
	public $toaddress;
	/**
	 * @var MessageType
	 */
	public $type;
	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = (int)$val;
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
        $this->body = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreated($val)
	{
        $this->created = (int)$val;
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
        $this->fromaddress = (int)$val;
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
        $this->subject = (int)$val;
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
        $this->toaddress = (int)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = (int)$val;
	}
}

class Attachment
{
	/**
	 * @var base64Binary
	 */
	public $data;
	/**
	 * @var string
	 */
	public $filename;
	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setData($val)
	{
        $this->data = (int)$val;
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
        $this->filename = (int)$val;
	}
}

class MessageType
{}

class ValidateOrder
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var Order
	 */
	public $order;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param Order $val
	 * @throws Exception
	 */
	public function setOrder($val)
	{
        $this->order = (int)$val;
	}
}

class ValidateOrderResponse
{
	/**
	 * @var Response
	 */
	public $validateorderresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setValidateOrderResult($val)
	{
        $this->validateorderresult = (int)$val;
	}
}

class UploadDocumentation
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @var string
	 */
	public $filename;
	/**
	 * @var base64Binary
	 */
	public $content;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->orderid = (int)$val;
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
        $this->filename = (int)$val;
	}

	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setContent($val)
	{
        $this->content = (int)$val;
	}
}

class UploadDocumentationResponse
{
	/**
	 * @var Response
	 */
	public $uploaddocumentationresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadDocumentationResult($val)
	{
        $this->uploaddocumentationresult = (int)$val;
	}
}

class CreateSupportOrder
{
	/**
	 * @var string
	 */
	public $sessionid;
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
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->subject = (int)$val;
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
        $this->body = (int)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = (int)$val;
	}
}

class CreateSupportOrderResponse
{
	/**
	 * @var Response
	 */
	public $createsupportorderresult;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateSupportOrderResult($val)
	{
        $this->createsupportorderresult = (int)$val;
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
        $this->orderid = (int)$val;
	}
}

class UploadMessage
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @var Message
	 */
	public $message;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->orderid = (int)$val;
	}

	/**
	 * @param Message $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        $this->message = (int)$val;
	}
}

class UploadMessageResponse
{
	/**
	 * @var Response
	 */
	public $uploadmessageresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadMessageResult($val)
	{
        $this->uploadmessageresult = (int)$val;
	}
}

class GetDomain
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $domainhandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->domainhandle = (int)$val;
	}
}

class GetDomainResponse
{
	/**
	 * @var Response
	 */
	public $getdomainresult;
	/**
	 * @var Domain
	 */
	public $domain;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDomainResult($val)
	{
        $this->getdomainresult = (int)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val)
	{
        $this->domain = (int)$val;
	}
}

class SearchDomain
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (int)$val;
	}
}

class SearchCriteria
{
	/**
	 * @var Clause[]
	 */
	public $clauses;
	/**
	 * @var SearchModeType
	 */
	public $mode;
	/**
	 * @var string[]
	 */
	public $withoutstates;
	/**
	 * @var string[]
	 */
	public $withstates;
	/**
	 * @param ArrayOfClause $val
	 * @throws Exception
	 */
	public function setClauses($val)
	{
        $this->clauses = (int)$val;
	}

	/**
	 * @param SearchModeType $val
	 * @throws Exception
	 */
	public function setMode($val)
	{
        $this->mode = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setWithoutstates($val)
	{
        $this->withoutstates = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setWithstates($val)
	{
        $this->withstates = (int)$val;
	}
}

class Clause
{
	/**
	 * @var string
	 */
	public $attribute;
	/**
	 * @var SearchOperatorType
	 */
	public $operator;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttribute($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Attribute');
        }
        $this->attribute = (int)$val;
	}

	/**
	 * @param SearchOperatorType $val
	 * @throws Exception
	 */
	public function setOperator($val)
	{
        $this->operator = (int)$val;
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
        $this->value = (int)$val;
	}
}

class SearchOperatorType
{}

class SearchModeType
{}

class SearchDomainResponse
{
	/**
	 * @var Response
	 */
	public $searchdomainresult;
	/**
	 * @var Domain[]
	 */
	public $domains;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDomainResult($val)
	{
        $this->searchdomainresult = (int)$val;
	}

	/**
	 * @param ArrayOfDomain $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = (int)$val;
	}
}

class Whois
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $domainname;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->domainname = (int)$val;
	}
}

class WhoisResponse
{
	/**
	 * @var Response
	 */
	public $whoisresult;
	/**
	 * @var string
	 */
	public $whoisdata;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setWhoisResult($val)
	{
        $this->whoisresult = (int)$val;
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
        $this->whoisdata = (int)$val;
	}
}

class AvailabilityCheck
{
	/**
	 * @var string
	 */
	public $sessionid;
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
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = (int)$val;
	}

	/**
	 * @param ArrayOfString $val
	 * @throws Exception
	 */
	public function setTlds($val)
	{
        $this->tlds = (int)$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val)
	{
        $this->quality = (int)$val;
	}
}

class QualityType
{}

class AvailabilityCheckResponse
{
	/**
	 * @var Response
	 */
	public $availabilitycheckresult;
	/**
	 * @var AvailabilityCheckResult[]
	 */
	public $results;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAvailabilityCheckResult($val)
	{
        $this->availabilitycheckresult = (int)$val;
	}

	/**
	 * @param ArrayOfAvailabilityCheckResult $val
	 * @throws Exception
	 */
	public function setResults($val)
	{
        $this->results = (int)$val;
	}
}

class AvailabilityCheckResult
{
	/**
	 * @var string
	 */
	public $domainname;
	/**
	 * @var QualityType
	 */
	public $quality;
	/**
	 * @var int
	 */
	public $statuscode;
	/**
	 * @var string
	 */
	public $statusmessage;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->domainname = (int)$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val)
	{
        $this->quality = (int)$val;
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
        $this->statuscode = (int)$val;
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
        $this->statusmessage = (int)$val;
	}
}

class GetRegistrant
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $registranthandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->registranthandle = (int)$val;
	}
}

class GetRegistrantResponse
{
	/**
	 * @var Response
	 */
	public $getregistrantresult;
	/**
	 * @var Registrant
	 */
	public $registrant;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantResult($val)
	{
        $this->getregistrantresult = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = (int)$val;
	}
}

class CreateRegistrant
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var Registrant
	 */
	public $registrant;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = (int)$val;
	}
}

class CreateRegistrantResponse
{
	/**
	 * @var Response
	 */
	public $createregistrantresult;
	/**
	 * @var Registrant
	 */
	public $registrant;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateRegistrantResult($val)
	{
        $this->createregistrantresult = (int)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = (int)$val;
	}
}

class DeleteRegistrant
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $registranthandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->registranthandle = (int)$val;
	}
}

class DeleteRegistrantResponse
{
	/**
	 * @var Response
	 */
	public $deleteregistrantresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteRegistrantResult($val)
	{
        $this->deleteregistrantresult = (int)$val;
	}
}

class SearchRegistrant
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (int)$val;
	}
}

class SearchRegistrantResponse
{
	/**
	 * @var Response
	 */
	public $searchregistrantresult;
	/**
	 * @var Registrant[]
	 */
	public $registrants;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchRegistrantResult($val)
	{
        $this->searchregistrantresult = (int)$val;
	}

	/**
	 * @param ArrayOfRegistrant $val
	 * @throws Exception
	 */
	public function setRegistrants($val)
	{
        $this->registrants = (int)$val;
	}
}

class GetContact
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $contacthandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->contacthandle = (int)$val;
	}
}

class GetRegistrantVerificationInfo
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->value = (int)$val;
	}
}

class GetRegistrantVerificationInfoResponse
{
	/**
	 * @var Response
	 */
	public $getregistrantverificationinforesult;
	/**
	 * @var RegistrantVerificationInfo
	 */
	public $verificationinfo;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationInfoResult($val)
	{
        $this->getregistrantverificationinforesult = (int)$val;
	}

	/**
	 * @param RegistrantVerificationInfo $val
	 * @throws Exception
	 */
	public function setVerificationInfo($val)
	{
        $this->verificationinfo = (int)$val;
	}
}

class RegistrantVerificationInfo
{
	/**
	 * @var string
	 */
	public $emailaddress;
	/**
	 * @var RegistrantVerificationStatus
	 */
	public $verificationstatus;
	/**
	 * @var RegistrantVerificationDetails
	 */
	public $verificationdetails;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmailAddress($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EmailAddress');
        }
        $this->emailaddress = (int)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->verificationstatus = (int)$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setVerificationDetails($val)
	{
        $this->verificationdetails = (int)$val;
	}
}

class RegistrantVerificationStatus
{}

class RegistrantVerificationDetails
{
	/**
	 * @var string
	 */
	public $verifiedby;
	/**
	 * @var dateTime
	 */
	public $verificationdate;
	/**
	 * @var Message[]
	 */
	public $messages;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setVerifiedBy($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for VerifiedBy');
        }
        $this->verifiedby = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setVerificationDate($val)
	{
        $this->verificationdate = (int)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val)
	{
        $this->messages = (int)$val;
	}
}

class DoRegistrantVerification
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->value = (int)$val;
	}
}

class DoRegistrantVerificationResponse
{
	/**
	 * @var Response
	 */
	public $doregistrantverificationresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDoRegistrantVerificationResult($val)
	{
        $this->doregistrantverificationresult = (int)$val;
	}
}

class GetRegistrantVerificationStatus
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $value;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->value = (int)$val;
	}
}

class GetRegistrantVerificationStatusResponse
{
	/**
	 * @var Response
	 */
	public $getregistrantverificationstatusresult;
	/**
	 * @var RegistrantVerificationStatus
	 */
	public $verificationstatus;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantVerificationStatusResult($val)
	{
        $this->getregistrantverificationstatusresult = (int)$val;
	}

	/**
	 * @param RegistrantVerificationStatus $val
	 * @throws Exception
	 */
	public function setVerificationStatus($val)
	{
        $this->verificationstatus = (int)$val;
	}
}

class UploadRegistrantVerificationMessage
{
	/**
	 * @var string
	 */
	public $sessionid;
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
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->value = (int)$val;
	}

	/**
	 * @param RegistrantVerificationDetails $val
	 * @throws Exception
	 */
	public function setDetails($val)
	{
        $this->details = (int)$val;
	}
}

class UploadRegistrantVerificationMessageResponse
{
	/**
	 * @var Response
	 */
	public $uploadregistrantverificationmessageresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadRegistrantVerificationMessageResult($val)
	{
        $this->uploadregistrantverificationmessageresult = (int)$val;
	}
}

class GetContactResponse
{
	/**
	 * @var Response
	 */
	public $getcontactresult;
	/**
	 * @var Contact
	 */
	public $contact;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetContactResult($val)
	{
        $this->getcontactresult = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (int)$val;
	}
}

class CreateContact
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var Contact
	 */
	public $contact;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (int)$val;
	}
}

class CreateContactResponse
{
	/**
	 * @var Response
	 */
	public $createcontactresult;
	/**
	 * @var Contact
	 */
	public $contact;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateContactResult($val)
	{
        $this->createcontactresult = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (int)$val;
	}
}

class UpdateContact
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var Contact
	 */
	public $contact;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (int)$val;
	}
}

class UpdateContactResponse
{
	/**
	 * @var Response
	 */
	public $updatecontactresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUpdateContactResult($val)
	{
        $this->updatecontactresult = (int)$val;
	}
}

class DeleteContact
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $contacthandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->contacthandle = (int)$val;
	}
}

class DeleteContactResponse
{
	/**
	 * @var Response
	 */
	public $deletecontactresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteContactResult($val)
	{
        $this->deletecontactresult = (int)$val;
	}
}

class SearchContact
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (int)$val;
	}
}

class SearchContactResponse
{
	/**
	 * @var Response
	 */
	public $searchcontactresult;
	/**
	 * @var Contact[]
	 */
	public $contacts;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchContactResult($val)
	{
        $this->searchcontactresult = (int)$val;
	}

	/**
	 * @param ArrayOfContact $val
	 * @throws Exception
	 */
	public function setContacts($val)
	{
        $this->contacts = (int)$val;
	}
}

class GetNameServer
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $nameserverhandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->nameserverhandle = (int)$val;
	}
}

class GetNameServerResponse
{
	/**
	 * @var Response
	 */
	public $getnameserverresult;
	/**
	 * @var NameServer
	 */
	public $nameserver;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetNameServerResult($val)
	{
        $this->getnameserverresult = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameserver = (int)$val;
	}
}

class CreateNameServer
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var NameServer
	 */
	public $nameserver;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameserver = (int)$val;
	}
}

class CreateNameServerResponse
{
	/**
	 * @var Response
	 */
	public $createnameserverresult;
	/**
	 * @var NameServer
	 */
	public $nameserver;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateNameServerResult($val)
	{
        $this->createnameserverresult = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameserver = (int)$val;
	}
}

class DeleteNameServer
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $nameserverhandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->nameserverhandle = (int)$val;
	}
}

class DeleteNameServerResponse
{
	/**
	 * @var Response
	 */
	public $deletenameserverresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteNameServerResult($val)
	{
        $this->deletenameserverresult = (int)$val;
	}
}

class SearchNameServer
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (int)$val;
	}
}

class SearchNameServerResponse
{
	/**
	 * @var Response
	 */
	public $searchnameserverresult;
	/**
	 * @var NameServer[]
	 */
	public $nameservers;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchNameServerResult($val)
	{
        $this->searchnameserverresult = (int)$val;
	}

	/**
	 * @param ArrayOfNameServer $val
	 * @throws Exception
	 */
	public function setNameServers($val)
	{
        $this->nameservers = (int)$val;
	}
}

class PollMessage
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var MessageType
	 */
	public $msgtype;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val)
	{
        $this->msgtype = (int)$val;
	}
}

class PollMessageResponse
{
	/**
	 * @var Response
	 */
	public $pollmessageresult;
	/**
	 * @var int
	 */
	public $msgcount;
	/**
	 * @var QueueItem
	 */
	public $item;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setPollMessageResult($val)
	{
        $this->pollmessageresult = (int)$val;
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
        $this->msgcount = (int)$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val)
	{
        $this->item = (int)$val;
	}
}

class QueueItem
{
	/**
	 * @var Attachment[]
	 */
	public $attachments;
	/**
	 * @var string
	 */
	public $domainhandle;
	/**
	 * @var string
	 */
	public $domainname;
	/**
	 * @var string
	 */
	public $msg;
	/**
	 * @var int
	 */
	public $msgid;
	/**
	 * @var MessageType
	 */
	public $msgtype;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @var OrderStatusType
	 */
	public $orderstatus;
	/**
	 * @var CallbackStatus[]
	 */
	public $statuslist;
	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = (int)$val;
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
        $this->domainhandle = (int)$val;
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
        $this->domainname = (int)$val;
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
        $this->msg = (int)$val;
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
        $this->msgid = (int)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val)
	{
        $this->msgtype = (int)$val;
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
        $this->orderid = (int)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatus($val)
	{
        $this->orderstatus = (int)$val;
	}

	/**
	 * @param ArrayOfCallbackStatus $val
	 * @throws Exception
	 */
	public function setStatusList($val)
	{
        $this->statuslist = (int)$val;
	}
}

class CallbackStatus
{
	/**
	 * @var string
	 */
	public $message;
	/**
	 * @var string
	 */
	public $status;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMessage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Message');
        }
        $this->message = (int)$val;
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
        $this->status = (int)$val;
	}
}

class AckMessage
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var int
	 */
	public $msgid;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->msgid = (int)$val;
	}
}

class AckMessageResponse
{
	/**
	 * @var Response
	 */
	public $ackmessageresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAckMessageResult($val)
	{
        $this->ackmessageresult = (int)$val;
	}
}

class GetMessageQueue
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var int
	 */
	public $msgid;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->msgid = (int)$val;
	}
}

class GetMessageQueueResponse
{
	/**
	 * @var Response
	 */
	public $getmessagequeueresult;
	/**
	 * @var QueueItem
	 */
	public $item;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessageQueueResult($val)
	{
        $this->getmessagequeueresult = (int)$val;
	}

	/**
	 * @param QueueItem $val
	 * @throws Exception
	 */
	public function setItem($val)
	{
        $this->item = (int)$val;
	}
}

class GetDnsSecKey
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var string
	 */
	public $dnsseckeyhandle;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->dnsseckeyhandle = (int)$val;
	}
}

class GetDnsSecKeyResponse
{
	/**
	 * @var Response
	 */
	public $getdnsseckeyresult;
	/**
	 * @var DnsSecKey
	 */
	public $dnsseckey;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDnsSecKeyResult($val)
	{
        $this->getdnsseckeyresult = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsseckey = (int)$val;
	}
}

class CreateDnsSecKey
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var DnsSecKey
	 */
	public $dnsseckey;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsseckey = (int)$val;
	}
}

class CreateDnsSecKeyResponse
{
	/**
	 * @var Response
	 */
	public $creatednsseckeyresult;
	/**
	 * @var DnsSecKey
	 */
	public $dnsseckey;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDnsSecKeyResult($val)
	{
        $this->creatednsseckeyresult = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsseckey = (int)$val;
	}
}

class SearchDnsSecKey
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var SearchCriteria
	 */
	public $criteria;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param SearchCriteria $val
	 * @throws Exception
	 */
	public function setCriteria($val)
	{
        $this->criteria = (int)$val;
	}
}

class SearchDnsSecKeyResponse
{
	/**
	 * @var Response
	 */
	public $searchdnsseckeyresult;
	/**
	 * @var DnsSecKey[]
	 */
	public $dnsseckeys;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDnsSecKeyResult($val)
	{
        $this->searchdnsseckeyresult = (int)$val;
	}

	/**
	 * @param ArrayOfDnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val)
	{
        $this->dnsseckeys = (int)$val;
	}
}

class CreateDocumentation
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var Attachment[]
	 */
	public $attachments;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = (int)$val;
	}
}

class CreateDocumentationResponse
{
	/**
	 * @var Response
	 */
	public $createdocumentationresult;
	/**
	 * @var int
	 */
	public $documentationid;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDocumentationResult($val)
	{
        $this->createdocumentationresult = (int)$val;
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
        $this->documentationid = (int)$val;
	}
}

class CreateApprovalDocumentation
{
	/**
	 * @var string
	 */
	public $sessionid;
	/**
	 * @var ApprovalDocumentation
	 */
	public $approvaldocumentation;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSessionId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
	}

	/**
	 * @param ApprovalDocumentation $val
	 * @throws Exception
	 */
	public function setApprovalDocumentation($val)
	{
        $this->approvaldocumentation = (int)$val;
	}
}

class ApprovalDocumentationType
{}

class ApprovalDocumentation
{
	/**
	 * @var ApprovalDocumentationType
	 */
	public $type;
	/**
	 * @var string[]
	 */
	public $objectnames;
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @var Attachment[]
	 */
	public $attachments;
	/**
	 * @var Extensions
	 */
	public $extensions;
	/**
	 * @param ApprovalDocumentationType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = (int)$val;
	}

	/**
	 * @param ArrayOfstring $val
	 * @throws Exception
	 */
	public function setObjectNames($val)
	{
        $this->objectnames = (int)$val;
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
        $this->orderid = (int)$val;
	}

	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val)
	{
        $this->attachments = (int)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->extensions = (int)$val;
	}
}

class CreateApprovalDocumentationResponse
{
	/**
	 * @var Response
	 */
	public $createapprovaldocumentationresult;
	/**
	 * @var string
	 */
	public $documentationid;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateApprovalDocumentationResult($val)
	{
        $this->createapprovaldocumentationresult = (int)$val;
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
        $this->documentationid = (int)$val;
	}
}

/**
 * AscioServicesClient
 */
class AscioServicesClient extends SoapClient {

	const WSDL_FILE = "AscioService.wsdl";
	private $classmap = array(
        'LogIn\,' =>
            'LogIn',
        'Session\,' =>
            'Session',
        'LogInResponse\,' =>
            'LogInResponse',
        'Response\,' =>
            'Response',
        'LogOut\,' =>
            'LogOut',
        'LogOutResponse\,' =>
            'LogOutResponse',
        'GetOrder\,' =>
            'GetOrder',
        'GetOrderResponse\,' =>
            'GetOrderResponse',
        'Order\,' =>
            'Order',
        'OrderType\,' =>
            'OrderType',
        'OrderStatusType\,' =>
            'OrderStatusType',
        'Domain\,' =>
            'Domain',
        'Registrant\,' =>
            'Registrant',
        'Contact\,' =>
            'Contact',
        'NameServers\,' =>
            'NameServers',
        'NameServer\,' =>
            'NameServer',
        'TradeMark\,' =>
            'TradeMark',
        'DnsSecKeys\,' =>
            'DnsSecKeys',
        'DnsSecKey\,' =>
            'DnsSecKey',
        'PrivacyProxy\,' =>
            'PrivacyProxy',
        'PrivacyProxyType\,' =>
            'PrivacyProxyType',
        'Extensions\,' =>
            'Extensions',
        'Extension\,' =>
            'Extension',
        'CreateOrder\,' =>
            'CreateOrder',
        'CreateOrderResponse\,' =>
            'CreateOrderResponse',
        'SearchOrder\,' =>
            'SearchOrder',
        'SearchOrderRequest\,' =>
            'SearchOrderRequest',
        'SearchOrderSortType\,' =>
            'SearchOrderSortType',
        'PagingInfo\,' =>
            'PagingInfo',
        'SearchOrderResponse\,' =>
            'SearchOrderResponse',
        'GetMessages\,' =>
            'GetMessages',
        'GetMessagesResponse\,' =>
            'GetMessagesResponse',
        'Message\,' =>
            'Message',
        'Attachment\,' =>
            'Attachment',
        'MessageType\,' =>
            'MessageType',
        'ValidateOrder\,' =>
            'ValidateOrder',
        'ValidateOrderResponse\,' =>
            'ValidateOrderResponse',
        'UploadDocumentation\,' =>
            'UploadDocumentation',
        'UploadDocumentationResponse\,' =>
            'UploadDocumentationResponse',
        'CreateSupportOrder\,' =>
            'CreateSupportOrder',
        'CreateSupportOrderResponse\,' =>
            'CreateSupportOrderResponse',
        'UploadMessage\,' =>
            'UploadMessage',
        'UploadMessageResponse\,' =>
            'UploadMessageResponse',
        'GetDomain\,' =>
            'GetDomain',
        'GetDomainResponse\,' =>
            'GetDomainResponse',
        'SearchDomain\,' =>
            'SearchDomain',
        'SearchCriteria\,' =>
            'SearchCriteria',
        'Clause\,' =>
            'Clause',
        'SearchOperatorType\,' =>
            'SearchOperatorType',
        'SearchModeType\,' =>
            'SearchModeType',
        'SearchDomainResponse\,' =>
            'SearchDomainResponse',
        'Whois\,' =>
            'Whois',
        'WhoisResponse\,' =>
            'WhoisResponse',
        'AvailabilityCheck\,' =>
            'AvailabilityCheck',
        'QualityType\,' =>
            'QualityType',
        'AvailabilityCheckResponse\,' =>
            'AvailabilityCheckResponse',
        'AvailabilityCheckResult\,' =>
            'AvailabilityCheckResult',
        'GetRegistrant\,' =>
            'GetRegistrant',
        'GetRegistrantResponse\,' =>
            'GetRegistrantResponse',
        'CreateRegistrant\,' =>
            'CreateRegistrant',
        'CreateRegistrantResponse\,' =>
            'CreateRegistrantResponse',
        'DeleteRegistrant\,' =>
            'DeleteRegistrant',
        'DeleteRegistrantResponse\,' =>
            'DeleteRegistrantResponse',
        'SearchRegistrant\,' =>
            'SearchRegistrant',
        'SearchRegistrantResponse\,' =>
            'SearchRegistrantResponse',
        'GetContact\,' =>
            'GetContact',
        'GetRegistrantVerificationInfo\,' =>
            'GetRegistrantVerificationInfo',
        'GetRegistrantVerificationInfoResponse\,' =>
            'GetRegistrantVerificationInfoResponse',
        'RegistrantVerificationInfo\,' =>
            'RegistrantVerificationInfo',
        'RegistrantVerificationStatus\,' =>
            'RegistrantVerificationStatus',
        'RegistrantVerificationDetails\,' =>
            'RegistrantVerificationDetails',
        'DoRegistrantVerification\,' =>
            'DoRegistrantVerification',
        'DoRegistrantVerificationResponse\,' =>
            'DoRegistrantVerificationResponse',
        'GetRegistrantVerificationStatus\,' =>
            'GetRegistrantVerificationStatus',
        'GetRegistrantVerificationStatusResponse\,' =>
            'GetRegistrantVerificationStatusResponse',
        'UploadRegistrantVerificationMessage\,' =>
            'UploadRegistrantVerificationMessage',
        'UploadRegistrantVerificationMessageResponse\,' =>
            'UploadRegistrantVerificationMessageResponse',
        'GetContactResponse\,' =>
            'GetContactResponse',
        'CreateContact\,' =>
            'CreateContact',
        'CreateContactResponse\,' =>
            'CreateContactResponse',
        'UpdateContact\,' =>
            'UpdateContact',
        'UpdateContactResponse\,' =>
            'UpdateContactResponse',
        'DeleteContact\,' =>
            'DeleteContact',
        'DeleteContactResponse\,' =>
            'DeleteContactResponse',
        'SearchContact\,' =>
            'SearchContact',
        'SearchContactResponse\,' =>
            'SearchContactResponse',
        'GetNameServer\,' =>
            'GetNameServer',
        'GetNameServerResponse\,' =>
            'GetNameServerResponse',
        'CreateNameServer\,' =>
            'CreateNameServer',
        'CreateNameServerResponse\,' =>
            'CreateNameServerResponse',
        'DeleteNameServer\,' =>
            'DeleteNameServer',
        'DeleteNameServerResponse\,' =>
            'DeleteNameServerResponse',
        'SearchNameServer\,' =>
            'SearchNameServer',
        'SearchNameServerResponse\,' =>
            'SearchNameServerResponse',
        'PollMessage\,' =>
            'PollMessage',
        'PollMessageResponse\,' =>
            'PollMessageResponse',
        'QueueItem\,' =>
            'QueueItem',
        'CallbackStatus\,' =>
            'CallbackStatus',
        'AckMessage\,' =>
            'AckMessage',
        'AckMessageResponse\,' =>
            'AckMessageResponse',
        'GetMessageQueue\,' =>
            'GetMessageQueue',
        'GetMessageQueueResponse\,' =>
            'GetMessageQueueResponse',
        'GetDnsSecKey\,' =>
            'GetDnsSecKey',
        'GetDnsSecKeyResponse\,' =>
            'GetDnsSecKeyResponse',
        'CreateDnsSecKey\,' =>
            'CreateDnsSecKey',
        'CreateDnsSecKeyResponse\,' =>
            'CreateDnsSecKeyResponse',
        'SearchDnsSecKey\,' =>
            'SearchDnsSecKey',
        'SearchDnsSecKeyResponse\,' =>
            'SearchDnsSecKeyResponse',
        'CreateDocumentation\,' =>
            'CreateDocumentation',
        'CreateDocumentationResponse\,' =>
            'CreateDocumentationResponse',
        'CreateApprovalDocumentation\,' =>
            'CreateApprovalDocumentation',
        'ApprovalDocumentationType\,' =>
            'ApprovalDocumentationType',
        'ApprovalDocumentation\,' =>
            'ApprovalDocumentation',
        'CreateApprovalDocumentationResponse\,' =>
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
