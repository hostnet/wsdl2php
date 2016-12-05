<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VaTdetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | If true, this indicates that the seller is a business user and intends to use listing
     * features that are offered to business users only. Applicable only to business sellers residing
     * in Germany, Austria, or Switzerland who are listing in a B2B VAT- enabled category on
     * the eBay Germany (DE), Austria (AT), or Switzerland (CH) sites. The seller must have
     * a valid VAT ID registered with eBay. This must be set to true if RestrictedToBusiness
     * is true. It has no effect (and it's not returned) if RestrictedToBusiness is false.
     * If an item was not qualified as a business item when originally listed, but meets the
     * conditions for business items when the item is revised or relisted, the seller can convert
     * the item to a business item by specifying the appropriate VAT details. See the eBay
     * Web Services guide for more information and additional rules.
     */
    public $BusinessSeller;
    /**
     * @var boolean | If true, this indicates that the seller elects to offer the item exclusively to business
     * users. If false (or not returned), this indicates that the seller elects to offer the
     * item to all users. Applicable only to business sellers residing in Germany, Austria,
     * or Switzerland who are listing in a B2B VAT-enabled category on the eBay Germany (DE),
     * Austria (AT), or Switzerland (CH) sites. If this argument is true, the seller must have
     * a valid VAT-ID registered with eBay, and BusinessSeller must also be true.
     */
    public $RestrictedToBusiness;
    /**
     * @var float | VAT rate for the item, if any. When the VATPercent is specified, the item's VAT information
     * appears on the item's listing page. In addition, the seller can choose to print an invoice
     * that includes the item's net price, VAT percent, VAT amount, and total price. Since
     * VAT rates vary depending on the item and on the user's country of residence, a seller
     * is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify
     * a VATPercent, a seller must have a VAT-ID registered with eBay and must be listing the
     * item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal
     * (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round
     * up the value to 12.346.) Note: The View Item page may display the precision to 2 decimal
     * places with no trailing zeros. However, the full value you send in is stored.
     */
    public $VATPercent;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBusinessSeller($val)
    {
        $this->BusinessSeller = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRestrictedToBusiness($val)
    {
        $this->RestrictedToBusiness = (boolean)$val;
    }

    /**
     * @param float $val
     * @throws Exception
     */
    public function setVATPercent($val)
    {
        $this->VATPercent = (float)$val;
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
