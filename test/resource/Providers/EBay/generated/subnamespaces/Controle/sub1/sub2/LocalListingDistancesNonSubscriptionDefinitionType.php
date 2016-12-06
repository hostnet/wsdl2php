<?php

namespace Controle\sub1\sub2;

/**
 * LocalListingDistancesNonSubscriptionDefinitionType
 * Defines the LocalListingDistancesNonSubscription feature. This feature displays all the
 * supported local listing distances for items listed by sellers who have not subscribed to
 * either Local Market for Vehicles or Local Market for Specialty Vehicles.
 */
class LocalListingDistancesNonSubscriptionDefinitionType
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
        $this->any = $val;
	}
}
