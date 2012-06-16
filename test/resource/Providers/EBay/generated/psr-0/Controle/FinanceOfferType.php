<?php

namespace Controle;
/**
 * FinanceOfferType
 * A promotional offer that allow the buyer to purchase items on credit.
 */
class FinanceOfferType {
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
	 * @var \Controle\AmountType | The minimum amount for an item to which the offer applies.
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
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

