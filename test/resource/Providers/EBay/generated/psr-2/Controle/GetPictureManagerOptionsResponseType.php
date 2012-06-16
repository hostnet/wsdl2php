<?php

namespace Controle;
/**
 * GetPictureManagerOptionsResponseType
 * Returns a list of Picture Manager options and allowed values.
 */
class GetPictureManagerOptionsResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\PictureManagerSubscriptionType | A Store subscription level.
     */
    public $Subscription;
    /**
     * @var \Controle\PictureManagerPictureDisplayType | A global definition for displaying pictures, with a maximum size.
     */
    public $PictureType;
}

