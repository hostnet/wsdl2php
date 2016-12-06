<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CheckoutStatusType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaymentStatusCodeType | Indicates the success or failure of the buyer's online payment for a transaction. Only
     * applicable if the buyer chose PayPal as the payment method for the transaction. If the
     * payment failed, the value returned indicates the reason for the failure. Output only.
     */
    public $eBayPaymentStatus;
    /**
     * @var dateTime | The time the status was last modified. Also applicable to Half.com (for GetOrders).
     */
    public $LastModifiedTime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BuyerPaymentMethodCodeType |      */
    public $PaymentMethod;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CompleteStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param PaymentStatusCodeType $val
     * @throws Exception
     */
    public function setEBayPaymentStatus($val)
    {
        $this->eBayPaymentStatus = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastModifiedTime($val)
    {
        $this->LastModifiedTime = $val;
    }

    /**
     * @param BuyerPaymentMethodCodeType $val
     * @throws Exception
     */
    public function setPaymentMethod($val)
    {
        $this->PaymentMethod = $val;
    }

    /**
     * @param CompleteStatusCodeType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->Status = $val;
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
