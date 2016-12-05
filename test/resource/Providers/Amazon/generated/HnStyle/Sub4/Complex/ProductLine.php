<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ProductLine
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Mode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public $ProductInfo;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Mode');
        }
        $this->Mode = ()$val;
    }

    /**
     * @param ProductInfo $val
     * @throws Exception
     */
    public function setProductInfo($val)
    {
        $this->ProductInfo = ()$val;
    }
}
