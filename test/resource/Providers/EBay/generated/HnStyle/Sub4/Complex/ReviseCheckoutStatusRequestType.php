<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ReviseCheckoutStatusRequestType
 * Enables a seller to update the payment status of an item.
 */
class ReviseCheckoutStatusRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $transactionid;
    /**
     * @var string | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
     * orders.
     */
    public $orderid;
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
    public $amountpaid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BuyerPaymentMethodCodeType | Payment method the buyer selected for paying the seller for the transaction. If checkout
     * is not yet complete, PaymentMethodUsed is set to whatever the buyer selected as his or
     * her preference on the Review Your Purchase page.
     */
    public $paymentmethodused;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CompleteStatusCodeType | Indicates the current status of the checkout process for the transaction.
     */
    public $checkoutstatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\token | A domestic shipping service offered for shipping the item (for example, UPS Ground).
     * For a list of valid values that you can cache for future use, call GeteBayDetails with
     * DetailName set to ShippingServiceDetails. For flat and calculated shipping. Also applicable
     * to Half.com (for GetOrders).
     */
    public $shippingservice;
    /**
     * @var boolean | Whether shipping costs are to be part of the base amount that is taxed. GetTaxTable:
     * This tag is empty if the user did not previously provide information.
     */
    public $shippingincludedintax;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CheckoutMethodCodeType | Not supported.
     */
    public $checkoutmethod;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\InsuranceSelectedCodeType | The insurance option selected by the buyer.
     */
    public $insurancetype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RCSPaymentStatusCodeType | Not supported.
     */
    public $paymentstatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Adjustment amount entered by the buyer. A positive amount indicates the amount is an
     * extra charge being paid to the seller by the buyer. A negative value indicates this
     * amount is a credit given to the buyer by the seller. Not applicable to Half.com.
     */
    public $adjustmentamount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType | The address to which the item is to be shipped.
     */
    public $shippingaddress;
    /**
     * @var string | eBay ID for the buyer in the transaction being revised. A transaction is uniquely identified
     * by one of two means: (a) You provide a TransactionID and ItemID. (This is the preferred
     * approach.), OR, (b) You provide a BuyerID and ItemID and eBay identifies only one transaction
     * for that combination (an error is returned if there are multiple transactions for that
     * combination). Note: If all three are provided (that is, BuyerID, ItemID and TransactionID),
     * BuyerID is ignored.
     */
    public $buyerid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The insurance cost associated with shipping a single item with this shipping service.
     * Exception: for GetItemShipping, this is proportional to QuantitySold. If the item has
     * not yet been sold, insurance information cannot be calculated and the value is 0.00.
     * For calculated shipping only. Also applicable to Half.com (for GetOrders).
     */
    public $shippinginsurancecost;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Sales tax details. US site only. Flat and calculated shipping. Also applicable to Half.com
     * (for GetOrders). If your application normally calculates sales tax without using eBay's
     * tax tables, you should understand how purchases via eBay Express will affect the way you
     * process payments. For general information about listings on eBay Express, see the eBay
     * Web Services Guide links below. Not applicable to eBay Motors vehicle listings.
     */
    public $salestax;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Amount of money paid for shipping. For Third-party Checkout applications.
     */
    public $shippingcost;
    /**
     * @var string | Not supported.
     */
    public $encryptedid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalTransactionType | A PayPal transaction that relates to this eBay transaction. Returned only if there is
     * at least one PayPal transaction related to this eBay transaction. Not applicable to
     * Half.com.
     */
    public $externaltransaction;
    /**
     * @var string | Not supported.
     */
    public $multiplesellerpaymentid;
    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
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
     * @param string $val
     * @throws Exception
     */
    public function setOrderID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderID');
        }
        $this->orderid = (int)$val;
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
     * @param BuyerPaymentMethodCodeType $val
     * @throws Exception
     */
    public function setPaymentMethodUsed($val)
    {
        $this->paymentmethodused = (int)$val;
    }

    /**
     * @param CompleteStatusCodeType $val
     * @throws Exception
     */
    public function setCheckoutStatus($val)
    {
        $this->checkoutstatus = (int)$val;
    }

    /**
     * @param token $val
     * @throws Exception
     */
    public function setShippingService($val)
    {
        $this->shippingservice = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShippingIncludedInTax($val)
    {
        $this->shippingincludedintax = (int)$val;
    }

    /**
     * @param CheckoutMethodCodeType $val
     * @throws Exception
     */
    public function setCheckoutMethod($val)
    {
        $this->checkoutmethod = (int)$val;
    }

    /**
     * @param InsuranceSelectedCodeType $val
     * @throws Exception
     */
    public function setInsuranceType($val)
    {
        $this->insurancetype = (int)$val;
    }

    /**
     * @param RCSPaymentStatusCodeType $val
     * @throws Exception
     */
    public function setPaymentStatus($val)
    {
        $this->paymentstatus = (int)$val;
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
     * @param AddressType $val
     * @throws Exception
     */
    public function setShippingAddress($val)
    {
        $this->shippingaddress = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBuyerID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BuyerID');
        }
        $this->buyerid = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setShippingInsuranceCost($val)
    {
        $this->shippinginsurancecost = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setSalesTax($val)
    {
        $this->salestax = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setShippingCost($val)
    {
        $this->shippingcost = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEncryptedID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EncryptedID');
        }
        $this->encryptedid = (int)$val;
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
     * @param string $val
     * @throws Exception
     */
    public function setMultipleSellerPaymentID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MultipleSellerPaymentID');
        }
        $this->multiplesellerpaymentid = (int)$val;
    }
}
