<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SoApArrayStruct
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
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\string
     */
    public $varArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarString($val)
    {
        $this->varString = ()$val;
    }

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarInt($val)
    {
        $this->varInt = ()$val;
    }

    /**
     * @param anyType $val
     * @throws Exception
     */
    public function setVarFloat($val)
    {
        $this->varFloat = ()$val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setVarArray($val)
    {
        $this->varArray = ()$val;
    }
}
