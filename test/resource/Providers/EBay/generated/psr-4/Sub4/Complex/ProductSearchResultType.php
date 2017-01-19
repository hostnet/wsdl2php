<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ProductSearchResultType
 * Container for the results of a product query. Supports Pre-filled Product Information functionality. See
 * the Developer's Guide for more information about working with this data.
 */
class ProductSearchResultType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | The approximate quantity of pages of results that match the product search query
     *            (TotalProducts divided by the median number of products per page examined
     * so far).               Always returned when AttributeSet is returned.
     * For GetProductSearchResults, only returned with compatibility level 387 and higher.
     *               For GetProductFamilyMembers, only returned with compatibility level 415
     * and higher.               With lower compatibility levels, ProductSearchResult.ApproximatePages
     * is returned instead.
     */
    public $ApproximatePages;
    /**
     * @var int | Numeric identifier for a characteristic set that defines the attributes            (unique
     * across all eBay sites).
     */
    public $AttributeSetID;
    /**
     * @var boolean | If true, the query results contain additional pages (higher than the current page number). You
     * can retrieve more results by incrementing the PageNumber value that was passed in the
     * request.               For GetProductSearchResults, only returned with compatibility
     * level 387 and higher.               For GetProductFamilyMembers, only returned with
     * compatibility level 415 and higher.               With lower compatibility levels, ProductSearchResult.HasMore
     * is returned instead.
     */
    public $HasMore;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProductFamilyType | ProductFamilies represents one product family. Multiple ProductFamilies
     *   properties can be returned. A product family identifies a group of related products.
     *               For example, the movie "My Favorite Movie: The Sequel" might be released
     * on DVD, but there               might be several editions of the DVD (e.g., in different
     * languages) with different ISBN numbers.               All variations are part of the
     * same product family ("My Favorite Movie: The Sequel" in the DVD format).
     *    See "Limit the Quantity of Products Returned Per Family" in the eBay Web Services
     * Guide.               Always returned when AttributeSet is returned.               For
     * GetProductSearchResults, only returned with compatibility level 387 and higher.
     *           For GetProductFamilyMembers, only returned with compatibility level 415 and
     * higher.               With lower compatibility levels, ProductSearchResult.ProductFamilies
     * is returned instead.
     */
    public $ProductFamilies;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProductFinderConstraintType | A list of attributes (constraints) that were specified in the search request.
     *         This information is useful when multiple queries were specified in a
     *        GetProductSearchResults request. Use this information to map each query
     *          to each result in the response object.               Applicable when the search
     * request was constructed based on a product finder.               For GetProductSearchResults,
     * only returned with compatibility level 387 and higher.               With lower compatibility
     * levels, ProductSearchResult.ProductFinderConstraints is returned instead.
     *     Not applicable to GetProductFamilyMembers.
     */
    public $ProductFinderConstraints;
    /**
     * @var boolean | If too many search results match the query, the TooManyMatchesFound tag is returned
     *            with a value of true, and a warning is returned.            If this occurs,
     * it may be a good idea to ask the user to specify more details to narrow the search
     *           (e.g., specify "My Favorite Movie" instead of "My").            For GetProductSearchResults,
     * only returned with compatibility level 387 and higher.            With lower compatibility
     * levels, ProductSearchResult.TooManyMatchesFound is returned instead. Returns false for
     * GetProductFamilyMembers.
     */
    public $TooManyMatchesFound;
    /**
     * @var int | The total quantity of products that match the query (within               the characteristic
     * set). This can exceed the actual number               of products returned in the current
     * virtual page. Always returned when AttributeSet is returned.               For GetProductSearchResults,
     * only returned with compatibility level 387 and higher.               For GetProductFamilyMembers,
     * only returned with compatibility level 415 and higher.               With lower compatibility
     * levels, ProductSearchResult.TotalProducts is returned instead.
     */
    public $TotalProducts;
    /**
     * @var string | Key you specified in ProductSearchID in the search request to distinguish between query
     * results. Primarily useful when conducting multiple searches in the same call. If no
     * ProductSearchID value was specified in the request, returns the array index of the search
     * result (beginning with 0). Not applicable to GetProductFamilyMembers.
     */
    public $ID;
    /**
     * @var string | Total quantity of products that match the search request (across all characteristic
     * sets). This value can exceed the actual quantity of products returned in the current
     * virtual page. Not applicable to GetProductFamilyMembers.
     */
    public $NumProducts;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ResponseAttributeSetType | A result containing a set of one or more product families. For GetProductSearchResults,
     * if QueryKeywords and multiple characteristic set IDs were specified in the request,
     * multiple AttributeSet objects can be returned. Each AttributeSet corresponds to a characteristic
     * set ID specified in the request. See the eBay Web Services guide for more information about
     * working with this data. For GetProductSearchResults, only returned with request version
     * 387 and higher. For GetProductFamilyMembers, only returned with request version 415
     * and higher.
     */
    public $AttributeSet;
    /**
     * @var boolean | If true, your application should attempt to display stock photos that are returned.
     * If false, your application should not attempt to display any stock photos that are returned.
     * This recommendation is useful for catalog data related to products like coins, where
     * stock photos are not applicable. An application with a graphical user interface can
     * use this flag to determine when to hide stock photo widgets for a set of search results.
     */
    public $DisplayStockPhotos;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setApproximatePages($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ApproximatePages = $val;
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
    public function setHasMore($val)
    {
        $this->HasMore = $val;
    }

    /**
     * @param ProductFamilyType $val
     * @throws \Exception
     */
    public function setProductFamilies($val)
    {
        $this->ProductFamilies = $val;
    }

    /**
     * @param ProductFinderConstraintType $val
     * @throws \Exception
     */
    public function setProductFinderConstraints($val)
    {
        $this->ProductFinderConstraints = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setTooManyMatchesFound($val)
    {
        $this->TooManyMatchesFound = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setTotalProducts($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->TotalProducts = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setID($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ID');
        }
        $this->ID = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setNumProducts($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for NumProducts');
        }
        $this->NumProducts = $val;
    }

    /**
     * @param ResponseAttributeSetType $val
     * @throws \Exception
     */
    public function setAttributeSet($val)
    {
        $this->AttributeSet = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setDisplayStockPhotos($val)
    {
        $this->DisplayStockPhotos = $val;
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
