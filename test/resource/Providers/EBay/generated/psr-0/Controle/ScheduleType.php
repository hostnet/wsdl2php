<?php

namespace Controle;
/**
 * ScheduleType
 * Sellers create live auction catalogs and schedule their live auction events by using the
 * eBay Live Auctions Web site user interface. The seller can create a catalog in the Live
 * Auctions system several months before a sale.
 */
class ScheduleType {
	/**
	 * @var int | Identifier for an event schedule in the seller's Live Auctions catalog.
	 */
	public $ScheduleID;
	/**
	 * @var dateTime | Date and time that the sale schedule starts.
	 */
	public $ScheduleTime;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

