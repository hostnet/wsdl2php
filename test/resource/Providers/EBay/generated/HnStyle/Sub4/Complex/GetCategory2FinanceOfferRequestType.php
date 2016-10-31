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
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $categoryid;
    /**
     * @var dateTime | Date the message was last modified. Returned if the parent container is returned.
     */
    public $lastmodifieddate;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->categoryid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastModifiedDate($val)
    {
        $this->lastmodifieddate = (int)$val;
    }
}
