<?php

namespace Controle;

/**
 * ExpressHistogramDepartmentType
 * Details about an Express department and matching item and catalog product counts in that
 * department, if any.
 */
class ExpressHistogramDepartmentType
{
    /**
     * @var \Controle\ExpressHistogramDomainDetailsType | Identifies an Express product type and provides item and eBay catalog product counts
     * in that product type. Only returned if a product type matched the request.<br> <br> A
     * product type domain can stand alone, or it can be grouped with other product types into
     * an aisle or a department.
     */
    public $domaindetails;
    /**
     * @var \Controle\ExpressHistogramAisleType | Contains item and catalog product counts for an aisle (if any) and may contain a list
     * of product types. Only returned when HistogramDetails is configured to return aisles
     * and/or product types.<br> <br> A Department node can contain multiple Aisle nodes.
     */
    public $aisle;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param ExpressHistogramDomainDetailsType $val
     * @throws Exception
     */
    public function setDomainDetails($val)
    {
        $this->domaindetails = (int)$val;
    }

    /**
     * @param ExpressHistogramAisleType $val
     * @throws Exception
     */
    public function setAisle($val)
    {
        $this->aisle = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
