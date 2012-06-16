<?php

namespace Controle\sub1\sub2;
/**
 * OrderType
 * A combination of two or more transactions that can be paid for with a single payment.<br> <br> We
 * strongly recommend that you avoid mixing digital and non-digital listings in the same order.
 * (In the future, AddOrder may enforce this recommendation.
 */
class OrderType {
	/**
	 * @var \Controle\sub1\sub2\OrderIDType | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
	 * orders.
	 */
	public $OrderID;
	/**
	 * @var \Controle\sub1\sub2\OrderStatusCodeType | The current status of the order.<br> <br> For transaction calls (like GetItemTransactions),
	 * please use the TransactionPlatform element to determine whether an item was purchased on
	 * Express on eBay.<br> <br> Also applicable to Half.com (for GetOrders).
	 */
	public $OrderStatus;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Adjustment amount entered by the buyer. A positive amount indicates the amount is an extra
	 * charge being paid to the seller by the buyer. A negative value indicates this amount is
	 * a credit given to the buyer by the seller. Not applicable to Half.com.
	 */
	public $AdjustmentAmount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The amount the buyer paid for the item(s) in the transaction. If the seller allowed the
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
	 * @var \Controle\sub1\sub2\AmountType | Amount the buyer saved by having multiple items combined into a single order, versus purchasing
	 * the items separately.
	 */
	public $AmountSaved;
	/**
	 * @var \Controle\sub1\sub2\CheckoutStatusType | Indicates the current status of the checkout process for the transaction.
	 */
	public $CheckoutStatus;
	/**
	 * @var \Controle\sub1\sub2\ShippingDetailsType | The shipping-related details for an item or transaction, including flat and calculated
	 * shipping costs and shipping insurance costs. For GetOrders, also applicable to Half.com.
	 * For GetOrders, minimal ShippingDetails information is returned under the Transaction container.
	 */
	public $ShippingDetails;
	/**
	 * @var \Controle\sub1\sub2\TradingRoleCodeType | Indicates whether the order is created by the buyer or by the seller.
	 */
	public $CreatingUserRole;
	/**
	 * @var dateTime | Date and time the order was created. Also applicable to Half.com (for GetOrders).
	 */
	public $CreatedTime;
	/**
	 * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
	 */
	public $FinanceOfferID;
	/**
	 * @var \Controle\sub1\sub2\BuyerPaymentMethodCodeType | The payment methods the buyer uses to pay for      the order. An order can have multiple
	 * payment methods if the      buyer combines several transactions into one order.      Also
	 * applicable to Half.com (for GetOrders).
	 */
	public $PaymentMethods;
	/**
	 * @var string | The email of the order's seller.
	 */
	public $SellerEmail;
	/**
	 * @var \Controle\sub1\sub2\AddressType | The address to which the item is to be shipped.
	 */
	public $ShippingAddress;
	/**
	 * @var \Controle\sub1\sub2\ShippingServiceOptionsType | The shipping service selected by the buyer from the services offered by the seller. Not
	 * applicable to Half.com.
	 */
	public $ShippingServiceSelected;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The sum of the sale prices of all of the transactions in the order, where a transaction
	 * sale price is the item sale price times the quantity sold. Also applicable to Half.com
	 * (for GetOrders).
	 */
	public $Subtotal;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Subtotal plus the shipping cost plus the sales tax plus cost of insurance. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $Total;
	/**
	 * @var \Controle\sub1\sub2\ExternalTransactionType | A PayPal transaction that relates to this eBay transaction. Returned only if there is at
	 * least one PayPal transaction related to this eBay transaction. Not applicable to Half.com.
	 */
	public $ExternalTransaction;
	/**
	 * @var boolean | Indicates whether the order contains at least one transaction for a digital listing. Not
	 * applicable to Half.com.
	 */
	public $DigitalDelivery;
	/**
	 * @var \Controle\sub1\sub2\TransactionArrayType | Contains a list of transactions. Returned as an empty tag if no applicable transactions
	 * exist.
	 */
	public $TransactionArray;
	/**
	 * @var \Controle\sub1\sub2\UserIDType | User ID of the order's buyer. Not applicable to Half.com.
	 */
	public $BuyerUserID;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}
