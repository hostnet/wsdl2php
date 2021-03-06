<?php

namespace Controle\sub1\sub2;

/**
 * GetRecommendationsResponseType
 * GetRecommendations returns recommended changes or opportunities for improvement related
 * to listing data that was passed in the request.
 */
class GetRecommendationsResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ListingAnalyzerRecommendationsType | Contains tips returned from the Listing Analyzer recommendation engine,             if
	 * this engine was specified in the request (or if no engine was specified).
	 */
	public $ListingAnalyzerRecommendations;
	/**
	 * @var \Controle\sub1\sub2\SIFFTASRecommendationsType | Reserved for future use.
	 */
	public $SIFFTASRecommendations;
	/**
	 * @var \Controle\sub1\sub2\PricingRecommendationsType | Contains pricing data returned from the Product Pricing engine,             if this engine
	 * was specified in the request (or if no engine was specified).
	 */
	public $PricingRecommendations;
	/**
	 * @var \Controle\sub1\sub2\AttributeRecommendationsType | Contains attribute suggestions returned from the Suggested Attributes engine, if this engine
	 * was specified in the request. The results include suggested attributes and values based
	 * on the primary category and a string you specify in the Query field. Suggestions may only
	 * be returned when the Suggested Attributes engine is specified alone. If you request recommendations
	 * by using multiple engines, suggested attribute data might not be returned. If attributes
	 * are returned with multiple values, the values are returned in order of rank (i.e., the
	 * value that best meets eBay's recommendation criteria is returned first).
	 */
	public $AttributeRecommendations;
	/**
	 * @var \Controle\sub1\sub2\ProductRecommendationsType | Contains zero or more product titles and IDs returned from the Suggested Attributes engine,
	 * if this engine was specified in the request (or if no engine was specified). If applicable,
	 * use one of the suggested product IDs to list the item with Pre-filled Item Information.
	 */
	public $ProductRecommendations;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ListingAnalyzerRecommendationsType $val
	 * @throws \Exception
	 */
	public function setListingAnalyzerRecommendations($val)
	{
        $this->ListingAnalyzerRecommendations = $val;
	}

	/**
	 * @param SIFFTASRecommendationsType $val
	 * @throws \Exception
	 */
	public function setSIFFTASRecommendations($val)
	{
        $this->SIFFTASRecommendations = $val;
	}

	/**
	 * @param PricingRecommendationsType $val
	 * @throws \Exception
	 */
	public function setPricingRecommendations($val)
	{
        $this->PricingRecommendations = $val;
	}

	/**
	 * @param AttributeRecommendationsType $val
	 * @throws \Exception
	 */
	public function setAttributeRecommendations($val)
	{
        $this->AttributeRecommendations = $val;
	}

	/**
	 * @param ProductRecommendationsType $val
	 * @throws \Exception
	 */
	public function setProductRecommendations($val)
	{
        $this->ProductRecommendations = $val;
	}
}
