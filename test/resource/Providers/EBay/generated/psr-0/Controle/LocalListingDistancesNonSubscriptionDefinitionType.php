<?php

namespace Controle;

/**
 * LocalListingDistancesNonSubscriptionDefinitionType
 * Defines the LocalListingDistancesNonSubscription feature. This feature displays all the
 * supported local listing distances for items listed by sellers who have not subscribed to
 * either Local Market for Vehicles or Local Market for Specialty Vehicles.
 */
class LocalListingDistancesNonSubscriptionDefinitionType
{
	/**
	 * @var \Controle\<anyXML>
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
