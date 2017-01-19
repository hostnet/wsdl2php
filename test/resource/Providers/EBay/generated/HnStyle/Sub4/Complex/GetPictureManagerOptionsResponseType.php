<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetPictureManagerOptionsResponseType
 * Returns a list of Picture Manager options and allowed values.
 */
class GetPictureManagerOptionsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerSubscriptionType | A Store subscription level.
     */
    public $Subscription;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerPictureDisplayType | A global definition for displaying pictures, with a maximum size.
     */
    public $PictureType;
    // @codingStandardsIgnoreEnd

    /**
     * @param PictureManagerSubscriptionType $val
     * @throws \Exception
     */
    public function setSubscription($val)
    {
        $this->Subscription = $val;
    }

    /**
     * @param PictureManagerPictureDisplayType $val
     * @throws \Exception
     */
    public function setPictureType($val)
    {
        $this->PictureType = $val;
    }
}
