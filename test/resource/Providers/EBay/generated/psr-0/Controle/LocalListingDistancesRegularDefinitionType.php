<?php

namespace Controle;

/**
 * LocalListingDistancesRegularDefinitionType
 * Defines the LocalListingDistancesRegular feature. This feature displays all the supported
 * local listing distances for items listed by sellers subscribed to Local Market for Vehicles.
 */
class LocalListingDistancesRegularDefinitionType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\<anyXML>
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
