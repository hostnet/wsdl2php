<?php

namespace Controle;

/**
 * ExpressHistogramProductType
 * Details about an Express product type and matching item and catalog product counts in that
 * product type, if any.
 */
class ExpressHistogramProductType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\ExpressHistogramDomainDetailsType | Identifies an Express product type and provides item and eBay catalog product counts
     * in that product type. Only returned if a product type matched the request.<br> <br> A
     * product type domain can stand alone, or it can be grouped with other product types into
     * an aisle or a department.
     */
    public $DomainDetails;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param ExpressHistogramDomainDetailsType $val
     * @throws \Exception
     */
    public function setDomainDetails($val)
    {
        $this->DomainDetails = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws \Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
