<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SmSsubscriptionType
{
    /**
     * @var string | The wireless phone number to be used for receiving SMS messages. Max length of phone
     * number varies by country.
     */
    public $smsphone;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SMSSubscriptionUserStatusCodeType | Registered/Unregistered/Pending.
     */
    public $userstatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WirelessCarrierIDCodeType | The wireless carrier ID.
     */
    public $carrierid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SMSSubscriptionErrorCodeCodeType | Reason for SMS subscription error (postback from thired-party integrator).
     */
    public $errorcode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | ID of item to unsubscribe from SMS notification.
     */
    public $itemtounsubscribe;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSMSPhone($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SMSPhone');
        }
        $this->smsphone = (int)$val;
    }

    /**
     * @param SMSSubscriptionUserStatusCodeType $val
     * @throws Exception
     */
    public function setUserStatus($val)
    {
        $this->userstatus = (int)$val;
    }

    /**
     * @param WirelessCarrierIDCodeType $val
     * @throws Exception
     */
    public function setCarrierID($val)
    {
        $this->carrierid = (int)$val;
    }

    /**
     * @param SMSSubscriptionErrorCodeCodeType $val
     * @throws Exception
     */
    public function setErrorCode($val)
    {
        $this->errorcode = (int)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemToUnsubscribe($val)
    {
        $this->itemtounsubscribe = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
