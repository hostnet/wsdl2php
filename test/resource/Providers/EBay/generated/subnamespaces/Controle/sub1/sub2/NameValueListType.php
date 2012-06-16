<?php

namespace Controle\sub1\sub2;
/**
 * NameValueListType
 * A name and corresponding value (a name/value pair).
 */
class NameValueListType {
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var string | Specifies the value for the property.
	 */
	public $Value;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

