<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByNumber
{
    /**
     * @var string
     */
    public $number;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Number');
        }
        $this->number = (int)$val;
    }
}
