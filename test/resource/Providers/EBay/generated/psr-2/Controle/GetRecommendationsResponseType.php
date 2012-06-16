<?php

namespace Controle;
/**
 * GetRecommendationsResponseType
 * GetRecommendations returns recommended changes or opportunities for improvement related
 * to listing data that was passed in the request.
 */
class GetRecommendationsResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\ListingAnalyzerRecommendationsType | Contains tips returned from the Listing Analyzer recommendation engine,
     * if this engine was specified in the request (or if no engine was specified).
     */
    public $ListingAnalyzerRecommendations;
    /**
     * @var \Controle\SIFFTASRecommendationsType | Reserved for future use.
     */
    public $SIFFTASRecommendations;
    /**
     * @var \Controle\PricingRecommendationsType | Contains pricing data returned from the Product Pricing engine,             if this
     * engine was specified in the request (or if no engine was specified).
     */
    public $PricingRecommendations;
    /**
     * @var \Controle\AttributeRecommendationsType | Contains attribute suggestions returned from the Suggested Attributes engine, if this
     * engine was specified in the request. The results include suggested attributes and values
     * based on the primary category and a string you specify in the Query field. Suggestions
     * may only be returned when the Suggested Attributes engine is specified alone. If you
     * request recommendations by using multiple engines, suggested attribute data might not
     * be returned. If attributes are returned with multiple values, the values are returned
     * in order of rank (i.e., the value that best meets eBay's recommendation criteria is
     * returned first).
     */
    public $AttributeRecommendations;
    /**
     * @var \Controle\ProductRecommendationsType | Contains zero or more product titles and IDs returned from the Suggested Attributes
     * engine, if this engine was specified in the request (or if no engine was specified). If
     * applicable, use one of the suggested product IDs to list the item with Pre-filled Item
     * Information.
     */
    public $ProductRecommendations;
}

