<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ThirdPartyProductDetails
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $OfferingType;
    /**
     * @var string
     */
    public $SellerId;
    /**
     * @var string
     */
    public $SellerNickname;
    /**
     * @var string
     */
    public $ExchangeId;
    /**
     * @var string
     */
    public $OfferingPrice;
    /**
     * @var string
     */
    public $Condition;
    /**
     * @var string
     */
    public $ConditionType;
    /**
     * @var string
     */
    public $ExchangeAvailability;
    /**
     * @var string
     */
    public $SellerCountry;
    /**
     * @var string
     */
    public $SellerState;
    /**
     * @var string
     */
    public $ShipComments;
    /**
     * @var string
     */
    public $SellerRating;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOfferingType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OfferingType');
        }
        $this->OfferingType = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerId');
        }
        $this->SellerId = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerNickname($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerNickname');
        }
        $this->SellerNickname = ()$val;
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
        $this->ExchangeId = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOfferingPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OfferingPrice');
        }
        $this->OfferingPrice = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCondition($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Condition');
        }
        $this->Condition = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setConditionType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ConditionType');
        }
        $this->ConditionType = ()$val;
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
        $this->ExchangeAvailability = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerCountry($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerCountry');
        }
        $this->SellerCountry = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerState($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerState');
        }
        $this->SellerState = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setShipComments($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ShipComments');
        }
        $this->ShipComments = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerRating');
        }
        $this->SellerRating = ()$val;
    }
}
