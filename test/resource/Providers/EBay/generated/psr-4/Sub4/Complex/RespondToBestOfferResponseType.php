<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RespondToBestOfferResponseType
 * Contains a list of BestOffers that were either accepted or declined.
 */
class RespondToBestOfferResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BestOfferArrayType | A list of BestOffers that were either accepted or declined.
     */
    public $RespondToBestOffer;
    // @codingStandardsIgnoreEnd

    /**
     * @param BestOfferArrayType $val
     * @throws Exception
     */
    public function setRespondToBestOffer($val)
    {
        $this->RespondToBestOffer = $val;
    }
}
