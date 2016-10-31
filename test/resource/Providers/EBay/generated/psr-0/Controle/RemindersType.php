<?php

namespace Controle;

/**
 * RemindersType
 * Specifies the type of reminders for which you want information.
 */
class RemindersType
{
	/**
	 * @var int | The number of reminders requesting that the buyer send payment.
	 */
	public $paymenttosendcount;
	/**
	 * @var int | The number of reminders that feedback has not yet been received by the buyer or seller.
	 */
	public $feedbacktoreceivecount;
	/**
	 * @var int | The number of reminders that feedback has not yet been sent by the buyer or seller.
	 */
	public $feedbacktosendcount;
	/**
	 * @var int | The number of reminders advising the buyer that the buyer has been outbid.
	 */
	public $outbidcount;
	/**
	 * @var int | The number of reminders that the seller has not yet received a payment.
	 */
	public $paymenttoreceivecount;
	/**
	 * @var int | The number of reminders requesting that the seller review second chance offers.
	 */
	public $secondchanceoffercount;
	/**
	 * @var int | The number of reminders advising the seller that shipping is needed.
	 */
	public $shippingneededcount;
	/**
	 * @var int | The number of reminders advising the seller that relisting is needed.
	 */
	public $relistingneededcount;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPaymentToSendCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->paymenttosendcount = (int)$val;
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
        $this->feedbacktoreceivecount = (int)$val;
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
        $this->feedbacktosendcount = (int)$val;
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
        $this->outbidcount = (int)$val;
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
        $this->paymenttoreceivecount = (int)$val;
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
        $this->secondchanceoffercount = (int)$val;
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
        $this->shippingneededcount = (int)$val;
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
        $this->relistingneededcount = (int)$val;
	}
}
