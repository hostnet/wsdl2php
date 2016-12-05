<?php

namespace Controle\sub1\sub2;

/**
 * LocalListingDistancesRegularDefinitionType
 * Defines the LocalListingDistancesRegular feature. This feature displays all the supported
 * local listing distances for items listed by sellers subscribed to Local Market for Vehicles.
 */
class LocalListingDistancesRegularDefinitionType
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
