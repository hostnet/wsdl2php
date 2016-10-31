<?php

namespace Controle;

/**
 * LookupAttributeType
 * An optional attribute that the seller wants to include in the listing. Enables you to specify
 * an attribute by name rather than by ID. Only valid in Media categories (Books, DVD and Movies,
 * Music, and Video Game categories). Currently, only the Condition attribute is supported.
 */
class LookupAttributeType
{
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $name;
	/**
	 * @var string | Specifies the value for the property.
	 */
	public $value;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setValue($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
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
}
