<?php

namespace Controle;

/**
 * BuyerType
 * Contains information about a user as a buyer.
 */
class BuyerType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\AddressType | The address to which the item is to be shipped.
     */
    public $ShippingAddress;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param AddressType $val
     * @throws Exception
     */
    public function setShippingAddress($val)
    {
        $this->ShippingAddress = ()$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}
