<?php

namespace Controle;

/**
 * SetStoreCustomPageResponseType
 * Returned after calling SetStoreCustomPageRequest. This serves as      confirmation that
 * the custom page was successfully submitted.
 */
class SetStoreCustomPageResponseType extends
 \Controle\AbstractResponseType
{
    /**
     * @var \Controle\StoreCustomPageType | A Store custom page.
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
