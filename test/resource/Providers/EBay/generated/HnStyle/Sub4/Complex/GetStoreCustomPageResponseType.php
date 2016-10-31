<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetStoreCustomPageResponseType
 * Contains the custom page or pages for the user's Store.
 */
class GetStoreCustomPageResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomPageArrayType | The custom page or custom pages.
     */
    public $custompagearray;
    /**
     * @param StoreCustomPageArrayType $val
     * @throws Exception
     */
    public function setCustomPageArray($val)
    {
        $this->custompagearray = (int)$val;
    }
}
