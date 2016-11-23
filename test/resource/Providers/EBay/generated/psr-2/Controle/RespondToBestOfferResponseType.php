<?php

namespace Controle;

/**
 * RespondToBestOfferResponseType
 * Contains a list of BestOffers that were either accepted or declined.
 */
class RespondToBestOfferResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\BestOfferArrayType | A list of BestOffers that were either accepted or declined.
     */
    public $RespondToBestOffer;
    // @codingStandardsIgnoreEnd

    /**
     * @param BestOfferArrayType $val
     * @throws Exception
     */
    public function setRespondToBestOffer($val)
    {
        $this->RespondToBestOffer = (int)$val;
    }
}
