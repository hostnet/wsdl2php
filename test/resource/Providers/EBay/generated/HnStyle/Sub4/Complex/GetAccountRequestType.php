<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetAccountRequestType
 * Enables a seller to retreive his or her own account data. Returns account entries, including
 * credits and debits, in a report format the user selects. Also returns summary data for the
 * account.
 */
class GetAccountRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AccountHistorySelectionCodeType | Specifies the report format in which to return account entries.
     */
    public $AccountHistorySelection;
    /**
     * @var dateTime | Date of last invoice sent by eBay to the user, in GMT. (Also see the Data Types appendix
     * for more information on how GMT dates are handled in SOAP.) Empty string if this account
     * has not been invoiced yet.
     */
    public $InvoiceDate;
    /**
     * @var dateTime | Specifies the beginning of a date range during which a credit or debit occurred. Used
     * when AccountHistorySelection is BetweenSpecifiedDates. Value must be less than or equal
     * to the value specified in EndDate. The allowed date formats are YYYY-MM-DD and YYYY-MM-DD
     * HH:mm:ss.
     */
    public $BeginDate;
    /**
     * @var dateTime | Specifies the end of a date range during which a credit or debit occurred. Used when
     * AccountHistorySelection is BetweenSpecifiedDates. Value must be greater than or equal
     * to the value specified in BeginDate. The allowed date formats are YYYY-MM-DD and YYYY-MM-DD
     * HH:mm:ss.
     */
    public $EndDate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    /**
     * @var boolean | Specifies whether to calculate balances. Default is  false, which calculates balances.
     * The value true means  do not calculate balances. If true, AccountEntry.Balance and
     * AccountSummary.CurrentBalance are never returned in the response.
     */
    public $ExcludeBalance;
    /**
     * @var boolean | Specifies whether to return account summary information in an AccountSummary node. Default
     * is true, to return AccountSummary.
     */
    public $ExcludeSummary;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AccountEntrySortTypeCodeType | Specifies how account entries should be sorted in the response, by an element and then
     * in ascending or descending order.
     */
    public $AccountEntrySortType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CurrencyCodeType | Limits the result set to just those items with a specified currency.
     */
    public $Currency;
    // @codingStandardsIgnoreEnd

    /**
     * @param AccountHistorySelectionCodeType $val
     * @throws \Exception
     */
    public function setAccountHistorySelection($val)
    {
        $this->AccountHistorySelection = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setInvoiceDate($val)
    {
        $this->InvoiceDate = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setBeginDate($val)
    {
        $this->BeginDate = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setEndDate($val)
    {
        $this->EndDate = $val;
    }

    /**
     * @param PaginationType $val
     * @throws \Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setExcludeBalance($val)
    {
        $this->ExcludeBalance = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setExcludeSummary($val)
    {
        $this->ExcludeSummary = $val;
    }

    /**
     * @param AccountEntrySortTypeCodeType $val
     * @throws \Exception
     */
    public function setAccountEntrySortType($val)
    {
        $this->AccountEntrySortType = $val;
    }

    /**
     * @param CurrencyCodeType $val
     * @throws \Exception
     */
    public function setCurrency($val)
    {
        $this->Currency = $val;
    }
}
