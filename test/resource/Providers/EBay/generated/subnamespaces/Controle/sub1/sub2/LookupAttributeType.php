<?php

namespace Controle\sub1\sub2;
/**
 * LookupAttributeType
 * An optional attribute that the seller wants to include in the listing. Enables you to specify
 * an attribute by name rather than by ID. Only valid in Media categories (Books, DVD and Movies,
 * Music, and Video Game categories). Currently, only the Condition attribute is supported.
 */
class LookupAttributeType {
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

