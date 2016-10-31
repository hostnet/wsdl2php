<?php

namespace Controle\sub1\sub2;

/**
 * AdFormatEnabledDefinitionType
 * Defines the AdFormatEnabled feature. If the field is present, the corresponding feature
 * applies to the category. The field is returned as an empty element (e.g., a boolean value
 * is not returned).
 */
class AdFormatEnabledDefinitionType
{
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
