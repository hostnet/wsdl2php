<?php

namespace Controle;

/**
 * BestOfferArrayType
 * A collection of Best Offers. Empty if there are no best offers.
 */
class BestOfferArrayType
{
    /**
     * @var \Controle\BestOfferType | (GetMyeBayBuying only) Indicates the latest BestOffer the user has provided for the
     * item .
     */
    public $bestoffer;
    /**
     * @param BestOfferType $val
     * @throws Exception
     */
    public function setBestOffer($val)
    {
        $this->bestoffer = (int)$val;
    }
}
