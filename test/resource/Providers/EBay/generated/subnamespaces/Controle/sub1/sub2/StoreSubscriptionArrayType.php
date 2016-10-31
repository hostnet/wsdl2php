<?php

namespace Controle\sub1\sub2;

/**
 * StoreSubscriptionArrayType
 * Set of eBay Store subscription levels.
 */
class StoreSubscriptionArrayType
{
	/**
	 * @var \Controle\sub1\sub2\StoreSubscriptionType | A Store subscription level.
	 */
	public $subscription;
	/**
	 * @param StoreSubscriptionType $val
	 * @throws Exception
	 */
	public function setSubscription($val)
	{
        $this->subscription = (int)$val;
	}
}
