<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Item
{
    /**
     * @var string
     */
    public $itemid;
    /**
     * @var string
     */
    public $productname;
    /**
     * @var string
     */
    public $catalog;
    /**
     * @var string
     */
    public $asin;
    /**
     * @var string
     */
    public $exchangeid;
    /**
     * @var string
     */
    public $quantity;
    /**
     * @var string
     */
    public $listprice;
    /**
     * @var string
     */
    public $ourprice;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setItemId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ItemId');
        }
        $this->itemid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductName');
        }
        $this->productname = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCatalog($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Catalog');
        }
        $this->catalog = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAsin($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Asin');
        }
        $this->asin = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeId');
        }
        $this->exchangeid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQuantity($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Quantity');
        }
        $this->quantity = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setListPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListPrice');
        }
        $this->listprice = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOurPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OurPrice');
        }
        $this->ourprice = (int)$val;
    }
}
