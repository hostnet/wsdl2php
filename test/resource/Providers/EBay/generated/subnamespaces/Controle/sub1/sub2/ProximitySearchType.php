<?php

namespace Controle\sub1\sub2;
/**
 * ProximitySearchType
 * Contains data for filtering a search by proximity.
 */
class ProximitySearchType {
	/**
	 * @var int | The maximum distance from the specified postal code to search for items.
	 */
	public $MaxDistance;
	/**
	 * @var string | The postal code to use as the basis for the proximity search.
	 */
	public $PostalCode;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

