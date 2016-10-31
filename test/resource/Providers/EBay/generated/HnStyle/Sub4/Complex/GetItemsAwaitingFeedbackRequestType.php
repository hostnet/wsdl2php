<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetItemsAwaitingFeedbackRequestType
 * Returns transactions in which the user was involved and for which feedback is still needed
 * from either the buyer or seller.
 */
class GetItemsAwaitingFeedbackRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemSortTypeCodeType | Specifies the result sort order. Default is Ascending.
     */
    public $sort;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $pagination;
    /**
     * @param ItemSortTypeCodeType $val
     * @throws Exception
     */
    public function setSort($val)
    {
        $this->sort = (int)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->pagination = (int)$val;
    }
}
