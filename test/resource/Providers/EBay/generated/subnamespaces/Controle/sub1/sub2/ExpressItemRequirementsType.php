<?php

namespace Controle\sub1\sub2;

class ExpressItemRequirementsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | If false, indicates that an item is not Express-eligible because the seller is not Express-eligible.
	 * Only returned if false, and no other settings are returned in this case.
	 */
	public $SellerExpressEligible;
	/**
	 * @var boolean | Preference to opt out an individual fixed price, auction with Buy It Now, or Store Inventory
	 * item from eBay Express. Specify as input when listing an item to indicate that the item should
	 * not be listed on eBay Express. By default, an item is opted in unless the seller has configured
	 * their user preferences to opt all items out of Express (see GetUserPreferences). So, if
	 * the seller and item qualify for eBay Express, the item will be made available on the Express
	 * site unless you set this flag to true to opt out.<br> <br> ExpressOptOut has no effect if
	 * the seller opts out in their user preferences. Also, you cannot set ExpressOptOut to false
	 * to force an ineligible item to be included on Express.<br> <br> This value is ignored when
	 * ListingType=Express.<br> <br> To determine whether an item was listed on Express, call
	 * GetItem and check the value of Item.ListingDetails.ExpressListing. To determine whether
	 * an item sold on Express, use a transaction call like GetItemTransactions (or the Checkout
	 * notification), and check the value of TransactionPlatform.
	 */
	public $ExpressOptOut;
	/**
	 * @var boolean | If true, indicates eBay has marked the seller as eligible for eBay Express based on direct
	 * evaluation. Only returned if true, and no other seller requirement settings are returned
	 * in this case. For example, on the eBay Germany site, sellers need to fill out an application
	 * to become eligible to list on Express Germany. If they are approved, eBay sets ExpressApproved
	 * to true and no other seller requirement settings are relevant.
	 */
	public $ExpressApproved;
	/**
	 * @var boolean | If true, indicates the item listing format is eligible for Express. If false, the listing
	 * format is ineligible (and the item is therefore ineligible).
	 */
	public $ExpressEligibleListingType;
	/**
	 * @var boolean | If true, the item's primary category is enabled for Express. If false, the primary category
	 * is not enabled for Express (and the item is therefore ineligible).
	 */
	public $ExpressEnabledCategory;
	/**
	 * @var boolean | If true, the seller has an eligible PayPal account for Express. Only returned if the site
	 * assesses this requirement at the seller level.
	 */
	public $EligiblePayPalAccount;
	/**
	 * @var boolean | If true, domestic shipping costs are specified for the item. If false, they aren't specified
	 * (and the item is therefore ineligible).
	 */
	public $DomesticShippingCost;
	/**
	 * @var boolean | If true, the item is covered by a return policy that meets the site's requirements for
	 * Express. Only returned for Express Germany. (A return policy is optional for Express US.)
	 */
	public $EligibleReturnPolicy;
	/**
	 * @var boolean | Indicates whether a listing has an image associated with it.
	 */
	public $Picture;
	/**
	 * @var boolean | If true, the item specifies an eligible item condition. If false, the item doesn't specify
	 * an eligible item condition. Only returned if the category requires an item condition for
	 * Express. Some categories waive the item condition requirement.
	 */
	public $EligibleItemCondition;
	/**
	 * @var boolean | If true, the price of the item is above the minimum price allowed on Express. That is,
	 * the StartPrice, BuyItNowPrice, or CurrentPrice is above the minimum.)
	 */
	public $PriceAboveMinimum;
	/**
	 * @var boolean | If true, the price of the item is below the maximum price allowed on Express. (That is,
	 * the StartPrice, BuyItNowPrice, or CurrentPrice is below the maximum.)
	 */
	public $PriceBelowMaximum;
	/**
	 * @var boolean | If true, indicates the item meets the site's eBay Express requirements for checkout. (A
	 * common case when this could be false would be when ThirdPartyCheckout is true but ThirdPartyCheckoutIntegration
	 * is false.)
	 */
	public $EligibleCheckout;
	/**
	 * @var boolean | If true, the item has no pre-approved bidder list.
	 */
	public $NoPreapprovedBidderList;
	/**
	 * @var boolean | If true, the item is not an eBay Giving Works item. Only returned if the site does not
	 * allow charity listings on Express. (In other words, if the site excludes charity listings
	 * from Express, then NoCharity=true means the item meets the eligibility requirement.)
	 */
	public $NoCharity;
	/**
	 * @var boolean | If true, the item is not a digital listing. That is, the seller did not specify DigitalDeliveryDetails. Only
	 * returned if the site does not allow digital listings on Express. (In other words, if the
	 * site excludes digital listings from Express, then NoDigitalDelivery=true means the item
	 * meets the eligibility requirement.)
	 */
	public $NoDigitalDelivery;
	/**
	 * @var boolean | If true, the item offers a combined shipping discount. Only returned if the Express site
	 * has an item-level combined shipping discount requirement. (Some Express sites only require
	 * you to accept combined payments at the seller level, in your My eBay preferences.)
	 */
	public $CombinedShippingDiscount;
	/**
	 * @var boolean | If true, the country you specified for the item meets the specified site's shipping origin
	 * requirements for Express.
	 */
	public $ShipFromEligibleCountry;
	/**
	 * @var boolean | If true, the seller has a PayPal account that accepts a payment from a buyer with an unconfirmed
	 * address. Only returned if the site assesses this requirement at the seller level.
	 */
	public $PayPalAccountAcceptsUnconfirmedAddress;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setSellerExpressEligible($val)
	{
        $this->SellerExpressEligible = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressOptOut($val)
	{
        $this->ExpressOptOut = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressApproved($val)
	{
        $this->ExpressApproved = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressEligibleListingType($val)
	{
        $this->ExpressEligibleListingType = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressEnabledCategory($val)
	{
        $this->ExpressEnabledCategory = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEligiblePayPalAccount($val)
	{
        $this->EligiblePayPalAccount = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setDomesticShippingCost($val)
	{
        $this->DomesticShippingCost = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEligibleReturnPolicy($val)
	{
        $this->EligibleReturnPolicy = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPicture($val)
	{
        $this->Picture = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEligibleItemCondition($val)
	{
        $this->EligibleItemCondition = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPriceAboveMinimum($val)
	{
        $this->PriceAboveMinimum = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPriceBelowMaximum($val)
	{
        $this->PriceBelowMaximum = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEligibleCheckout($val)
	{
        $this->EligibleCheckout = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setNoPreapprovedBidderList($val)
	{
        $this->NoPreapprovedBidderList = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setNoCharity($val)
	{
        $this->NoCharity = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setNoDigitalDelivery($val)
	{
        $this->NoDigitalDelivery = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCombinedShippingDiscount($val)
	{
        $this->CombinedShippingDiscount = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setShipFromEligibleCountry($val)
	{
        $this->ShipFromEligibleCountry = ()$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPayPalAccountAcceptsUnconfirmedAddress($val)
	{
        $this->PayPalAccountAcceptsUnconfirmedAddress = ()$val;
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
