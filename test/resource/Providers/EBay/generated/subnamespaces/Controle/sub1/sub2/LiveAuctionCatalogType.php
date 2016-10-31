<?php

namespace Controle\sub1\sub2;

/**
 * LiveAuctionCatalogType
 * Describes one live auction catalog and its sale schedules. Use this information to determine
 * an appropriate combination of catalog and schedule IDs in which to list a lot item when
 * you use AddLiveAuctionItem.
 */
class LiveAuctionCatalogType
{
	/**
	 * @var int | Number that identifies the seller's eBay Live Auctions catalog within which the lot item
	 * will be listed. Use GetLiveAuctionCatalogDetails to determine the seller's available catalog
	 * IDs.
	 */
	public $usercatalogid;
	/**
	 * @var string | Descriptive name that the seller created for the catalog. Pass as input to AddLiveAuctionItem
	 * when you list a lot item.
	 */
	public $catalogname;
	/**
	 * @var \Controle\sub1\sub2\ScheduleType | Describes a single live auction sale schedule that the user defined. A seller can define
	 * a maximum of 5 schedules for each catalog. Each schedule defines the start and end time
	 * of a live auction event. (Only the start time is returned from GetLiveAuctionCatalogDetails.) A
	 * schedule must be created at least 48 hours in advance of the auction. The seller then lists
	 * one or more lots that will be auctioned during that event. Only schedules for future sales
	 * are returned. That is, schedules for ended sales or sales in progress are not returned. Pass
	 * as input to AddLiveAuctionItem when you list a lot item.
	 */
	public $schedule;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
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
	 * @param string $val
	 * @throws Exception
	 */
	public function setCatalogName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CatalogName');
        }
        $this->catalogname = (int)$val;
	}

	/**
	 * @param ScheduleType $val
	 * @throws Exception
	 */
	public function setSchedule($val)
	{
        $this->schedule = (int)$val;
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
