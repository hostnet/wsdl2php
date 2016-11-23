<?php

namespace Controle\sub1\sub2;

/**
 * SellerContactDetailsEnabledDefinitionType
 * Defines the SellerContactDetailsEnabled feature. If the field is present, the category allows
 * retrieval of seller-level contact information. The field is returned as an empty element
 * (e.g., a boolean value is not returned).
 */
class SellerContactDetailsEnabledDefinitionType
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
        $this->any = (int)$val;
	}
}
