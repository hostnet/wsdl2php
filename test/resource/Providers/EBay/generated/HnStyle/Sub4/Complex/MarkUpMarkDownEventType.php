<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MarkUpMarkDownEventType
 * Describes an individual mark-up or mark-down event. eBay will automatically mark an application
 * as down if attempts to deliver a notification fail repeatedly. eBay may mark an application
 * down manually under certain circumstances.
 */
class MarkUpMarkDownEventType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MarkUpMarkDownEventTypeCodeType | Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete,
     * BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction,
     * FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute,
     * UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
     */
    public $type;
    /**
     * @var dateTime | Time when the application was marked up or marked down.
     */
    public $time;
    /**
     * @var string | Describes how the application was marked down, automatically or manually. When an application
     * is automatically marked down, eBay will ping the application periodically, and if communication
     * is restored, eBay will automatically mark the application up. If your application is
     * marked down manually, you must contact eBay Developer Support to get your application
     * marked up. A Reason is not provided for mark up events.
     */
    public $reason;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param MarkUpMarkDownEventTypeCodeType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setTime($val)
    {
        $this->time = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReason($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Reason');
        }
        $this->reason = (int)$val;
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