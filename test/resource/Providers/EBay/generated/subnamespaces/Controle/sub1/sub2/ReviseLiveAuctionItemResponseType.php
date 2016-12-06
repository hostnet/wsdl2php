<?php

namespace Controle\sub1\sub2;

/**
 * ReviseLiveAuctionItemResponseType
 * Returns the item ID and the estimated fees for the revised listing.
 */
class ReviseLiveAuctionItemResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var \Controle\sub1\sub2\FeesType | (Not used.)
	 */
	public $Fees;
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
        $this->ItemID = $val;
	}

	/**
	 * @param FeesType $val
	 * @throws Exception
	 */
	public function setFees($val)
	{
        $this->Fees = $val;
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
        $this->CategoryID = $val;
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
        $this->Category2ID = $val;
	}
}
