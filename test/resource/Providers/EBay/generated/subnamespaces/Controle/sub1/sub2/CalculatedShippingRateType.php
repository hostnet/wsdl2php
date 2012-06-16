<?php

namespace Controle\sub1\sub2;
/**
 * CalculatedShippingRateType
 * Details pertinent to one or more items for which calculated shipping has been offered by
 * the seller, such as package dimension and weight and packaging/handling costs. Also returned with
 * the data for an item's transaction.
 */
class CalculatedShippingRateType {
	/**
	 * @var string | Postal code for the location from which the package will be shipped. For calculated shipping
	 * only. Use Item.PostalCode to specify the location of the item and where it will be shipped
	 * from. The value of Item.PostalCode overrides any value specified with OriginatingPostalCode,
	 * and will be used to calculate shipping costs.
	 */
	public $OriginatingPostalCode;
	/**
	 * @var \Controle\sub1\sub2\MeasureType | Depth dimension of the package needed to ship the item after it is sold.            For
	 * calculated shipping only.
	 */
	public $PackageDepth;
	/**
	 * @var \Controle\sub1\sub2\MeasureType | Length dimension of the package needed to ship the item after it is sold.            For
	 * calculated shipping only.
	 */
	public $PackageLength;
	/**
	 * @var \Controle\sub1\sub2\MeasureType | Width dimension of the package needed to ship the item after it is sold.            For
	 * calculated shipping only.
	 */
	public $PackageWidth;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Fees a seller might assess for the shipping of the item (in addition to whatever the shipping
	 * service might charge). Any packaging/handling cost specified on input is added to each
	 * shipping service on output. When UPS is one of the shipping services offered by the seller, package
	 * dimensions are required on list/relist/revise. For calculated shipping only.
	 */
	public $PackagingHandlingCosts;
	/**
	 * @var boolean | Whether a package is irregular and therefore cannot go through the stamping machine at
	 * the shipping service office and thus requires special or fragile handling. For calculated shipping
	 * only.
	 */
	public $ShippingIrregular;
	/**
	 * @var \Controle\sub1\sub2\ShippingPackageCodeType | The size of the package used to ship the item(s). See ShippingPackageCodeType
	 *   for its possible values. Input.
	 */
	public $ShippingPackage;
	/**
	 * @var \Controle\sub1\sub2\MeasureType | See the documentation regarding "Working with Item Weights".            The 'unit' attribute
	 * can have a value of lbs.
	 */
	public $WeightMajor;
	/**
	 * @var \Controle\sub1\sub2\MeasureType | See the documentation regarding "Working with Item Weights". The 'unit' attribute is optional
	 * and assumed to be the minor compared to the value of 'unit' in WeightMajor.
	 */
	public $WeightMinor;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Fees a seller might assess for the shipping of the item (in addition to whatever the shipping
	 * service might charge). Any packaging/handling cost specified on input is added  to each
	 * shipping service on output. For international calculated shipping only.
	 */
	public $InternationalPackagingHandlingCosts;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}
