<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * LiveAuctionApprovalStatusType
 * The approval status of a user who wants to bid on a live auction.
 */
class LiveAuctionApprovalStatusType
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
     * @var string | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    // @codingStandardsIgnoreEnd

    /**
     * @param UserIDType $val
     * @throws \Exception
     */
    public function setUserID($val)
    {
        $this->UserID = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setStatus($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Status');
        }
        $this->Status = $val;
    }
}
