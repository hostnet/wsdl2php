<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * LocalListingDistancesSpecialtyDefinitionType
 * Defines the LocalListingDistancesSpecialty feature. This feature displays the supported
 * local listing distances for items listed by sellers subscribed to Local Market for Specialty
 * Vehicles.
 */
class LocalListingDistancesSpecialtyDefinitionType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
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
