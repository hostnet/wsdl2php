<?php

namespace Controle\sub1\sub2;

/**
 * GetPictureManagerOptionsResponseType
 * Returns a list of Picture Manager options and allowed values.
 */
class GetPictureManagerOptionsResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var \Controle\sub1\sub2\PictureManagerSubscriptionType | A Store subscription level.
	 */
	public $subscription;
	/**
	 * @var \Controle\sub1\sub2\PictureManagerPictureDisplayType | A global definition for displaying pictures, with a maximum size.
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
