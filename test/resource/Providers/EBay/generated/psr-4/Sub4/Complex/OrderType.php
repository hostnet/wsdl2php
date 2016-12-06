<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * OrderType
 * A combination of two or more transactions that can be paid for with a single payment.<br> <br> We
 * strongly recommend that you avoid mixing digital and non-digital listings in the same order.
 * (In the future, AddOrder may enforce this recommendation.
 */
class OrderType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderIDType | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
     * orders.
     */
    public $OrderID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderStatusCodeType | The current status of the order.<br> <br> For transaction calls (like GetItemTransactions),
     * please use the TransactionPlatform element to determine whether an item was purchased
     * on Express on eBay.<br> <br> Also applicable to Half.com (for GetOrders).
     */
    public $OrderStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Adjustment amount entered by the buyer. A positive amount indicates the amount is an
     * extra charge being paid to the seller by the buyer. A negative value indicates this
     * amount is a credit given to the buyer by the seller. Not applicable to Half.com.
     */
    public $AdjustmentAmount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The amount the buyer paid for the item(s) in the transaction. If the seller allowed
     * the buyer to change the item total, the buyer is able to change the total until the
     * time that the transaction's status moves to Complete. Determine whether the buyer changed
     * the amount by retrieving the transaction data and comparing the AmountPaid value to
     * what the seller expected. For combined payment (the transaction is part of an order),
     * GetSellerTransactions and GetItemTransactions return the amount paid for the order to
     * which the transaction belongs. For Motors items, AmountPaid is the amount paid by the
     * buyer for the deposit. Not applicable to Half.com.
     */
    public $AmountPaid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Amount the buyer saved by having multiple items combined into a single order, versus
     * purchasing the items separately.
     */
    public $AmountSaved;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CheckoutStatusType | Indicates the current status of the checkout process for the transaction.
     */
    public $CheckoutStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingDetailsType | The shipping-related details for an item or transaction, including flat and calculated
     * shipping costs and shipping insurance costs. For GetOrders, also applicable to Half.com.
     * For GetOrders, minimal ShippingDetails information is returned under the Transaction
     * container.
     */
    public $ShippingDetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TradingRoleCodeType | Indicates whether the order is created by the buyer or by the seller.
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BuyerPaymentMethodCodeType | The payment methods the buyer uses to pay for      the order. An order can have multiple
     * payment methods if the      buyer combines several transactions into one order.
     *  Also applicable to Half.com (for GetOrders).
     */
    public $PaymentMethods;
    /**
     * @var string | The email of the order's seller.
     */
    public $SellerEmail;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType | The address to which the item is to be shipped.
     */
    public $ShippingAddress;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingServiceOptionsType | The shipping service selected by the buyer from the services offered by the seller. Not
     * applicable to Half.com.
     */
    public $ShippingServiceSelected;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The sum of the sale prices of all of the transactions in the order, where a transaction
     * sale price is the item sale price times the quantity sold. Also applicable to Half.com
     * (for GetOrders).
     */
    public $Subtotal;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Subtotal plus the shipping cost plus the sales tax plus cost of insurance. Also applicable
     * to Half.com (for GetOrders).
     */
    public $Total;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalTransactionType | A PayPal transaction that relates to this eBay transaction. Returned only if there is
     * at least one PayPal transaction related to this eBay transaction. Not applicable to
     * Half.com.
     */
    public $ExternalTransaction;
    /**
     * @var boolean | Indicates whether the order contains at least one transaction for a digital listing. Not
     * applicable to Half.com.
     */
    public $DigitalDelivery;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TransactionArrayType | Contains a list of transactions. Returned as an empty tag if no applicable transactions
     * exist.
     */
    public $TransactionArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | User ID of the order's buyer. Not applicable to Half.com.
     */
    public $BuyerUserID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param OrderIDType $val
     * @throws Exception
     */
    public function setOrderID($val)
    {
        $this->OrderID = $val;
    }

    /**
     * @param OrderStatusCodeType $val
     * @throws Exception
     */
    public function setOrderStatus($val)
    {
        $this->OrderStatus = $val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAdjustmentAmount($val)
    {
        $this->AdjustmentAmount = $val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAmountPaid($val)
    {
        $this->AmountPaid = $val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAmountSaved($val)
    {
        $this->AmountSaved = $val;
    }

    /**
     * @param CheckoutStatusType $val
     * @throws Exception
     */
    public function setCheckoutStatus($val)
    {
        $this->CheckoutStatus = $val;
    }

    /**
     * @param ShippingDetailsType $val
     * @throws Exception
     */
    public function setShippingDetails($val)
    {
        $this->ShippingDetails = $val;
    }

    /**
     * @param TradingRoleCodeType $val
     * @throws Exception
     */
    public function setCreatingUserRole($val)
    {
        $this->CreatingUserRole = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreatedTime($val)
    {
        $this->CreatedTime = $val;
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
        $this->FinanceOfferID = $val;
    }

    /**
     * @param BuyerPaymentMethodCodeType $val
     * @throws Exception
     */
    public function setPaymentMethods($val)
    {
        $this->PaymentMethods = $val;
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
        $this->SellerEmail = $val;
    }

    /**
     * @param AddressType $val
     * @throws Exception
     */
    public function setShippingAddress($val)
    {
        $this->ShippingAddress = $val;
    }

    /**
     * @param ShippingServiceOptionsType $val
     * @throws Exception
     */
    public function setShippingServiceSelected($val)
    {
        $this->ShippingServiceSelected = $val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setSubtotal($val)
    {
        $this->Subtotal = $val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setTotal($val)
    {
        $this->Total = $val;
    }

    /**
     * @param ExternalTransactionType $val
     * @throws Exception
     */
    public function setExternalTransaction($val)
    {
        $this->ExternalTransaction = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDigitalDelivery($val)
    {
        $this->DigitalDelivery = $val;
    }

    /**
     * @param TransactionArrayType $val
     * @throws Exception
     */
    public function setTransactionArray($val)
    {
        $this->TransactionArray = $val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setBuyerUserID($val)
    {
        $this->BuyerUserID = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
