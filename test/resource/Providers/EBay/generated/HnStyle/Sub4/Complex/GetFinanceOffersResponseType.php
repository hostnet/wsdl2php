<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetFinanceOffersResponseType
 * Contains the number of finance offers and the current set of finance offers.
 */
class GetFinanceOffersResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | Count of the feedbacks received by the user for the time period prior to the call indicated
     * in PeriodInDays. Returned if no detail level is specified.
     */
    public $Count;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FinanceOfferArrayType | Set of currently available finance offers or a set that contains a specific finance
     * offer (if a particular finance offer ID was specified in the call input). Only returned
     * if finance offers meeting the request criteria exist.
     */
    public $FinanceOfferArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Count = ()$val;
    }

    /**
     * @param FinanceOfferArrayType $val
     * @throws Exception
     */
    public function setFinanceOfferArray($val)
    {
        $this->FinanceOfferArray = ()$val;
    }
}
