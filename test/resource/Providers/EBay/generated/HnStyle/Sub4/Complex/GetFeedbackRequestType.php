<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetFeedbackRequestType
 * Retrieves the accumulation of feedback left for the specified user by other users. Returns
 * summary feedback data and (in a detail level value of ReturnAll is specified) individual
 * feedbacks.
 */
class GetFeedbackRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $pagination;
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
     * @var string | Unique identifier for the feedback entry. Returned for a detail level of ReturnAll (if
     * the parent is returned).
     */
    public $feedbackid;
    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->pagination = (int)$val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setUserID($val)
    {
        $this->userid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFeedbackID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackID');
        }
        $this->feedbackid = (int)$val;
    }
}
