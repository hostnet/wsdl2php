<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetProductSearchPageRequestType
 * Retrieves the attributes a seller can use to form a query when searching for Pre-filled
 * Item Information to use in a listing for a category that is catalog-enabled. This call is
 * applicable for use cases related to listing items with Pre-filled Item Information. Specifically,
 * it retrieves data that you use to construct valid "single-attribute" queries. The attributes
 * describe search criteria (e.g., Author) and sorting criteria (e.g., Publication Year), as
 * appropriate for the category. GetProductSearchPage does not conduct the actual product search.
 * It only returns data about what you can search on. Use the data as input to GetProductSearchResults
 * to conduct the actual search for product information. To retrieve Product Finder search
 * criteria (querying against multiple attributes), use GetProductFinder instead. See the eBay
 * Web Services guide for an overview of Pre-filled Item Information and details about searching
 * for catalog products.
 */
class GetProductSearchPageRequestType extends
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
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAttributeSystemVersion($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AttributeSystemVersion');
        }
        $this->AttributeSystemVersion = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setAttributeSetID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->AttributeSetID = $val;
    }
}
