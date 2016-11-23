<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSearchResultsExpressRequestType
 * <b>Please check our <a href="http://dev-forums.ebay.com/forum.jspa?forumID=1001">System
 * Announcements</a> for updates on current issues with GetSearchReultsExpress.</b><br> <br> Retrieves
 * brief details about active items that are listed on eBay Express, eBay catalog products
 * that have been used to pre-fill data in these items, and a histogram that shows the distribution
 * of items and catalog products across Express departments, aisles, and/or product types.<br> <br> This
 * call only returns Express data for the site associated with the site ID that you specify
 * in the request URL (for the SOAP API) or the X-EBAY-API-SITEID header (for the XML API).
 * For example, if you specify site ID 0, then data for Express US is returned. <br> <br> Currently,
 * this call is only supported for site ID 0 (Express US). <br> <br> The Sandbox does not support
 * GetSearchResultsExpress.<br> <br> You can configure the call to retrieve only the item data,
 * only the catalog product data, only the histogram, or any combination of these results.
 * By default, the call returns brief summaries of each.<br> <br> <b>Item Results:</b> For
 * each item returned (if any), the response includes a brief set of details, such as the item
 * price (including shipping). You can retrieve more or fewer details about each item by using
 * the ItemDetails field. To retrieve other details about a given item, use a call like GetSellerList
 * or GetItem.<br> <br> <b>Catalog Product Results:</b> For each eBay catalog product returned (if
 * any), the response includes a brief set of details, such as the minimum and maximum price
 * of listings that have been pre-filled based on that product. You can retrieve more or fewer
 * details about each product by using the ProductDetails field.<br> <br> <b>Histogram Results:</b>
 * Instead of grouping items by category, the Express search engine groups items into <i>domains</i>.
 * A domain is a set of items to which Express can apply a common set of search rules. Express supports
 * three kinds of domains: <i>Product types</i>, <i>aisles</i>, and <i>departments</i>, like
 * a typical department store. (The fact that we call these "domains" is not important to buyers
 * and sellers, but it can be helpful to understand the domain relationships when you are working
 * with the API.)<br> <br> Listings with similar properties are classified into product type
 * domains. For example, "DVDs & Movies" is a product type domain. Think of a product type
 * as a type of good or service that can be purchased and as a leaf domain (which cannot be
 * the parent of other domains).<br> <br> <span class="tablenote"><b>Note:</b> An Express product
 * type is not the same as an eBay catalog product. Some Express product types are associated with
 * eBay catalog products, but other Express product types are not.</span> <br> <br> When multiple
 * product types share a common theme, Express groups them into an aisle or a department. For
 * example, the Men's Jeans product type can be grouped with Men's Pants into a Men's Clothing
 * aisle. When multiple aisles share a common theme, Express groups them into departments.
 * For example, the Men's Clothing aisle can be grouped with a Men's Accessories aisle to form
 * an Apparel & Accessories department. If no groups make sense, a product type can stand alone
 * without being grouped. For example, "DVDs & Movies" would not be grouped with other product types
 * like Men's Jeans, so "DVDs & Movies" has no parent aisle or department. (From a user's perspective,
 * this product type is elevated to look like a department, but in the API it is still classified
 * as a product type.) Similarly, an aisle can stand alone without being grouped with other
 * aisles into a department.<br> <br> See the eBay Web Services guide link below for more information
 * about departments, aisles, and product types. </p> <p> This call returns a histogram that
 * shows the number of items and catalog products that were found in each department, aisle,
 * and/or product type that matches your search criteria.<br> <br> The domain names and groupings
 * are subject to change. They are determined by the Express search engine based on the items
 * that are currently listed on Express as well as historical buyer behavior. This means you
 * need to call GetSearchResultsExpress to determine the current domain names and their hierarchical
 * relationships.<br> <br> <span class="tablenote"><b>Note:</b> A domain is a search notion only.
 * That is, items are not stored in domains on eBay, and domains are not equivalent to eBay
 * categories (although Express may choose to organize and name some domains to match eBay
 * categories).</span> <br> <br> <b>Search Tips:</b></p> <ul> <li>Use either Query, ProductReferenceID,
 * or the ExternalProductID fields to search for specific items and/or products. See the descriptions
 * below for information about using these fields. (Only one of these query formats can be used
 * per request.)</li> <li>Use DepartmentName, AisleName, and/or ProductTypeName to browse or search
 * within a particular domain. You can also specify the value "Express" in DepartmentName to
 * retrieve a complete list of all available department, aisle, and product type names.</li> <li>Use
 * one or more filters like HighestPrice to refine the search.</li> <li>Use sort options like
 * ItemSort to control the order in which the results are returned.</li> <li>Use pagination
 * options like EntriesPerPage to control how many results to return at a time.</li> <li>Use
 * verbose controls like ItemDetails to specify the data to return within each result.</li> </ul> <p>The
 * item results, catalog product results, and histogram results do not provide references to
 * each other. That is, the items don't indicate which domains they were found in, and the
 * histogram doesn't specify which items were counted. However, you can infer these relationships
 * by modifying your search parameters. For example, once you determine which domains match
 * your query, you can call GetSearchResultsExpress again to browse or search each of those
 * domains to find out which items they contain. </p> <p>Applicable to the <a href="http://developer.ebay.com/developercenter/rest/"
 * target="_blank">REST API</a>.<br> <br> <b>Please check our <a href="http://dev-forums.ebay.com/forum.jspa?forumID=1001">System
 * Announcements</a> for updates on current issues with GetSearchReultsExpress.</b><br> <br>
 */
class GetSearchResultsExpressRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | One or more keywords to search for when using the Suggested Attributes engine. Required
     * when SuggestedAttributes is specified as the recommendation engine (including when no
     * recommendation engines are specified). Only the listing title is searched. The words
     * "and" and "or" are treated like any other word. Blank searches are not allowed (and
     * result in a warning).
     */
    public $Query;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductCodeType | The combination of ExternalProductIDType and ExternalProductIDValue create a query that
     * only retrieves items that were listed with Pre-filled Item Information in categories
     * that support ISBN or UPC codes. ExternalProductIDType identifies whether the search
     * is by ISBN or UPC. If specified, also specify the ISBN or UPC code in ExternalProductIDValue.<br> <br> The
     * Query, ProductReferenceID, and ExternalProductID query formats are mutually exclusive.
     * That is, they cannot be used together in the same request. At least one of Query, ProductReferenceID,
     * ExternalProductIDValue (and Type), SellerID, DepartmentName, AisleName, or ProductTypeName
     * is required.<br> <br> <b>Note:</b> The ExternalProductID type and value structure is flat
     * to support REST API requests in the future.
     */
    public $ExternalProductIDType;
    /**
     * @var string | An ISBN or UPC code (depending on ExternalProductIDType) for the eBay catalog product
     * that you are searching for. Only valid when ExternalProductIDType is specified.
     */
    public $ExternalProductIDValue;
    /**
     * @var long | The global reference ID for the eBay catalog product. Only returned when ProductDetails
     * is set to Fine.<br> <br> <span class="tablenote"><b>Note:</b> This value is not the
     * same as the ProductID used in AddItem and related calls. A ProductID represents a particular
     * version of a catalog product, which is associated with a particular set of Item Specifics
     * and other details. A ProductReferenceID is a more generic or global reference to a catalog
     * product, which is useful for buy-side searching. One ProductReferenceID can be associated
     * with multiple ProductIDs.</span>
     */
    public $ProductReferenceID;
    /**
     * @var string | A department is a grouping of aisles and/or product types that share a common theme.
     * This filter limits the search to the specified Express department. If not specified,
     * this filter is ignored by the search engine.<br> <br> You can specify the value "Express"
     * (without quotes) as the department name to retrieve all departments on Express. With
     * this use case, the ItemArray and ProductArray nodes aren't returned. The valid department names
     * are returned in the Histogram.Department.DomainDetails.Name fields. When DepartmentName=Express,
     * you can only specify HistogramSort and/or HistogramDetails. Set HistogramDetail to Fine
     * to also retrieve all aisles and product types. Do not specify ItemDetails or ProductDetails
     * at all in the request. (Setting the values to None will return an error). Also do not
     * specify any other query, pagination, price, or sorting fields in the request.<br> <br> The
     * Query, ProductReferenceID, and ExternalProductID query formats are mutually exclusive.
     * That is, they cannot be used together in the same request. At least one of Query, ProductReferenceID,
     * ExternalProductIDValue (and Type), SellerID, DepartmentName, AisleName, or ProductTypeName
     * is required.
     */
    public $DepartmentName;
    /**
     * @var string | An aisle is a grouping of product types that share a common theme. This filter limits
     * the search to the specified Express aisle. If not specified, this filter is ignored
     * by the search engine.<br> <br> See DepartmentName for information about how to retrieve
     * all available department, aisle, and product type names. The valid aisle names are returned
     * in the Histogram.Department.Aisle.DomainDetails.Name fields.<br> <br> At least one of
     * Query, ProductReferenceID, ExternalProductIDValue (and Type), SellerID, DepartmentName,
     * AisleName, or ProductTypeName is required. Optionally, both DepartmentName and AisleName
     * can be specified in the same request. In this case, the search engine treats the combination
     * as a fully qualified aisle name (and it returns an error if the combination is invalid).
     */
    public $AisleName;
    /**
     * @var string | A product type is a type of good or service that can be purchased. This filter limits
     * the search to the specified Express product type. If not specified, this filter is ignored
     * by the search engine.<br> <br> <b>Note:</b> Express product types are not eBay catalog products.
     * This field does not support eBay catalog product names or IDs.<br> <br> See DepartmentName
     * for information about how to retrieve all available department, aisle, and product type
     * names. The valid product type names are returned in Histogram.Department.Aisle.ProductType.DomainDetails.Name fields.<br> <br> Optionally,
     * DepartmentName and/or AisleName can be specified in the same request with ProductTypeName.
     * In this case, the search engine treats the combination as a fully qualified product
     * type name (and it returns an error if the combination is invalid).
     */
    public $ProductTypeName;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressHistogramSortCodeType | Specifies the order of the data in the histogram (if any). Controls the way the histogram
     * data is organized in the response (not the details to return). If not specified, the
     * default sort order is ItemCount.<br> <br> This option has no effect on how item or product
     * results are sorted. Histogram, item, and product results are sorted independently.<br> <br> Note:
     * If you want to sort the results by criteria that eBay has not defined, retrieve the
     * desired histogram data and then sort the results locally in your application.
     */
    public $HistogramSort;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressItemSortCodeType | Specifies the order in which listings (if any) are returned in the result set. If not
     * specified, the items are sorted by relevance (as determined by eBay). If you choose
     * to sort by total cost, a PostalCode must also be specified (so that eBay can calculate
     * the shipping cost as part of the total cost for each item).<br> <br> Controls the way
     * the data is organized in the response (not the details to return).<br> <br> This option
     * has no effect on how histogram or product results are sorted. Histogram, item, and product
     * results are sorted independently.<br> <br> Note: If you want to sort the results by
     * criteria that eBay has not defined, retrieve all available pages and then sort the results
     * locally in your application.
     */
    public $ItemSort;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressProductSortCodeType | Specifies the order in which Express products are returned in a result set. If not specified,
     * the products are sorted by sales rank (bestselling first).<br> <br> This option has
     * no effect on how histogram or item results are sorted. Histogram, item, and product
     * results are sorted independently.<br> <br> Note: If you want to sort the results by
     * criteria that eBay has not defined, retrieve all available pages and then sort the results
     * locally in your application.<br> <br> Controls the way the data is organized in the
     * response (not the details to return).
     */
    public $ProductSort;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | A filter that limits the results to items with a SellingStatus.CurrentPrice value lower
     * than this value. For example, if you specify 10.01, the results will include items with
     * a CurrentPrice of 10.00 or lower. Use without LowestPrice to specify a maximum price,
     * or use with LowestPrice to define a price range that bounds the results. Must be higher
     * than LowestPrice if both are specified. If not specified, no maximum price filter is
     * applied to the query.<br> <br> You can specify any double value, but in practice the
     * highest price of any item on Express is USD 10000 for Express US and (in the future)
     * EUR 10000 for Express Germany. If you specify a value of 0.0 or lower, this filter is ignored.
     * See "Data Types" in the eBay Web Services Guide for information about specifying double
     * values.<br> <br> Does not control the order in which items are returned. (To sort by
     * highest total price, use ItemSort.)
     */
    public $HighestPrice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | A filter that limits the results to items with a SellingStatus.CurrentPrice value equal
     * to or higher than this value. For example, if you specify 6.00, the results will include
     * items with a CurrentPrice of 6.00 or higher. If specified, HighestPrice must also be specified;
     * otherwise, the lowest price filter is ignored. Must be lower than HighestPrice. If not
     * specified or if the value is less than 0.0, no minimum price filter is applied to the
     * query.<br> <br> You can specify any double value, but in practice the highest price
     * of any item on Express is USD 10000 for Express US and (in the future) EUR 10000 for
     * Express Germany. See "Data Types" in the eBay Web Services Guide for information about
     * specifying double values .<br> <br> Does not control the order in which items are returned.
     * (To sort by lowest total price, use ItemSort.)
     */
    public $LowestPrice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ConditionSelectionCodeType | The item condition, if any. On Express US, this is often a value like "New", "Used",
     * or "Refurbished", but the exact value can vary based on the Item Condition data that
     * the seller used in the listing.<br> For example, in some eBay categories, the condition
     * can have a value like "New: With Tags" instead. (At the time of this writing, GetSearchResultsExpress
     * mapped all conditions to "New" and "Used". However, this could change in the future.) By
     * default, only new items (or the equivalent) are returned from GetSearchResultsExpress. Use
     * Condition in the request to include used and refurbished items (or the equivalent) as
     * well. Only returned when ItemDetails is set to Fine.<br> <br> Not applicable to calls
     * that browse or search items on the main eBay site.
     */
    public $Condition;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | The eBay ID of the seller who listed the item. <br><br> Starting Jan 2007, when a bidder's
     * user info is made anonymous, this tag will be returned with the anonymous value "Seller
     * X", where X indicates where the seller falls in the sequence of sellers that the user
     * has purchased items from. For example, if the seller is the third seller that the user
     * has purchased items from, the value "Seller 3" is returned.
     */
    public $SellerID;
    /**
     * @var string | The postal code to use as the basis for the proximity search.
     */
    public $PostalCode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressDetailLevelCodeType | Controls the amount of statistical data to return in the response. If not specified,
     * the default is Coarse.<br> <br> This setting is not a filter that limits the search;
     * it only configures how much detail to retrieve in the resulting histogram. This setting
     * has no effect on the product or item details.
     */
    public $HistogramDetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressDetailLevelCodeType | Selects the set of fields to retrieve for each catalog product that matches the query.
     * If not specified, the default is Coarse.<br> <br> This setting is not a filter that
     * limits the search; it only configures which fields to retrieve for each product found.
     * This setting has no effect on the histogram or item details.
     */
    public $ProductDetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressDetailLevelCodeType | Selects the set of fields to retrieve for each item that matches the query. If not specified,
     * the default is Coarse.<br> <br> This setting is not a filter that limits the search;
     * it only configures which fields to retrieve for each item found. This setting has no
     * effect on the histogram or product details.
     */
    public $ItemDetails;
    /**
     * @var int | Specifies the maximum number of entries to return in a single call. If the number of
     * entries that can be returned is less than the value in EntriesPerPage, then the lower
     * number is returned. For most calls, the max is 200 and the default is 25. For GetUserDisputes,
     * the value is hard-coded at 200, and any input is ignored. See the documentation for
     * other individual calls to determine the correct max and default values. For GetOrders,
     * not applicable to eBay.com (for GetOrders, applicable to Half.com).
     */
    public $EntriesPerPage;
    /**
     * @var int | Specifies the number of the page of data to return in the current call. Default is 1
     * for most calls. For some calls, the default is 0. Specify a positive value equal to
     * or lower than the number of pages available (which you determine by examining the results
     * of your initial request). See the documentation for other individual calls to determine
     * the correct default value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable
     * to Half.com).
     */
    public $PageNumber;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AffiliateTrackingDetailsType | Container for affiliate tags for the REST API and for the unified schema API. If you
     * use affiliate tags, it is possible to get affiliate commissions based on calls made
     * by your application. (See the <a href="http://affiliates.ebay.com/" target="_blank">eBay
     * Affiliate Program</a> for information about commissions.) Affiliate tags enable the
     * tracking of user activity. You can use child tags of AffiliateTrackingDetails if you
     * want call output to include a string, in ItemArray.Item.ListingDetails.ViewItemURL,
     * that includes affiliate tracking information. For GetSearchResultsExpress, the ViewItemURL
     * field is returned only if you specify AffiliateTrackingDetails in the request.
     */
    public $AffiliateTrackingDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQuery($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Query');
        }
        $this->Query = (int)$val;
    }

    /**
     * @param ExternalProductCodeType $val
     * @throws Exception
     */
    public function setExternalProductIDType($val)
    {
        $this->ExternalProductIDType = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExternalProductIDValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExternalProductIDValue');
        }
        $this->ExternalProductIDValue = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setProductReferenceID($val)
    {
        $this->ProductReferenceID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDepartmentName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DepartmentName');
        }
        $this->DepartmentName = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAisleName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AisleName');
        }
        $this->AisleName = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductTypeName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductTypeName');
        }
        $this->ProductTypeName = (int)$val;
    }

    /**
     * @param ExpressHistogramSortCodeType $val
     * @throws Exception
     */
    public function setHistogramSort($val)
    {
        $this->HistogramSort = (int)$val;
    }

    /**
     * @param ExpressItemSortCodeType $val
     * @throws Exception
     */
    public function setItemSort($val)
    {
        $this->ItemSort = (int)$val;
    }

    /**
     * @param ExpressProductSortCodeType $val
     * @throws Exception
     */
    public function setProductSort($val)
    {
        $this->ProductSort = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setHighestPrice($val)
    {
        $this->HighestPrice = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setLowestPrice($val)
    {
        $this->LowestPrice = (int)$val;
    }

    /**
     * @param ConditionSelectionCodeType $val
     * @throws Exception
     */
    public function setCondition($val)
    {
        $this->Condition = (int)$val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setSellerID($val)
    {
        $this->SellerID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = (int)$val;
    }

    /**
     * @param ExpressDetailLevelCodeType $val
     * @throws Exception
     */
    public function setHistogramDetails($val)
    {
        $this->HistogramDetails = (int)$val;
    }

    /**
     * @param ExpressDetailLevelCodeType $val
     * @throws Exception
     */
    public function setProductDetails($val)
    {
        $this->ProductDetails = (int)$val;
    }

    /**
     * @param ExpressDetailLevelCodeType $val
     * @throws Exception
     */
    public function setItemDetails($val)
    {
        $this->ItemDetails = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setEntriesPerPage($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->EntriesPerPage = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->PageNumber = (int)$val;
    }

    /**
     * @param AffiliateTrackingDetailsType $val
     * @throws Exception
     */
    public function setAffiliateTrackingDetails($val)
    {
        $this->AffiliateTrackingDetails = (int)$val;
    }
}
