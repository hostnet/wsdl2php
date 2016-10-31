<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ThirdPartyProductDetails
{
    /**
     * @var string
     */
    public $offeringtype;
    /**
     * @var string
     */
    public $sellerid;
    /**
     * @var string
     */
    public $sellernickname;
    /**
     * @var string
     */
    public $exchangeid;
    /**
     * @var string
     */
    public $offeringprice;
    /**
     * @var string
     */
    public $condition;
    /**
     * @var string
     */
    public $conditiontype;
    /**
     * @var string
     */
    public $exchangeavailability;
    /**
     * @var string
     */
    public $sellercountry;
    /**
     * @var string
     */
    public $sellerstate;
    /**
     * @var string
     */
    public $shipcomments;
    /**
     * @var string
     */
    public $sellerrating;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setOfferingType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OfferingType');
        }
        $this->offeringtype = (int)$val;
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
        $this->sellerid = (int)$val;
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
        $this->sellernickname = (int)$val;
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
    public function setOfferingPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OfferingPrice');
        }
        $this->offeringprice = (int)$val;
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
        $this->condition = (int)$val;
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
        $this->conditiontype = (int)$val;
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
        $this->exchangeavailability = (int)$val;
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
        $this->sellercountry = (int)$val;
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
        $this->sellerstate = (int)$val;
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
        $this->shipcomments = (int)$val;
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
        $this->sellerrating = (int)$val;
    }
}
