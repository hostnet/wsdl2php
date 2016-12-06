<?php

namespace Controle\sub1\sub2;

/**
 * GeteBayDetailsResponseType
 * Details about a specified site in response to GeteBayDetailsRequest. If no DetailName is
 * identified in the request, all elements of GeteBayDetailsResponse are returned. Otherwise,
 * only the element corresponding to the specified DetailName is returned.
 */
class GeteBayDetailsResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\CountryDetailsType | Details about a specific country. GeteBayDetails returns all countries in the system, regardless
	 * of the site to which you sent the request.
	 */
	public $CountryDetails;
	/**
	 * @var \Controle\sub1\sub2\CurrencyDetailsType | Details about a specific currency that can be used for listing on an eBay site. GeteBayDetails
	 * returns all site currencies in the system, regardless of the site to which you sent the
	 * request.
	 */
	public $CurrencyDetails;
	/**
	 * @var \Controle\sub1\sub2\DispatchTimeMaxDetailsType | Details about a specific max dispatch time. A dispatch time specifies the maximum number
	 * of business days a seller commits to for shipping an item to domestic buyers after receiving
	 * a cleared payment. GeteBayDetails returns all dispatch times in the system, regardless
	 * of the site to which you sent the request.
	 */
	public $DispatchTimeMaxDetails;
	/**
	 * @var \Controle\sub1\sub2\PaymentOptionDetailsType | Details about a specific buyer payment method. GeteBayDetails only returns payment methods
	 * that are applicable to the site to which you sent the request.
	 */
	public $PaymentOptionDetails;
	/**
	 * @var \Controle\sub1\sub2\RegionDetailsType | Details about a specific geographical region. GeteBayDetails only returns regions that
	 * are applicable to the site to which you sent the request. However, you should ignore region
	 * values for all sites except China.
	 */
	public $RegionDetails;
	/**
	 * @var \Controle\sub1\sub2\ShippingLocationDetailsType | Details about a location or region to which the seller is willing to ship. GeteBayDetails
	 * returns all shipping locations in the system, regardless of the site to which you sent
	 * the request.
	 */
	public $ShippingLocationDetails;
	/**
	 * @var \Controle\sub1\sub2\ShippingServiceDetailsType | Details about a specific shipping service. GeteBayDetails only returns shipping services
	 * that are applicable to the site to which you sent the request.
	 */
	public $ShippingServiceDetails;
	/**
	 * @var \Controle\sub1\sub2\SiteDetailsType | Details about a specific eBay site. GeteBayDetails returns all sites in the system, regardless
	 * of the site to which you sent the request.
	 */
	public $SiteDetails;
	/**
	 * @var \Controle\sub1\sub2\TaxJurisdictionType | Sales tax details for zero or more jurisdictions (states, provinces, etc). For GetTaxTable,
	 * if DetailLevel is not specified, information is only returned for the jurisdictions for
	 * which the user provided tax information. If DetailLevel is ReturnAll, tax information is
	 * returned for all possible jurisdictions, whether specified by the user or not. ShippingIncludedInTax
	 * and SalesTaxPercent are returned but are empty.
	 */
	public $TaxJurisdiction;
	/**
	 * @var \Controle\sub1\sub2\URLDetailsType | Details about a specific eBay URL. GeteBayDetails only returns URLs that are applicable
	 * to the site to which you sent the request.
	 */
	public $URLDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CountryDetailsType $val
	 * @throws Exception
	 */
	public function setCountryDetails($val)
	{
        $this->CountryDetails = $val;
	}

	/**
	 * @param CurrencyDetailsType $val
	 * @throws Exception
	 */
	public function setCurrencyDetails($val)
	{
        $this->CurrencyDetails = $val;
	}

	/**
	 * @param DispatchTimeMaxDetailsType $val
	 * @throws Exception
	 */
	public function setDispatchTimeMaxDetails($val)
	{
        $this->DispatchTimeMaxDetails = $val;
	}

	/**
	 * @param PaymentOptionDetailsType $val
	 * @throws Exception
	 */
	public function setPaymentOptionDetails($val)
	{
        $this->PaymentOptionDetails = $val;
	}

	/**
	 * @param RegionDetailsType $val
	 * @throws Exception
	 */
	public function setRegionDetails($val)
	{
        $this->RegionDetails = $val;
	}

	/**
	 * @param ShippingLocationDetailsType $val
	 * @throws Exception
	 */
	public function setShippingLocationDetails($val)
	{
        $this->ShippingLocationDetails = $val;
	}

	/**
	 * @param ShippingServiceDetailsType $val
	 * @throws Exception
	 */
	public function setShippingServiceDetails($val)
	{
        $this->ShippingServiceDetails = $val;
	}

	/**
	 * @param SiteDetailsType $val
	 * @throws Exception
	 */
	public function setSiteDetails($val)
	{
        $this->SiteDetails = $val;
	}

	/**
	 * @param TaxJurisdictionType $val
	 * @throws Exception
	 */
	public function setTaxJurisdiction($val)
	{
        $this->TaxJurisdiction = $val;
	}

	/**
	 * @param URLDetailsType $val
	 * @throws Exception
	 */
	public function setURLDetails($val)
	{
        $this->URLDetails = $val;
	}
}
