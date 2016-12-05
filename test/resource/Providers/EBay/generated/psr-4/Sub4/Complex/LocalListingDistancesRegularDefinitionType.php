<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * LocalListingDistancesRegularDefinitionType
 * Defines the LocalListingDistancesRegular feature. This feature displays all the supported
 * local listing distances for items listed by sellers subscribed to Local Market for Vehicles.
 */
class LocalListingDistancesRegularDefinitionType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
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
