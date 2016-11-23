<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingAnalyzerRecommendationsType
 * Contains results returned from the Listing Analyzer recommendation engine.
 */
class ListingAnalyzerRecommendationsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingTipArrayType | A collection of tips returned from the Listing Analyzer recommendation engine.
     */
    public $ListingTipArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param ListingTipArrayType $val
     * @throws Exception
     */
    public function setListingTipArray($val)
    {
        $this->ListingTipArray = (int)$val;
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
