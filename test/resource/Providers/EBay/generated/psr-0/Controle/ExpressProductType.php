<?php

namespace Controle;

/**
 * ExpressProductType
 * Information that eBay Express collects about an eBay catalog product.
 */
class ExpressProductType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Title of a Want It Now post.
	 */
	public $Title;
	/**
	 * @var \Controle\AmountType | Specifies the lower limit of price range for the automatic search criteria.
	 */
	public $MinPrice;
	/**
	 * @var \Controle\AmountType | Specifies the upper limit of price range for the automatic search criteria.
	 */
	public $MaxPrice;
	/**
	 * @var \Controle\anyURI | Fully qualified URL for a standard image (if any) that is associated with the product. A
	 * seller includes the stock photo in the listing by setting IncludeStockPhotoURL.
	 */
	public $StockPhotoURL;
	/**
	 * @var int | Total number of active listings (on the specified Express site) that were pre-filled based
	 * on this eBay catalog product. Only returned when ProductDetails is set to Fine. This does
	 * not necessarily match the number of items returned in ItemArray (if any), because the call
	 * returns deduped items in ItemArray.
	 */
	public $ItemCount;
	/**
	 * @var \Controle\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
	 * item. All Half.com items are listed with Pre-filled Item Information.
	 */
	public $ExternalProductID;
	/**
	 * @var long | The global reference ID for the eBay catalog product. Only returned when ProductDetails
	 * is set to Fine.<br> <br> <span class="tablenote"><b>Note:</b> This value is not the same
	 * as the ProductID used in AddItem and related calls. A ProductID represents a particular
	 * version of a catalog product, which is associated with a particular set of Item Specifics
	 * and other details. A ProductReferenceID is a more generic or global reference to a catalog
	 * product, which is useful for buy-side searching. One ProductReferenceID can be associated
	 * with multiple ProductIDs.</span>
	 */
	public $ProductReferenceID;
	/**
	 * @var \Controle\NameValueListArrayType | A list of attribute and value pairs that are included in the product's pre-filled Item
	 * Specifics and that are applicable in Express search results. This does not necessarily
	 * include all Item Specifics that are defined for the product in the catalog. Typically,
	 * it returns only the top attributes (as determined by Express). See ExternalProductID for
	 * the ISBN or UPC, if applicable. Only returned when ProductDetails is set to Fine.
	 */
	public $ItemSpecifics;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTitle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Title');
        }
        $this->Title = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setMinPrice($val)
	{
        $this->MinPrice = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setMaxPrice($val)
	{
        $this->MaxPrice = $val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setStockPhotoURL($val)
	{
        $this->StockPhotoURL = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setItemCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ItemCount = $val;
	}

	/**
	 * @param ExternalProductIDType $val
	 * @throws Exception
	 */
	public function setExternalProductID($val)
	{
        $this->ExternalProductID = $val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setProductReferenceID($val)
	{
        $this->ProductReferenceID = $val;
	}

	/**
	 * @param NameValueListArrayType $val
	 * @throws Exception
	 */
	public function setItemSpecifics($val)
	{
        $this->ItemSpecifics = $val;
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
