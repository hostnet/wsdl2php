<?php

namespace Controle\sub1\sub2;

/**
 * FinanceOfferType
 * A promotional offer that allow the buyer to purchase items on credit.
 */
class FinanceOfferType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
	 */
	public $FinanceOfferID;
	/**
	 * @var string | Text that the buyer sees describing the details of the financing offer.
	 */
	public $BuyerTerms;
	/**
	 * @var string | Text that the seller sees describing the details of the financing offer.
	 */
	public $SellerTerms;
	/**
	 * @var dateTime | Date on which the offer first becomes active.
	 */
	public $StartDate;
	/**
	 * @var dateTime | Date the message was last modified. Returned if the parent container is returned.
	 */
	public $LastModifiedDate;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The minimum amount for an item to which the offer applies.
	 */
	public $MinimumAmount;
	/**
	 * @var double | Interest charges associated with the finance offer.
	 */
	public $RateFactor;
	/**
	 * @var int | A number ranging from 0 to 10000 (inclusive), with 10000 having the highest priority.
	 */
	public $Priority;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFinanceOfferID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FinanceOfferID');
        }
        $this->FinanceOfferID = (string)$val;
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
        $this->BuyerTerms = (string)$val;
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
        $this->SellerTerms = (string)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setStartDate($val)
	{
        $this->StartDate = (dateTime)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastModifiedDate($val)
	{
        $this->LastModifiedDate = (dateTime)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setMinimumAmount($val)
	{
        $this->MinimumAmount = (AmountType)$val;
	}

	/**
	 * @param double $val
	 * @throws Exception
	 */
	public function setRateFactor($val)
	{
        $this->RateFactor = (double)$val;
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
        $this->Priority = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
