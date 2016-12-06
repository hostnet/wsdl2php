<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddItem
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Asin;
    /**
     * @var string
     */
    public $ExchangeId;
    /**
     * @var string
     */
    public $Quantity;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAsin($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Asin');
        }
        $this->Asin = $val;
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
        $this->ExchangeId = $val;
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
        $this->Quantity = $val;
    }
}
