<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SmSsubscriptionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | The wireless phone number to be used for receiving SMS messages. Max length of phone
     * number varies by country.
     */
    public $SMSPhone;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SMSSubscriptionUserStatusCodeType | Registered/Unregistered/Pending.
     */
    public $UserStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WirelessCarrierIDCodeType | The wireless carrier ID.
     */
    public $CarrierID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SMSSubscriptionErrorCodeCodeType | Reason for SMS subscription error (postback from thired-party integrator).
     */
    public $ErrorCode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | ID of item to unsubscribe from SMS notification.
     */
    public $ItemToUnsubscribe;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSMSPhone($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SMSPhone');
        }
        $this->SMSPhone = $val;
    }

    /**
     * @param SMSSubscriptionUserStatusCodeType $val
     * @throws Exception
     */
    public function setUserStatus($val)
    {
        $this->UserStatus = $val;
    }

    /**
     * @param WirelessCarrierIDCodeType $val
     * @throws Exception
     */
    public function setCarrierID($val)
    {
        $this->CarrierID = $val;
    }

    /**
     * @param SMSSubscriptionErrorCodeCodeType $val
     * @throws Exception
     */
    public function setErrorCode($val)
    {
        $this->ErrorCode = $val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemToUnsubscribe($val)
    {
        $this->ItemToUnsubscribe = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
