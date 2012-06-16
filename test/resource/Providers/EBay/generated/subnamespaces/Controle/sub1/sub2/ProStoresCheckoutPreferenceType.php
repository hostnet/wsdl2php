<?php

namespace Controle\sub1\sub2;
/**
 * ProStoresCheckoutPreferenceType
 * Details about ProStores and checkout preferences.
 */
class ProStoresCheckoutPreferenceType {
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
}

