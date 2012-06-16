<?php

namespace Controle\sub1\sub2;
/**
 * VeROSiteDetailType
 * Container for reason code details for a given site.
 */
class VeROSiteDetailType {
	/**
	 * @var \Controle\sub1\sub2\SiteCodeType | Site where the Want It Now post is listed.
	 */
	public $Site;
	/**
	 * @var \Controle\sub1\sub2\ReasonCodeDetailType | Contains details for a given reason code.
	 */
	public $ReasonCodeDetail;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

