<?php

namespace Controle;

/**
 * OrderType
 * A combination of two or more transactions that can be paid for with a single payment.<br> <br> We
 * strongly recommend that you avoid mixing digital and non-digital listings in the same order.
 * (In the future, AddOrder may enforce this recommendation.
 */
class OrderType
{
	/**
	 * @var \Controle\OrderIDType | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
	 * orders.
	 */
	public $orderid;
	/**
	 * @var \Controle\OrderStatusCodeType | The current status of the order.<br> <br> For transaction calls (like GetItemTransactions),
	 * please use the TransactionPlatform element to determine whether an item was purchased on
	 * Express on eBay.<br> <br> Also applicable to Half.com (for GetOrders).
	 */
	public $orderstatus;
	/**
	 * @var \Controle\AmountType | Adjustment amount entered by the buyer. A positive amount indicates the amount is an extra
	 * charge being paid to the seller by the buyer. A negative value indicates this amount is
	 * a credit given to the buyer by the seller. Not applicable to Half.com.
	 */
	public $adjustmentamount;
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
	 * @var \Controle\AmountType | Amount the buyer saved by having multiple items combined into a single order, versus purchasing
	 * the items separately.
	 */
	public $amountsaved;
	/**
	 * @var \Controle\CheckoutStatusType | Indicates the current status of the checkout process for the transaction.
	 */
	public $checkoutstatus;
	/**
	 * @var \Controle\ShippingDetailsType | The shipping-related details for an item or transaction, including flat and calculated
	 * shipping costs and shipping insurance costs. For GetOrders, also applicable to Half.com.
	 * For GetOrders, minimal ShippingDetails information is returned under the Transaction container.
	 */
	public $shippingdetails;
	/**
	 * @var \Controle\TradingRoleCodeType | Indicates whether the order is created by the buyer or by the seller.
	 */
	public $creatinguserrole;
	/**
	 * @var dateTime | Date and time the order was created. Also applicable to Half.com (for GetOrders).
	 */
	public $createdtime;
	/**
	 * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
	 */
	public $financeofferid;
	/**
	 * @var \Controle\BuyerPaymentMethodCodeType | The payment methods the buyer uses to pay for      the order. An order can have multiple
	 * payment methods if the      buyer combines several transactions into one order.      Also
	 * applicable to Half.com (for GetOrders).
	 */
	public $paymentmethods;
	/**
	 * @var string | The email of the order's seller.
	 */
	public $selleremail;
	/**
	 * @var \Controle\AddressType | The address to which the item is to be shipped.
	 */
	public $shippingaddress;
	/**
	 * @var \Controle\ShippingServiceOptionsType | The shipping service selected by the buyer from the services offered by the seller. Not
	 * applicable to Half.com.
	 */
	public $shippingserviceselected;
	/**
	 * @var \Controle\AmountType | The sum of the sale prices of all of the transactions in the order, where a transaction
	 * sale price is the item sale price times the quantity sold. Also applicable to Half.com
	 * (for GetOrders).
	 */
	public $subtotal;
	/**
	 * @var \Controle\AmountType | Subtotal plus the shipping cost plus the sales tax plus cost of insurance. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $total;
	/**
	 * @var \Controle\ExternalTransactionType | A PayPal transaction that relates to this eBay transaction. Returned only if there is at
	 * least one PayPal transaction related to this eBay transaction. Not applicable to Half.com.
	 */
	public $externaltransaction;
	/**
	 * @var boolean | Indicates whether the order contains at least one transaction for a digital listing. Not
	 * applicable to Half.com.
	 */
	public $digitaldelivery;
	/**
	 * @var \Controle\TransactionArrayType | Contains a list of transactions. Returned as an empty tag if no applicable transactions
	 * exist.
	 */
	public $transactionarray;
	/**
	 * @var \Controle\UserIDType | User ID of the order's buyer. Not applicable to Half.com.
	 */
	public $buyeruserid;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param OrderIDType $val
	 * @throws Exception
	 */
	public function setOrderID($val)
	{
        $this->orderid = (int)$val;
	}

	/**
	 * @param OrderStatusCodeType $val
	 * @throws Exception
	 */
	public function setOrderStatus($val)
	{
        $this->orderstatus = (int)$val;
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
	public function setAmountPaid($val)
	{
        $this->amountpaid = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setAmountSaved($val)
	{
        $this->amountsaved = (int)$val;
	}

	/**
	 * @param CheckoutStatusType $val
	 * @throws Exception
	 */
	public function setCheckoutStatus($val)
	{
        $this->checkoutstatus = (int)$val;
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
	 * @param TradingRoleCodeType $val
	 * @throws Exception
	 */
	public function setCreatingUserRole($val)
	{
        $this->creatinguserrole = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreatedTime($val)
	{
        $this->createdtime = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFinanceOfferID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FinanceOfferID');
        }
        $this->financeofferid = (int)$val;
	}

	/**
	 * @param BuyerPaymentMethodCodeType $val
	 * @throws Exception
	 */
	public function setPaymentMethods($val)
	{
        $this->paymentmethods = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSellerEmail($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerEmail');
        }
        $this->selleremail = (int)$val;
	}

	/**
	 * @param AddressType $val
	 * @throws Exception
	 */
	public function setShippingAddress($val)
	{
        $this->shippingaddress = (int)$val;
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
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setSubtotal($val)
	{
        $this->subtotal = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setTotal($val)
	{
        $this->total = (int)$val;
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
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setDigitalDelivery($val)
	{
        $this->digitaldelivery = (int)$val;
	}

	/**
	 * @param TransactionArrayType $val
	 * @throws Exception
	 */
	public function setTransactionArray($val)
	{
        $this->transactionarray = (int)$val;
	}

	/**
	 * @param UserIDType $val
	 * @throws Exception
	 */
	public function setBuyerUserID($val)
	{
        $this->buyeruserid = (int)$val;
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
