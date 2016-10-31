<?php

namespace Controle;

/**
 * NotificationDetailsType
 * Information about a single notification. Notification information includes the reference
 * ID, notification type, current status, time delivered, error code, and error message for
 * the notification. If notification details are included in the response, all of the detail
 * fields are returned.
 */
class NotificationDetailsType
{
    /**
     * @var \Controle\anyURI | Returns the destination address for the notification. This is the value set using SetNotificationPreferences.
     */
    public $deliveryurl;
    /**
     * @var string | Reference identifier for the notification.
     */
    public $referenceid;
    /**
     * @var dateTime | Date and time when this notification will be removed from the eBay system.
     */
    public $expirationtime;
    /**
     * @var \Controle\NotificationEventTypeCodeType | Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete,
     * BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction,
     * FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute,
     * UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
     */
    public $type;
    /**
     * @var int | Returns the total number of retries for the given notification.
     */
    public $retries;
    /**
     * @var \Controle\NotificationEventStateCodeType | Revise only
     */
    public $deliverystatus;
    /**
     * @var dateTime | Returns the time when the notification is scheduled for retry. This won't be included
     * if the DeliveryStatus is Delivered.
     */
    public $nextretrytime;
    /**
     * @var dateTime | Returns the time when the notification was delivered.
     */
    public $deliverytime;
    /**
     * @var string | Returns the error message.
     */
    public $errormessage;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setDeliveryURL($val)
    {
        $this->deliveryurl = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReferenceID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ReferenceID');
        }
        $this->referenceid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setExpirationTime($val)
    {
        $this->expirationtime = (int)$val;
    }

    /**
     * @param NotificationEventTypeCodeType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setRetries($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->retries = (int)$val;
    }

    /**
     * @param NotificationEventStateCodeType $val
     * @throws Exception
     */
    public function setDeliveryStatus($val)
    {
        $this->deliverystatus = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setNextRetryTime($val)
    {
        $this->nextretrytime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDeliveryTime($val)
    {
        $this->deliverytime = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setErrorMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ErrorMessage');
        }
        $this->errormessage = (int)$val;
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
