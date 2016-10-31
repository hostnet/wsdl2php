<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreCustomPageArrayType
 * Set of Store custom pages.
 */
class StoreCustomPageArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomPageType | A Store custom page.
     */
    public $custompage;
    /**
     * @param StoreCustomPageType $val
     * @throws Exception
     */
    public function setCustomPage($val)
    {
        $this->custompage = (int)$val;
    }
}
