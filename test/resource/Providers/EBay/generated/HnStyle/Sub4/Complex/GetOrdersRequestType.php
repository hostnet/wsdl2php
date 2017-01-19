<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetOrdersRequestType
 * Retrieves all of the orders for which the user is a participant (as either buyer or seller)
 * that meet the criteria specified in the request. There are two mutually exclusive sets of
 * filtering input arguments that can be used to query for orders. The first set is based on
 * specific order IDs (one or more order IDs are passed in the call). The second set is a combination
 * of date range, order role, and order status. If one set of filtering arguments is used,
 * the arguments for the other set should not be specified in the same call. If a given call
 * to GetOrders includes both criteria sets, the query based on order IDs is used, and the
 * criteria for date range/order status/order role is ignored. This call can also be used to
 * retrieve unshipped Half.com orders (i.e., orders that the seller has received but has not
 * yet processed).
 */
class GetOrdersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderIDArrayType | A set of orders to retrieve. Not applicable to Half.com.
     */
    public $OrderIDArray;
    /**
     * @var dateTime | The starting date of the date range for the orders to retrieve. Also applicable to Half.com.
     */
    public $CreateTimeFrom;
    /**
     * @var dateTime | The ending date of the date range for the orders to retrieve. Also applicable to Half.com.
     */
    public $CreateTimeTo;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TradingRoleCodeType | Filters the returned orders to only those where the user for whom the call is being
     * made is a participant in the order in the specified role. Not applicable to Half.com.
     */
    public $OrderRole;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderStatusCodeType | The current status of the order.<br> <br> For transaction calls (like GetItemTransactions),
     * please use the TransactionPlatform element to determine whether an item was purchased
     * on Express on eBay.<br> <br> Also applicable to Half.com (for GetOrders).
     */
    public $OrderStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingTypeCodeType | The listing format (fixed price, auction, etc) for the automatic item search criteria.
     */
    public $ListingType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    // @codingStandardsIgnoreEnd

    /**
     * @param OrderIDArrayType $val
     * @throws \Exception
     */
    public function setOrderIDArray($val)
    {
        $this->OrderIDArray = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setCreateTimeFrom($val)
    {
        $this->CreateTimeFrom = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setCreateTimeTo($val)
    {
        $this->CreateTimeTo = $val;
    }

    /**
     * @param TradingRoleCodeType $val
     * @throws \Exception
     */
    public function setOrderRole($val)
    {
        $this->OrderRole = $val;
    }

    /**
     * @param OrderStatusCodeType $val
     * @throws \Exception
     */
    public function setOrderStatus($val)
    {
        $this->OrderStatus = $val;
    }

    /**
     * @param ListingTypeCodeType $val
     * @throws \Exception
     */
    public function setListingType($val)
    {
        $this->ListingType = $val;
    }

    /**
     * @param PaginationType $val
     * @throws \Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = $val;
    }
}
