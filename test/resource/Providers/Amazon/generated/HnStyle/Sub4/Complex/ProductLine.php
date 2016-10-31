<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ProductLine
{
    /**
     * @var string
     */
    public $mode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public $productinfo;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setMode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Mode');
        }
        $this->mode = (int)$val;
    }

    /**
     * @param ProductInfo $val
     * @throws Exception
     */
    public function setProductInfo($val)
    {
        $this->productinfo = (int)$val;
    }
}
