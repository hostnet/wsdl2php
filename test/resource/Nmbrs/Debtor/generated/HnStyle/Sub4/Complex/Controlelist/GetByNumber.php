<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByNumber
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Number;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setNumber($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Number');
        }
        $this->Number = $val;
    }
}
