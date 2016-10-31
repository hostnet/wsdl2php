<?php

namespace Controle\sub1\sub2;
/**
 * PictureManagerSubscriptionType
 * Describes one type of Picture Manager subscription that is available.
 */
class PictureManagerSubscriptionType {
	/**
	 * @var \Controle\sub1\sub2\PictureManagerSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
	 */
	public $SubscriptionLevel;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Monthly fee for the Store subscription level.
	 */
	public $Fee;
	/**
	 * @var int | The total amount of storage space available for the subscription type.      Read-only value.
	 */
	public $StorageSize;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param PictureManagerSubscriptionLevelCodeType $val
	 * @throws Exception
	 */
	public function setSubscriptionLevel($val) {
		
		$this->SubscriptionLevel = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setFee($val) {
		
		$this->Fee = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setStorageSize($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->StorageSize = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

