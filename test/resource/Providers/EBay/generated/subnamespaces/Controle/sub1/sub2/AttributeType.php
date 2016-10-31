<?php

namespace Controle\sub1\sub2;

/**
 * AttributeType
 * A salient aspect or feature of an item. On eBay.com, this information is used in the Item
 * Specifics section of a listing to describe an item in a standard way so that buyers can
 * find it more easily.
 */
class AttributeType
{
	/**
	 * @var \Controle\sub1\sub2\ValType | Specifies the value for the property.
	 */
	public $value;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @var int
	 */
	public $attributeid;
	/**
	 * @var string
	 */
	public $attributelabel;
	/**
	 * @param ValType $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        $this->value = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setAttributeID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->attributeid = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttributeLabel($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for attributeLabel');
        }
        $this->attributelabel = (int)$val;
	}
}
