<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ItemQuantity
{
    /**
     * @var string
     */
    public $itemid;
    /**
     * @var string
     */
    public $quantity;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setItemId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ItemId');
        }
        $this->itemid = (int)$val;
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
