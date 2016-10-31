<?php

namespace Controle\sub1\sub2;

class ListingProductDetails
{
	/**
	 * @var string
	 */
	public $exchangeid;
	/**
	 * @var string
	 */
	public $listingid;
	/**
	 * @var string
	 */
	public $exchangetitle;
	/**
	 * @var string
	 */
	public $exchangeprice;
	/**
	 * @var string
	 */
	public $exchangeasin;
	/**
	 * @var string
	 */
	public $exchangeenddate;
	/**
	 * @var string
	 */
	public $exchangetinyimage;
	/**
	 * @var string
	 */
	public $exchangesellerid;
	/**
	 * @var string
	 */
	public $exchangesellernickname;
	/**
	 * @var string
	 */
	public $exchangestartdate;
	/**
	 * @var string
	 */
	public $exchangestatus;
	/**
	 * @var string
	 */
	public $exchangequantity;
	/**
	 * @var string
	 */
	public $exchangequantityallocated;
	/**
	 * @var string
	 */
	public $exchangefeaturedcategory;
	/**
	 * @var string
	 */
	public $exchangecondition;
	/**
	 * @var string
	 */
	public $exchangeconditiontype;
	/**
	 * @var string
	 */
	public $exchangeavailability;
	/**
	 * @var string
	 */
	public $exchangeofferingtype;
	/**
	 * @var string
	 */
	public $exchangesellerstate;
	/**
	 * @var string
	 */
	public $exchangesellercountry;
	/**
	 * @var string
	 */
	public $exchangesellerrating;
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
	public function setListingId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListingId');
        }
        $this->listingid = (int)$val;
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
        $this->exchangetitle = (int)$val;
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
        $this->exchangeprice = (int)$val;
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
        $this->exchangeasin = (int)$val;
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
        $this->exchangeenddate = (int)$val;
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
        $this->exchangetinyimage = (int)$val;
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
        $this->exchangesellerid = (int)$val;
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
        $this->exchangesellernickname = (int)$val;
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
        $this->exchangestartdate = (int)$val;
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
        $this->exchangestatus = (int)$val;
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
        $this->exchangequantity = (int)$val;
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
        $this->exchangequantityallocated = (int)$val;
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
        $this->exchangefeaturedcategory = (int)$val;
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
        $this->exchangecondition = (int)$val;
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
        $this->exchangeconditiontype = (int)$val;
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
	public function setExchangeOfferingType($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExchangeOfferingType');
        }
        $this->exchangeofferingtype = (int)$val;
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
        $this->exchangesellerstate = (int)$val;
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
        $this->exchangesellercountry = (int)$val;
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
        $this->exchangesellerrating = (int)$val;
	}
}
