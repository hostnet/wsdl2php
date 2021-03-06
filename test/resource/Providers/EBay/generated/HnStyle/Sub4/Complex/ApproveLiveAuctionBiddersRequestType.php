<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ApproveLiveAuctionBiddersRequestType
 * Provides Live Auction sellers with the ability to approve, decline, and set the bidding
 * limit of the bidders that have signed up for a catalog. Includes the list of bidders for
 * the requested item as part of the general item listing data.
 */
class ApproveLiveAuctionBiddersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | Number that identifies the seller's eBay Live Auctions catalog within which the lot
     * item will be listed. Use GetLiveAuctionCatalogDetails to determine the seller's available
     * catalog IDs.
     */
    public $UserCatalogID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BidApprovalArrayType | Approval details for a specific set of bidders.
     */
    public $BidApproval;
    /**
     * @var boolean | This will approve all bidders in the catalog in the pending status only. This is an
     * optional field. If provided and set to true, do not send BidApproval.
     */
    public $ApproveAllPending;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | This is the amount that bidders are beings approved for. This is required if user has
     * set ApproveAllPending to true. It only applies to bidder requests that are in pending
     * status.
     */
    public $AllApprovedBiddingLimit;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setUserCatalogID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->UserCatalogID = $val;
    }

    /**
     * @param BidApprovalArrayType $val
     * @throws \Exception
     */
    public function setBidApproval($val)
    {
        $this->BidApproval = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setApproveAllPending($val)
    {
        $this->ApproveAllPending = $val;
    }

    /**
     * @param AmountType $val
     * @throws \Exception
     */
    public function setAllApprovedBiddingLimit($val)
    {
        $this->AllApprovedBiddingLimit = $val;
    }
}
