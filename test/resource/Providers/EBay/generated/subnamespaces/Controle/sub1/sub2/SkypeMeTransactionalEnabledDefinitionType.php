<?php

namespace Controle\sub1\sub2;

/**
 * SkypeMeTransactionalEnabledDefinitionType
 * Defines the feature of adding Skype buttons to listings for transactional formats  (e.g.,
 * the Chinese auction format). If the field is present, the corresponding feature applies
 * to the category. The field is returned as an empty element (i.e., a boolean value is not
 * returned).
 */
class SkypeMeTransactionalEnabledDefinitionType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
