<?php

namespace Controle\sub1\sub2;

/**
 * ProPackEnabledDefinitionType
 * Defines the ProPack feature (a feature pack). If the field is present, the corresponding
 * feature applies to the category. The field is returned as an empty element (i.e., a boolean
 * value is not returned).
 */
class ProPackEnabledDefinitionType
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
