<?php

namespace Controle;

/**
 * MinimumReservePriceDefinitionType
 * Defines the Minimum Reserve Price feature. If the field is present, the feature applies
 * to the category. The field is returned as an empty element (i.e., a boolean value is not
 * returned).
 */
class MinimumReservePriceDefinitionType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
