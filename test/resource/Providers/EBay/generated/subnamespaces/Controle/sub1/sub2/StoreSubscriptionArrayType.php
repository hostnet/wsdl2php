<?php

namespace Controle\sub1\sub2;

/**
 * StoreSubscriptionArrayType
 * Set of eBay Store subscription levels.
 */
class StoreSubscriptionArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\StoreSubscriptionType | A Store subscription level.
	 */
	public $Subscription;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreSubscriptionType $val
	 * @throws Exception
	 */
	public function setSubscription($val)
	{
        $this->Subscription = (int)$val;
	}
}
