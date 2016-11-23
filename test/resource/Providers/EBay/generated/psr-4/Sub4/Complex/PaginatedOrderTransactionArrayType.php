<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * PaginatedOrderTransactionArrayType
 * Contains a paginated list of orders, transactions, or both, with each item an OrderTransactionType.
 */
class PaginatedOrderTransactionArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderTransactionArrayType | Contains the list of orders, transactions, or both.
     */
    public $OrderTransactionArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param OrderTransactionArrayType $val
     * @throws Exception
     */
    public function setOrderTransactionArray($val)
    {
        $this->OrderTransactionArray = (int)$val;
    }

    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->PaginationResult = (int)$val;
    }
}
