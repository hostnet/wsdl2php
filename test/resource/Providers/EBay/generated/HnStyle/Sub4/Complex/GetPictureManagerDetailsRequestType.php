<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetPictureManagerDetailsRequestType
 * Requests information about folders or pictures in a Picture Manager account or the account
 * settings.
 */
class GetPictureManagerDetailsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | The ID of the folder.
     */
    public $FolderID;
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerDetailLevelCodeType | The type of information you want returned, about pictures and folders, the account subscription,
     * or both. Use this element rather than the generic DetailLevel element defined in AbstractRequestType.
     * You can use the following values: ReturnAll, ReturnSubscription, or ReturnPicture.
     */
    public $PictureManagerDetailLevel;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFolderID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->FolderID = $val;
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
     * @param PictureManagerDetailLevelCodeType $val
     * @throws Exception
     */
    public function setPictureManagerDetailLevel($val)
    {
        $this->PictureManagerDetailLevel = $val;
    }
}
