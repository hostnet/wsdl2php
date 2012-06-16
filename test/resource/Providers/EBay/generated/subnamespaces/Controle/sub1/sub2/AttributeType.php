<?php

namespace Controle\sub1\sub2;
/**
 * AttributeType
 * A salient aspect or feature of an item. On eBay.com, this information is used in the Item
 * Specifics section of a listing to describe an item in a standard way so that buyers can
 * find it more easily.
 */
class AttributeType {
	/**
	 * @var \Controle\sub1\sub2\ValType | Specifies the value for the property.
	 */
	public $Value;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @var int
	 */
	public $attributeID;
	/**
	 * @var string
	 */
	public $attributeLabel;
}

