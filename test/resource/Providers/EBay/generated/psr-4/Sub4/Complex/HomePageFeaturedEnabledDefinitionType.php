<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * HomePageFeaturedEnabledDefinitionType
 * Defines whether Home Page Featured is available on the site.
 */
class HomePageFeaturedEnabledDefinitionType
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
