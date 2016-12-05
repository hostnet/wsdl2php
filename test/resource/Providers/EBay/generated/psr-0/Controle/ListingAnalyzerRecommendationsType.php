<?php

namespace Controle;

/**
 * ListingAnalyzerRecommendationsType
 * Contains results returned from the Listing Analyzer recommendation engine.
 */
class ListingAnalyzerRecommendationsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ListingTipArrayType | A collection of tips returned from the Listing Analyzer recommendation engine.
	 */
	public $ListingTipArray;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ListingTipArrayType $val
	 * @throws Exception
	 */
	public function setListingTipArray($val)
	{
        $this->ListingTipArray = (ListingTipArrayType)$val;
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
