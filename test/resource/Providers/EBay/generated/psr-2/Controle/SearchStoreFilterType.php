<?php

namespace Controle;
/**
 * SearchStoreFilterType
 * One of the data filters used when searching for items using        GetSearchResults. Allows
 * filtering based on an item's appearing in a        specific eBay Store.
 */
class SearchStoreFilterType {
    /**
     * @var string | The name of the seller's eBay Store.
     */
    public $StoreName;
    /**
     * @var \Controle\StoreSearchCodeType | Specifies the type of store search used in the filtering: one eBay Store (name
     *       specified in StoreName) or all eBay stores, and also by listing type. Possible
     *            values are enumerated in the StoreSearchCodeType code list.
     */
    public $StoreSearch;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setStoreName($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for StoreName');
        $this->StoreName = (int)$val;
    }

    /**
     * @param StoreSearchCodeType $val
     * @throws Exception
     */
    public function setStoreSearch($val) {
        
        $this->StoreSearch = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

