<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetCategory2FinanceOfferRequestType
 * Retrieves the promotional financing offers available in a specified category. You can specify
 * the date from which to retrieve financing offers.
 */
class GetCategory2FinanceOfferRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var dateTime | Date the message was last modified. Returned if the parent container is returned.
     */
    public $LastModifiedDate;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = (string)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastModifiedDate($val)
    {
        $this->LastModifiedDate = (dateTime)$val;
    }
}
