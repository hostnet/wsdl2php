<?php

namespace Controle\sub1\sub2;
/**
 * RegionDetailsType
 * Details about a region.
 */
class RegionDetailsType {
	/**
	 * @var string | Specifies a region ID. The item must have been listed for the specified region to be returned
	 * in the search result set.
	 */
	public $RegionID;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

