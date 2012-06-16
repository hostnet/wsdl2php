<?php

namespace Controle;
/**
 * DispatchTimeMaxDetailsType
 * Details about a specific maximum dispatch time, the maximum number of business days required
 * to ship an item to domestic buyers after receiving a cleared payment.
 */
class DispatchTimeMaxDetailsType {
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
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

