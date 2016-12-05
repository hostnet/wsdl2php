<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ShipmentType
 *
 */
class ShipmentType
{
    // @codingStandardsIgnoreStart
    /**
     * @var dateTime |      */
    public $EstimatedDeliveryDate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType |      */
    public $InsuredValue;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | Depth dimension of the package needed to ship the item after it is sold.
     * For calculated shipping only.
     */
    public $PackageDepth;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | Length dimension of the package needed to ship the item after it is sold.
     *  For calculated shipping only.
     */
    public $PackageLength;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | Width dimension of the package needed to ship the item after it is sold.
     * For calculated shipping only.
     */
    public $PackageWidth;
    /**
     * @var string |      */
    public $PayPalShipmentID;
    /**
     * @var long |      */
    public $ShipmentID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType |      */
    public $PostageTotal;
    /**
     * @var dateTime |      */
    public $PrintedTime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType | The address from which the item is being shipped.
     */
    public $ShipFromAddress;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddressType | The address to which the item is to be shipped.
     */
    public $ShippingAddress;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingCarrierCodeType | The shipping carrier used.
     */
    public $ShippingCarrierUsed;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingFeatureCodeType |      */
    public $ShippingFeature;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShippingPackageCodeType | The size of the package used to ship the item(s). See ShippingPackageCodeType
     *      for its possible values. Input.
     */
    public $ShippingPackage;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\token | The shipping service that actually shipped the item(s). Not applicable to Half.com.
     */
    public $ShippingServiceUsed;
    /**
     * @var string | Shipment tracking number supplied by the shipping carrier. Not applicable to Half.com.
     */
    public $ShipmentTrackingNumber;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | See the documentation regarding "Working with Item Weights".            The 'unit' attribute
     * can have a value of lbs.
     */
    public $WeightMajor;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MeasureType | See the documentation regarding "Working with Item Weights". The 'unit' attribute is
     * optional and assumed to be the minor compared to the value of 'unit' in WeightMajor.
     */
    public $WeightMinor;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemTransactionIDType |      */
    public $ItemTransactionID;
    /**
     * @var dateTime | Revise only
     */
    public $DeliveryDate;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShipmentDeliveryStatusCodeType | Revise only
     */
    public $DeliveryStatus;
    /**
     * @var dateTime | Revise only
     */
    public $RefundGrantedTime;
    /**
     * @var dateTime | Revise only
     */
    public $RefundRequestedTime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ShipmentStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEstimatedDeliveryDate($val)
    {
        $this->EstimatedDeliveryDate = (dateTime)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setInsuredValue($val)
    {
        $this->InsuredValue = (AmountType)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setPackageDepth($val)
    {
        $this->PackageDepth = (MeasureType)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setPackageLength($val)
    {
        $this->PackageLength = (MeasureType)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setPackageWidth($val)
    {
        $this->PackageWidth = (MeasureType)$val;
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
        $this->PayPalShipmentID = (string)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setShipmentID($val)
    {
        $this->ShipmentID = (long)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setPostageTotal($val)
    {
        $this->PostageTotal = (AmountType)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setPrintedTime($val)
    {
        $this->PrintedTime = (dateTime)$val;
    }

    /**
     * @param AddressType $val
     * @throws Exception
     */
    public function setShipFromAddress($val)
    {
        $this->ShipFromAddress = (AddressType)$val;
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
     * @param ShippingCarrierCodeType $val
     * @throws Exception
     */
    public function setShippingCarrierUsed($val)
    {
        $this->ShippingCarrierUsed = (ShippingCarrierCodeType)$val;
    }

    /**
     * @param ShippingFeatureCodeType $val
     * @throws Exception
     */
    public function setShippingFeature($val)
    {
        $this->ShippingFeature = (ShippingFeatureCodeType)$val;
    }

    /**
     * @param ShippingPackageCodeType $val
     * @throws Exception
     */
    public function setShippingPackage($val)
    {
        $this->ShippingPackage = (ShippingPackageCodeType)$val;
    }

    /**
     * @param token $val
     * @throws Exception
     */
    public function setShippingServiceUsed($val)
    {
        $this->ShippingServiceUsed = (token)$val;
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
        $this->ShipmentTrackingNumber = (string)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setWeightMajor($val)
    {
        $this->WeightMajor = (MeasureType)$val;
    }

    /**
     * @param MeasureType $val
     * @throws Exception
     */
    public function setWeightMinor($val)
    {
        $this->WeightMinor = (MeasureType)$val;
    }

    /**
     * @param ItemTransactionIDType $val
     * @throws Exception
     */
    public function setItemTransactionID($val)
    {
        $this->ItemTransactionID = (ItemTransactionIDType)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDeliveryDate($val)
    {
        $this->DeliveryDate = (dateTime)$val;
    }

    /**
     * @param ShipmentDeliveryStatusCodeType $val
     * @throws Exception
     */
    public function setDeliveryStatus($val)
    {
        $this->DeliveryStatus = (ShipmentDeliveryStatusCodeType)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRefundGrantedTime($val)
    {
        $this->RefundGrantedTime = (dateTime)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRefundRequestedTime($val)
    {
        $this->RefundRequestedTime = (dateTime)$val;
    }

    /**
     * @param ShipmentStatusCodeType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->Status = (ShipmentStatusCodeType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
