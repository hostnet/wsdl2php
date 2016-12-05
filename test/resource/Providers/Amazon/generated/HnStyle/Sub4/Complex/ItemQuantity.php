<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ItemQuantity
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $ItemId;
    /**
     * @var string
     */
    public $Quantity;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setItemId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ItemId');
        }
        $this->ItemId = ()$val;
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
        $this->Quantity = ()$val;
    }
}
