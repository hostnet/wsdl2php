<?php

namespace Controle;

/**
 * StoreSubscriptionArrayType
 * Set of eBay Store subscription levels.
 */
class StoreSubscriptionArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\StoreSubscriptionType | A Store subscription level.
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
