<?php

namespace Controle;
/**
 * OrderArrayType
 * An array of Orders.
 */
class OrderArrayType {
    /**
     * @var \Controle\OrderType | Order in which the page is displayed in the list of custom pages.
     */
    public $Order;
    /**
     * @param OrderType $val
     * @throws Exception
     */
    public function setOrder($val) {
        
        $this->Order = (int)$val;
    }

}

