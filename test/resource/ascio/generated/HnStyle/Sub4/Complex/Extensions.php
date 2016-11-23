<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Extensions
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Extension
     */
    public $Extension;
    // @codingStandardsIgnoreEnd

    /**
     * @param Extension $val
     * @throws Exception
     */
    public function setExtension($val)
    {
        $this->Extension = (int)$val;
    }
}
