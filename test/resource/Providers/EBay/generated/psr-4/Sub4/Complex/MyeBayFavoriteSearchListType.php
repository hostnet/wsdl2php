<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyeBayFavoriteSearchListType
 * A list of favorite searches a user has saved on the My eBay page.
 */
class MyeBayFavoriteSearchListType
{
    /**
     * @var int | The total number of My eBay Second Chance Offers available.
     */
    public $totalavailable;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBayFavoriteSearchType | A favorite search the user has saved, with a name and a search query.
     */
    public $favoritesearch;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalAvailable($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->totalavailable = (int)$val;
    }

    /**
     * @param MyeBayFavoriteSearchType $val
     * @throws Exception
     */
    public function setFavoriteSearch($val)
    {
        $this->favoritesearch = (int)$val;
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
