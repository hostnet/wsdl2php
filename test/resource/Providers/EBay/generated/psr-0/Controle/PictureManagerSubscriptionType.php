<?php

namespace Controle;
/**
 * PictureManagerSubscriptionType
 * Describes one type of Picture Manager subscription that is available.
 */
class PictureManagerSubscriptionType {
	/**
	 * @var \Controle\PictureManagerSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
	 */
	public $SubscriptionLevel;
	/**
	 * @var \Controle\AmountType | Monthly fee for the Store subscription level.
	 */
	public $Fee;
	/**
	 * @var int | The total amount of storage space available for the subscription type.      Read-only value.
	 */
	public $StorageSize;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

