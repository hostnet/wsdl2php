<?php

namespace Controle;

class Extensions
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Extension
     */
    public $Extension;
    // @codingStandardsIgnoreEnd

    /**
     * @param Extension $val
     * @throws \Exception
     */
    public function setExtension($val)
    {
        $this->Extension = $val;
    }
}
