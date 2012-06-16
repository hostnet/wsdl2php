<?php

namespace Controle;
class SearchDetailsType {
	/**
	 * @var boolean | Indicates whether a listing uses the Buy It Now feature.
	 */
	public $BuyItNowEnabled;
	/**
	 * @var boolean | Indicates whether a listing has an image associated with it.
	 */
	public $Picture;
	/**
	 * @var boolean | Indicates whether a listing is no more than one day old.
	 */
	public $RecentListing;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

