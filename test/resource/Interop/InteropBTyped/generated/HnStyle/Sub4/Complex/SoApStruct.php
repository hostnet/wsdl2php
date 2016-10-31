<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SoApStruct
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varstring;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varint;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varfloat;
    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarString($val)
    {
        $this->varstring = (int)$val;
    }

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarInt($val)
    {
        $this->varint = (int)$val;
    }

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarFloat($val)
    {
        $this->varfloat = (int)$val;
    }
}
