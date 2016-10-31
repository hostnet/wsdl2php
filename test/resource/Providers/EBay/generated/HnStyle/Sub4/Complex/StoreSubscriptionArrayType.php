<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreSubscriptionArrayType
 * Set of eBay Store subscription levels.
 */
class StoreSubscriptionArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreSubscriptionType | A Store subscription level.
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
