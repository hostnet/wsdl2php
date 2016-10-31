<?php

namespace Controle\sub1\sub2;

/**
 * ListingAnalyzerRecommendationsType
 * Contains results returned from the Listing Analyzer recommendation engine.
 */
class ListingAnalyzerRecommendationsType
{
	/**
	 * @var \Controle\sub1\sub2\ListingTipArrayType | A collection of tips returned from the Listing Analyzer recommendation engine.
	 */
	public $listingtiparray;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param ListingTipArrayType $val
	 * @throws Exception
	 */
	public function setListingTipArray($val)
	{
        $this->listingtiparray = (int)$val;
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
