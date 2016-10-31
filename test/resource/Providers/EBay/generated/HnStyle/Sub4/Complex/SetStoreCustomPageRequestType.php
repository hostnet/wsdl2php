<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetStoreCustomPageRequestType
 * Sets a custom page for a user's eBay Store. The page can include static HTML      content
 * as well as dynamic content that is added using the special eBay Stores      tags.
 */
class SetStoreCustomPageRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
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
