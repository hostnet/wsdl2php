<?php

namespace Controle\sub1\sub2;

/**
 * ListingAnalyzerRecommendationsType
 * Contains results returned from the Listing Analyzer recommendation engine.
 */
class ListingAnalyzerRecommendationsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\ListingTipArrayType | A collection of tips returned from the Listing Analyzer recommendation engine.
	 */
	public $ListingTipArray;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ListingTipArrayType $val
	 * @throws \Exception
	 */
	public function setListingTipArray($val)
	{
        $this->ListingTipArray = $val;
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
