<?php

namespace Controle;
/**
 * MyeBaySecondChanceOfferListType
 * A list of possible My eBay Second Chance Offers.
 */
class MyeBaySecondChanceOfferListType {
	/**
	 * @var int | The total number of My eBay Second Chance Offers available.
	 */
	public $TotalAvailable;
	/**
	 * @var \Controle\ItemType | A Second Chance Offer item.
	 */
	public $SecondChanceOffer;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

