<?php

namespace Controle;

/**
 * GetRecommendationsRequestContainerType
 * Specifies the data for a single item and configures the recommendation engines to use when
 * processing the item with GetItemRecommendations.
 */
class GetRecommendationsRequestContainerType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\ListingFlowCodeType | The listing flow for which the seller is seeking Listing Analyzer recommendations. Not
     * applicable to results from other recommendation engines (i.e., the Suggested Attributes
     * engine or the Product Pricing engine). The default flow is AddItem.
     */
    public $ListingFlow;
    /**
     * @var \Controle\ItemType | Information about the item that spawned the transaction. It is a purchase from this
     * item's listing that the transaction represents. To remove a property from an item, specify
     * it in ModifyType as a changed property, but do not give it a value in Item. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Item;
    /**
     * @var \Controle\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
     * item. All Half.com items are listed with Pre-filled Item Information.
     */
    public $ExternalProductID;
    /**
     * @var \Controle\ModifiedFieldType | Applicable when the ListingFlow is ReviseItem or RelistItem. Array of item properties
     * that are being changed. In release 439 and later, ModifiedFields is no longer required
     * to revise field values, but it is still supported for backward compatibility. See the
     * Developer's Guide for rules on adding, modifying, and removing values when revising
     * or relisting items.
     */
    public $ModifiedFields;
    /**
     * @var \Controle\RecommendationEngineCodeType | A recommendation engine to run. If no engines are specified, all available recommendation
     * engines will run. Some engines require additional fields, such as Item.PrimaryCategory.CategoryID,
     * to be specified. If the ProductPricing engine is specified but Item.ProductListingDetails
     * is not specified, no Product Pricing engine results are returned.
     */
    public $RecommendationEngine;
    /**
     * @var string | One or more keywords to search for when using the Suggested Attributes engine. Required
     * when SuggestedAttributes is specified as the recommendation engine (including when no
     * recommendation engines are specified). Only the listing title is searched. The words
     * "and" and "or" are treated like any other word. Blank searches are not allowed (and
     * result in a warning).
     */
    public $Query;
    /**
     * @var string | Unique key to distinguish between recommendations for each item.              Matches
     * a correlation ID you defined in the request, if any.
     */
    public $CorrelationID;
    /**
     * @var string | Specifies the name of the field to remove from a listing. Applicable when the ListingFlow
     * is ReviseItem or RelistItem. See the Developer's Guide for rules on removing values
     * when revising or relisting items. DeletedField accepts the following values for removing fields:
     * item.pictureDetails.pictureURL, item.pictureDetails.galleryURL, item.listingDesigner.themeID,
     * item.listingDesigner.layoutID, item.payPalEmailAddress, item.proximitySearchDetails.postalCode, item.shippingDetails.paymentInstructions,
     * and item.SKU. When the ListingFlow is RelistItem, the following values for DeletedField
     * are also allowed: item.charity, item.secondaryCategory, and item.subTitle. DeletedField
     * is case sensitive. The request can contain zero, one, or many instances of DeletedField.
     */
    public $DeletedField;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param ListingFlowCodeType $val
     * @throws \Exception
     */
    public function setListingFlow($val)
    {
        $this->ListingFlow = $val;
    }

    /**
     * @param ItemType $val
     * @throws \Exception
     */
    public function setItem($val)
    {
        $this->Item = $val;
    }

    /**
     * @param ExternalProductIDType $val
     * @throws \Exception
     */
    public function setExternalProductID($val)
    {
        $this->ExternalProductID = $val;
    }

    /**
     * @param ModifiedFieldType $val
     * @throws \Exception
     */
    public function setModifiedFields($val)
    {
        $this->ModifiedFields = $val;
    }

    /**
     * @param RecommendationEngineCodeType $val
     * @throws \Exception
     */
    public function setRecommendationEngine($val)
    {
        $this->RecommendationEngine = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setQuery($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Query');
        }
        $this->Query = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCorrelationID($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CorrelationID');
        }
        $this->CorrelationID = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDeletedField($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DeletedField');
        }
        $this->DeletedField = $val;
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
