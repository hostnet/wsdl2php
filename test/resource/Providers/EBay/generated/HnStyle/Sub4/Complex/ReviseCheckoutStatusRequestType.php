<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ReviseCheckoutStatusRequestType
 * Enables a seller to update the payment status of an item.
 */
class ReviseCheckoutStatusRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $TransactionID;
    /**
     * @var string | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
     * orders.
     */
    public $OrderID;
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BuyerPaymentMethodCodeType | Payment method the buyer selected for paying the seller for the transaction. If checkout
     * is not yet complete, PaymentMethodUsed is set to whatever the buyer selected as his or
     * her preference on the Review Your Purchase page.
     */
    public $PaymentMethodUsed;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CompleteStatusCodeType | Indicates the current status of the checkout process for the transaction.
     */
    public $CheckoutStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\token | A domestic shipping service offered for shipping the item (for example, UPS Ground).
     * For a list of valid values that you can cache for future use, call GeteBayDetails with
     * DetailName set to ShippingServiceDetails. For flat and calculated shipping. Also applicable
     * to Half.com (for GetOrders).
     */
    public $ShippingService;
    /**
     * @var boolean | Whether shipping costs are to be part of the base amount that is taxed. GetTaxTable:
     * This tag is empty if the user did not previously provide information.
     */
    public $ShippingIncludedInTax;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CheckoutMethodCodeType | Not supported.
     */
    public $CheckoutMethod;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\InsuranceSelectedCodeType | The insurance option selected by the buyer.
     */
    public $InsuranceType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RCSPaymentStatusCodeType | Not supported.
     */
    public $PaymentStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Adjustment amount entered by the buyer. A positive amount indicates the amount is an
     * extra charge being paid to the seller by the buyer. A negative value indicates this
     * amount is a credit given to the buyer by the seller. Not applicable to Half.com.
     */
    public $AdjustmentAmount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType | The address to which the item is to be shipped.
     */
    public $ShippingAddress;
    /**
     * @var string | eBay ID for the buyer in the transaction being revised. A transaction is uniquely identified
     * by one of two means: (a) You provide a TransactionID and ItemID. (This is the preferred
     * approach.), OR, (b) You provide a BuyerID and ItemID and eBay identifies only one transaction
     * for that combination (an error is returned if there are multiple transactions for that
     * combination). Note: If all three are provided (that is, BuyerID, ItemID and TransactionID),
     * BuyerID is ignored.
     */
    public $BuyerID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The insurance cost associated with shipping a single item with this shipping service.
     * Exception: for GetItemShipping, this is proportional to QuantitySold. If the item has
     * not yet been sold, insurance information cannot be calculated and the value is 0.00.
     * For calculated shipping only. Also applicable to Half.com (for GetOrders).
     */
    public $ShippingInsuranceCost;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Sales tax details. US site only. Flat and calculated shipping. Also applicable to Half.com
     * (for GetOrders). If your application normally calculates sales tax without using eBay's
     * tax tables, you should understand how purchases via eBay Express will affect the way you
     * process payments. For general information about listings on eBay Express, see the eBay
     * Web Services Guide links below. Not applicable to eBay Motors vehicle listings.
     */
    public $SalesTax;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Amount of money paid for shipping. For Third-party Checkout applications.
     */
    public $ShippingCost;
    /**
     * @var string | Not supported.
     */
    public $EncryptedID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalTransactionType | A PayPal transaction that relates to this eBay transaction. Returned only if there is
     * at least one PayPal transaction related to this eBay transaction. Not applicable to
     * Half.com.
     */
    public $ExternalTransaction;
    /**
     * @var string | Not supported.
     */
    public $MultipleSellerPaymentID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (ItemIDType)$val;
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
        $this->TransactionID = (string)$val;
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
        $this->OrderID = (string)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAmountPaid($val)
    {
        $this->AmountPaid = (AmountType)$val;
    }

    /**
     * @param BuyerPaymentMethodCodeType $val
     * @throws Exception
     */
    public function setPaymentMethodUsed($val)
    {
        $this->PaymentMethodUsed = (BuyerPaymentMethodCodeType)$val;
    }

    /**
     * @param CompleteStatusCodeType $val
     * @throws Exception
     */
    public function setCheckoutStatus($val)
    {
        $this->CheckoutStatus = (CompleteStatusCodeType)$val;
    }

    /**
     * @param token $val
     * @throws Exception
     */
    public function setShippingService($val)
    {
        $this->ShippingService = (token)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShippingIncludedInTax($val)
    {
        $this->ShippingIncludedInTax = (boolean)$val;
    }

    /**
     * @param CheckoutMethodCodeType $val
     * @throws Exception
     */
    public function setCheckoutMethod($val)
    {
        $this->CheckoutMethod = (CheckoutMethodCodeType)$val;
    }

    /**
     * @param InsuranceSelectedCodeType $val
     * @throws Exception
     */
    public function setInsuranceType($val)
    {
        $this->InsuranceType = (InsuranceSelectedCodeType)$val;
    }

    /**
     * @param RCSPaymentStatusCodeType $val
     * @throws Exception
     */
    public function setPaymentStatus($val)
    {
        $this->PaymentStatus = (RCSPaymentStatusCodeType)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAdjustmentAmount($val)
    {
        $this->AdjustmentAmount = (AmountType)$val;
    }

    /**
     * @param AddressType $val
     * @throws Exception
     */
    public function setShippingAddress($val)
    {
        $this->ShippingAddress = (AddressType)$val;
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
        $this->BuyerID = (string)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setShippingInsuranceCost($val)
    {
        $this->ShippingInsuranceCost = (AmountType)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setSalesTax($val)
    {
        $this->SalesTax = (AmountType)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setShippingCost($val)
    {
        $this->ShippingCost = (AmountType)$val;
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
        $this->EncryptedID = (string)$val;
    }

    /**
     * @param ExternalTransactionType $val
     * @throws Exception
     */
    public function setExternalTransaction($val)
    {
        $this->ExternalTransaction = (ExternalTransactionType)$val;
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
        $this->MultipleSellerPaymentID = (string)$val;
    }
}
