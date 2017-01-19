<?php

namespace Controle;

/**
 * FeesType
 * Identifies a set of one or more fees that a member pays to eBay (or          an eBay company).
 * Instances of this type can hold one or more fees.
 */
class FeesType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\FeeType | Monthly fee for the Store subscription level.
     */
    public $Fee;
    // @codingStandardsIgnoreEnd

    /**
     * @param FeeType $val
     * @throws \Exception
     */
    public function setFee($val)
    {
        $this->Fee = $val;
    }
}
