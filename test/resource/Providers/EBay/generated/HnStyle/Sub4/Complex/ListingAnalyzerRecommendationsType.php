<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingAnalyzerRecommendationsType
 * Contains results returned from the Listing Analyzer recommendation engine.
 */
class ListingAnalyzerRecommendationsType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingTipArrayType | A collection of tips returned from the Listing Analyzer recommendation engine.
     */
    public $listingtiparray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
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
