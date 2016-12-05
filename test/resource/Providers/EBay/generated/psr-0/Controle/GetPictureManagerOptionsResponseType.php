<?php

namespace Controle;

/**
 * GetPictureManagerOptionsResponseType
 * Returns a list of Picture Manager options and allowed values.
 */
class GetPictureManagerOptionsResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\PictureManagerSubscriptionType | A Store subscription level.
	 */
	public $Subscription;
	/**
	 * @var \Controle\PictureManagerPictureDisplayType | A global definition for displaying pictures, with a maximum size.
	 */
	public $PictureType;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PictureManagerSubscriptionType $val
	 * @throws Exception
	 */
	public function setSubscription($val)
	{
        $this->Subscription = (PictureManagerSubscriptionType)$val;
	}

	/**
	 * @param PictureManagerPictureDisplayType $val
	 * @throws Exception
	 */
	public function setPictureType($val)
	{
        $this->PictureType = (PictureManagerPictureDisplayType)$val;
	}
}
