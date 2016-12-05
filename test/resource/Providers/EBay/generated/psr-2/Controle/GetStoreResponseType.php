<?php

namespace Controle;

/**
 * GetStoreResponseType
 * Returns the data describing a seller's eBay store, including name, description, URL, and
 * other information. The caller making the request must be the owner of an eBay store. If
 * the authenticated caller does not have an eBay store, the response is an error. A successful
 * response contains either the complete store configuration or information about the category
 * hierarchy for the store only.
 */
class GetStoreResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\StoreType | Specifies the Store configuration that is being set for the user.
     */
    public $Store;
    // @codingStandardsIgnoreEnd

    /**
     * @param StoreType $val
     * @throws Exception
     */
    public function setStore($val)
    {
        $this->Store = ()$val;
    }
}
