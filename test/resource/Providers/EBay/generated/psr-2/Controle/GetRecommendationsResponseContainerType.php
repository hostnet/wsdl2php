<?php

namespace Controle;

/**
 * GetRecommendationsResponseContainerType
 * Returns recommended changes or opportunities for improvement related to listing data that
 * was passed in a GetItemRecommendations request.
 */
class GetRecommendationsResponseContainerType
{
    /**
     * @var \Controle\ListingAnalyzerRecommendationsType | Contains tips returned from the Listing Analyzer recommendation engine,
     * if this engine was specified in the request (or if no engine was specified).
     */
    public $listinganalyzerrecommendations;
    /**
     * @var \Controle\SIFFTASRecommendationsType | Reserved for future use.
     */
    public $sifftasrecommendations;
    /**
     * @var \Controle\PricingRecommendationsType | Contains pricing data returned from the Product Pricing engine,             if this
     * engine was specified in the request (or if no engine was specified).
     */
    public $pricingrecommendations;
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
    public $attributerecommendations;
    /**
     * @var \Controle\ProductRecommendationsType | Contains zero or more product titles and IDs returned from the Suggested Attributes
     * engine, if this engine was specified in the request (or if no engine was specified). If
     * applicable, use one of the suggested product IDs to list the item with Pre-filled Item
     * Information.
     */
    public $productrecommendations;
    /**
     * @var string | Unique key to distinguish between recommendations for each item.              Matches
     * a correlation ID you defined in the request, if any.
     */
    public $correlationid;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param ListingAnalyzerRecommendationsType $val
     * @throws Exception
     */
    public function setListingAnalyzerRecommendations($val)
    {
        $this->listinganalyzerrecommendations = (int)$val;
    }

    /**
     * @param SIFFTASRecommendationsType $val
     * @throws Exception
     */
    public function setSIFFTASRecommendations($val)
    {
        $this->sifftasrecommendations = (int)$val;
    }

    /**
     * @param PricingRecommendationsType $val
     * @throws Exception
     */
    public function setPricingRecommendations($val)
    {
        $this->pricingrecommendations = (int)$val;
    }

    /**
     * @param AttributeRecommendationsType $val
     * @throws Exception
     */
    public function setAttributeRecommendations($val)
    {
        $this->attributerecommendations = (int)$val;
    }

    /**
     * @param ProductRecommendationsType $val
     * @throws Exception
     */
    public function setProductRecommendations($val)
    {
        $this->productrecommendations = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCorrelationID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CorrelationID');
        }
        $this->correlationid = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
