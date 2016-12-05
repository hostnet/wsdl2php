<?php

namespace Controle;

class ListingProductDetails
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $ExchangeId;
    /**
     * @var string
     */
    public $ListingId;
    /**
     * @var string
     */
    public $ExchangeTitle;
    /**
     * @var string
     */
    public $ExchangePrice;
    /**
     * @var string
     */
    public $ExchangeAsin;
    /**
     * @var string
     */
    public $ExchangeEndDate;
    /**
     * @var string
     */
    public $ExchangeTinyImage;
    /**
     * @var string
     */
    public $ExchangeSellerId;
    /**
     * @var string
     */
    public $ExchangeSellerNickname;
    /**
     * @var string
     */
    public $ExchangeStartDate;
    /**
     * @var string
     */
    public $ExchangeStatus;
    /**
     * @var string
     */
    public $ExchangeQuantity;
    /**
     * @var string
     */
    public $ExchangeQuantityAllocated;
    /**
     * @var string
     */
    public $ExchangeFeaturedCategory;
    /**
     * @var string
     */
    public $ExchangeCondition;
    /**
     * @var string
     */
    public $ExchangeConditionType;
    /**
     * @var string
     */
    public $ExchangeAvailability;
    /**
     * @var string
     */
    public $ExchangeOfferingType;
    /**
     * @var string
     */
    public $ExchangeSellerState;
    /**
     * @var string
     */
    public $ExchangeSellerCountry;
    /**
     * @var string
     */
    public $ExchangeSellerRating;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeId');
        }
        $this->ExchangeId = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setListingId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListingId');
        }
        $this->ListingId = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeTitle');
        }
        $this->ExchangeTitle = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangePrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangePrice');
        }
        $this->ExchangePrice = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeAsin($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeAsin');
        }
        $this->ExchangeAsin = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeEndDate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeEndDate');
        }
        $this->ExchangeEndDate = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeTinyImage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeTinyImage');
        }
        $this->ExchangeTinyImage = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeSellerId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeSellerId');
        }
        $this->ExchangeSellerId = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeSellerNickname($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeSellerNickname');
        }
        $this->ExchangeSellerNickname = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeStartDate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeStartDate');
        }
        $this->ExchangeStartDate = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeStatus($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeStatus');
        }
        $this->ExchangeStatus = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeQuantity($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeQuantity');
        }
        $this->ExchangeQuantity = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeQuantityAllocated($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeQuantityAllocated');
        }
        $this->ExchangeQuantityAllocated = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeFeaturedCategory($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeFeaturedCategory');
        }
        $this->ExchangeFeaturedCategory = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeCondition($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeCondition');
        }
        $this->ExchangeCondition = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeConditionType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeConditionType');
        }
        $this->ExchangeConditionType = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeAvailability($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeAvailability');
        }
        $this->ExchangeAvailability = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeOfferingType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeOfferingType');
        }
        $this->ExchangeOfferingType = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeSellerState($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeSellerState');
        }
        $this->ExchangeSellerState = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeSellerCountry($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeSellerCountry');
        }
        $this->ExchangeSellerCountry = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExchangeSellerRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeSellerRating');
        }
        $this->ExchangeSellerRating = (string)$val;
    }
}
