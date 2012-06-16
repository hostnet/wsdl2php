<?php

namespace Controle\sub1\sub2;
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
	 * @var \Controle\sub1\sub2\ItemType | A Second Chance Offer item.
	 */
	public $SecondChanceOffer;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

