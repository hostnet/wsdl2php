<?php

namespace Controle;

/**
 * SearchRequestType
 * Specifies a query consisting of attributes. Only attributes that are returned       from
 * GetProductFinder can be used. See the Developer's Guide for more information.
 */
class SearchRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | Numeric identifier for a characteristic set that defines the attributes            (unique
     * across all eBay sites).
     */
    public $AttributeSetID;
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
    /**
     * @var \Controle\SearchAttributesType | A query consisting of a set of attributes (search criteria). If the query
     *   includes multiple attributes, the search engine will apply "AND" logic to the
     *         query. Use GetProductFinder to determine the list of valid attributes
     *       and how many are permitted for the specified characteristic set.            If
     * specified, ProductFinderID must also be specified.
     */
    public $SearchAttributes;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

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
     * @param int $val
     * @throws \Exception
     */
    public function setProductFinderID($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ProductFinderID = $val;
    }

    /**
     * @param SearchAttributesType $val
     * @throws \Exception
     */
    public function setSearchAttributes($val)
    {
        $this->SearchAttributes = $val;
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
