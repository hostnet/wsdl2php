<?php

namespace Controle;

/**
 * PaymentDetailsType
 * Data associated with payment (payment durations).
 */
class PaymentDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | Applies to US eBay Motors site (except Parts and Accessories category). Number of hours
	 * after a listing closes that the buyer can put down a deposit on an item (if the seller
	 * specified a deposit). Only takes effect if listing also includes the Deposit Amount and
	 * Deposit Type attributes (see AttributeSetArray). The choices are 24, 48, and 72, and the
	 * default is 48. Deposits can only be paid using PayPal, so the listing must offer PayPal
	 * as a payment method (in addition to the payment methods offered for the full payment).
	 */
	public $HoursToDeposit;
	/**
	 * @var int | Applies to vehicle categories on the US and Canada eBay Motors sites (not Parts and Accessories
	 * categories). Number of days after a listing closes that the buyer can take to pay the full
	 * cost of the vehicle. The choices are 3, 7, 10, and 14, and the default is 7. PayPal and
	 * credit cards cannot be used to pay the full cost of a vehicle, so the listing must offer
	 * MOCC (cashier's check), PersonalCheck, LoanCheck, CashInPerson, and/or PaymentSeeDescription
	 * as payment methods.
	 */
	public $DaysToFullPayment;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setHoursToDeposit($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->HoursToDeposit = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDaysToFullPayment($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->DaysToFullPayment = $val;
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
