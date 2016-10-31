<?php

namespace Controle;
/**
 * ExpansionArrayType
 * Container for items returned with an expanded search.
 */
class ExpansionArrayType {
    /**
     * @var \Controle\SearchResultItemType | Item that is the result of an expanded search. If, in a GetSearchResults request, you
     * specify true for ExpandSearch, the search is expanded when a small result set is returned.
     * For example, on the US site (site ID 0), if a search would normally result in fewer
     * than 10 items, then the search results are expanded. Specifically, the search returns
     * items (if there are matches) in one or more of the following containers: InternationalExpansionArray
     * (for items available from international sellers), FilterRemovedExpansionArray (items
     * that would be returned if filters such as PriceRangeFilter are removed), StoreExpansionArray
     * (for items listed in the Store Inventory Format), and AllCategoriesExpansionArray (for
     * items available if category filters are removed). The maximum number of items returned
     * in each container is 6 to 10.
     */
    public $ExpansionItem;
    /**
     * @var int | The total number of My eBay Second Chance Offers available.
     */
    public $TotalAvailable;
    /**
     * @param SearchResultItemType $val
     * @throws Exception
     */
    public function setExpansionItem($val) {
        
        $this->ExpansionItem = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalAvailable($val) {
        if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
        $this->TotalAvailable = (int)$val;
    }

}

