<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * RespondToBestOfferResponseType
 * Contains a list of BestOffers that were either accepted or declined.
 */
class RespondToBestOfferResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BestOfferArrayType | A list of BestOffers that were either accepted or declined.
     */
    public $respondtobestoffer;
    /**
     * @param BestOfferArrayType $val
     * @throws Exception
     */
    public function setRespondToBestOffer($val)
    {
        $this->respondtobestoffer = (int)$val;
    }
}
