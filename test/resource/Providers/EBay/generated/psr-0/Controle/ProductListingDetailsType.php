<?php

namespace Controle;

/**
 * ProductListingDetailsType
 * Contains product information that can be included in a listing. Applicable for listings
 * that use eBay's Pre-filled Item Information feature. See the Developer's Guide for details
 * on working with Pre-filled Item Information.
 */
class ProductListingDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Identifier for a representative stock product in a product family.            Used as input
	 * in GetProductFamilyMembers requests to identify a product family.            Use GetProductSearchResults
	 * to determine the available IDs.
	 */
	public $ProductID;
	/**
	 * @var boolean | If true, indicates that the item listing includes the stock photo. To use an eBay stock
	 * photo in an item listing, set IncludeStockPhotoURL to true. If a stock photo is available,
	 * it is used at the top of the View Item page and in the Item Specifics section of the listing.
	 * If you also include Item.PictureDetails.PictureURL, the stock photo only appears in the
	 * Item Specifics section of the listing. Other pictures you specify by using Item.PictureDetails.PictureURL
	 * appear in a separate section of the listing. If you use Item.ExternalProductID instead
	 * of Item.ProductListingDetails, eBay sets IncludeStockPhotoURL to true (and you cannot set
	 * it to false). In GetItem, the URL of the stock photo will be returned in StockPhotoURL. If
	 * you set IncludeStockPhotoURL to false, the stock photo does not appear in the listing at
	 * all.<br> <br> To be considered for eBay Express, in most cases a listing must include a
	 * picture or a gallery URL. You can choose to use the eBay stock photo for this purpose. See
	 * the eBay Web Services Guide links below for details.<br> <br> Not applicable to Half.com.
	 */
	public $IncludeStockPhotoURL;
	/**
	 * @var boolean | If true, specifies that the listing should include additional information about the product, such
	 * as a publisher's description or film credits. Such information is hosted through the eBay
	 * site and cannot be edited. If true, Item.Description is optional in item-listing requests.
	 */
	public $IncludePrefilledItemInformation;
	/**
	 * @var boolean | If true, indicates that the stock photo for an item (if available) is used as the gallery
	 * thumbnail. When listing an item, IncludeStockPhotoURL must also be true and Item.PictureDetails.GalleryType
	 * must be passed in with a value of Gallery or Gallery Featured (but not both). Passing in
	 * Item.PictureDetails.GalleryURL takes precedence over UseStockPhotoURLAsGallery. See the eBay
	 * Web Services Guide for additional validation rules for pictures. To be considered for eBay
	 * Express, in most cases a listing must include a picture or a gallery URL. You can choose
	 * to use the eBay stock photo for this purpose. See "Working with eBay Express Listings"
	 * in the eBay Web Services Guide.
	 */
	public $UseStockPhotoURLAsGallery;
	/**
	 * @var \Controle\anyURI | Fully qualified URL for a standard image (if any) that is associated with the product. A
	 * seller includes the stock photo in the listing by setting IncludeStockPhotoURL.
	 */
	public $StockPhotoURL;
	/**
	 * @var string | Copyright statement indicating the source of the product information. This information
	 * will be included in the listing with Pre-filled Item Information. Your application should
	 * also display the copyright statement when rendering the Pre-filled Item Information. If
	 * more than one copyright statement is applicable, they can be presented to the user in alphabetical
	 * order. Returned as HTML. Output only.
	 */
	public $Copyright;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setProductID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ProductID');
        }
        $this->ProductID = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setIncludeStockPhotoURL($val)
	{
        $this->IncludeStockPhotoURL = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setIncludePrefilledItemInformation($val)
	{
        $this->IncludePrefilledItemInformation = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUseStockPhotoURLAsGallery($val)
	{
        $this->UseStockPhotoURLAsGallery = $val;
	}

	/**
	 * @param anyURI $val
	 * @throws \Exception
	 */
	public function setStockPhotoURL($val)
	{
        $this->StockPhotoURL = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCopyright($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Copyright');
        }
        $this->Copyright = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
