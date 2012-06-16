<?php

namespace Controle;
/**
 * SiteDetailsType
 * Details about a specific site.
 */
class SiteDetailsType {
	/**
	 * @var \Controle\SiteCodeType | Site where the Want It Now post is listed.
	 */
	public $Site;
	/**
	 * @var int | 	 */
	public $SiteID;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

