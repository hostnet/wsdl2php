<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSellerEventsRequestType
 * Retrieves price changes, item revisions, description revisions, and other changes that have
 * occurred within the last 48 hours related to a seller's eBay listings. Input is the user
 * ID for the seller whose events are returned. GetSellerEvents returns zero, one, or multiple
 * item events. You can add filters so the data returned includes only events for items that
 * start, end, or are modified within a certain time span.
 */
class GetSellerEventsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
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
    public $UserID;
    /**
     * @var dateTime | Specifies the earliest (oldest) date to use in a date range filter based on item start
     * time. Specify either the end time range or start time range filter in every request.
     */
    public $StartTimeFrom;
    /**
     * @var dateTime | Specifies the latest (most recent) date to use in a date range filter based on item start
     * time. Must be specified if StartTimeFrom is specified.
     */
    public $StartTimeTo;
    /**
     * @var dateTime | Specifies the earliest (oldest) date to use in a date range filter based on item end
     * time. Specify either the end time range or start time range filter in every request.
     */
    public $EndTimeFrom;
    /**
     * @var dateTime | Specifies the latest (most recent) date to use in a date range filter based on item
     * end time. Must be specified if EndTimeFrom is specified.
     */
    public $EndTimeTo;
    /**
     * @var dateTime | A filter that retrieves disputes whose DisputeModifiedTime is later than or equal to
     * this value. Specify the time value in GMT. See the eBay Web Services documentation for
     * information about specifying time values. For more precise control of the date range
     * filter, it is a good practice to also specify ModTimeTo. Otherwise, the end of the date
     * range is the present time. Filtering by date range is optional. You can use date range
     * filters in combination with other filters like DisputeFilterType to control the amount
     * of data returned.
     */
    public $ModTimeFrom;
    /**
     * @var dateTime | A filter that retrieves disputes whose DisputeModifiedTime is earlier than or equal
     * to this value. Specify the time value in GMT. See the eBay Web Services documentation
     * for information about specifying time values. For more precise control of the date range
     * filter, it is a good practice to also specify ModTimeFrom. Otherwise, all available
     * disputes modified prior to the ModTimeTo value are returned. Filtering by date range
     * is optional. You can use date range filters in combination with other filters like DisputeFilterType
     * to control the amount of data returned.
     */
    public $ModTimeTo;
    /**
     * @var boolean | Specifies that only new items are to be returned. NewItemFilter is an optional input.
     */
    public $NewItemFilter;
    /**
     * @var boolean | Specifies whether to include WatchCount in Item nodes returned. WatchCount is only returned
     * with DetailLevel ReturnAll.
     */
    public $IncludeWatchCount;
    // @codingStandardsIgnoreEnd

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setUserID($val)
    {
        $this->UserID = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTimeFrom($val)
    {
        $this->StartTimeFrom = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTimeTo($val)
    {
        $this->StartTimeTo = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTimeFrom($val)
    {
        $this->EndTimeFrom = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTimeTo($val)
    {
        $this->EndTimeTo = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setModTimeFrom($val)
    {
        $this->ModTimeFrom = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setModTimeTo($val)
    {
        $this->ModTimeTo = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setNewItemFilter($val)
    {
        $this->NewItemFilter = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeWatchCount($val)
    {
        $this->IncludeWatchCount = $val;
    }
}
