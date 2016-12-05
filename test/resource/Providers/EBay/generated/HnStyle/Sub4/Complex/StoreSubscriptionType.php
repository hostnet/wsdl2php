<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class StoreSubscriptionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreSubscriptionLevelCodeType | Store subscription level.
     */
    public $Level;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Monthly fee for the Store subscription level.
     */
    public $Fee;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreSubscriptionLevelCodeType $val
     * @throws Exception
     */
    public function setLevel($val)
    {
        $this->Level = (StoreSubscriptionLevelCodeType)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setFee($val)
    {
        $this->Fee = (AmountType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
