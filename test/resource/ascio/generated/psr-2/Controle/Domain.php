<?php

namespace Controle;
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
}

