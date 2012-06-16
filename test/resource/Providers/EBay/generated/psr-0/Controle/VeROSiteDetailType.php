<?php

namespace Controle;
/**
 * VeROSiteDetailType
 * Container for reason code details for a given site.
 */
class VeROSiteDetailType {
	/**
	 * @var \Controle\SiteCodeType | Site where the Want It Now post is listed.
	 */
	public $Site;
	/**
	 * @var \Controle\ReasonCodeDetailType | Contains details for a given reason code.
	 */
	public $ReasonCodeDetail;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

