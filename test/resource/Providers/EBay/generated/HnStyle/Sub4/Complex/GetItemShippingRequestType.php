<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetItemShippingRequestType
 * Returns shipping cost estimates for an item, for a particular shipping service shipping
 * to a specified postal code, for calculated shipping. This is analogous to the Shipping Calculator
 * seen in both the buyer and seller web pages. It is another way for a buyer or seller to
 * obtain shipping cost information for an existing item (for which the caller is either the
 * buyer or seller) at any point in the life of of the listing, before or after a buyer has
 * committed to purchasing the item(s). (Note that shipping insurance cost can only be determined
 * once the final item price is known.) <p>Applicable to the <a href="http://developer.ebay.com/developercenter/rest/"
 * target="_blank">REST API</a>.</p>
 */
class GetItemShippingRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var int | Number of items purchased so far. (Subtract from the value returned in the Item.Quantity
     * field to calculate the number of items remaining.)
     */
    public $QuantitySold;
    /**
     * @var string | Destination country postal code (or zipcode, for US). Ignored if no country code is
     * provided. Optional tag for some countries. More likely to be required for large countries.
     */
    public $DestinationPostalCode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CountryCodeType | Destination country code. If DestinationCountryCode is US, postal code is required and
     * represents US zip code.
     */
    public $DestinationCountryCode;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setQuantitySold($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->QuantitySold = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDestinationPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DestinationPostalCode');
        }
        $this->DestinationPostalCode = (int)$val;
    }

    /**
     * @param CountryCodeType $val
     * @throws Exception
     */
    public function setDestinationCountryCode($val)
    {
        $this->DestinationCountryCode = (int)$val;
    }
}
