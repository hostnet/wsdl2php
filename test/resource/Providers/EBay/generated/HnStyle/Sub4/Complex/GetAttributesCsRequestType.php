<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetAttributesCsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Current version of the product search page data for the site. This value changes each
     * time changes are made to the search page data. The current version value is not necessarily
     * greater than the previous value. Therefore, when comparing versions, only compare whether
     * the value has changed.
     */
    public $AttributeSystemVersion;
    /**
     * @var int | Numeric identifier for a characteristic set that defines the attributes            (unique
     * across all eBay sites).
     */
    public $AttributeSetID;
    /**
     * @var boolean | If true, includes a list of CategoryMapping nodes in the response. Each CategoryMapping
     * node specifies category information as well as attributes and values that your application
     * can auto-fill for items listed in that category. See the eBay Web Services Guide for
     * more information about options for maintaining category data and auto-filling Item Specifics.
     */
    public $IncludeCategoryMappingDetails;
    /**
     * @var boolean | Indicates whether the order contains at least one transaction for a digital listing. Not
     * applicable to Half.com.
     */
    public $DigitalDelivery;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setAttributeSystemVersion($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for AttributeSystemVersion');
        }
        $this->AttributeSystemVersion = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setAttributeSetID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->AttributeSetID = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setIncludeCategoryMappingDetails($val)
    {
        $this->IncludeCategoryMappingDetails = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setDigitalDelivery($val)
    {
        $this->DigitalDelivery = $val;
    }
}
