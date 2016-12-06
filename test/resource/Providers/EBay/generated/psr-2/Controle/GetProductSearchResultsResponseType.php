<?php

namespace Controle;

/**
 * GetProductSearchResultsResponseType
 * GetProductSearchResults performs a product search and collects the results.      Result
 * attributes for each product/product family are grouped and identified      with a product
 * ID. If more matches are found than the max amount specified per family,      only the product
 * family information is returned. In this case, call GetProductFamilyMembers      to retrieve
 * more products within the same family.
 */
class GetProductSearchResultsResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\DataElementSetType | Container for one or more DataElement fields containing supplemental helpful data.
     *                 A DataElement field is an HTML snippet that specifies hints for the
     * user, help links, help graphics, and other supplemental information that varies per
     * characteristic set. Usage of this information is optional and may require you to inspect
     * the information                  to determine how it can be applied in an application.
     *                  Also returned with warnings when no matches are found.
     */
    public $DataElementSets;
    /**
     * @var \Controle\ProductSearchResultType | Contains the attributes and product details that match the attributes or query keywords
     *                  passed in the request. Always returned when product search results
     * are found.
     */
    public $ProductSearchResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param DataElementSetType $val
     * @throws Exception
     */
    public function setDataElementSets($val)
    {
        $this->DataElementSets = $val;
    }

    /**
     * @param ProductSearchResultType $val
     * @throws Exception
     */
    public function setProductSearchResult($val)
    {
        $this->ProductSearchResult = $val;
    }
}
