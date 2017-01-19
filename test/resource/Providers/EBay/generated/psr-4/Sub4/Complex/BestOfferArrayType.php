<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * BestOfferArrayType
 * A collection of Best Offers. Empty if there are no best offers.
 */
class BestOfferArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BestOfferType | (GetMyeBayBuying only) Indicates the latest BestOffer the user has provided for the
     * item .
     */
    public $BestOffer;
    // @codingStandardsIgnoreEnd

    /**
     * @param BestOfferType $val
     * @throws \Exception
     */
    public function setBestOffer($val)
    {
        $this->BestOffer = $val;
    }
}
