<?php

namespace Controle;

/**
 * StoreCustomPageArrayType
 * Set of Store custom pages.
 */
class StoreCustomPageArrayType
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
