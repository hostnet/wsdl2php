<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetStoreCustomPageResponseType
 * Contains the custom page or pages for the user's Store.
 */
class GetStoreCustomPageResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomPageArrayType | The custom page or custom pages.
     */
    public $CustomPageArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreCustomPageArrayType $val
     * @throws Exception
     */
    public function setCustomPageArray($val)
    {
        $this->CustomPageArray = (int)$val;
    }
}
