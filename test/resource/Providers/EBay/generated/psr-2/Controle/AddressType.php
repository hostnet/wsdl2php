<?php

namespace Controle;

/**
 * AddressType
 * Contains the data for one user address. This is the base type for a number of user addresses,
 * including seller payment address, buyer shipping address and buyer and seller registration
 * address.
 */
class AddressType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var string | A concatenation of Street1 and Street2, primarily for RegistrationAddress. Not applicable
     * to Half.com.
     */
    public $Street;
    /**
     * @var string | Line 1 of the user's street address. Also applicable to Half.com (for GetOrders).
     */
    public $Street1;
    /**
     * @var string | Line 2 of the user's address (such as an apartment number). Returned if the user specified
     * a second street value for their address. Also applicable to Half.com (for GetOrders).
     */
    public $Street2;
    /**
     * @var string | The name of the user's city. Also applicable to Half.com (for GetOrders).
     */
    public $CityName;
    /**
     * @var string | County information for the user. This field applies to Classified Ad format listings
     * only. Not applicable to Half.com.
     */
    public $County;
    /**
     * @var string | The region of the user's address. Also applicable to Half.com (for GetOrders).
     */
    public $StateOrProvince;
    /**
     * @var \Controle\CountryCodeType | Two-letter ISO 3166 country code. In some calls, used with the Location field to indicate
     * the city and country where the item is located. Also applicable as input to AddItem
     * and related calls when you list items to Half.com (specify US). <br> <br> In GetSearchResultsExpress,
     * only returned when ItemDetails is set to Fine.
     */
    public $Country;
    /**
     * @var string | The name of the user's country. Also applicable to Half.com (for GetOrders).
     */
    public $CountryName;
    /**
     * @var string | User's primary phone number. This may return a value of "Invalid Request" if you are
     * not authorized to see the user's phone number. Also applicable to Half.com (for GetOrders).
     */
    public $Phone;
    /**
     * @var \Controle\CountryCodeType | Standard ISO code for the country of the user's primay telephone phone number. For Classifed
     * Ad format listings, this code is used to look up the country's international calling
     * prefix. Both the ISO code and country phone prefix are stored with listings of this
     * type. This field applies to Classified Ad format listings only.
     */
    public $PhoneCountryCode;
    /**
     * @var string | Country Prefix of the secondary phone number. This value is derived from inputs supplied
     * for PhoneCountryCode. This field applies to Classified Ad format listings only.
     */
    public $PhoneCountryPrefix;
    /**
     * @var string | Area or City Code of a user's primary phone number. This field applies to Classified
     * Ad format listings only.
     */
    public $PhoneAreaOrCityCode;
    /**
     * @var string | The local number portion of the user's primary phone number. This field applies to Classified
     * Ad format listings only.
     */
    public $PhoneLocalNumber;
    /**
     * @var \Controle\CountryCodeType | Standard ISO code for the country of a user's secondary telephone phone number. For
     * Classifed Ad format listings, this code is used to look up the country's international
     * calling prefix. Both the ISO code and country phone prefix are stored with listings
     * of this type. This field applies to Classified Ad format listings only.
     */
    public $Phone2CountryCode;
    /**
     * @var string | Country prefix of a user's secondary phone number. This value is derived from inputs
     * supplied for Phone2CountryCode. This field applies to Classified Ad format listings
     * only.
     */
    public $Phone2CountryPrefix;
    /**
     * @var string | Area or City Code of a user's secondary phone number. This field applies to Classified
     * Ad format listings only.
     */
    public $Phone2AreaOrCityCode;
    /**
     * @var string | The local number portion of the user's secondary phone number. This field applies to
     * Classified Ad format listings only.
     */
    public $Phone2LocalNumber;
    /**
     * @var string | The postal code to use as the basis for the proximity search.
     */
    public $PostalCode;
    /**
     * @var string | ID assigned to the address in the eBay database. For GetOrders, applies only to Half.com.
     */
    public $AddressID;
    /**
     * @var \Controle\AddressOwnerCodeType | The realm to which the address belongs (e.g. eBay vs PayPal). For GetOrders, applies
     * only to Half.com.
     */
    public $AddressOwner;
    /**
     * @var \Controle\AddressStatusCodeType | PayPal address status. Not applicable to Half.com.
     */
    public $AddressStatus;
    /**
     * @var string | ID assigned to the address by the owner of the address (fitting only if the address
     * is owned by PayPal; see AddressOwner). Also applicable to Half.com (for GetOrders).
     */
    public $ExternalAddressID;
    /**
     * @var string | Seller's international name that is associated with the payment address. Only applicable
     * to SellerPaymentAddress. Not applicable to Half.com.
     */
    public $InternationalName;
    /**
     * @var string | International state and city for the seller's payment address. Only applicable to SellerPaymentAddress. Not
     * applicable to Half.com.
     */
    public $InternationalStateAndCity;
    /**
     * @var string | Seller's international street address that is associated with the payment address. Only
     * applicable to SellerPaymentAddress. Not applicable to Half.com.
     */
    public $InternationalStreet;
    /**
     * @var string | User's company name. Only returned if available. Not applicable to Half.com.
     */
    public $CompanyName;
    /**
     * @var \Controle\AddressRecordTypeCodeType | Indicates the nature of the address (e.g., residential or business). Not applicable
     * to Half.com.
     */
    public $AddressRecordType;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStreet($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Street');
        }
        $this->Street = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStreet1($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Street1');
        }
        $this->Street1 = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStreet2($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Street2');
        }
        $this->Street2 = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCityName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CityName');
        }
        $this->CityName = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCounty($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for County');
        }
        $this->County = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStateOrProvince($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StateOrProvince');
        }
        $this->StateOrProvince = $val;
    }

    /**
     * @param CountryCodeType $val
     * @throws Exception
     */
    public function setCountry($val)
    {
        $this->Country = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCountryName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CountryName');
        }
        $this->CountryName = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhone($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone');
        }
        $this->Phone = $val;
    }

    /**
     * @param CountryCodeType $val
     * @throws Exception
     */
    public function setPhoneCountryCode($val)
    {
        $this->PhoneCountryCode = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhoneCountryPrefix($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PhoneCountryPrefix');
        }
        $this->PhoneCountryPrefix = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhoneAreaOrCityCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PhoneAreaOrCityCode');
        }
        $this->PhoneAreaOrCityCode = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhoneLocalNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PhoneLocalNumber');
        }
        $this->PhoneLocalNumber = $val;
    }

    /**
     * @param CountryCodeType $val
     * @throws Exception
     */
    public function setPhone2CountryCode($val)
    {
        $this->Phone2CountryCode = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhone2CountryPrefix($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone2CountryPrefix');
        }
        $this->Phone2CountryPrefix = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhone2AreaOrCityCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone2AreaOrCityCode');
        }
        $this->Phone2AreaOrCityCode = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhone2LocalNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone2LocalNumber');
        }
        $this->Phone2LocalNumber = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAddressID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AddressID');
        }
        $this->AddressID = $val;
    }

    /**
     * @param AddressOwnerCodeType $val
     * @throws Exception
     */
    public function setAddressOwner($val)
    {
        $this->AddressOwner = $val;
    }

    /**
     * @param AddressStatusCodeType $val
     * @throws Exception
     */
    public function setAddressStatus($val)
    {
        $this->AddressStatus = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExternalAddressID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExternalAddressID');
        }
        $this->ExternalAddressID = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setInternationalName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for InternationalName');
        }
        $this->InternationalName = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setInternationalStateAndCity($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for InternationalStateAndCity');
        }
        $this->InternationalStateAndCity = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setInternationalStreet($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for InternationalStreet');
        }
        $this->InternationalStreet = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCompanyName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CompanyName');
        }
        $this->CompanyName = $val;
    }

    /**
     * @param AddressRecordTypeCodeType $val
     * @throws Exception
     */
    public function setAddressRecordType($val)
    {
        $this->AddressRecordType = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
