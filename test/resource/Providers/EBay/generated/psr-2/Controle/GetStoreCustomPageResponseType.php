<?php

namespace Controle;

/**
 * GetStoreCustomPageResponseType
 * Contains the custom page or pages for the user's Store.
 */
class GetStoreCustomPageResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\StoreCustomPageArrayType | The custom page or custom pages.
     */
    public $CustomPageArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreCustomPageArrayType $val
     * @throws Exception
     */
    public function setCustomPageArray($val)
    {
        $this->CustomPageArray = (StoreCustomPageArrayType)$val;
    }
}
