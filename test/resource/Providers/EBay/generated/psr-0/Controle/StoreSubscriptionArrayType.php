<?php

namespace Controle;
/**
 * StoreSubscriptionArrayType
 * Set of eBay Store subscription levels.
 */
class StoreSubscriptionArrayType {
	/**
	 * @var \Controle\StoreSubscriptionType | A Store subscription level.
	 */
	public $Subscription;
	/**
	 * @param StoreSubscriptionType $val
	 * @throws Exception
	 */
	public function setSubscription($val) {
		
		$this->Subscription = (int)$val;
	}

}

