<?php

namespace Controle;
/**
 * RespondToBestOfferResponseType
 * Contains a list of BestOffers that were either accepted or declined.
 */
class RespondToBestOfferResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\BestOfferArrayType | A list of BestOffers that were either accepted or declined.
     */
    public $RespondToBestOffer;
    /**
     * @param BestOfferArrayType $val
     * @throws Exception
     */
    public function setRespondToBestOffer($val) {
        
        $this->RespondToBestOffer = (int)$val;
    }

}

