<?php

namespace Controle;

/**
 * GeteBayDetailsResponseType
 * Details about a specified site in response to GeteBayDetailsRequest. If no DetailName is
 * identified in the request, all elements of GeteBayDetailsResponse are returned. Otherwise,
 * only the element corresponding to the specified DetailName is returned.
 */
class GeteBayDetailsResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\CountryDetailsType | Details about a specific country. GeteBayDetails returns all countries in the system,
     * regardless of the site to which you sent the request.
     */
    public $CountryDetails;
    /**
     * @var \Controle\CurrencyDetailsType | Details about a specific currency that can be used for listing on an eBay site. GeteBayDetails
     * returns all site currencies in the system, regardless of the site to which you sent
     * the request.
     */
    public $CurrencyDetails;
    /**
     * @var \Controle\DispatchTimeMaxDetailsType | Details about a specific max dispatch time. A dispatch time specifies the maximum number
     * of business days a seller commits to for shipping an item to domestic buyers after receiving
     * a cleared payment. GeteBayDetails returns all dispatch times in the system, regardless
     * of the site to which you sent the request.
     */
    public $DispatchTimeMaxDetails;
    /**
     * @var \Controle\PaymentOptionDetailsType | Details about a specific buyer payment method. GeteBayDetails only returns payment methods
     * that are applicable to the site to which you sent the request.
     */
    public $PaymentOptionDetails;
    /**
     * @var \Controle\RegionDetailsType | Details about a specific geographical region. GeteBayDetails only returns regions that
     * are applicable to the site to which you sent the request. However, you should ignore
     * region values for all sites except China.
     */
    public $RegionDetails;
    /**
     * @var \Controle\ShippingLocationDetailsType | Details about a location or region to which the seller is willing to ship. GeteBayDetails
     * returns all shipping locations in the system, regardless of the site to which you sent
     * the request.
     */
    public $ShippingLocationDetails;
    /**
     * @var \Controle\ShippingServiceDetailsType | Details about a specific shipping service. GeteBayDetails only returns shipping services
     * that are applicable to the site to which you sent the request.
     */
    public $ShippingServiceDetails;
    /**
     * @var \Controle\SiteDetailsType | Details about a specific eBay site. GeteBayDetails returns all sites in the system,
     * regardless of the site to which you sent the request.
     */
    public $SiteDetails;
    /**
     * @var \Controle\TaxJurisdictionType | Sales tax details for zero or more jurisdictions (states, provinces, etc). For GetTaxTable,
     * if DetailLevel is not specified, information is only returned for the jurisdictions
     * for which the user provided tax information. If DetailLevel is ReturnAll, tax information is
     * returned for all possible jurisdictions, whether specified by the user or not. ShippingIncludedInTax
     * and SalesTaxPercent are returned but are empty.
     */
    public $TaxJurisdiction;
    /**
     * @var \Controle\URLDetailsType | Details about a specific eBay URL. GeteBayDetails only returns URLs that are applicable
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
        $this->CountryDetails = (int)$val;
    }

    /**
     * @param CurrencyDetailsType $val
     * @throws Exception
     */
    public function setCurrencyDetails($val)
    {
        $this->CurrencyDetails = (int)$val;
    }

    /**
     * @param DispatchTimeMaxDetailsType $val
     * @throws Exception
     */
    public function setDispatchTimeMaxDetails($val)
    {
        $this->DispatchTimeMaxDetails = (int)$val;
    }

    /**
     * @param PaymentOptionDetailsType $val
     * @throws Exception
     */
    public function setPaymentOptionDetails($val)
    {
        $this->PaymentOptionDetails = (int)$val;
    }

    /**
     * @param RegionDetailsType $val
     * @throws Exception
     */
    public function setRegionDetails($val)
    {
        $this->RegionDetails = (int)$val;
    }

    /**
     * @param ShippingLocationDetailsType $val
     * @throws Exception
     */
    public function setShippingLocationDetails($val)
    {
        $this->ShippingLocationDetails = (int)$val;
    }

    /**
     * @param ShippingServiceDetailsType $val
     * @throws Exception
     */
    public function setShippingServiceDetails($val)
    {
        $this->ShippingServiceDetails = (int)$val;
    }

    /**
     * @param SiteDetailsType $val
     * @throws Exception
     */
    public function setSiteDetails($val)
    {
        $this->SiteDetails = (int)$val;
    }

    /**
     * @param TaxJurisdictionType $val
     * @throws Exception
     */
    public function setTaxJurisdiction($val)
    {
        $this->TaxJurisdiction = (int)$val;
    }

    /**
     * @param URLDetailsType $val
     * @throws Exception
     */
    public function setURLDetails($val)
    {
        $this->URLDetails = (int)$val;
    }
}
