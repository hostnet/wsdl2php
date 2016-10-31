<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Extensions
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Extension
     */
    public $extension;
    /**
     * @param Extension $val
     * @throws Exception
     */
    public function setExtension($val)
    {
        $this->extension = (int)$val;
    }
}
