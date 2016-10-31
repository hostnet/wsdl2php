<?php

namespace Controle;

/**
 * SellerType
 * Information about a user returned in the context of an item's seller.
 */
class SellerType
{
	/**
	 * @var int | Indicates the seller's PaisaPay registration status. India site only.<br> 0 - Seller not
	 * registered<br> 1 - Seller registered<br> 2 - Seller registered but registration suspended<br> 3
	 * - Seller registered but outbound payment suspended<br>
	 */
	public $paisapaystatus;
	/**
	 * @var boolean | Instead of using this tag, see the PaymentEdited tag. Originally, the AllowPaymentEdit
	 * tag specified whether the seller allows the buyer to edit the payment amount for the transaction.
	 * (Sellers enabled this property in their My eBay user preferences on the eBay site.) ShippingDetails.AllowPaymentEdit
	 * is no longer being populated by calls to GetItemTransactions. Not applicable to Half.com.
	 */
	public $allowpaymentedit;
	/**
	 * @var \Controle\CurrencyCodeType | Currency type in which the user is billed seller fees.
	 */
	public $billingcurrency;
	/**
	 * @var boolean | Indicates whether the user as a seller has the option set to default new item listings
	 * to go through checkout. (Sellers enable this property in their My eBay user preferences
	 * on the eBay site.)
	 */
	public $checkoutenabled;
	/**
	 * @var boolean | If true, indicates that the user has stored bank account information with eBay in order
	 * to use the "CIP in checkout" feature. Applicable to all eBay sites that support CIP as
	 * a payment method.
	 */
	public $cipbankaccountstored;
	/**
	 * @var boolean | If true, indicates that the user is in good standing with eBay. (One of the requirements
	 * for listing a new item with Immediate Payment.)
	 */
	public $goodstanding;
	/**
	 * @var boolean | If true, the user is authorized to list lot items to the eBay Live Auctions site.
	 */
	public $liveauctionauthorized;
	/**
	 * @var \Controle\MerchandizingPrefCodeType | Indicates whether the seller participates in the Merchandising Manager feature. If so,
	 * the seller can set up rules for cross-promoting items from the seller's store. If not,
	 * eBay cross-promotes items as the seller's items are being viewed or purchased.
	 */
	public $merchandizingpref;
	/**
	 * @var boolean | Indicates whether the user is subject to VAT. Users who have registered with eBay as VAT-exempt
	 * are not subject to VAT.
	 */
	public $qualifiesforb2bvat;
	/**
	 * @var \Controle\SellerGuaranteeLevelCodeType | Maximum level of Motor's Seller guarantee the seller is authorized to offer.
	 */
	public $sellerguaranteelevel;
	/**
	 * @var \Controle\SellerLevelCodeType | The user's eBay PowerSeller tier. Possible values are enumerated in the SellerLevelCodeType
	 * code list.
	 */
	public $sellerlevel;
	/**
	 * @var \Controle\AddressType | Address used by eBay for purposes of billing the user for seller fees.
	 */
	public $sellerpaymentaddress;
	/**
	 * @var \Controle\SchedulingInfoType | Container for scheduling limits for the user. Conveys the minimum and maximum minutes the
	 * user may schedule listings in advance, as well as the maximum number of items the user
	 * may schedule.
	 */
	public $schedulinginfo;
	/**
	 * @var boolean | Indicates whether the user has an eBay Store (boolean value).
	 */
	public $storeowner;
	/**
	 * @var \Controle\anyURI | The URL of the seller's eBay Store page. Output only.
	 */
	public $storeurl;
	/**
	 * @var \Controle\SellerBusinessCodeType | Type of seller account. This value is returned if the German site (site ID 77) or eBay
	 * Motors site (site ID 100) is specified.
	 */
	public $sellerbusinesstype;
	/**
	 * @var boolean | If true, the user is registered as a vehicle dealer on the eBay Motors site.
	 */
	public $registeredbusinessseller;
	/**
	 * @var boolean | If true, the user is currently eligible to sell items on eBay Express, based on the data
	 * available to eBay at the time you execute the call (e.g., GetUser). Users registered in
	 * the US or Canada are eligible to sell on Express US. Users registered in Germany are eligible
	 * to sell on Express Germany. However, a user can still be disqualified at any time if their
	 * feedback score changes or some other event occurs that would normally disqualify a seller
	 * for Express.<br> <br> If false, the user is not currently eligible to sell items on Express. In
	 * this case, you can determine probable causes by calling GetUser and examining the fields
	 * in the ExpressSellerRequirements node.<br> <br> Due to latency of batch jobs that update
	 * the seller's Express eligibility, it may be possible for the value of ExpressEligible and
	 * the values in ExpressSellerRequirements to be inconsistent. For example, if the seller
	 * changes their combined payment preference, the value of the CombinedPaymentsAccepted flag
	 * in ExpressSellerRequirements could change, but it could take up to 7 days for the seller's
	 * Express eligibility to change.
	 */
	public $expresseligible;
	/**
	 * @var \Controle\SellerPaymentMethodCodeType | 	 */
	public $paymentmethod;
	/**
	 * @var \Controle\ProStoresCheckoutPreferenceType | Details about the checkout preferences related to the ProStores store. Returned only if
	 * set.
	 */
	public $prostorespreference;
	/**
	 * @var boolean | If true, the seller has an Express wallet, which is used to store information about multiple
	 * credit cards associated with the seller's account.
	 */
	public $expresswallet;
	/**
	 * @var \Controle\ExpressSellerRequirementsType | Contains detailed data relating to whether a seller qualifies as an Express seller. Whether
	 * a child tag is returned can depend on whether its value would be true or false, whether
	 * the seller is registered on an applicable eBay site, or the order of eligibility precedence. The
	 * seller requirements are assessed in this order:<br> - ExpressSellingPreference<br> - ExpressApproved<br> -
	 * All other settings<br> <br> Due to latency of batch jobs that update the seller's Express
	 * eligibility, it may be possible for the value of ExpressEligible and the values in ExpressSellerRequirements
	 * to be inconsistent. For example, if the seller changes their combined payment preference, the
	 * value of the CombinedPaymentsAccepted flag in ExpressSellerRequirements could change, but
	 * it could take up to 7 days for the seller's Express eligibility to change.
	 */
	public $expresssellerrequirements;
	/**
	 * @var boolean | Indicates whether or not the seller is a registered charity seller. If CharityRegistered
	 * is false, the user must register with the eBay Giving Works provider to list items with
	 * eBay Giving Works.
	 */
	public $charityregistered;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPaisaPayStatus($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->paisapaystatus = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setAllowPaymentEdit($val)
	{
        $this->allowpaymentedit = (int)$val;
	}

	/**
	 * @param CurrencyCodeType $val
	 * @throws Exception
	 */
	public function setBillingCurrency($val)
	{
        $this->billingcurrency = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCheckoutEnabled($val)
	{
        $this->checkoutenabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCIPBankAccountStored($val)
	{
        $this->cipbankaccountstored = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setGoodStanding($val)
	{
        $this->goodstanding = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setLiveAuctionAuthorized($val)
	{
        $this->liveauctionauthorized = (int)$val;
	}

	/**
	 * @param MerchandizingPrefCodeType $val
	 * @throws Exception
	 */
	public function setMerchandizingPref($val)
	{
        $this->merchandizingpref = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setQualifiesForB2BVAT($val)
	{
        $this->qualifiesforb2bvat = (int)$val;
	}

	/**
	 * @param SellerGuaranteeLevelCodeType $val
	 * @throws Exception
	 */
	public function setSellerGuaranteeLevel($val)
	{
        $this->sellerguaranteelevel = (int)$val;
	}

	/**
	 * @param SellerLevelCodeType $val
	 * @throws Exception
	 */
	public function setSellerLevel($val)
	{
        $this->sellerlevel = (int)$val;
	}

	/**
	 * @param AddressType $val
	 * @throws Exception
	 */
	public function setSellerPaymentAddress($val)
	{
        $this->sellerpaymentaddress = (int)$val;
	}

	/**
	 * @param SchedulingInfoType $val
	 * @throws Exception
	 */
	public function setSchedulingInfo($val)
	{
        $this->schedulinginfo = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setStoreOwner($val)
	{
        $this->storeowner = (int)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setStoreURL($val)
	{
        $this->storeurl = (int)$val;
	}

	/**
	 * @param SellerBusinessCodeType $val
	 * @throws Exception
	 */
	public function setSellerBusinessType($val)
	{
        $this->sellerbusinesstype = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setRegisteredBusinessSeller($val)
	{
        $this->registeredbusinessseller = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressEligible($val)
	{
        $this->expresseligible = (int)$val;
	}

	/**
	 * @param SellerPaymentMethodCodeType $val
	 * @throws Exception
	 */
	public function setPaymentMethod($val)
	{
        $this->paymentmethod = (int)$val;
	}

	/**
	 * @param ProStoresCheckoutPreferenceType $val
	 * @throws Exception
	 */
	public function setProStoresPreference($val)
	{
        $this->prostorespreference = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressWallet($val)
	{
        $this->expresswallet = (int)$val;
	}

	/**
	 * @param ExpressSellerRequirementsType $val
	 * @throws Exception
	 */
	public function setExpressSellerRequirements($val)
	{
        $this->expresssellerrequirements = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCharityRegistered($val)
	{
        $this->charityregistered = (int)$val;
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
