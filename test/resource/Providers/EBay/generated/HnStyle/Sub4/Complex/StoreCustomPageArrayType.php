<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreCustomPageArrayType
 * Set of Store custom pages.
 */
class StoreCustomPageArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomPageType | A Store custom page.
     */
    public $CustomPage;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreCustomPageType $val
     * @throws Exception
     */
    public function setCustomPage($val)
    {
        $this->CustomPage = (StoreCustomPageType)$val;
    }
}
