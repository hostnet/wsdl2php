<?php

namespace Controle;

/**
 * GetPictureManagerDetailsResponseType
 * Responds with information about content in a Picture Manager album or the account settings.
 */
class GetPictureManagerDetailsResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\PictureManagerDetailsType | Specifies the setting or folder to create, update, or delete, or the picture to update.
	 * You cannot upload or delete pictures using SetPictureManagerDetails; you must use the eBay
	 * site.
	 */
	public $PictureManagerDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PictureManagerDetailsType $val
	 * @throws Exception
	 */
	public function setPictureManagerDetails($val)
	{
        $this->PictureManagerDetails = $val;
	}
}
