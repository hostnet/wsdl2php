<?php

namespace Controle;

/**
 * CalculatedShippingRateType
 * Details pertinent to one or more items for which calculated shipping has been offered by
 * the seller, such as package dimension and weight and packaging/handling costs. Also returned with
 * the data for an item's transaction.
 */
class CalculatedShippingRateType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Postal code for the location from which the package will be shipped. For calculated
     * shipping only. Use Item.PostalCode to specify the location of the item and where it
     * will be shipped from. The value of Item.PostalCode overrides any value specified with OriginatingPostalCode,
     * and will be used to calculate shipping costs.
     */
    public $OriginatingPostalCode;
    /**
     * @var \Controle\MeasureType | Depth dimension of the package needed to ship the item after it is sold.
     * For calculated shipping only.
     */
    public $PackageDepth;
    /**
     * @var \Controle\MeasureType | Length dimension of the package needed to ship the item after it is sold.
     *  For calculated shipping only.
     */
    public $PackageLength;
    /**
     * @var \Controle\MeasureType | Width dimension of the package needed to ship the item after it is sold.
     * For calculated shipping only.
     */
    public $PackageWidth;
    /**
     * @var \Controle\AmountType | Fees a seller might assess for the shipping of the item (in addition to whatever the
     * shipping service might charge). Any packaging/handling cost specified on input is added to
     * each shipping service on output. When UPS is one of the shipping services offered by
     * the seller, package dimensions are required on list/relist/revise. For calculated shipping
     * only.
     */
    public $PackagingHandlingCosts;
    /**
     * @var boolean | Whether a package is irregular and therefore cannot go through the stamping machine
     * at the shipping service office and thus requires special or fragile handling. For calculated shipping
     * only.
     */
    public $ShippingIrregular;
    /**
     * @var \Controle\ShippingPackageCodeType | The size of the package used to ship the item(s). See ShippingPackageCodeType
     *      for its possible values. Input.
     */
    public $ShippingPackage;
    /**
     * @var \Controle\MeasureType | See the documentation regarding "Working with Item Weights".            The 'unit' attribute
     * can have a value of lbs.
     */
    public $WeightMajor;
    /**
     * @var \Controle\MeasureType | See the documentation regarding "Working with Item Weights". The 'unit' attribute is
     * optional and assumed to be the minor compared to the value of 'unit' in WeightMajor.
     */
    public $WeightMinor;
    /**
     * @var \Controle\AmountType | Fees a seller might assess for the shipping of the item (in addition to whatever the
     * shipping service might charge). Any packaging/handling cost specified on input is added
     *  to each shipping service on output. For international calculated shipping only.
     */
    public $InternationalPackagingHandlingCosts;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOriginatingPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OriginatingPostalCode');
        }
        $this->OriginatingPostalCode = (string)$val;
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
     * @param AmountType $val
     * @throws Exception
     */
    public function setPackagingHandlingCosts($val)
    {
        $this->PackagingHandlingCosts = (AmountType)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShippingIrregular($val)
    {
        $this->ShippingIrregular = (boolean)$val;
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
     * @param AmountType $val
     * @throws Exception
     */
    public function setInternationalPackagingHandlingCosts($val)
    {
        $this->InternationalPackagingHandlingCosts = (AmountType)$val;
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
