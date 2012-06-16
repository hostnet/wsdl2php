<?php

namespace Controle\sub1\sub2;
/**
 * LabelType
 * Applicable when working with Pre-filled Item Information (Catalogs) functionality. The label
 * to display when presenting the attribute to a user. Not necessarily the same as the attribute's
 * label as defined in the characteristic set (i.e., the label could be overridden by the catalog).
 */
class LabelType {
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @var boolean
	 */
	public $visible;
}

