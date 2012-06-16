<?php

namespace Controle;
/**
 * BestOfferDetailsType
 * Container for BestOffer properties associated with the item.
 */
class BestOfferDetailsType {
	/**
	 * @var int | The number of items the user has made best offers on.
	 */
	public $BestOfferCount;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow best offers. True means
	 * best offers are allowed site-wide, unless a specific category overrides the setting.
	 */
	public $BestOfferEnabled;
	/**
	 * @var \Controle\AmountType | (GetMyeBayBuying only) Indicates the latest BestOffer the user has provided for the item
	 * .
	 */
	public $BestOffer;
	/**
	 * @var \Controle\BestOfferStatusCodeType | (GetMyeBayBuying only) Indicates the status of the latest BestOffer the user has provided
	 * for the item .
	 */
	public $BestOfferStatus;
	/**
	 * @var \Controle\BestOfferTypeCodeType | Indicates the best offer type of the latest BestOffer the user has provided for the item
	 * .
	 */
	public $BestOfferType;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

