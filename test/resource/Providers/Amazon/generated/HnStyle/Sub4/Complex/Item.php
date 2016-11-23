<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Item
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $ItemId;
    /**
     * @var string
     */
    public $ProductName;
    /**
     * @var string
     */
    public $Catalog;
    /**
     * @var string
     */
    public $Asin;
    /**
     * @var string
     */
    public $ExchangeId;
    /**
     * @var string
     */
    public $Quantity;
    /**
     * @var string
     */
    public $ListPrice;
    /**
     * @var string
     */
    public $OurPrice;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setItemId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ItemId');
        }
        $this->ItemId = (int)$val;
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
        $this->ProductName = (int)$val;
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
        $this->Catalog = (int)$val;
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
        $this->Asin = (int)$val;
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
        $this->ExchangeId = (int)$val;
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
        $this->Quantity = (int)$val;
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
        $this->ListPrice = (int)$val;
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
        $this->OurPrice = (int)$val;
    }
}
