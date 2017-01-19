<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetPictureManagerDetailsRequestType
 * Creates, updates, or deletes Picture Manager account settings, folders, or pictures.
 */
class SetPictureManagerDetailsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerDetailsType | Specifies the setting or folder to create, update, or delete, or the picture to update.
     * You cannot upload or delete pictures using SetPictureManagerDetails; you must use the
     * eBay site.
     */
    public $PictureManagerDetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerActionCodeType | Indicates the type of offer being made on the specified listing. Valid values are enumerated
     * in the BidActionCodeType code list.
     */
    public $Action;
    // @codingStandardsIgnoreEnd

    /**
     * @param PictureManagerDetailsType $val
     * @throws \Exception
     */
    public function setPictureManagerDetails($val)
    {
        $this->PictureManagerDetails = $val;
    }

    /**
     * @param PictureManagerActionCodeType $val
     * @throws \Exception
     */
    public function setAction($val)
    {
        $this->Action = $val;
    }
}
