<?php

namespace Controle\sub1\sub2;

/**
 * ProStoresCheckoutPreferenceType
 * Details about ProStores and checkout preferences.
 */
class ProStoresCheckoutPreferenceType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | Indicates whether third party checkout is to be redirected to the ProStores application
	 * specified via My eBay preferences.
	 */
	public $CheckoutRedirectProStores;
	/**
	 * @var \Controle\sub1\sub2\ProStoresDetailsType | Details about the store.
	 */
	public $ProStoresDetails;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCheckoutRedirectProStores($val)
	{
        $this->CheckoutRedirectProStores = $val;
	}

	/**
	 * @param ProStoresDetailsType $val
	 * @throws Exception
	 */
	public function setProStoresDetails($val)
	{
        $this->ProStoresDetails = $val;
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
