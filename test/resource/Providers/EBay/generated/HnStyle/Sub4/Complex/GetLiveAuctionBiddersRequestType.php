<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetLiveAuctionBiddersRequestType
 * Includes the list of bidders for the requested catalog.
 */
class GetLiveAuctionBiddersRequestType extends
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BidderStatusCodeType | Indicates whether the user is "approved","denied", or "pending" or a combination of
     * these.
     */
    public $BidderStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setUserCatalogID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->UserCatalogID = (int)$val;
    }

    /**
     * @param BidderStatusCodeType $val
     * @throws Exception
     */
    public function setBidderStatus($val)
    {
        $this->BidderStatus = (int)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = (int)$val;
    }
}
