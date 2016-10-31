<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PictureManagerSubscriptionType
 * Describes one type of Picture Manager subscription that is available.
 */
class PictureManagerSubscriptionType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
     */
    public $subscriptionlevel;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Monthly fee for the Store subscription level.
     */
    public $fee;
    /**
     * @var int | The total amount of storage space available for the subscription type.      Read-only
     * value.
     */
    public $storagesize;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param PictureManagerSubscriptionLevelCodeType $val
     * @throws Exception
     */
    public function setSubscriptionLevel($val)
    {
        $this->subscriptionlevel = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setFee($val)
    {
        $this->fee = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStorageSize($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->storagesize = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
