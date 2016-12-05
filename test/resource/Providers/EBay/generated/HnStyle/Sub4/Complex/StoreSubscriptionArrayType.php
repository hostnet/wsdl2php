<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreSubscriptionArrayType
 * Set of eBay Store subscription levels.
 */
class StoreSubscriptionArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreSubscriptionType | A Store subscription level.
     */
    public $Subscription;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreSubscriptionType $val
     * @throws Exception
     */
    public function setSubscription($val)
    {
        $this->Subscription = (StoreSubscriptionType)$val;
    }
}
