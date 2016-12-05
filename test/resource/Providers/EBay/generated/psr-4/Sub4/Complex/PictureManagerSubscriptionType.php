<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PictureManagerSubscriptionType
 * Describes one type of Picture Manager subscription that is available.
 */
class PictureManagerSubscriptionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
     */
    public $SubscriptionLevel;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Monthly fee for the Store subscription level.
     */
    public $Fee;
    /**
     * @var int | The total amount of storage space available for the subscription type.      Read-only
     * value.
     */
    public $StorageSize;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param PictureManagerSubscriptionLevelCodeType $val
     * @throws Exception
     */
    public function setSubscriptionLevel($val)
    {
        $this->SubscriptionLevel = ()$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setFee($val)
    {
        $this->Fee = ()$val;
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
        $this->StorageSize = ()$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}
