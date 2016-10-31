<?php

namespace Controle;

/**
 * GetAccountResponseType
 * Returns information about an eBay seller's own account.
 */
class GetAccountResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var string | Specifies the seller's unique account number.
	 */
	public $accountid;
	/**
	 * @var \Controle\AccountSummaryType | Contains summary data for the seller's account, such as the overall balance, bank account
	 * and credit card information, and amount and date of any past due balances. Can also contain
	 * data for one or more additional accounts, if the user has changed country of residence.
	 */
	public $accountsummary;
	/**
	 * @var \Controle\CurrencyCodeType | Limits the result set to just those items with a specified currency.
	 */
	public $currency;
	/**
	 * @var \Controle\AccountEntriesType | Contains individual account entries, according to the report's scope and date range. Each
	 * account entry represents one credit, debit, or administrative account action.
	 */
	public $accountentries;
	/**
	 * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
	 * of entries.
	 */
	public $paginationresult;
	/**
	 * @var boolean | If true, there are additional item and/or product results (on higher- numbered pages) that
	 * match the query. To retrieve them, call GetSearchResultsExpress again and increment the
	 * page number or specify a higher value for EntriesPerPage in the request.
	 */
	public $hasmoreentries;
	/**
	 * @var int | Specifies the maximum number of entries to return in a single call. If the number of entries
	 * that can be returned is less than the value in EntriesPerPage, then the lower number is
	 * returned. For most calls, the max is 200 and the default is 25. For GetUserDisputes, the
	 * value is hard-coded at 200, and any input is ignored. See the documentation for other individual
	 * calls to determine the correct max and default values. For GetOrders, not applicable to
	 * eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $entriesperpage;
	/**
	 * @var int | Specifies the number of the page of data to return in the current call. Default is 1 for
	 * most calls. For some calls, the default is 0. Specify a positive value equal to or lower
	 * than the number of pages available (which you determine by examining the results of your
	 * initial request). See the documentation for other individual calls to determine the correct default
	 * value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable to Half.com).
	 */
	public $pagenumber;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccountID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AccountID');
        }
        $this->accountid = (int)$val;
	}

	/**
	 * @param AccountSummaryType $val
	 * @throws Exception
	 */
	public function setAccountSummary($val)
	{
        $this->accountsummary = (int)$val;
	}

	/**
	 * @param CurrencyCodeType $val
	 * @throws Exception
	 */
	public function setCurrency($val)
	{
        $this->currency = (int)$val;
	}

	/**
	 * @param AccountEntriesType $val
	 * @throws Exception
	 */
	public function setAccountEntries($val)
	{
        $this->accountentries = (int)$val;
	}

	/**
	 * @param PaginationResultType $val
	 * @throws Exception
	 */
	public function setPaginationResult($val)
	{
        $this->paginationresult = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setHasMoreEntries($val)
	{
        $this->hasmoreentries = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setEntriesPerPage($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->entriesperpage = (int)$val;
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
        $this->pagenumber = (int)$val;
	}
}
