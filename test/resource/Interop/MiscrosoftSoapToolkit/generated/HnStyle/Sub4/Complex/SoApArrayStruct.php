<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SoApArrayStruct
{
    /**
     * @var string
     */
    public $varstring;
    /**
     * @var int
     */
    public $varint;
    /**
     * @var float
     */
    public $varfloat;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\string
     */
    public $vararray;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setVarString($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for varString');
        }
        $this->varstring = (int)$val;
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
        $this->varint = (int)$val;
    }

    /**
     * @param float $val
     * @throws Exception
     */
    public function setVarFloat($val)
    {
        $this->varfloat = (int)$val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setVarArray($val)
    {
        $this->vararray = (int)$val;
    }
}
