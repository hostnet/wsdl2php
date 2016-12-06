<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerSearchDetails
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $SellerNickname;
    /**
     * @var string
     */
    public $StoreId;
    /**
     * @var string
     */
    public $StoreName;
    /**
     * @var string
     */
    public $NumberOfOpenListings;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingProductInfo
     */
    public $ListingProductInfo;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerNickname($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerNickname');
        }
        $this->SellerNickname = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStoreId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StoreId');
        }
        $this->StoreId = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStoreName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StoreName');
        }
        $this->StoreName = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfOpenListings($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfOpenListings');
        }
        $this->NumberOfOpenListings = $val;
    }

    /**
     * @param ListingProductInfo $val
     * @throws Exception
     */
    public function setListingProductInfo($val)
    {
        $this->ListingProductInfo = $val;
    }
}
