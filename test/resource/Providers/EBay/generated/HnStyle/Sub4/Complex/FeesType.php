<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FeesType
 * Identifies a set of one or more fees that a member pays to eBay (or          an eBay company).
 * Instances of this type can hold one or more fees.
 */
class FeesType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeeType | Monthly fee for the Store subscription level.
     */
    public $fee;
    /**
     * @param FeeType $val
     * @throws Exception
     */
    public function setFee($val)
    {
        $this->fee = (int)$val;
    }
}
