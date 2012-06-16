<?php

namespace Controle\sub1\sub2;
/**
 * SiteDefaultsType
 * A container node for feature definitions that apply to the entire site.
 */
class SiteDefaultsType {
	/**
	 * @var \Controle\sub1\sub2\ListingDurationReferenceType | Specifies the ID of a set of default durations for a certain type of listing. The actual
	 * duration values are returned within the FeatureDefinitions node. The type of listing is
	 * named in the type attribute.
	 */
	public $ListingDuration;
	/**
	 * @var boolean | Specifies the default site setting for whether sellers are required to specify a shipping
	 * service and its associated cost when listing items. True means the shipping terms are required unless
	 * a specific category overrides this setting.
	 */
	public $ShippingTermsRequired;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow best offers. True means
	 * best offers are allowed site-wide, unless a specific category overrides the setting.
	 */
	public $BestOfferEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow DutchBIN. True means best
	 * offers are allowed site-wide, unless a specific category overrides the setting.
	 */
	public $DutchBINEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether a bidder must consent to the bid by confirming
	 * that he or she read and agrees to the terms in eBay's privacy policy.
	 */
	public $UserConsentRequired;
	/**
	 * @var boolean | Indicates whether or not it is possible to enhance a listing by putting it into a rotation
	 * for display on a special area of the eBay home page. Support for this feature varies by
	 * site. Item or feedback restrictions may apply.
	 */
	public $HomePageFeaturedEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow the ProPack feature (a
	 * feature pack). True means ProPack is allowed site-wide, unless a specific category overrides
	 * the setting.
	 */
	public $ProPackEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow the BasicUpgradePack feature
	 * (a feature pack). True means it is allowed site-wide, unless a specific category overrides
	 * the setting. Australia site (site ID 15, abbreviation AU) only. Effective beginning February
	 * 22, 2006.
	 */
	public $BasicUpgradePackEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow the ValuePack feature (a
	 * feature pack). True means it is allowed site-wide, unless a specific category overrides
	 * the setting. Effective beginning February 22, 2006.
	 */
	public $ValuePackEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow the ProPackPlus feature
	 * (a feature pack). True means it is allowed site-wide, unless a specific category overrides
	 * the setting. Effective beginning February 22, 2006.
	 */
	public $ProPackPlusEnabled;
	/**
	 * @var \Controle\sub1\sub2\AdFormatEnabledCodeType | Specifies the default site setting for whether categories allow the Ad Format feature.
	 * True means the feature is allowed site-wide, unless a specific category overrides the setting.
	 */
	public $AdFormatEnabled;
	/**
	 * @var \Controle\sub1\sub2\DigitalDeliveryEnabledCodeType | eBay enables you to list and sell digital files (such as Adobe PDF files) or information
	 * that buyers can access online or have delivered electronically. This flag specifies whether
	 * most categories on the site allow digitally delivered items (i.e., the default setting
	 * for the site's categories).<br><br> If true, digitally delivered items are allowed site-wide,
	 * but specific categories can override the setting if they don't support it.<br> If false,
	 * digitally delivered items are not normally allowed for the site, but some categories may
	 * override the setting.<br><br> If a category supports digital listings, it means that you
	 * have the option to list digital items in that category (i.e., Item.DigitalDeliveryDetails
	 * can be specified in your listing request). It does not mean the category requires you to
	 * list items digitally. If you list in two categories, an item can only specify this option
	 * if both categories support digital listings. Digital listings are not eligible for eBay
	 * Express.
	 */
	public $DigitalDeliveryEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow counter offers for best
	 * offers. True means counter offers are allowed site-wide, unless a specific category overrides
	 * the setting.
	 */
	public $BestOfferCounterEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow auto decline for best offers.
	 * True means auto decline is allowed site-wide, unless a specific category overrides the
	 * setting.
	 */
	public $BestOfferAutoDeclineEnabled;
	/**
	 * @var boolean | Specifies the default site setting for  whether LocalMarketSpecialitySubscription feature
	 * is supported for this category.
	 */
	public $LocalMarketSpecialitySubscription;
	/**
	 * @var boolean | Specifies the default site setting for whether LocalMarketRegularSubscription feature is
	 * supported for this category.
	 */
	public $LocalMarketRegularSubscription;
	/**
	 * @var boolean | Specifies the default site setting for whether LocalMarketPremiumSubscription feature is
	 * supported for this category.
	 */
	public $LocalMarketPremiumSubscription;
	/**
	 * @var boolean | Specifies the default site setting for whether LocalMarketNonSubscription feature is supported
	 * for this category.
	 */
	public $LocalMarketNonSubscription;
	/**
	 * @var boolean | Specifies whether most categories on the site are eligible for eBay Express. eBay Express
	 * is a specialty site where customers can buy new, fixed-price goods in a more conventional
	 * e-commerce experience.<br><br> If true, items on the site are eligible for Express, but
	 * specific categories can override the setting if they don't support Express. For example,
	 * categories that are not covered by PayPal Buyer Protection (e.g., Live Auctions and Motors
	 * vehicles) are excluded from Express.<br> If false, items on the site are not eligible for
	 * Express, but some categories may override the setting.<br><br> If you list in an Express-enabled
	 * category, it does not necessarily mean that the item will appear in that category when
	 * buyers browse and search Express. It only means that the item can also be included on Express, assuming
	 * all other Express eligibility requirements are met. See "eBay Express" in the eBay Web
	 * Services guide for information about other eligibility requirements.
	 */
	public $ExpressEnabled;
	/**
	 * @var boolean | Specifies whether most categories on the site require a listing to include a picture in
	 * order to qualify for eBay Express.<br><br> If true, items on the site require a picture
	 * in order to qualify for Express, but specific categories can override this requirement.
	 * For example, on the US site, pictures are normally required for Express listings. However,
	 * the Event Tickets category could override this requirement if pictures are not commonly expected
	 * for tickets.<br> If false, items on the site do not require a picture, but some categories
	 * may override the setting.<br><br> Only meaningful if ExpressEnabled is true for the category.
	 */
	public $ExpressPicturesRequired;
	/**
	 * @var boolean | Specifies whether most categories on the site require a listing to include the Item Condition
	 * attribute in order to qualify for eBay Express. <br><br> If true, items on the site require
	 * the Item Condition in order to qualify for Express, but specific categories can override
	 * this requirement. For example, on the US site, the Item Condition is normally required
	 * for Express listings. However, the Event Tickets category could override this requirement
	 * because there is little need to distinguish between new and used tickets. (People rarely
	 * sell used tickets after an event unless the ticket is also a collectible item.)<br> If
	 * false, items on the site do not require the Item Condition, but some categories may override
	 * the setting.<br><br> Only meaningful if ExpressEnabled is true for the category.
	 */
	public $ExpressConditionRequired;
	/**
	 * @var double | Specifies the default site setting for whether the Minimum Reserve Price feature is supported
	 * for this category.
	 */
	public $MinimumReservePrice;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow seller-level contact information
	 * for Classified Ad format listings. A value of true means seller-level contact information
	 * is available for Classified Ad format listings site-wide, unless a specific category overrides
	 * the setting.
	 */
	public $SellerContactDetailsEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether the Transaction Confirmation Request feature
	 * is supported for this category.
	 */
	public $TransactionConfirmationRequestEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow the Store Inventory Format
	 * feature. True means the feature is allowed site-wide, unless a specific category overrides
	 * the setting.
	 */
	public $StoreInventoryEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow the addition of Skype buttons
	 * to listings for transactional formats (e.g., the Chinese auction format).
	 */
	public $SkypeMeTransactionalEnabled;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow the addition of Skype buttons
	 * to listings for nontransactional formats (e.g., the advertisement format).
	 */
	public $SkypeMeNonTransactionalEnabled;
	/**
	 * @var string | Specifies the supported local listing distances of regular vehicles.
	 */
	public $LocalListingDistancesRegular;
	/**
	 * @var string | Specifies the supported local listing distances of specialty vehicles.
	 */
	public $LocalListingDistancesSpecialty;
	/**
	 * @var string | Specifies the supported local listing distances for users who have not subscribed to either
	 * Regular or Specialty vehicles.
	 */
	public $LocalListingDistancesNonSubscription;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param ListingDurationReferenceType $val
	 * @throws Exception
	 */
	public function setListingDuration($val) {
		
		$this->ListingDuration = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setShippingTermsRequired($val) {
		
		$this->ShippingTermsRequired = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBestOfferEnabled($val) {
		
		$this->BestOfferEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setDutchBINEnabled($val) {
		
		$this->DutchBINEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setUserConsentRequired($val) {
		
		$this->UserConsentRequired = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setHomePageFeaturedEnabled($val) {
		
		$this->HomePageFeaturedEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setProPackEnabled($val) {
		
		$this->ProPackEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBasicUpgradePackEnabled($val) {
		
		$this->BasicUpgradePackEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setValuePackEnabled($val) {
		
		$this->ValuePackEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setProPackPlusEnabled($val) {
		
		$this->ProPackPlusEnabled = (int)$val;
	}

	/**
	 * @param AdFormatEnabledCodeType $val
	 * @throws Exception
	 */
	public function setAdFormatEnabled($val) {
		
		$this->AdFormatEnabled = (int)$val;
	}

	/**
	 * @param DigitalDeliveryEnabledCodeType $val
	 * @throws Exception
	 */
	public function setDigitalDeliveryEnabled($val) {
		
		$this->DigitalDeliveryEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBestOfferCounterEnabled($val) {
		
		$this->BestOfferCounterEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBestOfferAutoDeclineEnabled($val) {
		
		$this->BestOfferAutoDeclineEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setLocalMarketSpecialitySubscription($val) {
		
		$this->LocalMarketSpecialitySubscription = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setLocalMarketRegularSubscription($val) {
		
		$this->LocalMarketRegularSubscription = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setLocalMarketPremiumSubscription($val) {
		
		$this->LocalMarketPremiumSubscription = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setLocalMarketNonSubscription($val) {
		
		$this->LocalMarketNonSubscription = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressEnabled($val) {
		
		$this->ExpressEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressPicturesRequired($val) {
		
		$this->ExpressPicturesRequired = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressConditionRequired($val) {
		
		$this->ExpressConditionRequired = (int)$val;
	}

	/**
	 * @param double $val
	 * @throws Exception
	 */
	public function setMinimumReservePrice($val) {
		
		$this->MinimumReservePrice = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setSellerContactDetailsEnabled($val) {
		
		$this->SellerContactDetailsEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setTransactionConfirmationRequestEnabled($val) {
		
		$this->TransactionConfirmationRequestEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setStoreInventoryEnabled($val) {
		
		$this->StoreInventoryEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setSkypeMeTransactionalEnabled($val) {
		
		$this->SkypeMeTransactionalEnabled = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setSkypeMeNonTransactionalEnabled($val) {
		
		$this->SkypeMeNonTransactionalEnabled = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLocalListingDistancesRegular($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for LocalListingDistancesRegular');
		$this->LocalListingDistancesRegular = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLocalListingDistancesSpecialty($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for LocalListingDistancesSpecialty');
		$this->LocalListingDistancesSpecialty = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLocalListingDistancesNonSubscription($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for LocalListingDistancesNonSubscription');
		$this->LocalListingDistancesNonSubscription = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

