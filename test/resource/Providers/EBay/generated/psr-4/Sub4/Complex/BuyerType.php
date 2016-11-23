<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * BuyerType
 * Contains information about a user as a buyer.
 */
class BuyerType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType | The address to which the item is to be shipped.
     */
    public $ShippingAddress;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param AddressType $val
     * @throws Exception
     */
    public function setShippingAddress($val)
    {
        $this->ShippingAddress = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
