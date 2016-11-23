<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSellerPaymentsResponseType
 * Returns a summary of pending or paid payments that Half.com created for the seller identified
 * by the authentication token in the request. Only returns payments that occurred within a
 * particular pay period. Each payment is for one transaction for one item in one order. An
 * order can contain transactions for multiple items from multiple sellers, but this call only
 * retrieves payments that are relevant to one seller. Payments are only issued for items and
 * transactions that the seller has confirmed (see the Half.com online help for details). The
 * financial value of a payment is typically based on an amount that a buyer paid to Half.com
 * for a transaction, plus the shipping cost the buyer paid to Half.com for the item, minus Half.com's
 * commission. For most sellers, each month contains two pay periods: One from the 1st to the
 * 15th of the month, and one from the 16th to the last day of the month. Payments are submitted
 * to the seller's financial institution a certain number of days after the current pay period
 * ends (see the Half.com online help for details).
 */
class GetSellerPaymentsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
    /**
     * @var boolean | If true, there are more payments yet to be retrieved. Additional GetSellerPayments calls
     * with higher page numbers or more entries per page must be made to retrieve these payments.
     * If false, no more payments are available or no payments match the request (based on
     * the payment status and time filter).
     */
    public $HasMorePayments;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerPaymentType | Information about a single payment that matches the criteria in the request. A payment
     * is between Half.com and a seller. Each payment is for one transaction for one item in
     * one order. An order can contain transactions for multiple items from multiple sellers,
     * but this call only retrieves payments that are relevant to one seller. The financial
     * value of a payment is typically based on an amount that a buyer paid to Half.com for
     * a transaction, plus the shipping cost the buyer paid for the item, minus Half.com's
     * commission. Payments can also describe refunds that the seller has issued. Multiple
     * SellerPayment entries can be returned per page of results. Typically, they are returned
     * in reverse chronological order (most recent PaidTime first). Only returned if payments
     * exist that match the request.
     */
    public $SellerPayment;
    /**
     * @var int | Indicates the number of payments that can be returned per page of data (i.e., per call).
     * This is the same as the value specified in the Pagination.EntriesPerPage input (or the
     * default value, if EntriesPerPage was not specified). This is not necessarily the actual
     * number of payments returned per page (see ReturnedPaymentCountActual).
     */
    public $PaymentsPerPage;
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
     * @var int | Indicates the total number of payments returned (i.e., the number of SellerPayment entries
     * returned.
     */
    public $ReturnedPaymentCountActual;
    // @codingStandardsIgnoreEnd

    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->PaginationResult = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasMorePayments($val)
    {
        $this->HasMorePayments = (int)$val;
    }

    /**
     * @param SellerPaymentType $val
     * @throws Exception
     */
    public function setSellerPayment($val)
    {
        $this->SellerPayment = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPaymentsPerPage($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PaymentsPerPage = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PageNumber = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setReturnedPaymentCountActual($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ReturnedPaymentCountActual = (int)$val;
    }
}
