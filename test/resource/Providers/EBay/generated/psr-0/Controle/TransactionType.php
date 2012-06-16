<?php

namespace Controle;
/**
 * TransactionType
 * Contains information about a single transaction. A transaction contains information about
 * the sale one or multiple items from a listing to a single buyer. The eBay system creates
 * a transaction when a buyer has made a purchase (fixed-price listings) or is the winning
 * bidder (BIN and competitive-bidding listings). A listing can spawn one or more transactions
 * in these cases: multi-item fixed-price listings and Dutch listings. A listing can spawn
 * only a single transaction in these cases: single-item fixed-price listings and Chinese listings.
 */
class TransactionType {
	/**
	 * @var \Controle\AmountType | The amount the buyer paid for the item(s) in the transaction. If the seller allowed the
	 * buyer to change the item total, the buyer is able to change the total until the time that
	 * the transaction's status moves to Complete. Determine whether the buyer changed the amount
	 * by retrieving the transaction data and comparing the AmountPaid value to what the seller
	 * expected. For combined payment (the transaction is part of an order), GetSellerTransactions
	 * and GetItemTransactions return the amount paid for the order to which the transaction belongs. For
	 * Motors items, AmountPaid is the amount paid by the buyer for the deposit. Not applicable
	 * to Half.com.
	 */
	public $AmountPaid;
	/**
	 * @var \Controle\AmountType | Adjustment amount entered by the buyer. A positive amount indicates the amount is an extra
	 * charge being paid to the seller by the buyer. A negative value indicates this amount is
	 * a credit given to the buyer by the seller. Not applicable to Half.com.
	 */
	public $AdjustmentAmount;
	/**
	 * @var \Controle\AmountType | Converted value of AdjustmentAmount in the currency of the site that returned the response.
	 * Refresh this value every 24 hours to pick up the current conversion rates. Not applicable
	 * to Half.com.
	 */
	public $ConvertedAdjustmentAmount;
	/**
	 * @var \Controle\UserType | Contains the data for the transaction's buyer. See UserType for its child elements. Not
	 * applicable to Half.com except for GetOrders.
	 */
	public $Buyer;
	/**
	 * @var \Controle\ShippingDetailsType | The shipping-related details for an item or transaction, including flat and calculated
	 * shipping costs and shipping insurance costs. For GetOrders, also applicable to Half.com.
	 * For GetOrders, minimal ShippingDetails information is returned under the Transaction container.
	 */
	public $ShippingDetails;
	/**
	 * @var \Controle\AmountType | Converted value of AmountPaid in the currency of the site that returned the response. Refresh
	 * this value every 24 hours to pick up the current conversion rates. Not applicable to Half.com.
	 */
	public $ConvertedAmountPaid;
	/**
	 * @var \Controle\AmountType | Converted value of TransactionPrice in the currency of the site that returned the response.
	 * Refresh this value every 24 hours to pick up the current conversion rates. Not applicable
	 * to Half.com.
	 */
	public $ConvertedTransactionPrice;
	/**
	 * @var dateTime | Indicates when the transaction was created. For fixed-price, Stores, and BIN items this
	 * indicates when the purchase (or BIN) occurred. For competitive-bidding listing types this
	 * indicates when listing ended, the winning bidder(s) determined, and the transaction created. For
	 * GetOrders, only applicable to Half.com.
	 */
	public $CreatedDate;
	/**
	 * @var \Controle\DepositTypeCodeType | Deposit type for US eBay Motors items. If item is not a Motors item, then returns an empty
	 * value for DepositType. See DepositTypeCodeType for specific values. Not applicable to Half.com.
	 */
	public $DepositType;
	/**
	 * @var \Controle\ItemType | Information about the item that spawned the transaction. It is a purchase from this item's
	 * listing that the transaction represents. To remove a property from an item, specify it
	 * in ModifyType as a changed property, but do not give it a value in Item. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $Item;
	/**
	 * @var int | Indicates the number of items the buyer purchased from the listing identified in ItemID. Also
	 * applicable to Half.com (for GetOrders).
	 */
	public $QuantityPurchased;
	/**
	 * @var \Controle\TransactionStatusType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $Status;
	/**
	 * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
	 * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
	 * spawned it, so a transaction is only uniquely identified on a global basis by a combination
	 * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
	 */
	public $TransactionID;
	/**
	 * @var \Controle\AmountType | Price of the transaction (before shipping and sales tax) that the buyer needs to pay to
	 * complete the purchase. For eBay Motors, TransactionPrice is the deposit amount. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $TransactionPrice;
	/**
	 * @var boolean | Whether the transaction was completed with the seller selecting a best offer. Not applicable
	 * to Half.com.
	 */
	public $BestOfferSale;
	/**
	 * @var decimal | VAT rate for the item, if any. When the VATPercent is specified, the item's VAT information
	 * appears on the item's listing page. In addition, the seller can choose to print an invoice
	 * that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT
	 * rates vary depending on the item and on the user's country of residence, a seller is responsible
	 * for entering the correct VAT rate; it is not calculated by eBay. To specify a VATPercent,
	 * a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled
	 * site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The
	 * scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value to 12.346.) Note:
	 * The View Item page may display the precision to 2 decimal places with no trailing zeros.
	 * However, the full value you send in is stored.
	 */
	public $VATPercent;
	/**
	 * @var \Controle\ExternalTransactionType | A PayPal transaction that relates to this eBay transaction. Returned only if there is at
	 * least one PayPal transaction related to this eBay transaction. Not applicable to Half.com.
	 */
	public $ExternalTransaction;
	/**
	 * @var \Controle\SellingManagerProductDetailsType | Not applicable to Half.com.
	 */
	public $SellingManagerProductDetails;
	/**
	 * @var \Controle\ShippingServiceOptionsType | The shipping service selected by the buyer from the services offered by the seller. Not
	 * applicable to Half.com.
	 */
	public $ShippingServiceSelected;
	/**
	 * @var string | Display message from buyer. This field holds transient data that is only being returned
	 * in the notification flow. This field is only returned in the Checkout related notifications. Not
	 * applicable to Half.com.
	 */
	public $BuyerMessage;
	/**
	 * @var \Controle\AmountType | This field holds the Dutch Auction Offer Bid by the buyer in this transaction, if this
	 * is a Dutch Auction Item. This field will only be returned if caller has set IncludeDuctionAuctionBid
	 * to true. Not applicable to Half.com.
	 */
	public $DutchAuctionBid;
	/**
	 * @var \Controle\PaidStatusCodeType | Specifies the transaction's paid status, as seen by the buyer. Returned in lists of won
	 * and sold items. Not applicable to Half.com.
	 */
	public $BuyerPaidStatus;
	/**
	 * @var \Controle\PaidStatusCodeType | Specifies the transaction's payment status, as seen by the seller. Returned in lists of
	 * won and sold items. Not applicable to Half.com.
	 */
	public $SellerPaidStatus;
	/**
	 * @var dateTime | Indicates the time when the transaction was marked paid, if known. The value is set by
	 * eBay when payment is made via PayPal or a third-party checkout flow. This value is also
	 * set when the seller marks the item as paid by using ReviseCheckoutStatus or CompleteSale. The
	 * seller can also mark the item as paid by using My eBay or Selling Manager Pro. Note that
	 * this value is only visible if the request user is the buyer or seller associated with the
	 * transaction. If the item is marked as paid but the seller is not a Selling Manager Pro
	 * user, PaidTime returns the transaction creation time instead. Not applicable to Half.com.
	 */
	public $PaidTime;
	/**
	 * @var dateTime | Indicates the time when the item(s) associated with the transaction were marked as shipped,
	 * if known. The value is set when the seller uses shipment tracking features offered by eBay
	 * or an eBay partner. This value is also set when the seller marks the item as shipped by
	 * using CompleteSale. If the seller is a Selling Manager Pro user, they can also mark the
	 * item as shipped by using My eBay. Note that this value is only visible if the request user
	 * is the buyer or seller associated with the transaction. Applicable to Half.com (for GetOrders).
	 */
	public $ShippedTime;
	/**
	 * @var \Controle\AmountType | Not applicable to Half.com.
	 */
	public $TotalPrice;
	/**
	 * @var \Controle\FeedbackInfoType | Not applicable to Half.com.
	 */
	public $FeedbackLeft;
	/**
	 * @var \Controle\FeedbackInfoType | Not applicable to Half.com.
	 */
	public $FeedbackReceived;
	/**
	 * @var \Controle\OrderType | The order to which the transaction belongs. This is only returned if IncludeContainingOrder
	 * is true and and if this transaction is part of an active or completed order. Not applicable
	 * to Half.com.
	 */
	public $ContainingOrder;
	/**
	 * @var \Controle\AmountType | You are charged a Final Value Fee if your item is sold, ends with a winning bid, or is
	 * purchased. This fee applies whether or not you actually complete the sale with the buyer.
	 * If you request a Final Value Fee Credit, the value of Transaction.FinalValueFee will not
	 * change for the item if a credit is issued. (The credit only appears in the seller's account
	 * data.) See the eBay.com Web site online help for more information about the Final Value
	 * Fee. The Final Value Fee for FixedPriceItem, StoresFixedPrice, and Buy It Now Dutch listing types
	 * is returned by GetSellerTransactions and GetItemTransactions on a transaction by transaction
	 * basis. For all other listing types, including Chinese and Dutch (no Buy It Now purchases),
	 * the Final Value Fee is returned when the listing status is Completed. If the item was a
	 * Dutch auction that ended with bids (not Buy It Now purchases), the Final Value Fee is returned
	 * in Item.SellingStatus.FinalValueFee. For all other listing types, including Dutch auctions
	 * that end with Buy It Now purchases, the Final Value Fee is returned in Transaction.FinalValueFee.
	 * Not applicable to Half.com.
	 */
	public $FinalValueFee;
	/**
	 * @var \Controle\TransactionPlatformType | Indicates the platform the item was purchased on (such as eBay or eBay Express). Not applicable
	 * to Half.com.
	 */
	public $TransactionPlatform;
	/**
	 * @var \Controle\ListingCheckoutRedirectPreferenceType | ProStores listing level preferences regarding the store to which checkout should be redirected
	 * for the listing if ThirdPartyCheckout is true.
	 */
	public $ListingCheckoutRedirectPreference;
	/**
	 * @var \Controle\RefundArrayType | Contains an array of refunds. Applicable to Half.com (for GetOrders).
	 */
	public $RefundArray;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

