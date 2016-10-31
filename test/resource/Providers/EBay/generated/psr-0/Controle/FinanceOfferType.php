<?php

namespace Controle;

/**
 * FinanceOfferType
 * A promotional offer that allow the buyer to purchase items on credit.
 */
class FinanceOfferType
{
	/**
	 * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
	 */
	public $financeofferid;
	/**
	 * @var string | Text that the buyer sees describing the details of the financing offer.
	 */
	public $buyerterms;
	/**
	 * @var string | Text that the seller sees describing the details of the financing offer.
	 */
	public $sellerterms;
	/**
	 * @var dateTime | Date on which the offer first becomes active.
	 */
	public $startdate;
	/**
	 * @var dateTime | Date the message was last modified. Returned if the parent container is returned.
	 */
	public $lastmodifieddate;
	/**
	 * @var \Controle\AmountType | The minimum amount for an item to which the offer applies.
	 */
	public $minimumamount;
	/**
	 * @var double | Interest charges associated with the finance offer.
	 */
	public $ratefactor;
	/**
	 * @var int | A number ranging from 0 to 10000 (inclusive), with 10000 having the highest priority.
	 */
	public $priority;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFinanceOfferID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FinanceOfferID');
        }
        $this->financeofferid = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBuyerTerms($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BuyerTerms');
        }
        $this->buyerterms = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSellerTerms($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerTerms');
        }
        $this->sellerterms = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setStartDate($val)
	{
        $this->startdate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastModifiedDate($val)
	{
        $this->lastmodifieddate = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setMinimumAmount($val)
	{
        $this->minimumamount = (int)$val;
	}

	/**
	 * @param double $val
	 * @throws Exception
	 */
	public function setRateFactor($val)
	{
        $this->ratefactor = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPriority($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->priority = (int)$val;
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
