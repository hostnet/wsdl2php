<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetBidderListRequestType
 * Retrieves all items on which the user is currently bidding or which the buyer has won or
 * purchased. You can control the result set with elements such as ActiveItemsOnly, which limits the
 * result set to active items.
 */
class GetBidderListRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | Indicates whether to limit the result set to active items. If true, only active items
     * are returned and the EndTimeFrom and EndTimeTo filters are ignored. If false (or not
     * sent), active and ended items are returned.
     */
    public $ActiveItemsOnly;
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\GranularityLevelCodeType | Specifies the subset of item and user fields to return. See GetSellerList in the eBay
     * Web Services guide for a list of the fields that are returned for each granularity level. For
     * GetSellerList, use DetailLevel or GranularityLevel in a request, but not both. For GetSellerList,
     * if GranularityLevel is specified, DetailLevel is ignored.
     */
    public $GranularityLevel;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setActiveItemsOnly($val)
    {
        $this->ActiveItemsOnly = (boolean)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTimeFrom($val)
    {
        $this->EndTimeFrom = (dateTime)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTimeTo($val)
    {
        $this->EndTimeTo = (dateTime)$val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setUserID($val)
    {
        $this->UserID = (UserIDType)$val;
    }

    /**
     * @param GranularityLevelCodeType $val
     * @throws Exception
     */
    public function setGranularityLevel($val)
    {
        $this->GranularityLevel = (GranularityLevelCodeType)$val;
    }
}
