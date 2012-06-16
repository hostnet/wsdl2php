<?php

namespace Controle\sub1\sub2;
/**
 * URLDetailsType
 * Details about a specific eBay URL.
 */
class URLDetailsType {
	/**
	 * @var \Controle\sub1\sub2\URLTypeCodeType | A compressed, representative title for the eBay URL.
	 */
	public $URLType;
	/**
	 * @var \Controle\sub1\sub2\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL) to
	 * launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be used in certain
	 * types of applications. See your API license agreement. Also see this page for logo usage
	 * rules:<br> http://developer.ebay.com/join/licenses/apilogousage
	 */
	public $URL;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

