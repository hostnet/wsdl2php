<?php

namespace Controle\sub1\sub2;

/**
 * ExpressEnabledDefinitionType
 * For the US and Germany sites, an eBay item must meet a number of eligibility requirements
 * in order to also be included on eBay Express. One requirement is that the category needs
 * to support Express. Currently, this type defines no special meta-data. (An empty element
 * is returned.)
 */
class ExpressEnabledDefinitionType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
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
