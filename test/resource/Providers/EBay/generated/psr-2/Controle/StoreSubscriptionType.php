<?php

namespace Controle;

class StoreSubscriptionType
{
    /**
     * @var \Controle\StoreSubscriptionLevelCodeType | Store subscription level.
     */
    public $level;
    /**
     * @var \Controle\AmountType | Monthly fee for the Store subscription level.
     */
    public $fee;
    /**
     * @var \Controle\<anyXML>
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
