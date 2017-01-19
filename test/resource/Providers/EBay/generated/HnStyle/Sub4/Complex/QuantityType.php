<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * QuantityType
 * Basic type for specifying quantities.
 */
class QuantityType
{
    // @codingStandardsIgnoreStart
    /**
     * @var decimal
     */
    public $_;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\token
     */
    public $unit;
    // @codingStandardsIgnoreEnd

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function set($val)
    {
        $this->_ = $val;
    }

    /**
     * @param token $val
     * @throws \Exception
     */
    public function setUnit($val)
    {
        $this->unit = $val;
    }
}
