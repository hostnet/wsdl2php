<?php

namespace Controle;

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
	 * @var \Controle\Registrant
	 */
	public $Registrant;
	/**
	 * @var \Controle\Contact
	 */
	public $AdminContact;
	/**
	 * @var \Controle\Contact
	 */
	public $TechContact;
	/**
	 * @var \Controle\Contact
	 */
	public $BillingContact;
	/**
	 * @var \Controle\Contact
	 */
	public $ResellerContact;
	/**
	 * @var \Controle\NameServers
	 */
	public $NameServers;
	/**
	 * @var \Controle\TradeMark
	 */
	public $Trademark;
	/**
	 * @var \Controle\DnsSecKeys
	 */
	public $DnsSecKeys;
	/**
	 * @var \Controle\PrivacyProxy
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
