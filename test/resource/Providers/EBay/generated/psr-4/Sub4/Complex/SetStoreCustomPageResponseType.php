<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetStoreCustomPageResponseType
 * Returned after calling SetStoreCustomPageRequest. This serves as      confirmation that
 * the custom page was successfully submitted.
 */
class SetStoreCustomPageResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
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
