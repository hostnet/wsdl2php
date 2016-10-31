<?php

namespace Controle;

/**
 * GetPictureManagerOptionsResponseType
 * Returns a list of Picture Manager options and allowed values.
 */
class GetPictureManagerOptionsResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var \Controle\PictureManagerSubscriptionType | A Store subscription level.
	 */
	public $subscription;
	/**
	 * @var \Controle\PictureManagerPictureDisplayType | A global definition for displaying pictures, with a maximum size.
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
