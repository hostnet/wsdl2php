<?php

namespace Controle;
/**
 * BestOfferType
 * Details about a best offer.
 */
class BestOfferType {
	/**
	 * @var \Controle\BestOfferIDType | An id to distinguish this best offer from other best offers made on the item.
	 */
	public $BestOfferID;
	/**
	 * @var dateTime | Date and time when this notification will be removed from the eBay system.
	 */
	public $ExpirationTime;
	/**
	 * @var \Controle\UserType | Contains the data for the transaction's buyer. See UserType for its child elements. Not
	 * applicable to Half.com except for GetOrders.
	 */
	public $Buyer;
	/**
	 * @var \Controle\AmountType | The amount of the best offer.
	 */
	public $Price;
	/**
	 * @var \Controle\BestOfferStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $Status;
	/**
	 * @var int | Specifies the number of items from the specified listing the user tendering the offer intends
	 * to purchase or bid on. For Chinese auctions and other listing formats that only allow one
	 * item per listing, value may not exceed one. For multi-item listings, must be greater than
	 * zero and not exceeding the number of items offered for sale in the listing.
	 */
	public $Quantity;
	/**
	 * @var string | Display message from buyer. This field holds transient data that is only being returned
	 * in the notification flow. This field is only returned in the Checkout related notifications. Not
	 * applicable to Half.com.
	 */
	public $BuyerMessage;
	/**
	 * @var string | Text response to buyer from seller.
	 */
	public $SellerMessage;
	/**
	 * @var \Controle\BestOfferTypeCodeType | The best offer type.
	 */
	public $BestOfferCodeType;
	/**
	 * @var string | The status of the call, either Success or Failure.
	 */
	public $CallStatus;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

