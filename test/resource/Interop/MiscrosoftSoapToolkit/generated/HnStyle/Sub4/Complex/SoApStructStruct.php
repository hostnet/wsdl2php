<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SoApStructStruct
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $varString;
    /**
     * @var int
     */
    public $varInt;
    /**
     * @var float
     */
    public $varFloat;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct
     */
    public $varStruct;
    // @codingStandardsIgnoreEnd

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
     * @param float $val
     * @throws Exception
     */
    public function setVarFloat($val)
    {
        $this->varFloat = (float)$val;
    }

    /**
     * @param SOAPStruct $val
     * @throws Exception
     */
    public function setVarStruct($val)
    {
        $this->varStruct = (SOAPStruct)$val;
    }
}
