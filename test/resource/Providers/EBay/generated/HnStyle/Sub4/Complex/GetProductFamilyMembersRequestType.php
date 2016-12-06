<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetProductFamilyMembersRequestType
 * GetProductFamilyMembers is intended to be used combination with GetProductSearchResults. If
 * a search result returned from GetProductSearchResults does not return all product versions
 * in a family, and if the user wants to see more versions (editions) of the product, you can
 * use GetProductFamilyMembers to retrieve all versions of the product. That is, if GetProductSearchResultsonly
 * returns the product family header (ParentProduct), use this call to zoom in on a particular
 * family of product versions. (This situation usually occurs when you call GetProductSearchResults
 * and more more matches are found than the MaxChildrenPerFamily value you specified.)<br> <br> The
 * structure of tGetProductFamilyMembers is similar to that of GetProductSearchResults. Instead
 * of passing in a query, you pass in a product ID. This product ID is used to find all the
 * members of the product family that the specified product is a member of. The results are
 * compatible with the results from GetProductSearchResults, so similar application logic can
 * be used to handle both requests and responses. This call supports batch requests. This means
 * you can retrieve products in multiple families by using a single request. To perform a batch
 * request, pass an array of ProductSearch objects in the call.<br> <br> For each ProductSearch
 * object, GetProductFamilyMembers returns a list of all the products in the specified product
 * family. Each product is represented as a list of attributes (Item Specifics) plus other
 * identifying information, such as a product ID and a stock photo.<br> <br> Once the user
 * selects a product from the results, pass its ID in a GetProductSellingPages request to retrieve
 * more detailed information about the product, including a set of optional Item Specifics
 * that the seller can use in addition to the pre-filled Item Specifics (see GetProductSellingPages).
 * <br> <br> To use this data in a listing, pass the product ID and the optional Item Specifics in
 * the seller's listing request (AddItem).
 */
class GetProductFamilyMembersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProductSearchType | Specifies the keywords or attributes that make up the product query,
     *   with pagination instructions. ProductSearch is a required input. To search for multiple
     * different products at the same time (i.e., to perform a batch search), pass in multiple
     * ProductSearch properties.
     */
    public $ProductSearch;
    // @codingStandardsIgnoreEnd

    /**
     * @param ProductSearchType $val
     * @throws Exception
     */
    public function setProductSearch($val)
    {
        $this->ProductSearch = $val;
    }
}
