<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSellerListRequestType
 * Returns a list of items a seller has listed for auction. Returns an array of zero, one,
 * or multiple items. You can specify that the returned data include only items that start
 * or end within a specified date range.
 */
class GetSellerListRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | Unique eBay user ID for the user.<br> <br> In GetSearchResultsExpress, only returned
     * when ItemDetails is set to Fine. <br><br> Starting Jan 2007, when a bidder's user info
     * is made anonymous, this tag will contain the real ID value only for that bidder, and
     * the seller of an item that the user is bidding on. For all other users, the real ID
     * value will be replaced with the value "Bidder X" where X is a number indicating the
     * order of that user's first bid. For example, if the user was the third bidder, UserID
     * = Bidder 3. <br><br> Note that the anonymous bidder ID stays the same for a given auction,
     * but is different for different auctions. For example, a bidder who is the third and
     * then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However,
     * if that same bidder is the first bidder on a different auction, the bidder will be listed
     * for that auction as "Bidder 1", not "Bidder 3".
     */
    public $userid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDArrayType | Specifies the list of Motors Dealer sellers for which a special set of metrics can be
     * requested. Applies to eBay Motors Pro applications only.
     */
    public $motorsdealerusers;
    /**
     * @var dateTime | Specifies the earliest (oldest) date to use in a date range filter based on item end
     * time. Specify either the end time range or start time range filter in every request.
     */
    public $endtimefrom;
    /**
     * @var dateTime | Specifies the latest (most recent) date to use in a date range filter based on item
     * end time. Must be specified if EndTimeFrom is specified.
     */
    public $endtimeto;
    /**
     * @var int | Specifies the result sort order. Default is Ascending.
     */
    public $sort;
    /**
     * @var dateTime | Specifies the earliest (oldest) date to use in a date range filter based on item start
     * time. Specify either the end time range or start time range filter in every request.
     */
    public $starttimefrom;
    /**
     * @var dateTime | Specifies the latest (most recent) date to use in a date range filter based on item start
     * time. Must be specified if StartTimeFrom is specified.
     */
    public $starttimeto;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $pagination;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GranularityLevelCodeType | Specifies the subset of item and user fields to return. See GetSellerList in the eBay
     * Web Services guide for a list of the fields that are returned for each granularity level. For
     * GetSellerList, use DetailLevel or GranularityLevel in a request, but not both. For GetSellerList,
     * if GranularityLevel is specified, DetailLevel is ignored.
     */
    public $granularitylevel;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SKUArrayType | Specifies a set of seller SKUs to use as a filter. Only items with the specified SKUs
     * are returned. Do not specify this tag if you do not want to filter by SKU. Corresponds
     * to the SKU property that is part of ItemType and that can be provided when, for example,
     * you use the AddItem call.
     */
    public $skuarray;
    /**
     * @var boolean | Specifies whether to include WatchCount in Item nodes returned. WatchCount is only returned
     * with DetailLevel ReturnAll.
     */
    public $includewatchcount;
    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setUserID($val)
    {
        $this->userid = (int)$val;
    }

    /**
     * @param UserIDArrayType $val
     * @throws Exception
     */
    public function setMotorsDealerUsers($val)
    {
        $this->motorsdealerusers = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTimeFrom($val)
    {
        $this->endtimefrom = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTimeTo($val)
    {
        $this->endtimeto = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setSort($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->sort = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTimeFrom($val)
    {
        $this->starttimefrom = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTimeTo($val)
    {
        $this->starttimeto = (int)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->pagination = (int)$val;
    }

    /**
     * @param GranularityLevelCodeType $val
     * @throws Exception
     */
    public function setGranularityLevel($val)
    {
        $this->granularitylevel = (int)$val;
    }

    /**
     * @param SKUArrayType $val
     * @throws Exception
     */
    public function setSKUArray($val)
    {
        $this->skuarray = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeWatchCount($val)
    {
        $this->includewatchcount = (int)$val;
    }
}
