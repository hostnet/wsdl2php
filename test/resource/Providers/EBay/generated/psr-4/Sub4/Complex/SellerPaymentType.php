<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SellerPaymentType
 * A payment between Half.com and a seller. The financial value of a payment is typically based
 * on an amount that a buyer paid to Half.com for a transaction, plus the shipping cost the
 * buyer paid for the item, minus Half.com's commission. Each payment is for one transaction
 * for one item in one order.
 */
class SellerPaymentType
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderIDType | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
     * orders.
     */
    public $orderid;
    /**
     * @var string | An ID that the seller specified when they listed the Half.com item, if any. It can be
     * used for the seller's SKU. Note that SellerInventoryID is not returned if no ID was
     * specified. (Note: The SKU field used for eBay.com listings is not applicable to Half.com
     * listings.)
     */
    public $sellerinventoryid;
    /**
     * @var string | A text note that the seller specified for the Half.com item, if any. Only visible to
     * the seller. Not returned if the seller specified no notes.
     */
    public $privatenotes;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
     * item. All Half.com items are listed with Pre-filled Item Information.
     */
    public $externalproductid;
    /**
     * @var string | Title of a Want It Now post.
     */
    public $title;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaymentTypeCodeType | Indicates whether the payment is for a Half.com sale or a refund.
     */
    public $paymenttype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Price of the transaction (before shipping and sales tax) that the buyer needs to pay to
     * complete the purchase. For eBay Motors, TransactionPrice is the deposit amount. Also
     * applicable to Half.com (for GetOrders).
     */
    public $transactionprice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The adjusted shipping cost that Half.com pays the seller. If multiple items from the
     * same seller are in the same order, this amount may be less than the rate for shipping
     * the item individually. This amount may also be adjusted due to Half.com handling charges.
     * (Due to the way shipping costs are calculated, this value may be different for identical
     * items in different orders.)
     */
    public $shippingreimbursement;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Amount of commission charged by Half.com.
     */
    public $commission;
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
     * @var dateTime | Indicates the time when the transaction was marked paid, if known. The value is set
     * by eBay when payment is made via PayPal or a third-party checkout flow. This value is
     * also set when the seller marks the item as paid by using ReviseCheckoutStatus or CompleteSale. The
     * seller can also mark the item as paid by using My eBay or Selling Manager Pro. Note
     * that this value is only visible if the request user is the buyer or seller associated
     * with the transaction. If the item is marked as paid but the seller is not a Selling
     * Manager Pro user, PaidTime returns the transaction creation time instead. Not applicable
     * to Half.com.
     */
    public $paidtime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
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
     * @param OrderIDType $val
     * @throws Exception
     */
    public function setOrderID($val)
    {
        $this->orderid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerInventoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerInventoryID');
        }
        $this->sellerinventoryid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPrivateNotes($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PrivateNotes');
        }
        $this->privatenotes = (int)$val;
    }

    /**
     * @param ExternalProductIDType $val
     * @throws Exception
     */
    public function setExternalProductID($val)
    {
        $this->externalproductid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Title');
        }
        $this->title = (int)$val;
    }

    /**
     * @param PaymentTypeCodeType $val
     * @throws Exception
     */
    public function setPaymentType($val)
    {
        $this->paymenttype = (int)$val;
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
     * @param AmountType $val
     * @throws Exception
     */
    public function setShippingReimbursement($val)
    {
        $this->shippingreimbursement = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setCommission($val)
    {
        $this->commission = (int)$val;
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
     * @param dateTime $val
     * @throws Exception
     */
    public function setPaidTime($val)
    {
        $this->paidtime = (int)$val;
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