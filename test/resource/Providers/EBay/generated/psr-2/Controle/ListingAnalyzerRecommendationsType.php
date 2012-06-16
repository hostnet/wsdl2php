<?php

namespace Controle;
/**
 * ListingAnalyzerRecommendationsType
 * Contains results returned from the Listing Analyzer recommendation engine.
 */
class ListingAnalyzerRecommendationsType {
    /**
     * @var \Controle\ListingTipArrayType | A collection of tips returned from the Listing Analyzer recommendation engine.
     */
    public $ListingTipArray;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

