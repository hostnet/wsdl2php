<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class WageComponent
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $code;
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
     * @param int $val
     * @throws Exception
     */
    public function setCode($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->code = (int)$val;
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
