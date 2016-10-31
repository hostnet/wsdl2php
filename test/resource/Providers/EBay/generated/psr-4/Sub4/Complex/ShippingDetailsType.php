<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ShippingDetailsType
 * Type for the shipping-related details for an item or transaction, including flat and calculated
 * shipping costs and shipping insurance costs.
 */
class ShippingDetailsType
{
    /**
     * @var boolean | Instead of using this tag, see the PaymentEdited tag. Originally, the AllowPaymentEdit
     * tag specified whether the seller allows the buyer to edit the payment amount for the
     * transaction. (Sellers enabled this property in their My eBay user preferences on the eBay
     * site.) ShippingDetails.AllowPaymentEdit is no longer being populated by calls to GetItemTransactions. Not
     * applicable to Half.com.
     */
    public $allowpaymentedit;
    /**
     * @var boolean | Whether the seller specifies that a shipping discount is to be applied (in the event
     * that an item's transaction is later combined with others into a single order). Not applicable
     * to Half.com.
     */
    public $applyshippingdiscount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CalculatedShippingRateType | Details pertinent to one or more items for which calculated shipping has been offered
     * by the seller, such as package dimension and weight and packaging/handling costs. Not
     * applicable to Half.com or eBay Motors vehicle listings. For Germany and the UK, this
     * field is ignored when Item.ListingType=Express.
     */
    public $calculatedshippingrate;
    /**
     * @var boolean | Whether the seller specified payment and shipping instructions during checkout (for example,
     * to update the details of a transaction). Flat and calculated shipping. Not applicable
     * to Half.com.
     */
    public $changepaymentinstructions;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Cost of shipping insurance set by the seller. If the buyer bought more than one of this
     * item, this is the insurance for just a single item. Exception: for GetItemShipping,
     * this is proportional to QuantitySold. Value should be greater than 0.00 if InsuranceOption is
     * Optional or Required. For flat shipping only. Optional as input and only allowed if
     * ChangePaymentInstructions is true. Also applicable to Half.com (for GetOrders). This
     * field is ignored when Item.ListingType=Express. Not applicable to eBay Motors vehicle
     * listings.
     */
    public $insurancefee;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\InsuranceOptionCodeType | Whether the seller offers shipping insurance and, if so, whether the insurance is optional
     * or required. Flat and calculated shipping. Optional as input and only allowed if ChangePaymentInstructions
     * is true. Also applicable to Half.com (for GetOrders). This field is ignored when Item.ListingType=Express.
     */
    public $insuranceoption;
    /**
     * @var boolean | Whether the buyer selected to pay for insurance offered by the seller as an option.
     * This only has a value after the buyer has gone through checkout and selected the insurance preference. Also
     * applicable to Half.com (for GetOrders).
     */
    public $insurancewanted;
    /**
     * @var boolean | Whether the seller allows the buyer to edit the payment amount for the transaction.
     * (Sellers enable this property in their My eBay user preferences on the eBay site.) Not
     * applicable to Half.com.
     */
    public $paymentedited;
    /**
     * @var string | Payment instructions/message from the seller to the buyer. These instructions appear
     * on eBay's View Item page and on eBay's checkout page when the buyer pays for the item.
     * Sellers usually use this field to specify payment instructions, return policy details, how
     * soon the item will shipped, feedback instructions, and other reminders that the buyer
     * should be aware of when they bid on or buy an item. This field can be specified regardless
     * of the shipping type. Some sites also let you specify a standard return policy by using Item.AttributeSetArray
     * in addition or instead. eBay only allows 500 characters as input (250 for China and
     * Taiwan), but due to the way the eBay Web site UI treats characters, this field can return
     * more than 500 characters in the response. Characters like & and ' (apostrophe/single
     * quote) count as 5 characters each. To remove this value when revising or relisting an
     * item, use DeletedField. Applicable to eBay Motors (usually used for the return policy). Not
     * applicable to Half.com.
     */
    public $paymentinstructions;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SalesTaxType | Sales tax details. US site only. Flat and calculated shipping. Also applicable to Half.com
     * (for GetOrders). If your application normally calculates sales tax without using eBay's
     * tax tables, you should understand how purchases via eBay Express will affect the way you
     * process payments. For general information about listings on eBay Express, see the eBay
     * Web Services Guide links below. Not applicable to eBay Motors vehicle listings.
     */
    public $salestax;
    /**
     * @var string | Not be returned with compatibility level 483 and higher. See Item.PostalCode instead. This
     * field will be deleted from the schema in early 2007. Not for calculating shipping costs--see CalculatedShippingRateType.OriginatingPostalCode.
     */
    public $sellerpostalcode;
    /**
     * @var string | For most applicable calls, returns the words No Error or returns an error message related
     * to an attempt to calculate shipping rates. For calculated shipping only. Not applicable
     * to Half.com or eBay Motors vehicle listings. <br> <br> GetSearchResultsExpress returns
     * this when no PostalCode was specified in the request and the item was listed with calculated
     * shipping rates. The message text explains that a postal code is needed to calculate
     * shipping. Only returned when ItemDetails is set to Fine.
     */
    public $shippingrateerrormessage;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingRateTypeCodeType | A shipping rate scale for shipping through UPS that affects the shipping cost calculated
     * for UPS (lower if ShippingRateType is DailyPickup). ShippingRateType is only returned
     * if ShippingService is one of the UPS shipping services. For calculated shipping only. Not
     * applicable to Half.com or eBay Motors vehicle listings.
     */
    public $shippingratetype;
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
    public $shippingserviceoptions;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\InternationalShippingServiceOptionsType | Shipping costs and options related to an international shipping service. If used, at
     * least one domestic shipping service must also be provided in ShippingServiceOptions.<br> <br> If
     * you specify multiple InternationalShippingServiceOption nodes, the repeating nodes must
     * be contiguous. That is, you cannot insert other nodes between InternationalShippingServiceOption
     * nodes.<br> <br> If you specify ShippingDetails when you revise or relist an item but
     * you omit InternationalShippingServiceOption, eBay will drop the international shipping services
     * from the listing. This may also have unintended side effects, as other fields that depend
     * on this data may be dropped as well. To retain the shipping services and dependent fields
     * when you modify other shipping details, it may be simplest to specify all ShippingDetails
     * that you still want to include in the listing.<br> <br> Not applicable to Half.com or
     * eBay Motors vehicle listings. This field is ignored when Item.ListingType=Express.
     */
    public $internationalshippingserviceoption;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingTypeCodeType | The shipping cost model offered by the seller. This is not returned for various calls
     * since shipping type can be deduced: if a CalculatedShippingRate structure is returned
     * by the call, the shipping type is Calculated. Otherwise, it is one of the other non-Calculated
     * shipping types. Not applicable to Half.com.
     */
    public $shippingtype;
    /**
     * @var int | Applicable to Selling Manager Pro sellers. Also applicable to Half.com (for GetOrders).
     * For GetOrders, the Transaction container includes this element within ShippingDetails.
     */
    public $sellingmanagersalesrecordnumber;
    /**
     * @var boolean | Whether checkout for this is to be handled by a Third-Party Checkout application. The
     * counterpart in the Add family of calls is Item.ThirdPartyCheckout. Not applicable to
     * Half.com.
     */
    public $thirdpartycheckout;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TaxTableType | Tax details for a jurisdiction such as a state or province. Returns empty in GetItem
     * if no tax table was used. Not applicable to Half.com.
     */
    public $taxtable;
    /**
     * @var boolean | Indicates whether the seller has opted the listing into the Get It Fast feature. If
     * GetItFast is true and if at least one of the domestic shipping services offered by the
     * seller is an expedited shipping service, every shipping service offered by the seller
     * is considered a Get It Fast service, and the seller commits to delivering the item to
     * the buyer-selected shipping service within one day. Also applicable to Half.com (for
     * GetOrders).
     */
    public $getitfast;
    /**
     * @var string | Shipment tracking number supplied by the shipping carrier. Not applicable to Half.com.
     */
    public $shipmenttrackingnumber;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\token | The shipping service that actually shipped the item(s). Not applicable to Half.com.
     */
    public $shippingserviceused;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The default shipping cost for the item. If the seller specified multiple shipping services,
     * this is the "first" shipping service as specified by the seller when they listed the
     * item. <br> <br> For GetSearchResults:<br> If ShippingType has the value Flat, then the
     * actual shipping cost is shown. If ShippingType has the value Free, then zero is shown.
     * If ShippingType has the value Calculated, then this tag (DefaultShippingCost) is not
     * shown. If ShippingType has the value NotSpecified, then this tag (DefaultShippingCost)
     * is not shown. If ShippingType has the value Freight, then this tag (DefaultShippingCost)
     * is not shown. <br> <br> In GetSearchResultsExpress:<br> If flat shipping was specified
     * or the shipping cost is 0.00 (free) for the item, then the actual shipping cost is shown.
     * If calculated shipping was specified for the item, then this tag (DefaultShippingCost)
     * is only shown if PostalCode is specified in the GetSearchResultsExpress request. Otherwise,
     * ShippingRateErrorMessage is returned with a message that the postal code is required
     * for the shipping calculation. Only returned when ItemDetails is set to Fine. <br> <br> Not
     * applicable to Half.com.
     */
    public $defaultshippingcost;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\InsuranceDetailsType | Container for domestic insurance information. If provided on input, ShippingDetails.InsuranceFee
     * and ShippingDetails.InsuranceOption are ignored if provided. If omitted on input, InsuranceDetails.InsuranceFee
     * and InsuranceDetails.InsuranceOption are set to match ShippingDetails.InsuranceFee and
     * ShippingDetails.InsuranceOption.
     */
    public $insurancedetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\InsuranceDetailsType | Container for international insurance information. If provided on input, ShippingDetails.InsuranceFee
     * and ShippingDetails.InsuranceOption are ignored if provided. If omitted on input, InternationalInsuranceDetails.InsuranceFee
     * and InternationalInsuranceDetails.InsuranceOption are set to match ShippingDetails.InsuranceFee
     * and ShippingDetails.InsuranceOption.
     */
    public $internationalinsurancedetails;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setAllowPaymentEdit($val)
    {
        $this->allowpaymentedit = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setApplyShippingDiscount($val)
    {
        $this->applyshippingdiscount = (int)$val;
    }

    /**
     * @param CalculatedShippingRateType $val
     * @throws Exception
     */
    public function setCalculatedShippingRate($val)
    {
        $this->calculatedshippingrate = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setChangePaymentInstructions($val)
    {
        $this->changepaymentinstructions = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setInsuranceFee($val)
    {
        $this->insurancefee = (int)$val;
    }

    /**
     * @param InsuranceOptionCodeType $val
     * @throws Exception
     */
    public function setInsuranceOption($val)
    {
        $this->insuranceoption = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setInsuranceWanted($val)
    {
        $this->insurancewanted = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPaymentEdited($val)
    {
        $this->paymentedited = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPaymentInstructions($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PaymentInstructions');
        }
        $this->paymentinstructions = (int)$val;
    }

    /**
     * @param SalesTaxType $val
     * @throws Exception
     */
    public function setSalesTax($val)
    {
        $this->salestax = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SellerPostalCode');
        }
        $this->sellerpostalcode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setShippingRateErrorMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ShippingRateErrorMessage');
        }
        $this->shippingrateerrormessage = (int)$val;
    }

    /**
     * @param ShippingRateTypeCodeType $val
     * @throws Exception
     */
    public function setShippingRateType($val)
    {
        $this->shippingratetype = (int)$val;
    }

    /**
     * @param ShippingServiceOptionsType $val
     * @throws Exception
     */
    public function setShippingServiceOptions($val)
    {
        $this->shippingserviceoptions = (int)$val;
    }

    /**
     * @param InternationalShippingServiceOptionsType $val
     * @throws Exception
     */
    public function setInternationalShippingServiceOption($val)
    {
        $this->internationalshippingserviceoption = (int)$val;
    }

    /**
     * @param ShippingTypeCodeType $val
     * @throws Exception
     */
    public function setShippingType($val)
    {
        $this->shippingtype = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setSellingManagerSalesRecordNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->sellingmanagersalesrecordnumber = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setThirdPartyCheckout($val)
    {
        $this->thirdpartycheckout = (int)$val;
    }

    /**
     * @param TaxTableType $val
     * @throws Exception
     */
    public function setTaxTable($val)
    {
        $this->taxtable = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setGetItFast($val)
    {
        $this->getitfast = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setShipmentTrackingNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ShipmentTrackingNumber');
        }
        $this->shipmenttrackingnumber = (int)$val;
    }

    /**
     * @param token $val
     * @throws Exception
     */
    public function setShippingServiceUsed($val)
    {
        $this->shippingserviceused = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setDefaultShippingCost($val)
    {
        $this->defaultshippingcost = (int)$val;
    }

    /**
     * @param InsuranceDetailsType $val
     * @throws Exception
     */
    public function setInsuranceDetails($val)
    {
        $this->insurancedetails = (int)$val;
    }

    /**
     * @param InsuranceDetailsType $val
     * @throws Exception
     */
    public function setInternationalInsuranceDetails($val)
    {
        $this->internationalinsurancedetails = (int)$val;
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