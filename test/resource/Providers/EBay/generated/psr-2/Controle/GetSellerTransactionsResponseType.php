<?php

namespace Controle;

/**
 * GetSellerTransactionsResponseType
 * Returns an array of transaction data for the seller specified in the request. The results
 * can be used to create a report of data that is commonly necessary for end-of-auction processing. Zero,
 * one, or many Transaction objects can be returned in the array. The set of transactions returned
 * is limited to those that were modified between the times specified in the request's ModTimeFrom
 * and ModTimeTo filters. The transactions returned are sorted by Transaction.Status.LastTimeModified, ascending
 * order (that is, transactions that more recently were modified are returned last). Also returns
 * information about the seller whose transactions were requested. If pagination filters were
 * specified in the request, returns meta-data describing the effects of those filters on the
 * current response and the estimated effects if the same filters are used in subsequent calls.
 */
class GetSellerTransactionsResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
    /**
     * @var boolean | Indicates whether there are additional transactions to retrieve. That is, indicates
     * whether more pages of data are available to be returned, given the filters that were
     * specified in the request. Returns false for the last page of data.
     */
    public $HasMoreTransactions;
    /**
     * @var int | Number of transactions returned per page (per call). May be a higher value than ReturnedTransactionCountActual
     * if the page returned is the last page and more than one page of data exists.
     */
    public $TransactionsPerPage;
    /**
     * @var int | Specifies the number of the page of data to return in the current call. Default is 1
     * for most calls. For some calls, the default is 0. Specify a positive value equal to
     * or lower than the number of pages available (which you determine by examining the results
     * of your initial request). See the documentation for other individual calls to determine
     * the correct default value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable
     * to Half.com).
     */
    public $PageNumber;
    /**
     * @var int | Number of transactions retrieved in the current page of results just returned. May be
     * a lower value than TransactionsPerPage if the page returned is the last page and more
     * than one page of data exists.
     */
    public $ReturnedTransactionCountActual;
    /**
     * @var \Controle\UserType | Container for information about this listing's seller. Not applicable to Half.com. <br> <br> In
     * GetSearchResultsExpress, only returned when ItemDetails is set to Fine.
     */
    public $Seller;
    /**
     * @var \Controle\TransactionArrayType | Contains a list of transactions. Returned as an empty tag if no applicable transactions
     * exist.
     */
    public $TransactionArray;
    /**
     * @var boolean | Specifies whether a seller wants to let buyers know that PayPal payments are preferred.
     */
    public $PayPalPreferred;
    // @codingStandardsIgnoreEnd

    /**
     * @param PaginationResultType $val
     * @throws \Exception
     */
    public function setPaginationResult($val)
    {
        $this->PaginationResult = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setHasMoreTransactions($val)
    {
        $this->HasMoreTransactions = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setTransactionsPerPage($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->TransactionsPerPage = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setPageNumber($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->PageNumber = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setReturnedTransactionCountActual($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ReturnedTransactionCountActual = $val;
    }

    /**
     * @param UserType $val
     * @throws \Exception
     */
    public function setSeller($val)
    {
        $this->Seller = $val;
    }

    /**
     * @param TransactionArrayType $val
     * @throws \Exception
     */
    public function setTransactionArray($val)
    {
        $this->TransactionArray = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setPayPalPreferred($val)
    {
        $this->PayPalPreferred = $val;
    }
}
