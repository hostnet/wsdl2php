<?php

namespace Controle\sub1\sub2;
/**
 * SiteLocationType
 * Contains the data that defines a site-based filter (used when            searching for items
 * and filtering the search result set).
 */
class SiteLocationType {
	/**
	 * @var \Controle\sub1\sub2\SiteIDFilterCodeType | 	 */
	public $SiteID;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param SiteIDFilterCodeType $val
	 * @throws Exception
	 */
	public function setSiteID($val) {
		
		$this->SiteID = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

