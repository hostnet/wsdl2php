<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddItem
{
    /**
     * @var string
     */
    public $asin;
    /**
     * @var string
     */
    public $exchangeid;
    /**
     * @var string
     */
    public $quantity;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setAsin($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Asin');
        }
        $this->asin = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeId');
        }
        $this->exchangeid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQuantity($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Quantity');
        }
        $this->quantity = (int)$val;
    }
}
