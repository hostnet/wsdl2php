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
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\anyURI | Returns the destination address for the notification. This is the value set using SetNotificationPreferences.
     */
    public $DeliveryURL;
    /**
     * @var string | Reference identifier for the notification.
     */
    public $ReferenceID;
    /**
     * @var dateTime | Date and time when this notification will be removed from the eBay system.
     */
    public $ExpirationTime;
    /**
     * @var \Controle\NotificationEventTypeCodeType | Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete,
     * BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction,
     * FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute,
     * UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
     */
    public $Type;
    /**
     * @var int | Returns the total number of retries for the given notification.
     */
    public $Retries;
    /**
     * @var \Controle\NotificationEventStateCodeType | Revise only
     */
    public $DeliveryStatus;
    /**
     * @var dateTime | Returns the time when the notification is scheduled for retry. This won't be included
     * if the DeliveryStatus is Delivered.
     */
    public $NextRetryTime;
    /**
     * @var dateTime | Returns the time when the notification was delivered.
     */
    public $DeliveryTime;
    /**
     * @var string | Returns the error message.
     */
    public $ErrorMessage;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setDeliveryURL($val)
    {
        $this->DeliveryURL = (int)$val;
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
        $this->ReferenceID = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setExpirationTime($val)
    {
        $this->ExpirationTime = (int)$val;
    }

    /**
     * @param NotificationEventTypeCodeType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->Type = (int)$val;
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
        $this->Retries = (int)$val;
    }

    /**
     * @param NotificationEventStateCodeType $val
     * @throws Exception
     */
    public function setDeliveryStatus($val)
    {
        $this->DeliveryStatus = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setNextRetryTime($val)
    {
        $this->NextRetryTime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDeliveryTime($val)
    {
        $this->DeliveryTime = (int)$val;
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
        $this->ErrorMessage = (int)$val;
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
