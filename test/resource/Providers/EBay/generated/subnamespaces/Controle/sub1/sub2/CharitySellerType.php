<?php

namespace Controle\sub1\sub2;

/**
 * CharitySellerType
 * Contains information about one seller with a eBay Giving Works provider charity seller account.
 */
class CharitySellerType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\CharitySellerStatusCodeType | Indicates the status of the seller's charity seller account.
	 */
	public $CharitySellerStatus;
	/**
	 * @var \Controle\sub1\sub2\CharityAffiliationType | Indicates the affiliation status for nonprofit charity organizations registered with the
	 * dedicated eBay Giving Works provider.
	 */
	public $CharityAffiliation;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CharitySellerStatusCodeType $val
	 * @throws Exception
	 */
	public function setCharitySellerStatus($val)
	{
        $this->CharitySellerStatus = $val;
	}

	/**
	 * @param CharityAffiliationType $val
	 * @throws Exception
	 */
	public function setCharityAffiliation($val)
	{
        $this->CharityAffiliation = $val;
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
