<?php

namespace Controle;

/**
 * OrderTransactionArrayType
 * Contains a list of orders, transactions, or both, each of OrderTransactionType.
 */
class OrderTransactionArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\OrderTransactionType | The individual order or transaction.
     */
    public $OrderTransaction;
    // @codingStandardsIgnoreEnd

    /**
     * @param OrderTransactionType $val
     * @throws \Exception
     */
    public function setOrderTransaction($val)
    {
        $this->OrderTransaction = $val;
    }
}
