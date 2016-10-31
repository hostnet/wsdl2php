<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerSearchDetails
{
    /**
     * @var string
     */
    public $sellernickname;
    /**
     * @var string
     */
    public $storeid;
    /**
     * @var string
     */
    public $storename;
    /**
     * @var string
     */
    public $numberofopenlistings;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListingProductInfo
     */
    public $listingproductinfo;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerNickname($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerNickname');
        }
        $this->sellernickname = (int)$val;
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
        $this->storeid = (int)$val;
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
        $this->storename = (int)$val;
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
        $this->numberofopenlistings = (int)$val;
    }

    /**
     * @param ListingProductInfo $val
     * @throws Exception
     */
    public function setListingProductInfo($val)
    {
        $this->listingproductinfo = (int)$val;
    }
}
