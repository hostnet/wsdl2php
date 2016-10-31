<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * OrderTransactionArrayType
 * Contains a list of orders, transactions, or both, each of OrderTransactionType.
 */
class OrderTransactionArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderTransactionType | The individual order or transaction.
     */
    public $ordertransaction;
    /**
     * @param OrderTransactionType $val
     * @throws Exception
     */
    public function setOrderTransaction($val)
    {
        $this->ordertransaction = (int)$val;
    }
}
