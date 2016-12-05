<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SendInvoiceRequestType
 * Enables a seller to send an invoice to a buyer involved in the transaction.
 */
class SendInvoiceRequestType extends
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderIDType | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
     * orders.
     */
    public $OrderID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\InternationalShippingServiceOptionsType | Shipping costs and options related to an international shipping service. When used as
     * input, if one is provided, at least one domestic ShippingService must be provided.<br> <br> Not
     * applicable to invoices for digital listings.
     */
    public $InternationalShippingServiceOptions;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingServiceOptionsType | Shipping costs and options related to domestic shipping services offered by the seller.
     * Flat and calculated shipping. Required if InternationalShippingServiceOption is specified.<br> <br> If
     * you specify multiple ShippingServiceOptions nodes, the repeating nodes must be contiguous.
     * For example, you can insert InternationalShippingServiceOption nodes after a list of
     * repeating ShippingServiceOptions nodes, but not between them:<br> <br> &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br> &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br> &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br> &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br> &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br><br> <br> If
     * you specify ShippingDetails when you revise or relist an item but you omit ShippingServiceOptions,
     * eBay will drop the domestic shipping services from the listing. This may also have unintended
     * side effects, as other fields that depend on this data may be dropped as well. To retain
     * the shipping services and dependent fields when you modify other shipping details, it
     * may be simplest to specify all ShippingDetails that you still want to include in the listing.<br> <br> Not
     * applicable to Half.com or eBay Motors vehicle listings.
     */
    public $ShippingServiceOptions;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalesTaxType | Sales tax details. US site only. Flat and calculated shipping. Also applicable to Half.com
     * (for GetOrders). If your application normally calculates sales tax without using eBay's
     * tax tables, you should understand how purchases via eBay Express will affect the way you
     * process payments. For general information about listings on eBay Express, see the eBay
     * Web Services Guide links below. Not applicable to eBay Motors vehicle listings.
     */
    public $SalesTax;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\InsuranceOptionCodeType | Whether the seller offers shipping insurance and, if so, whether the insurance is optional
     * or required. Flat and calculated shipping. Optional as input and only allowed if ChangePaymentInstructions
     * is true. Also applicable to Half.com (for GetOrders). This field is ignored when Item.ListingType=Express.
     */
    public $InsuranceOption;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Cost of shipping insurance set by the seller. If the buyer bought more than one of this
     * item, this is the insurance for just a single item. Exception: for GetItemShipping,
     * this is proportional to QuantitySold. Value should be greater than 0.00 if InsuranceOption is
     * Optional or Required. For flat shipping only. Optional as input and only allowed if
     * ChangePaymentInstructions is true. Also applicable to Half.com (for GetOrders). This
     * field is ignored when Item.ListingType=Express. Not applicable to eBay Motors vehicle
     * listings.
     */
    public $InsuranceFee;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BuyerPaymentMethodCodeType | The payment methods the buyer uses to pay for      the order. An order can have multiple
     * payment methods if the      buyer combines several transactions into one order.
     *  Also applicable to Half.com (for GetOrders).
     */
    public $PaymentMethods;
    /**
     * @var string | Valid PayPal email address for the PayPal account that the seller will use if they offer
     * PayPal as a payment method for the listing. eBay uses this to identify the correct PayPal
     * account when the buyer pays via PayPal during the checkout process. (As a seller can
     * have more than one PayPal account, you cannot necessarily rely on PayPal account data
     * returned from GetUser for details about the account associated with the PayPal email
     * address that the seller specifies.)<br> <br> Required if seller has chosen PayPal as
     * a payment method (PaymentMethods) for the listing.<br> <br> For a listing to be eligible
     * for Express US, the seller needs to use an email address that is in good standing and
     * that is associated with a PayPal Premier or PayPal business account that is set to ship
     * to unconfirmed addresses. For Express Germany, PayPalEmailAddress must be specified
     * for Express format listings, but it is optional for other formats (as long as an eligible
     * default PayPal account is specified in the seller's Express preferences). If the specified
     * PayPal account becomes ineligible for eBay Express payments (because the seller blocked
     * unconfirmed addresses or some other change occurred), the items associated with that
     * account may become ineligible for Express and may no longer appear on Express. See eBay
     * Express information in the eBay Web Services Guide for more information.<br> <br> For
     * digital listings, the seller needs to use an email address that is associated with a
     * PayPal Premier or PayPal business account. <br> <br> <b>For ReviseItem and RelistItem
     * only:</b> To remove this value when you revise or relist an item, use DeletedField.
     * When you revise a listing, if the listing has bids (or items have been sold) or it ends
     * within 12 hours, you can add PayPalEmailAddress, but you cannot remove it.<br> <br> Not
     * applicable to eBay Motors listings. Also not applicable to Half.com.
     */
    public $PayPalEmailAddress;
    /**
     * @var string | Seller's Payment instructions/message to the buyer and return policy. Default is null.
     */
    public $CheckoutInstructions;
    /**
     * @var boolean | Specifies whether the seller wishes to be copied on the invoice email that will be sent
     * to the buyer. Default will be true.
     */
    public $EmailCopyToSeller;
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
     * @param OrderIDType $val
     * @throws Exception
     */
    public function setOrderID($val)
    {
        $this->OrderID = (OrderIDType)$val;
    }

    /**
     * @param InternationalShippingServiceOptionsType $val
     * @throws Exception
     */
    public function setInternationalShippingServiceOptions($val)
    {
        $this->InternationalShippingServiceOptions = (InternationalShippingServiceOptionsType)$val;
    }

    /**
     * @param ShippingServiceOptionsType $val
     * @throws Exception
     */
    public function setShippingServiceOptions($val)
    {
        $this->ShippingServiceOptions = (ShippingServiceOptionsType)$val;
    }

    /**
     * @param SalesTaxType $val
     * @throws Exception
     */
    public function setSalesTax($val)
    {
        $this->SalesTax = (SalesTaxType)$val;
    }

    /**
     * @param InsuranceOptionCodeType $val
     * @throws Exception
     */
    public function setInsuranceOption($val)
    {
        $this->InsuranceOption = (InsuranceOptionCodeType)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setInsuranceFee($val)
    {
        $this->InsuranceFee = (AmountType)$val;
    }

    /**
     * @param BuyerPaymentMethodCodeType $val
     * @throws Exception
     */
    public function setPaymentMethods($val)
    {
        $this->PaymentMethods = (BuyerPaymentMethodCodeType)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPayPalEmailAddress($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PayPalEmailAddress');
        }
        $this->PayPalEmailAddress = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCheckoutInstructions($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CheckoutInstructions');
        }
        $this->CheckoutInstructions = (string)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEmailCopyToSeller($val)
    {
        $this->EmailCopyToSeller = (boolean)$val;
    }
}
