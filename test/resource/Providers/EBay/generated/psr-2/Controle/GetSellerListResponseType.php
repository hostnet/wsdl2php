<?php

namespace Controle;
/**
 * GetSellerListResponseType
 * Contains a list of the items listed by the seller specified as input. The list of items
 * is returned in an ItemArrayType object, in which are returned zero, one, or multiple ItemType
 * objects. Each ItemType object contains the detail data for one item listing.
 */
class GetSellerListResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $PaginationResult;
    /**
     * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
     */
    public $HasMoreItems;
    /**
     * @var \Controle\ItemArrayType | Contains a list of Item types.
     */
    public $ItemArray;
    /**
     * @var int | Indicates the maximum number of Want It Now posts that can be returned in a WantItNowPostArray
     * for a request. This value can be specified in the request by  EntriesPerPage in Pagination
     * in the request.
     */
    public $ItemsPerPage;
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
     * @var int | Indicates the total number of items returned (i.e., the number of ItemType objects in
     * ItemArray).
     */
    public $ReturnedItemCountActual;
    /**
     * @var \Controle\UserType | Container for information about this listing's seller. Not applicable to Half.com. <br> <br> In
     * GetSearchResultsExpress, only returned when ItemDetails is set to Fine.
     */
    public $Seller;
    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val) {
        
        $this->PaginationResult = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasMoreItems($val) {
        
        $this->HasMoreItems = (int)$val;
    }

    /**
     * @param ItemArrayType $val
     * @throws Exception
     */
    public function setItemArray($val) {
        
        $this->ItemArray = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setItemsPerPage($val) {
        if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
        $this->ItemsPerPage = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageNumber($val) {
        if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
        $this->PageNumber = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setReturnedItemCountActual($val) {
        if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
        $this->ReturnedItemCountActual = (int)$val;
    }

    /**
     * @param UserType $val
     * @throws Exception
     */
    public function setSeller($val) {
        
        $this->Seller = (int)$val;
    }

}

