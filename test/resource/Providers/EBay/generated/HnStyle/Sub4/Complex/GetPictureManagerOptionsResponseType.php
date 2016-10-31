<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetPictureManagerOptionsResponseType
 * Returns a list of Picture Manager options and allowed values.
 */
class GetPictureManagerOptionsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerSubscriptionType | A Store subscription level.
     */
    public $subscription;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerPictureDisplayType | A global definition for displaying pictures, with a maximum size.
     */
    public $picturetype;
    /**
     * @param PictureManagerSubscriptionType $val
     * @throws Exception
     */
    public function setSubscription($val)
    {
        $this->subscription = (int)$val;
    }

    /**
     * @param PictureManagerPictureDisplayType $val
     * @throws Exception
     */
    public function setPictureType($val)
    {
        $this->picturetype = (int)$val;
    }
}
