<?php

namespace Controle;
/**
 * PictureManagerPictureType
 * A picture in a Picture Manager album.
 */
class PictureManagerPictureType {
    /**
     * @var \Controle\anyURI | Deprecated with compatibility level 383 and higher. Contains the URL for an image hosted
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
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var dateTime | The date the picture was uploaded to the Picture Manager account.
     */
    public $Date;
    /**
     * @var \Controle\PictureManagerPictureDisplayType | The type of picture display in Picture Manager.
     */
    public $DisplayFormat;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

