<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyeBaySecondChanceOfferListType
 * A list of possible My eBay Second Chance Offers.
 */
class MyeBaySecondChanceOfferListType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | The total number of My eBay Second Chance Offers available.
     */
    public $TotalAvailable;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | A Second Chance Offer item.
     */
    public $SecondChanceOffer;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalAvailable($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalAvailable = $val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setSecondChanceOffer($val)
    {
        $this->SecondChanceOffer = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
