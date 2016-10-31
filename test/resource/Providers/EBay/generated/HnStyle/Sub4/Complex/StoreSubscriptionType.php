<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class StoreSubscriptionType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreSubscriptionLevelCodeType | Store subscription level.
     */
    public $level;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Monthly fee for the Store subscription level.
     */
    public $fee;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param StoreSubscriptionLevelCodeType $val
     * @throws Exception
     */
    public function setLevel($val)
    {
        $this->level = (int)$val;
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
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
