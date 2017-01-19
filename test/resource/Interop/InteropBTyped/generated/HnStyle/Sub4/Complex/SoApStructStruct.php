<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SoApStructStruct
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varString;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varInt;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyType
     */
    public $varFloat;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SOAPStruct
     */
    public $varStruct;
    // @codingStandardsIgnoreEnd

    /**
     * @param anyType $val
     * @throws \Exception
     */
    public function setVarString($val)
    {
        $this->varString = $val;
    }

    /**
     * @param anyType $val
     * @throws \Exception
     */
    public function setVarInt($val)
    {
        $this->varInt = $val;
    }

    /**
     * @param anyType $val
     * @throws \Exception
     */
    public function setVarFloat($val)
    {
        $this->varFloat = $val;
    }

    /**
     * @param SOAPStruct $val
     * @throws \Exception
     */
    public function setVarStruct($val)
    {
        $this->varStruct = $val;
    }
}
