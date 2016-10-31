<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetRecommendationsRequestType
 * Invokes one or more specified recommendation engines. These engines can examine potential
 * item data that a seller has specified and return recommended changes or opportunities for
 * improvement.
 */
class GetRecommendationsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingFlowCodeType | The listing flow for which the seller is seeking Listing Analyzer recommendations. Not
     * applicable to results from other recommendation engines (i.e., the Suggested Attributes
     * engine or the Product Pricing engine). The default flow is AddItem.
     */
    public $listingflow;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $item;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
     * item. All Half.com items are listed with Pre-filled Item Information.
     */
    public $externalproductid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ModifiedFieldType | Applicable when the ListingFlow is ReviseItem or RelistItem. Array of item properties
     * that are being changed. In release 439 and later, ModifiedFields is no longer required
     * to revise field values, but it is still supported for backward compatibility. See the
     * Developer's Guide for rules on adding, modifying, and removing values when revising
     * or relisting items.
     */
    public $modifiedfields;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RecommendationEngineCodeType | A recommendation engine to run. If no engines are specified, all available recommendation
     * engines will run. Some engines require additional fields, such as Item.PrimaryCategory.CategoryID,
     * to be specified. If the ProductPricing engine is specified but Item.ProductListingDetails
     * is not specified, no Product Pricing engine results are returned.
     */
    public $recommendationengine;
    /**
     * @var string | One or more keywords to search for when using the Suggested Attributes engine. Required
     * when SuggestedAttributes is specified as the recommendation engine (including when no
     * recommendation engines are specified). Only the listing title is searched. The words
     * "and" and "or" are treated like any other word. Blank searches are not allowed (and
     * result in a warning).
     */
    public $query;
    /**
     * @param ListingFlowCodeType $val
     * @throws Exception
     */
    public function setListingFlow($val)
    {
        $this->listingflow = (int)$val;
    }

    /**
     * @param ItemType $val
     * @throws Exception
     */
    public function setItem($val)
    {
        $this->item = (int)$val;
    }

    /**
     * @param ExternalProductIDType $val
     * @throws Exception
     */
    public function setExternalProductID($val)
    {
        $this->externalproductid = (int)$val;
    }

    /**
     * @param ModifiedFieldType $val
     * @throws Exception
     */
    public function setModifiedFields($val)
    {
        $this->modifiedfields = (int)$val;
    }

    /**
     * @param RecommendationEngineCodeType $val
     * @throws Exception
     */
    public function setRecommendationEngine($val)
    {
        $this->recommendationengine = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQuery($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Query');
        }
        $this->query = (int)$val;
    }
}
