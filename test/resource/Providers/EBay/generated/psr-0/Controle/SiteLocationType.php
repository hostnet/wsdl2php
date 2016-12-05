<?php

namespace Controle;

/**
 * SiteLocationType
 * Contains the data that defines a site-based filter (used when            searching for items
 * and filtering the search result set).
 */
class SiteLocationType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\SiteIDFilterCodeType | 	 */
	public $SiteID;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SiteIDFilterCodeType $val
	 * @throws Exception
	 */
	public function setSiteID($val)
	{
        $this->SiteID = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
