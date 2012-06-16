<?php

namespace Controle\sub1\sub2;
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
	 * @var \Controle\sub1\sub2\Registrant
	 */
	public $Registrant;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $AdminContact;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $TechContact;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $BillingContact;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $ResellerContact;
	/**
	 * @var \Controle\sub1\sub2\NameServers
	 */
	public $NameServers;
	/**
	 * @var \Controle\sub1\sub2\TradeMark
	 */
	public $Trademark;
	/**
	 * @var \Controle\sub1\sub2\DnsSecKeys
	 */
	public $DnsSecKeys;
	/**
	 * @var \Controle\sub1\sub2\PrivacyProxy
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

