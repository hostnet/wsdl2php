<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CostCenter
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Code;
    /**
     * @var string
     */
    public $Description;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCode($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Code = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->Description = (int)$val;
    }
}
