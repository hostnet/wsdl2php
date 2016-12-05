<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ProductSearchType
 * Container for a product query and pagination instructions.      This data is applicable
 * when searching eBay catalogs for stock product      information (to use in listings with
 * Pre-filled Item Information.)      Input only.
 */
class ProductSearchType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Unique alphanumeric key help you distinguish between query results in the response.
     *            You define the key. Each search request ID must be unique within the same
     * call.            Primarily useful when conducting multiple searches in the same call.
     *            If not specified, the ProductSearchResult.ID values in the response are
     *           indexed starting from 0 (zero).
     */
    public $ProductSearchID;
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
     * @var string | Identifier for a representative stock product in a product family.            Used as
     * input in GetProductFamilyMembers requests to identify a product family.            Use
     * GetProductSearchResults to determine the available IDs.
     */
    public $ProductID;
    /**
     * @var int | Unique identifier for a sortable attribute. Use GetProductSearchPage or GetProductFinder
     * to determine the valid sort attribute IDs for the specified characteristic set (including
     * the default sort attribute that will be used if you do not specify this field).
     */
    public $SortAttributeID;
    /**
     * @var int | Pagination instruction that specifies the maximum quantity of products to return for
     * each            product family within the search response whose ID matches the current
     * request's ID.            In the response, if the last family returned contains MaxChildrenPerFamily
     * or fewer            additional products, those additional products are also returned
     * (i.e., the actual quantity            returned for the last family can exceed the specified
     * maximum value).            See "Limit the Quantity of Products Returned Per Family"
     * in the eBay Web Services Guide.            The value should not include punctuation
     * (i.e., a thousands separator is not valid).
     */
    public $MaxChildrenPerFamily;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchAttributesType | A query consisting of a set of attributes (search criteria). If the query
     *   includes multiple attributes, the search engine will apply "AND" logic to the
     *         query. Use GetProductFinder to determine the list of valid attributes
     *       and how many are permitted for the specified characteristic set.            If
     * specified, ProductFinderID must also be specified.
     */
    public $SearchAttributes;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    /**
     * @var boolean | Filter to only retrieve products that match active eBay listings. This may be used as
     * an indicator to determine which products other sellers recently used to pre-fill similar
     * listings. If true, only retrieve products that have been used to pre-fill active listings
     * on the            specified eBay site. If false, retrieve all products that match the
     * query.
     */
    public $AvailableItemsOnly;
    /**
     * @var string | One or more keywords to search for in the characteristic set specified in
     *  CharacteristicSetIDs. Both the product title and Item Specifics are searched. For each
     * ProductSearch, either SearchAttributes or QueryKeywords is required (but do not pass
     * both). Blank searches are not applicable (and result in a warning). The words "and"
     * and "or" are treated like any other word. Only use "and", "or", or "the" if you are
     * searching for products containing these words. To use AND or OR logic, use eBay's standard
     * search string modifiers. Wildcards (+, -, or *) are also supported. Be careful when
     * using spaces before or after modifiers and wildcards.
     */
    public $QueryKeywords;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicSetIDsType | List of one or more characteristic set IDs that indicate which characteristic sets
     *            to search in. If not specified, the search is conducted across all characteristic
     * sets. Only applicable when QueryKeywords is specified. Ignored when SearchAttributes
     * is specified.
     */
    public $CharacteristicSetIDs;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductSearchID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductSearchID');
        }
        $this->ProductSearchID = (string)$val;
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
        $this->AttributeSetID = (int)$val;
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

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductID');
        }
        $this->ProductID = (string)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setSortAttributeID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->SortAttributeID = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxChildrenPerFamily($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->MaxChildrenPerFamily = (int)$val;
    }

    /**
     * @param SearchAttributesType $val
     * @throws Exception
     */
    public function setSearchAttributes($val)
    {
        $this->SearchAttributes = (SearchAttributesType)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = (PaginationType)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setAvailableItemsOnly($val)
    {
        $this->AvailableItemsOnly = (boolean)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQueryKeywords($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for QueryKeywords');
        }
        $this->QueryKeywords = (string)$val;
    }

    /**
     * @param CharacteristicSetIDsType $val
     * @throws Exception
     */
    public function setCharacteristicSetIDs($val)
    {
        $this->CharacteristicSetIDs = (CharacteristicSetIDsType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
