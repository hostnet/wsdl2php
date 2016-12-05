<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SearchResultItemArrayType
 * Container for a list of search result items, such as returned by        GetSearchResults.
 * Will contain zero, one, or multiple        SearchResultItemType items, each of which represents
 * one item listing        that was found by the search.        Output only.
 */
class SearchResultItemArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchResultItemType | Contains data for an item listing found by a search.            Output only.
     */
    public $SearchResultItem;
    // @codingStandardsIgnoreEnd

    /**
     * @param SearchResultItemType $val
     * @throws Exception
     */
    public function setSearchResultItem($val)
    {
        $this->SearchResultItem = ()$val;
    }
}
