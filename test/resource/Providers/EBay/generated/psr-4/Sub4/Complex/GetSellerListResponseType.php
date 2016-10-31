<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSellerListResponseType
 * Contains a list of the items listed by the seller specified as input. The list of items
 * is returned in an ItemArrayType object, in which are returned zero, one, or multiple ItemType
 * objects. Each ItemType object contains the detail data for one item listing.
 */
class GetSellerListResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $paginationresult;
    /**
     * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
     */
    public $hasmoreitems;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemArrayType | Contains a list of Item types.
     */
    public $itemarray;
    /**
     * @var int | Indicates the maximum number of Want It Now posts that can be returned in a WantItNowPostArray
     * for a request. This value can be specified in the request by  EntriesPerPage in Pagination
     * in the request.
     */
    public $itemsperpage;
    /**
     * @var int | Specifies the number of the page of data to return in the current call. Default is 1
     * for most calls. For some calls, the default is 0. Specify a positive value equal to
     * or lower than the number of pages available (which you determine by examining the results
     * of your initial request). See the documentation for other individual calls to determine
     * the correct default value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable
     * to Half.com).
     */
    public $pagenumber;
    /**
     * @var int | Indicates the total number of items returned (i.e., the number of ItemType objects in
     * ItemArray).
     */
    public $returneditemcountactual;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserType | Container for information about this listing's seller. Not applicable to Half.com. <br> <br> In
     * GetSearchResultsExpress, only returned when ItemDetails is set to Fine.
     */
    public $seller;
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
    public function setHasMoreItems($val)
    {
        $this->hasmoreitems = (int)$val;
    }

    /**
     * @param ItemArrayType $val
     * @throws Exception
     */
    public function setItemArray($val)
    {
        $this->itemarray = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setItemsPerPage($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->itemsperpage = (int)$val;
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

    /**
     * @param int $val
     * @throws Exception
     */
    public function setReturnedItemCountActual($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->returneditemcountactual = (int)$val;
    }

    /**
     * @param UserType $val
     * @throws Exception
     */
    public function setSeller($val)
    {
        $this->seller = (int)$val;
    }
}
