<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetProductFinderRequestType
 * Retrieves data that you use to construct valid "product finder" queries (queries against
 * multiple attributes) against catalog products or listed items. The attributes describe search
 * criteria (e.g., Manufacturer), as appropriate for the category. Use the results in combination
 * with GetProductFinderXSL to render the Product Finder in a graphical user interface. GetProductFinder
 * does not conduct the actual product or listing search. It only returns data about what you
 * can search on. Use the data as input to GetProductSearchResults to conduct the actual search
 * for product information or as input to GetSearchResults to conduct the search for listed
 * items. To retrieve single-attribute search criteria (querying against a single attribute,
 * like UPC), use GetProductSearchPage instead (only applicable for catalog searches). See
 * the eBay Web Services Guide for an overview of Pre-filled Item Information and details about searching
 * for catalog products and for information about searching for listed items.
 */
class GetProductFinderRequestType extends
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
     * @var int | Numeric identifier for a buy-side product finder. A product finder defines how to
     *           search for Item Specifics in listings (e.g., how to search against a particular
     * shoe size).            See the eBay Web Services guide for details about product finders.
     *            You need to specify a product finder ID when you are searching against a
     * listing's             Item Specifics (i.e., when you use SearchAttributes). A few categories,
     * such as US Event Tickets and US eBay Motors, can also return a subset of Item Specifics
     * (e.g., the event venue, section, and row for a ticket listing) in the search results.
     * To retrieve this data, you must specify the product finder ID, and also specify a detail
     * level of ItemReturnAttributes or ReturnAll. Use GetProductFinder to determine valid
     * product finder IDs.
     */
    public $ProductFinderID;
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
        $this->AttributeSystemVersion = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setProductFinderID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ProductFinderID = (int)$val;
    }
}
