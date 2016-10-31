<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * LiveAuctionDetailsType
 * Describes the live auction-specific details of a lot item.
 */
class LiveAuctionDetailsType
{
    /**
     * @var int | Number that identifies the seller's eBay Live Auctions catalog within which the lot
     * item will be listed. Use GetLiveAuctionCatalogDetails to determine the seller's available
     * catalog IDs.
     */
    public $usercatalogid;
    /**
     * @var int | Identifier for an event schedule in the seller's Live Auctions catalog.
     */
    public $scheduleid;
    /**
     * @var string | Lot number defined by the seller. Each lot number must be unique within the schedule. A
     * lot number can consist of 1-10 alphanumeric characters beginning with a number from
     * 0-9. If all values are numbers, the highest allowed value is 2147483647.
     */
    public $lotnumber;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Highest appraised value for the item. Must be greater than zero and greater than the
     * value in LowEstimate. (Pass an integer value only, not a double.)
     */
    public $highestimate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Lowest appraised value for the item. Must be greater than zero and less than the value
     * in HighEstimate. (Pass an integer value only, not a double.)
     */
    public $lowestimate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setUserCatalogID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->usercatalogid = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setScheduleID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->scheduleid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLotNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LotNumber');
        }
        $this->lotnumber = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setHighEstimate($val)
    {
        $this->highestimate = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setLowEstimate($val)
    {
        $this->lowestimate = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}