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
class TransactionType
{
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
	public $amountpaid;
	/**
	 * @var \Controle\AmountType | Adjustment amount entered by the buyer. A positive amount indicates the amount is an extra
	 * charge being paid to the seller by the buyer. A negative value indicates this amount is
	 * a credit given to the buyer by the seller. Not applicable to Half.com.
	 */
	public $adjustmentamount;
	/**
	 * @var \Controle\AmountType | Converted value of AdjustmentAmount in the currency of the site that returned the response.
	 * Refresh this value every 24 hours to pick up the current conversion rates. Not applicable
	 * to Half.com.
	 */
	public $convertedadjustmentamount;
	/**
	 * @var \Controle\UserType | Contains the data for the transaction's buyer. See UserType for its child elements. Not
	 * applicable to Half.com except for GetOrders.
	 */
	public $buyer;
	/**
	 * @var \Controle\ShippingDetailsType | The shipping-related details for an item or transaction, including flat and calculated
	 * shipping costs and shipping insurance costs. For GetOrders, also applicable to Half.com.
	 * For GetOrders, minimal ShippingDetails information is returned under the Transaction container.
	 */
	public $shippingdetails;
	/**
	 * @var \Controle\AmountType | Converted value of AmountPaid in the currency of the site that returned the response. Refresh
	 * this value every 24 hours to pick up the current conversion rates. Not applicable to Half.com.
	 */
	public $convertedamountpaid;
	/**
	 * @var \Controle\AmountType | Converted value of TransactionPrice in the currency of the site that returned the response.
	 * Refresh this value every 24 hours to pick up the current conversion rates. Not applicable
	 * to Half.com.
	 */
	public $convertedtransactionprice;
	/**
	 * @var dateTime | Indicates when the transaction was created. For fixed-price, Stores, and BIN items this
	 * indicates when the purchase (or BIN) occurred. For competitive-bidding listing types this
	 * indicates when listing ended, the winning bidder(s) determined, and the transaction created. For
	 * GetOrders, only applicable to Half.com.
	 */
	public $createddate;
	/**
	 * @var \Controle\DepositTypeCodeType | Deposit type for US eBay Motors items. If item is not a Motors item, then returns an empty
	 * value for DepositType. See DepositTypeCodeType for specific values. Not applicable to Half.com.
	 */
	public $deposittype;
	/**
	 * @var \Controle\ItemType | Information about the item that spawned the transaction. It is a purchase from this item's
	 * listing that the transaction represents. To remove a property from an item, specify it
	 * in ModifyType as a changed property, but do not give it a value in Item. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $item;
	/**
	 * @var int | Indicates the number of items the buyer purchased from the listing identified in ItemID. Also
	 * applicable to Half.com (for GetOrders).
	 */
	public $quantitypurchased;
	/**
	 * @var \Controle\TransactionStatusType | Indicates the user's registration/user status. To be eligible to list on Express, a seller's
	 * status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
	 */
	public $status;
	/**
	 * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
	 * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
	 * spawned it, so a transaction is only uniquely identified on a global basis by a combination
	 * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
	 */
	public $transactionid;
	/**
	 * @var \Controle\AmountType | Price of the transaction (before shipping and sales tax) that the buyer needs to pay to
	 * complete the purchase. For eBay Motors, TransactionPrice is the deposit amount. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $transactionprice;
	/**
	 * @var boolean | Whether the transaction was completed with the seller selecting a best offer. Not applicable
	 * to Half.com.
	 */
	public $bestoffersale;
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
	public $vatpercent;
	/**
	 * @var \Controle\ExternalTransactionType | A PayPal transaction that relates to this eBay transaction. Returned only if there is at
	 * least one PayPal transaction related to this eBay transaction. Not applicable to Half.com.
	 */
	public $externaltransaction;
	/**
	 * @var \Controle\SellingManagerProductDetailsType | Not applicable to Half.com.
	 */
	public $sellingmanagerproductdetails;
	/**
	 * @var \Controle\ShippingServiceOptionsType | The shipping service selected by the buyer from the services offered by the seller. Not
	 * applicable to Half.com.
	 */
	public $shippingserviceselected;
	/**
	 * @var string | Display message from buyer. This field holds transient data that is only being returned
	 * in the notification flow. This field is only returned in the Checkout related notifications. Not
	 * applicable to Half.com.
	 */
	public $buyermessage;
	/**
	 * @var \Controle\AmountType | This field holds the Dutch Auction Offer Bid by the buyer in this transaction, if this
	 * is a Dutch Auction Item. This field will only be returned if caller has set IncludeDuctionAuctionBid
	 * to true. Not applicable to Half.com.
	 */
	public $dutchauctionbid;
	/**
	 * @var \Controle\PaidStatusCodeType | Specifies the transaction's paid status, as seen by the buyer. Returned in lists of won
	 * and sold items. Not applicable to Half.com.
	 */
	public $buyerpaidstatus;
	/**
	 * @var \Controle\PaidStatusCodeType | Specifies the transaction's payment status, as seen by the seller. Returned in lists of
	 * won and sold items. Not applicable to Half.com.
	 */
	public $sellerpaidstatus;
	/**
	 * @var dateTime | Indicates the time when the transaction was marked paid, if known. The value is set by
	 * eBay when payment is made via PayPal or a third-party checkout flow. This value is also
	 * set when the seller marks the item as paid by using ReviseCheckoutStatus or CompleteSale. The
	 * seller can also mark the item as paid by using My eBay or Selling Manager Pro. Note that
	 * this value is only visible if the request user is the buyer or seller associated with the
	 * transaction. If the item is marked as paid but the seller is not a Selling Manager Pro
	 * user, PaidTime returns the transaction creation time instead. Not applicable to Half.com.
	 */
	public $paidtime;
	/**
	 * @var dateTime | Indicates the time when the item(s) associated with the transaction were marked as shipped,
	 * if known. The value is set when the seller uses shipment tracking features offered by eBay
	 * or an eBay partner. This value is also set when the seller marks the item as shipped by
	 * using CompleteSale. If the seller is a Selling Manager Pro user, they can also mark the
	 * item as shipped by using My eBay. Note that this value is only visible if the request user
	 * is the buyer or seller associated with the transaction. Applicable to Half.com (for GetOrders).
	 */
	public $shippedtime;
	/**
	 * @var \Controle\AmountType | Not applicable to Half.com.
	 */
	public $totalprice;
	/**
	 * @var \Controle\FeedbackInfoType | Not applicable to Half.com.
	 */
	public $feedbackleft;
	/**
	 * @var \Controle\FeedbackInfoType | Not applicable to Half.com.
	 */
	public $feedbackreceived;
	/**
	 * @var \Controle\OrderType | The order to which the transaction belongs. This is only returned if IncludeContainingOrder
	 * is true and and if this transaction is part of an active or completed order. Not applicable
	 * to Half.com.
	 */
	public $containingorder;
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
	public $finalvaluefee;
	/**
	 * @var \Controle\TransactionPlatformType | Indicates the platform the item was purchased on (such as eBay or eBay Express). Not applicable
	 * to Half.com.
	 */
	public $transactionplatform;
	/**
	 * @var \Controle\ListingCheckoutRedirectPreferenceType | ProStores listing level preferences regarding the store to which checkout should be redirected
	 * for the listing if ThirdPartyCheckout is true.
	 */
	public $listingcheckoutredirectpreference;
	/**
	 * @var \Controle\RefundArrayType | Contains an array of refunds. Applicable to Half.com (for GetOrders).
	 */
	public $refundarray;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setAmountPaid($val)
	{
        $this->amountpaid = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setAdjustmentAmount($val)
	{
        $this->adjustmentamount = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setConvertedAdjustmentAmount($val)
	{
        $this->convertedadjustmentamount = (int)$val;
	}

	/**
	 * @param UserType $val
	 * @throws Exception
	 */
	public function setBuyer($val)
	{
        $this->buyer = (int)$val;
	}

	/**
	 * @param ShippingDetailsType $val
	 * @throws Exception
	 */
	public function setShippingDetails($val)
	{
        $this->shippingdetails = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setConvertedAmountPaid($val)
	{
        $this->convertedamountpaid = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setConvertedTransactionPrice($val)
	{
        $this->convertedtransactionprice = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreatedDate($val)
	{
        $this->createddate = (int)$val;
	}

	/**
	 * @param DepositTypeCodeType $val
	 * @throws Exception
	 */
	public function setDepositType($val)
	{
        $this->deposittype = (int)$val;
	}

	/**
	 * @param ItemType $val
	 * @throws Exception
	 */
	public function setItem($val)
	{
        $this->item = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setQuantityPurchased($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->quantitypurchased = (int)$val;
	}

	/**
	 * @param TransactionStatusType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionID');
        }
        $this->transactionid = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setTransactionPrice($val)
	{
        $this->transactionprice = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBestOfferSale($val)
	{
        $this->bestoffersale = (int)$val;
	}

	/**
	 * @param decimal $val
	 * @throws Exception
	 */
	public function setVATPercent($val)
	{
        $this->vatpercent = (int)$val;
	}

	/**
	 * @param ExternalTransactionType $val
	 * @throws Exception
	 */
	public function setExternalTransaction($val)
	{
        $this->externaltransaction = (int)$val;
	}

	/**
	 * @param SellingManagerProductDetailsType $val
	 * @throws Exception
	 */
	public function setSellingManagerProductDetails($val)
	{
        $this->sellingmanagerproductdetails = (int)$val;
	}

	/**
	 * @param ShippingServiceOptionsType $val
	 * @throws Exception
	 */
	public function setShippingServiceSelected($val)
	{
        $this->shippingserviceselected = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBuyerMessage($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BuyerMessage');
        }
        $this->buyermessage = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setDutchAuctionBid($val)
	{
        $this->dutchauctionbid = (int)$val;
	}

	/**
	 * @param PaidStatusCodeType $val
	 * @throws Exception
	 */
	public function setBuyerPaidStatus($val)
	{
        $this->buyerpaidstatus = (int)$val;
	}

	/**
	 * @param PaidStatusCodeType $val
	 * @throws Exception
	 */
	public function setSellerPaidStatus($val)
	{
        $this->sellerpaidstatus = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setPaidTime($val)
	{
        $this->paidtime = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setShippedTime($val)
	{
        $this->shippedtime = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setTotalPrice($val)
	{
        $this->totalprice = (int)$val;
	}

	/**
	 * @param FeedbackInfoType $val
	 * @throws Exception
	 */
	public function setFeedbackLeft($val)
	{
        $this->feedbackleft = (int)$val;
	}

	/**
	 * @param FeedbackInfoType $val
	 * @throws Exception
	 */
	public function setFeedbackReceived($val)
	{
        $this->feedbackreceived = (int)$val;
	}

	/**
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setContainingOrder($val)
	{
        $this->containingorder = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setFinalValueFee($val)
	{
        $this->finalvaluefee = (int)$val;
	}

	/**
	 * @param TransactionPlatformType $val
	 * @throws Exception
	 */
	public function setTransactionPlatform($val)
	{
        $this->transactionplatform = (int)$val;
	}

	/**
	 * @param ListingCheckoutRedirectPreferenceType $val
	 * @throws Exception
	 */
	public function setListingCheckoutRedirectPreference($val)
	{
        $this->listingcheckoutredirectpreference = (int)$val;
	}

	/**
	 * @param RefundArrayType $val
	 * @throws Exception
	 */
	public function setRefundArray($val)
	{
        $this->refundarray = (int)$val;
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
