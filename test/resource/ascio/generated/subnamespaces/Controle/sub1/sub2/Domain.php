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
}

