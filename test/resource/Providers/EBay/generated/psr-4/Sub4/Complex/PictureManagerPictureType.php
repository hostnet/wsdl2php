<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PictureManagerPictureType
 * A picture in a Picture Manager album.
 */
class PictureManagerPictureType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | Deprecated with compatibility level 383 and higher. Contains the URL for an image hosted
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerPictureDisplayType | The type of picture display in Picture Manager.
     */
    public $DisplayFormat;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setPictureURL($val)
    {
        $this->PictureURL = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDate($val)
    {
        $this->Date = $val;
    }

    /**
     * @param PictureManagerPictureDisplayType $val
     * @throws Exception
     */
    public function setDisplayFormat($val)
    {
        $this->DisplayFormat = $val;
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
