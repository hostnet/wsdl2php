<?php

namespace Controle;

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
     * @var \Controle\Registrant
     */
    public $registrant;
    /**
     * @var \Controle\Contact
     */
    public $admincontact;
    /**
     * @var \Controle\Contact
     */
    public $techcontact;
    /**
     * @var \Controle\Contact
     */
    public $billingcontact;
    /**
     * @var \Controle\Contact
     */
    public $resellercontact;
    /**
     * @var \Controle\NameServers
     */
    public $nameservers;
    /**
     * @var \Controle\TradeMark
     */
    public $trademark;
    /**
     * @var \Controle\DnsSecKeys
     */
    public $dnsseckeys;
    /**
     * @var \Controle\PrivacyProxy
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
