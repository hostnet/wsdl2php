<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ShipmentType
 *
 */
class ShipmentType
{
    /**
     * @var dateTime |      */
    public $estimateddeliverydate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType |      */
    public $insuredvalue;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | Depth dimension of the package needed to ship the item after it is sold.
     * For calculated shipping only.
     */
    public $packagedepth;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | Length dimension of the package needed to ship the item after it is sold.
     *  For calculated shipping only.
     */
    public $packagelength;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | Width dimension of the package needed to ship the item after it is sold.
     * For calculated shipping only.
     */
    public $packagewidth;
    /**
     * @var string |      */
    public $paypalshipmentid;
    /**
     * @var long |      */
    public $shipmentid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType |      */
    public $postagetotal;
    /**
     * @var dateTime |      */
    public $printedtime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType | The address from which the item is being shipped.
     */
    public $shipfromaddress;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType | The address to which the item is to be shipped.
     */
    public $shippingaddress;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingCarrierCodeType | The shipping carrier used.
     */
    public $shippingcarrierused;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingFeatureCodeType |      */
    public $shippingfeature;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingPackageCodeType | The size of the package used to ship the item(s). See ShippingPackageCodeType
     *      for its possible values. Input.
     */
    public $shippingpackage;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\token | The shipping service that actually shipped the item(s). Not applicable to Half.com.
     */
    public $shippingserviceused;
    /**
     * @var string | Shipment tracking number supplied by the shipping carrier. Not applicable to Half.com.
     */
    public $shipmenttrackingnumber;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | See the documentation regarding "Working with Item Weights".            The 'unit' attribute
     * can have a value of lbs.
     */
    public $weightmajor;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | See the documentation regarding "Working with Item Weights". The 'unit' attribute is
     * optional and assumed to be the minor compared to the value of 'unit' in WeightMajor.
     */
    public $weightminor;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemTransactionIDType |      */
    public $itemtransactionid;
    /**
     * @var dateTime | Revise only
     */
    public $deliverydate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShipmentDeliveryStatusCodeType | Revise only
     */
    public $deliverystatus;
    /**
     * @var dateTime | Revise only
     */
    public $refundgrantedtime;
    /**
     * @var dateTime | Revise only
     */
    public $refundrequestedtime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShipmentStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $status;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEstimatedDeliveryDate($val)
    {
        $this->estimateddeliverydate = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setInsuredValue($val)
    {
        $this->insuredvalue = (int)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setPackageDepth($val)
    {
        $this->packagedepth = (int)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setPackageLength($val)
    {
        $this->packagelength = (int)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setPackageWidth($val)
    {
        $this->packagewidth = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPayPalShipmentID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PayPalShipmentID');
        }
        $this->paypalshipmentid = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setShipmentID($val)
    {
        $this->shipmentid = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setPostageTotal($val)
    {
        $this->postagetotal = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setPrintedTime($val)
    {
        $this->printedtime = (int)$val;
    }

    /**
     * @param AddressType $val
     * @throws Exception
     */
    public function setShipFromAddress($val)
    {
        $this->shipfromaddress = (int)$val;
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
     * @param ShippingCarrierCodeType $val
     * @throws Exception
     */
    public function setShippingCarrierUsed($val)
    {
        $this->shippingcarrierused = (int)$val;
    }

    /**
     * @param ShippingFeatureCodeType $val
     * @throws Exception
     */
    public function setShippingFeature($val)
    {
        $this->shippingfeature = (int)$val;
    }

    /**
     * @param ShippingPackageCodeType $val
     * @throws Exception
     */
    public function setShippingPackage($val)
    {
        $this->shippingpackage = (int)$val;
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
     * @param MeasureType $val
     * @throws Exception
     */
    public function setWeightMajor($val)
    {
        $this->weightmajor = (int)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setWeightMinor($val)
    {
        $this->weightminor = (int)$val;
    }

    /**
     * @param ItemTransactionIDType $val
     * @throws Exception
     */
    public function setItemTransactionID($val)
    {
        $this->itemtransactionid = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDeliveryDate($val)
    {
        $this->deliverydate = (int)$val;
    }

    /**
     * @param ShipmentDeliveryStatusCodeType $val
     * @throws Exception
     */
    public function setDeliveryStatus($val)
    {
        $this->deliverystatus = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRefundGrantedTime($val)
    {
        $this->refundgrantedtime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRefundRequestedTime($val)
    {
        $this->refundrequestedtime = (int)$val;
    }

    /**
     * @param ShipmentStatusCodeType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->status = (int)$val;
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
