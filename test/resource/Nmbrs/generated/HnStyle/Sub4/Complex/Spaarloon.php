<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Spaarloon
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var decimal
     */
    public $value;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setValue($val)
    {
        $this->value = (int)$val;
    }
}
