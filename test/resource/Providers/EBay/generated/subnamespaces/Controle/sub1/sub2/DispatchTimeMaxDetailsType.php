<?php

namespace Controle\sub1\sub2;

/**
 * DispatchTimeMaxDetailsType
 * Details about a specific maximum dispatch time, the maximum number of business days required
 * to ship an item to domestic buyers after receiving a cleared payment.
 */
class DispatchTimeMaxDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | Specifies the maximum number of business days the seller commits to for shipping an item
	 * to domestic buyers after receiving a cleared payment. The seller sets this to an integer
	 * value (1, 2, 3, 4, 5, 10, 15, or 20) corresponding to the number of days. To add Get It
	 * Fast to listings, in addition to setting GetItFast to true, DispatchTimeMax must be set
	 * to 1 and the seller must specify at least one qualifying expedited shipping service. GetItem
	 * returns DispatchTimeMax only when shipping service options are specified for the item.
	 */
	public $DispatchTimeMax;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDispatchTimeMax($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->DispatchTimeMax = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->Description = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
