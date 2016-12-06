<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyeBayFavoriteSellerListType
 * A list of favorite sellers the user has saved on the My eBay page.
 */
class MyeBayFavoriteSellerListType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | The total number of My eBay Second Chance Offers available.
     */
    public $TotalAvailable;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyeBayFavoriteSellerType | A favorite seller the user has saved, with a user ID and store name.
     */
    public $FavoriteSeller;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalAvailable($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalAvailable = $val;
    }

    /**
     * @param MyeBayFavoriteSellerType $val
     * @throws Exception
     */
    public function setFavoriteSeller($val)
    {
        $this->FavoriteSeller = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
