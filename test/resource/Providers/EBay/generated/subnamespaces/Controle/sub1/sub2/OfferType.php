<?php

namespace Controle\sub1\sub2;

/**
 * OfferType
 * Contains information pertaining to an offer made on an item listing and the current bidding
 * or purchase state of the listing.
 */
class OfferType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\BidActionCodeType | Indicates the type of offer being made on the specified listing. Valid values are enumerated
	 * in the BidActionCodeType code list.
	 */
	public $Action;
	/**
	 * @var \Controle\sub1\sub2\CurrencyCodeType | Limits the result set to just those items with a specified currency.
	 */
	public $Currency;
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount of the offer placed. For competitive-bidding listings, the amount bid on the item
	 * (subject to outbid by other buyers). For fixed-price listings, the fixed sale price at
	 * which the item is purchased. For competitive-bidding listings with an active Buy It Now
	 * option, this amount will be either the Buy It Now price for purchase or the amount of a
	 * bid, depending on the offer type (as specified in Action). For PlaceOffer, the currencyID
	 * attribute is ignored if provided.
	 */
	public $MaxBid;
	/**
	 * @var int | Specifies the number of items from the specified listing the user tendering the offer intends
	 * to purchase or bid on. For Chinese auctions and other listing formats that only allow one
	 * item per listing, value may not exceed one. For multi-item listings, must be greater than
	 * zero and not exceeding the number of items offered for sale in the listing.
	 */
	public $Quantity;
	/**
	 * @var boolean | Indicates the user's preference to accept second chance offers. If true, the user is willing
	 * to be the recipient of second chance offers.
	 */
	public $SecondChanceEnabled;
	/**
	 * @var \Controle\sub1\sub2\CurrencyCodeType | Unique ID identifying the currency in which the localized offer amounts are expressed.
	 */
	public $SiteCurrency;
	/**
	 * @var dateTime | Date and time the offer or bid was placed.
	 */
	public $TimeBid;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount the highest bidder had bid on the item. Applicable only to competitive-bidding listings
	 * (Chinese and Dutch auctions) where there is progressive bidding and winning bidders are
	 * determined based on the highest bid.
	 */
	public $HighestBid;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Localized amount for the item's current price.
	 */
	public $ConvertedPrice;
	/**
	 * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
	 * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
	 * spawned it, so a transaction is only uniquely identified on a global basis by a combination
	 * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
	 */
	public $TransactionID;
	/**
	 * @var \Controle\sub1\sub2\UserType | Bidder information. See the schema documentation for UserType for details on its properties
	 * and their meanings.
	 */
	public $User;
	/**
	 * @var boolean | If true, confirms that the bidder read and agrees to eBay's privacy policy. Applies if
	 * the subject item is in a category that requires user consent. If user consent (that is, confirmation
	 * that a bidder read and agrees to eBay's privacy policy) is required for a category that
	 * the subject item is in, this value must be true for a bid to occur.
	 */
	public $UserConsent;
	/**
	 * @var int | Number of bids placed so far against the item. Only applicable to competitive-bidding listings
	 * (Chinese and Dutch auctions).
	 */
	public $BidCount;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BidActionCodeType $val
	 * @throws Exception
	 */
	public function setAction($val)
	{
        $this->Action = ()$val;
	}

	/**
	 * @param CurrencyCodeType $val
	 * @throws Exception
	 */
	public function setCurrency($val)
	{
        $this->Currency = ()$val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemID($val)
	{
        $this->ItemID = ()$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setMaxBid($val)
	{
        $this->MaxBid = ()$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setQuantity($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Quantity = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setSecondChanceEnabled($val)
	{
        $this->SecondChanceEnabled = ()$val;
	}

	/**
	 * @param CurrencyCodeType $val
	 * @throws Exception
	 */
	public function setSiteCurrency($val)
	{
        $this->SiteCurrency = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setTimeBid($val)
	{
        $this->TimeBid = ()$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setHighestBid($val)
	{
        $this->HighestBid = ()$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setConvertedPrice($val)
	{
        $this->ConvertedPrice = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionID');
        }
        $this->TransactionID = ()$val;
	}

	/**
	 * @param UserType $val
	 * @throws Exception
	 */
	public function setUser($val)
	{
        $this->User = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setUserConsent($val)
	{
        $this->UserConsent = ()$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setBidCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->BidCount = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
