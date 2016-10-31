<?php

namespace Controle;

/**
 * StoreSubscriptionArrayType
 * Set of eBay Store subscription levels.
 */
class StoreSubscriptionArrayType
{
    /**
     * @var \Controle\StoreSubscriptionType | A Store subscription level.
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
