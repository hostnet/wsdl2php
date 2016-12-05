<?php

namespace Controle;

/**
 * VerifyAddItemResponseType
 * Returns the estimated fees that would be applicable for a new listing (were the item actually
 * listed to eBay with AddItem).
 */
class VerifyAddItemResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var \Controle\FeesType | (Not used.)
	 */
	public $Fees;
	/**
	 * @var boolean | If true, the item is qualified for the eBay Express site associated with the item's listing
	 * site (US or Germany).<br> <br> For fixed-price, Store Inventory, and Express format listings, this
	 * means the item appears on Express. <br> <br> For Chinese auction listings with Buy It Now,
	 * this means the item appears on Express as long as it has no bids and doesn't end within
	 * 12 hours. See Item.SellingStatus.BidCount to determine whether an auction with Buy It Now
	 * has bids or not, and see EndTime or Item.TimeLeft to to determine how soon the listing
	 * ends.
	 */
	public $ExpressListing;
	/**
	 * @var \Controle\ExpressItemRequirementsType | Contains details about why an item does or doesn't qualify as an Express listing. Only
	 * returned when IncludeExpressRequirements is true the request. Whether a child field is
	 * returned can depend on whether the field currently applies to the site on which the item
	 * would be listed. Whether a child field is returned also can depend on whether its value
	 * would be true or false, or the order of eligibility precedence. The item requirements are
	 * assessed in this order:<br> - SellerExpressEligible<br> - ExpressOptOut<br> - ExpressApproved<br> -
	 * All other settings
	 */
	public $ExpressItemRequirements;
	/**
	 * @var string | ID of the category in which the Want It Now post is listed.
	 */
	public $CategoryID;
	/**
	 * @var string | ID of the secondary category in which the item would be listed. Only returned if you set
	 * Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory
	 * was mapped to a new ID by eBay. If the secondary category has not changed or it has expired
	 * with no replacement, Category2ID does not return a value.
	 */
	public $Category2ID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemID($val)
	{
        $this->ItemID = (ItemIDType)$val;
	}

	/**
	 * @param FeesType $val
	 * @throws Exception
	 */
	public function setFees($val)
	{
        $this->Fees = (FeesType)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressListing($val)
	{
        $this->ExpressListing = (boolean)$val;
	}

	/**
	 * @param ExpressItemRequirementsType $val
	 * @throws Exception
	 */
	public function setExpressItemRequirements($val)
	{
        $this->ExpressItemRequirements = (ExpressItemRequirementsType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategory2ID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Category2ID');
        }
        $this->Category2ID = (string)$val;
	}
}
