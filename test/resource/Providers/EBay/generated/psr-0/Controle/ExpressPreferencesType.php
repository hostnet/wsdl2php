<?php

namespace Controle;

/**
 * ExpressPreferencesType
 * Contains a seller's preferences related to listing items on Express.
 */
class ExpressPreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ExpressSellingPreferenceCodeType | If true, the seller's preferences in My eBay are set to include listings on eBay Express. If
	 * false, the seller prefers not to include listings on Express, so the seller is therefore
	 * ineligible for Express (and no other seller requirement settings are returned in this case).
	 */
	public $ExpressSellingPreference;
	/**
	 * @var string | For eBay Germany users only. The PayPal account (email address) to use for eBay Express
	 * payments during checkout. If the first item in an order doesn't specify a PayPal account, Express
	 * Germany uses this default PayPal account for the item. (The account specified for the first
	 * item is used for all items in the same order.)<br> <br> This default account is only used
	 * for Express payments during checkout; it has no effect on item data. (To specify a default
	 * PayPal account for items, use the PayPal fields in the SellerPaymentPreferences node.)<br> <br> Only
	 * applicable to sellers who are qualified to list on Express Germany. Call GetUser to determine
	 * the seller's Express eligibility. <br> <br> When you set this value using SetUserPreferences,
	 * eBay validates that the PayPal account qualifies for Express. We check that the account is
	 * in good standing, it is a Business or Premier account, and it does not block unconfirmed
	 * addresses. This means the seller needs to configure their PayPal account correctly before
	 * calling SetUserPreferences.<br> <br> <span class="tablenote"><b>Note:</b> If the PayPal
	 * account becomes ineligible later (e.g., the seller blocks unconfirmed addresses), GetUserPreferences
	 * still returns the specified email address. Therefore, the existence of this preference
	 * in GetUserPreferences does not guarantee that the specified address is valid for Express. When
	 * a PayPal account becomes ineligible, Express reevaluates the eligibility of the seller
	 * and their items, and may remove the seller's items from Express. See the eBay Web Services
	 * guide links below for more information.</span><br> <br> This preference does not control
	 * the seller's eligibility for Express. However, it can control an item's eligibility in
	 * some cases. That is, for a fixed-price or Store Inventory item to be eligible for Express
	 * Germany, either the item or this Express preference must specify a valid PayPal email address.
	 * (For other eligibility requirements, see the eBay Web Services guide.)<br> <br> In GetUserPreferences,
	 * this preference is only returned if a default PayPal account has been specified.
	 */
	public $DefaultPayPalAccount;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ExpressSellingPreferenceCodeType $val
	 * @throws Exception
	 */
	public function setExpressSellingPreference($val)
	{
        $this->ExpressSellingPreference = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDefaultPayPalAccount($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DefaultPayPalAccount');
        }
        $this->DefaultPayPalAccount = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
