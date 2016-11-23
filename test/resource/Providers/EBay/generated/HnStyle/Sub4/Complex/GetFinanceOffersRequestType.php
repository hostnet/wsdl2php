<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetFinanceOffersRequestType
 * Retrieves either the current set of finance offers or a specific finance offer. Only supported
 * on US and Canada sites. Payment method must be PayPal.
 */
class GetFinanceOffersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
     */
    public $FinanceOfferID;
    /**
     * @var dateTime | Date the message was last modified. Returned if the parent container is returned.
     */
    public $LastModifiedDate;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFinanceOfferID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FinanceOfferID');
        }
        $this->FinanceOfferID = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastModifiedDate($val)
    {
        $this->LastModifiedDate = (int)$val;
    }
}
