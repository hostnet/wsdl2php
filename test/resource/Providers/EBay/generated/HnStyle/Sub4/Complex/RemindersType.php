<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RemindersType
 * Specifies the type of reminders for which you want information.
 */
class RemindersType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | The number of reminders requesting that the buyer send payment.
     */
    public $PaymentToSendCount;
    /**
     * @var int | The number of reminders that feedback has not yet been received by the buyer or seller.
     */
    public $FeedbackToReceiveCount;
    /**
     * @var int | The number of reminders that feedback has not yet been sent by the buyer or seller.
     */
    public $FeedbackToSendCount;
    /**
     * @var int | The number of reminders advising the buyer that the buyer has been outbid.
     */
    public $OutbidCount;
    /**
     * @var int | The number of reminders that the seller has not yet received a payment.
     */
    public $PaymentToReceiveCount;
    /**
     * @var int | The number of reminders requesting that the seller review second chance offers.
     */
    public $SecondChanceOfferCount;
    /**
     * @var int | The number of reminders advising the seller that shipping is needed.
     */
    public $ShippingNeededCount;
    /**
     * @var int | The number of reminders advising the seller that relisting is needed.
     */
    public $RelistingNeededCount;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPaymentToSendCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PaymentToSendCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFeedbackToReceiveCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->FeedbackToReceiveCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFeedbackToSendCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->FeedbackToSendCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setOutbidCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->OutbidCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPaymentToReceiveCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PaymentToReceiveCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setSecondChanceOfferCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->SecondChanceOfferCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setShippingNeededCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ShippingNeededCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setRelistingNeededCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RelistingNeededCount = $val;
    }
}
