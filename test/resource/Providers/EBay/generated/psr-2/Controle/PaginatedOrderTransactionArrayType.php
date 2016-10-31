<?php

namespace Controle;

/**
 * PaginatedOrderTransactionArrayType
 * Contains a paginated list of orders, transactions, or both, with each item an OrderTransactionType.
 */
class PaginatedOrderTransactionArrayType
{
    /**
     * @var \Controle\OrderTransactionArrayType | Contains the list of orders, transactions, or both.
     */
    public $ordertransactionarray;
    /**
     * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $paginationresult;
    /**
     * @param OrderTransactionArrayType $val
     * @throws Exception
     */
    public function setOrderTransactionArray($val)
    {
        $this->ordertransactionarray = (int)$val;
    }

    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->paginationresult = (int)$val;
    }
}
