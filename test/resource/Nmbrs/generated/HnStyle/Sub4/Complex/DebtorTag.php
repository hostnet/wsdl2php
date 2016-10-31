<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DebtorTag
{
    /**
     * @var int
     */
    public $number;
    /**
     * @var string
     */
    public $hexcolor;
    /**
     * @var string
     */
    public $tag;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->number = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHexColor($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HexColor');
        }
        $this->hexcolor = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTag($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Tag');
        }
        $this->tag = (int)$val;
    }
}
