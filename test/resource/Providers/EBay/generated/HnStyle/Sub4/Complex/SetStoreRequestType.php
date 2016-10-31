<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetStoreRequestType
 * Sets the configuration of the eBay store owned by the caller.
 */
class SetStoreRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreType | Specifies the Store configuration that is being set for the user.
     */
    public $store;
    /**
     * @param StoreType $val
     * @throws Exception
     */
    public function setStore($val)
    {
        $this->store = (int)$val;
    }
}
