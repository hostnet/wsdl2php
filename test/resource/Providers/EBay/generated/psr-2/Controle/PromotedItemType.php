<?php

namespace Controle;

/**
 * PromotedItemType
 * Contains the data describing one cross-promoted item.
 */
class PromotedItemType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var string | Deprecated with compatibility level 383 and higher. Contains the URL for an image hosted
     * on a location of the seller's choice (other than eBay) and associated with an item.
     * If specified, this cannot have an empty/null value. You cannot specify multiple PictureURL
     * fields. In most cases, the picture URL is also used for the picture at the top of the
     * View Item page on the Web site.<br> For listing calls (e.g., AddItem):<br> With compatibility
     * levels lower than 383, specify 1 PictureURL argument.<br> With compatibility 383 and
     * higher, see SelfHostedURL instead.<br> With the future deprecation of VendorHostedPicture
     * as input, applications should use Item.PictureDetails.PictureURL instead. See Item.PictureDetails.PictureURL
     * for information about how to remove pictures from a listing.<br> For retrieval calls
     * (e.g., GetItem):<br> With compatibility levels lower than 383, PictureURL is returned.<br> With
     * compatibility levels between 383 and 439, SelfHostedURL is returned instead.<br> With
     * compatibility 439 and higher,  Item.PictureDetails.PictureURL is returned instead. <br><br> Note
     * that the Gallery Plus image enhancement does not support VendorHostedPicture. Use Item.PictureDetails
     * with that feature.
     */
    public $PictureURL;
    /**
     * @var string | URL for multiple, self-hosted pictures (if any) that are stored/hosted at a non-eBay
     * site and used for the item. If specified, do not pass an empty/null value. On the main
     * eBay site, if you specify multiple SelfHostedURL fields in listing calls, PhotoDisplay
     * must be set to VendorHostedPictureShow.<br> For listing calls (e.g., AddItem):<br> With
     * compatibility levels lower than 383, specify 1 PictureURL field.<br> With compatibility
     * 383 and higher, specify up to 6 SelfHostedURL fields.<br> For eBay Live Auctions, specify
     * up to 5 SelfHostedURL fields. With the future deprecation of VendorHostedPicture as
     * input, Applications should use Item.PictureDetails.PictureURL instead.<br> For retrieval
     * calls (e.g., GetItem):<br> With compatibility levels lower than 383, PictureURL is returned.<br> With
     * compatibility levels between 383 and 439, SelfHostedURL is returned.<br> With compatibility
     * 439 and higher,  Item.PictureDetails.PictureURL is returned.
     */
    public $SelfHostedURL;
    /**
     * @var int | The ordinal position of the cross-promoted item in the display. If the display is from
     * top to bottom, 1 is at top. If the display is from left to right, 1 is at left. Output
     * only.
     */
    public $Position;
    /**
     * @var \Controle\AmountType | The price of the cross-promoted item in the currency of the site upon which the item
     * is listed. Output only. If the item is listed on a site different from the site specified
     * in the request, then ConvertedPromotionPrice is also returned.
     */
    public $PromotionPrice;
    /**
     * @var \Controle\PromotionItemPriceTypeCodeType | The listing type for the promoted item and how the item price is used.
     */
    public $PromotionPriceType;
    /**
     * @var \Controle\PromotionItemSelectionCodeType | The manner in which the cross-promoted item was chosen to be associated with the referring
     * item. Output only.
     */
    public $SelectionType;
    /**
     * @var string | Title of a Want It Now post.
     */
    public $Title;
    /**
     * @var \Controle\ListingTypeCodeType | The listing format (fixed price, auction, etc) for the automatic item search criteria.
     */
    public $ListingType;
    /**
     * @var \Controle\PromotionDetailsType | Contains the details about the promoted item for a given PromotionPriceType. Output
     * only. Returned with request versions 485 or higher.
     */
    public $PromotionDetails;
    /**
     * @var \Controle\duration | Time left before the listing for the cross-promoted item ends. Output only. The duration
     * is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). See Data Types in the
     * eBay Web Services guide for information about this format. For ended listings, the time
     * left is PT0S (zero seconds).
     */
    public $TimeLeft;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
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
     * @param string $val
     * @throws Exception
     */
    public function setPictureURL($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PictureURL');
        }
        $this->PictureURL = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSelfHostedURL($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SelfHostedURL');
        }
        $this->SelfHostedURL = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPosition($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Position = $val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setPromotionPrice($val)
    {
        $this->PromotionPrice = $val;
    }

    /**
     * @param PromotionItemPriceTypeCodeType $val
     * @throws Exception
     */
    public function setPromotionPriceType($val)
    {
        $this->PromotionPriceType = $val;
    }

    /**
     * @param PromotionItemSelectionCodeType $val
     * @throws Exception
     */
    public function setSelectionType($val)
    {
        $this->SelectionType = $val;
    }

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
     * @param ListingTypeCodeType $val
     * @throws Exception
     */
    public function setListingType($val)
    {
        $this->ListingType = $val;
    }

    /**
     * @param PromotionDetailsType $val
     * @throws Exception
     */
    public function setPromotionDetails($val)
    {
        $this->PromotionDetails = $val;
    }

    /**
     * @param duration $val
     * @throws Exception
     */
    public function setTimeLeft($val)
    {
        $this->TimeLeft = $val;
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
