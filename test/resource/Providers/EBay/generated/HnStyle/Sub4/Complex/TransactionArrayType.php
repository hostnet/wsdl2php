<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * TransactionArrayType
 * Contains an array of transactions.
 */
class TransactionArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TransactionType | Information about one transaction. Also applicable to Half.com (for GetOrders).
     */
    public $transaction;
    /**
     * @param TransactionType $val
     * @throws Exception
     */
    public function setTransaction($val)
    {
        $this->transaction = (int)$val;
    }
}
