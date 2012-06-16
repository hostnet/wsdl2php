<?php

namespace Controle;
/**
 * SMSSubscriptionType
 * (in/out) User data related to notifications.
 */
class SMSSubscriptionType {
    /**
     * @var string | The wireless phone number to be used for receiving SMS messages. Max length of phone
     * number varies by country.
     */
    public $SMSPhone;
    /**
     * @var \Controle\SMSSubscriptionUserStatusCodeType | Registered/Unregistered/Pending.
     */
    public $UserStatus;
    /**
     * @var \Controle\WirelessCarrierIDCodeType | The wireless carrier ID.
     */
    public $CarrierID;
    /**
     * @var \Controle\SMSSubscriptionErrorCodeCodeType | Reason for SMS subscription error (postback from thired-party integrator).
     */
    public $ErrorCode;
    /**
     * @var \Controle\ItemIDType | ID of item to unsubscribe from SMS notification.
     */
    public $ItemToUnsubscribe;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

