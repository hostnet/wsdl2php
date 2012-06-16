<?php

namespace Controle\sub1\sub2;
/**
 * ListingCheckoutRedirectPreferenceType
 * ProStores listing level preferences.
 */
class ListingCheckoutRedirectPreferenceType {
	/**
	 * @var string | The name of the store, if Item.ThirdPartyCheckout is true. To remove this value when revising
	 * or relisting an item, use DeletedField.
	 */
	public $ProStoresStoreName;
	/**
	 * @var string | The username associated with the store.  Returned only if the parent container is returned.
	 */
	public $SellerThirdPartyUsername;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}
