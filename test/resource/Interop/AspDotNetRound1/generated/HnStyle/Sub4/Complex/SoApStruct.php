<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SoApStruct
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $varInt;
    /**
     * @var string
     */
    public $varString;
    /**
     * @var float
     */
    public $varFloat;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setVarInt($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->varInt = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVarString($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for varString');
        }
        $this->varString = (string)$val;
    }

    /**
     * @param float $val
     * @throws Exception
     */
    public function setVarFloat($val)
    {
        $this->varFloat = (float)$val;
    }
}
