<?php

namespace Controle;

/**
 * PictureDetailsType
 * Contains the data for a picture associated with an item. Replaces the deprecated SiteHostedPicture
 * and VendorHostedPicture in the response with compatibility level 439 or greater. With the
 * future deprecation of SiteHostedPicture and VendorHostedPicture as input, applications should
 * use PictureDetails in the input instead. Not applicable to Half.com.
 */
class PictureDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\GalleryTypeCodeType | Indicates whether a picture for the item is included in the Gallery and, if so whether
	 * the item is also featured or Plus in the Gallery. If the value is Gallery or Plus or Featured,
	 * eBay checks the available image URLs in the following order to determine which URL to use (if
	 * more than one of these URLs is available):<br><br>            a) Use the URL in GalleryURL,
	 * if it is specified.<br>            b) Otherwise, if ProductListingDetails.UseStockPhotoURLAsGallery
	 * is true, use the eBay stock photo.<br>            c) Otherwise, use the value of the first
	 * SelfHostedURL in the array of SelfHostedURL fields, if any.<br>            d) Otherwise,
	 * if ProductListingDetails.ProductID is specified, use the eBay stock photo
	 *  (eBay resets UseStockPhotoURLAsGallery to true in this case).<br>            e) If eBay
	 * is unable to find an image URL for the listing, an error is returned.<br><br>
	 *   See "Describing Items in a Listing" in the eBay Web Services Guide for additional information
	 *            about working with pictures and related validation rules.            You cannot
	 * remove Gallery or Plus or Featured when you revise a listing.
	 */
	public $GalleryType;
	/**
	 * @var \Controle\anyURI | URL for a picture to be used as the Gallery thumbnail. Ignored if GalleryType is None or
	 * unspecified. If the value of GalleryType is Gallery or Featured, you can either specify
	 * GalleryURL or allow eBay to use another picture that you have included in the listing.
	 * (See GalleryType for the rules that determine which URL is used if you do not specify GalleryURL.)
	 * The image used for the Gallery thumbnail must be in one of the graphics formats JPEG, BMP,
	 * TIF, or GIF. eBay Live Auctions lots are listed in the gallery for free. With the future
	 * deprecation of VendorHostedPicture as input, Applications should use Item.PictureDetails.GalleryURL
	 * instead. If the item has bids (or items have been sold) or the listing ends within 12 hours, you
	 * can add GalleryURL or change its value, but you cannot remove the gallery picture if it
	 * was previously specified. Not applicable to eBay Motors listings. See "Describing Items
	 * in a Listing" in the If the value of GalleryType is Gallery or Plus or Featured, see eBay
	 * Web Services Guide for additional validation rules. <br><br> Note that the Gallery Plus
	 * image enhancement does not support VendorHostedPicture. Use Item.PictureDetails with that
	 * feature.
	 */
	public $GalleryURL;
	/**
	 * @var \Controle\PhotoDisplayCodeType | Specifies the type of image display used in a listing. Some options are only available
	 * if images are hosted through eBay Picture Services (EPS). eBay determines this by parsing
	 * the associated PictureURL. Cannot be used in combination with Listing Designer layouts. Specify
	 * None or do not add PhotoDisplay when ListingDesigner.LayoutID is a value other than 0.
	 */
	public $PhotoDisplay;
	/**
	 * @var \Controle\anyURI | Deprecated with compatibility level 383 and higher. Contains the URL for an image hosted
	 * on a location of the seller's choice (other than eBay) and associated with an item. If
	 * specified, this cannot have an empty/null value. You cannot specify multiple PictureURL
	 * fields. In most cases, the picture URL is also used for the picture at the top of the View
	 * Item page on the Web site.<br> For listing calls (e.g., AddItem):<br> With compatibility
	 * levels lower than 383, specify 1 PictureURL argument.<br> With compatibility 383 and higher,
	 * see SelfHostedURL instead.<br> With the future deprecation of VendorHostedPicture as input, applications
	 * should use Item.PictureDetails.PictureURL instead. See Item.PictureDetails.PictureURL for
	 * information about how to remove pictures from a listing.<br> For retrieval calls (e.g.,
	 * GetItem):<br> With compatibility levels lower than 383, PictureURL is returned.<br> With
	 * compatibility levels between 383 and 439, SelfHostedURL is returned instead.<br> With compatibility
	 * 439 and higher,  Item.PictureDetails.PictureURL is returned instead. <br><br> Note that
	 * the Gallery Plus image enhancement does not support VendorHostedPicture. Use Item.PictureDetails
	 * with that feature.
	 */
	public $PictureURL;
	/**
	 * @var \Controle\PictureSourceCodeType | The service hosting the images in PictureURL, if any. This information is primarily useful
	 * for Picture Manager subscribers, who pay a flat subscription fee instead of individual
	 * picture fees per listing. Only returned when PictureURL is returned.
	 */
	public $PictureSource;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param GalleryTypeCodeType $val
	 * @throws \Exception
	 */
	public function setGalleryType($val)
	{
        $this->GalleryType = $val;
	}

	/**
	 * @param anyURI $val
	 * @throws \Exception
	 */
	public function setGalleryURL($val)
	{
        $this->GalleryURL = $val;
	}

	/**
	 * @param PhotoDisplayCodeType $val
	 * @throws \Exception
	 */
	public function setPhotoDisplay($val)
	{
        $this->PhotoDisplay = $val;
	}

	/**
	 * @param anyURI $val
	 * @throws \Exception
	 */
	public function setPictureURL($val)
	{
        $this->PictureURL = $val;
	}

	/**
	 * @param PictureSourceCodeType $val
	 * @throws \Exception
	 */
	public function setPictureSource($val)
	{
        $this->PictureSource = $val;
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
