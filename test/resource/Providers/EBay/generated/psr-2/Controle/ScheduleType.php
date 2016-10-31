<?php

namespace Controle;

/**
 * ScheduleType
 * Sellers create live auction catalogs and schedule their live auction events by using the
 * eBay Live Auctions Web site user interface. The seller can create a catalog in the Live
 * Auctions system several months before a sale.
 */
class ScheduleType
{
    /**
     * @var int | Identifier for an event schedule in the seller's Live Auctions catalog.
     */
    public $scheduleid;
    /**
     * @var dateTime | Date and time that the sale schedule starts.
     */
    public $scheduletime;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
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
     * @param dateTime $val
     * @throws Exception
     */
    public function setScheduleTime($val)
    {
        $this->scheduletime = (int)$val;
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
