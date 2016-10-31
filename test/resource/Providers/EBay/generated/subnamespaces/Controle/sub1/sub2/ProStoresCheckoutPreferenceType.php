<?php

namespace Controle\sub1\sub2;

/**
 * ProStoresCheckoutPreferenceType
 * Details about ProStores and checkout preferences.
 */
class ProStoresCheckoutPreferenceType
{
	/**
	 * @var boolean | Indicates whether third party checkout is to be redirected to the ProStores application
	 * specified via My eBay preferences.
	 */
	public $checkoutredirectprostores;
	/**
	 * @var \Controle\sub1\sub2\ProStoresDetailsType | Details about the store.
	 */
	public $prostoresdetails;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCheckoutRedirectProStores($val)
	{
        $this->checkoutredirectprostores = (int)$val;
	}

	/**
	 * @param ProStoresDetailsType $val
	 * @throws Exception
	 */
	public function setProStoresDetails($val)
	{
        $this->prostoresdetails = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
