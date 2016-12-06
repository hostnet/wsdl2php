<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetStoreCustomPageRequestType
 * Retrieves the custom page or pages for the user's Store.
 */
class GetStoreCustomPageRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Unique identifier for the Store custom page. When you are using   SetStoreCustomPage,
     * if you specify a valid PageID, the custom page  is updated. If you do not specify a
     * PageID, the custom page is  added.
     */
    public $PageID;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPageID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PageID');
        }
        $this->PageID = $val;
    }
}
