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
