<?php

namespace Controle;
/**
 * FeatureDefinitionsType
 * A container node for definitions of the features specified in FeatureID in the GetCategoryFeatures
 * request. If no feature ID was specified, all definitions are returned.
 */
class FeatureDefinitionsType {
    /**
     * @var \Controle\ListingDurationDefinitionsType | Specifies one or more sets of listing durations. Each set gives durations for listing
     * types a category could allow. If present, the corresponding feature ID was passed in
     * the request or all features were requested (i.e., no feature IDs were specified). Use
     * the data provided in SiteDefaults and Category to determine which listing formats support
     * each listing duration and whether any categories override the standard settings.
     */
    public $ListingDurations;
    /**
     * @var \Controle\ShippingTermRequiredDefinitionType | Specifies the default site setting for whether sellers are required to specify a shipping
     * service and its associated cost when listing items. True means the shipping terms are
     * required unless a specific category overrides this setting.
     */
    public $ShippingTermsRequired;
    /**
     * @var \Controle\BestOfferEnabledDefinitionType | Specifies the default site setting for whether categories allow best offers. True means
     * best offers are allowed site-wide, unless a specific category overrides the setting.
     */
    public $BestOfferEnabled;
    /**
     * @var \Controle\DutchBINEnabledDefinitionType | Specifies the default site setting for whether categories allow DutchBIN. True means
     * best offers are allowed site-wide, unless a specific category overrides the setting.
     */
    public $DutchBINEnabled;
    /**
     * @var \Controle\UserConsentRequiredDefinitionType | Specifies the default site setting for whether a bidder must consent to the bid by confirming
     * that he or she read and agrees to the terms in eBay's privacy policy.
     */
    public $UserConsentRequired;
    /**
     * @var \Controle\HomePageFeaturedEnabledDefinitionType | Indicates whether or not it is possible to enhance a listing by putting it into a rotation
     * for display on a special area of the eBay home page. Support for this feature varies
     * by site. Item or feedback restrictions may apply.
     */
    public $HomePageFeaturedEnabled;
    /**
     * @var \Controle\ProPackEnabledDefinitionType | Specifies the default site setting for whether categories allow the ProPack feature
     * (a feature pack). True means ProPack is allowed site-wide, unless a specific category
     * overrides the setting.
     */
    public $ProPackEnabled;
    /**
     * @var \Controle\BasicUpgradePackEnabledDefinitionType | Specifies the default site setting for whether categories allow the BasicUpgradePack
     * feature (a feature pack). True means it is allowed site-wide, unless a specific category
     * overrides the setting. Australia site (site ID 15, abbreviation AU) only. Effective
     * beginning February 22, 2006.
     */
    public $BasicUpgradePackEnabled;
    /**
     * @var \Controle\ValuePackEnabledDefinitionType | Specifies the default site setting for whether categories allow the ValuePack feature
     * (a feature pack). True means it is allowed site-wide, unless a specific category overrides
     * the setting. Effective beginning February 22, 2006.
     */
    public $ValuePackEnabled;
    /**
     * @var \Controle\ProPackPlusEnabledDefinitionType | Specifies the default site setting for whether categories allow the ProPackPlus feature
     * (a feature pack). True means it is allowed site-wide, unless a specific category overrides
     * the setting. Effective beginning February 22, 2006.
     */
    public $ProPackPlusEnabled;
    /**
     * @var \Controle\AdFormatEnabledDefinitionType | Specifies the default site setting for whether categories allow the Ad Format feature.
     * True means the feature is allowed site-wide, unless a specific category overrides the
     * setting.
     */
    public $AdFormatEnabled;
    /**
     * @var \Controle\DigitalDeliveryEnabledDefinitionType | eBay enables you to list and sell digital files (such as Adobe PDF files) or information
     * that buyers can access online or have delivered electronically. This flag specifies
     * whether most categories on the site allow digitally delivered items (i.e., the default
     * setting for the site's categories).<br><br> If true, digitally delivered items are allowed
     * site-wide, but specific categories can override the setting if they don't support it.<br> If
     * false, digitally delivered items are not normally allowed for the site, but some categories
     * may override the setting.<br><br> If a category supports digital listings, it means
     * that you have the option to list digital items in that category (i.e., Item.DigitalDeliveryDetails
     * can be specified in your listing request). It does not mean the category requires you to
     * list items digitally. If you list in two categories, an item can only specify this option
     * if both categories support digital listings. Digital listings are not eligible for eBay
     * Express.
     */
    public $DigitalDeliveryEnabled;
    /**
     * @var \Controle\BestOfferCounterEnabledDefinitionType | Specifies the default site setting for whether categories allow counter offers for best
     * offers. True means counter offers are allowed site-wide, unless a specific category
     * overrides the setting.
     */
    public $BestOfferCounterEnabled;
    /**
     * @var \Controle\BestOfferAutoDeclineEnabledDefinitionType | Specifies the default site setting for whether categories allow auto decline for best
     * offers. True means auto decline is allowed site-wide, unless a specific category overrides
     * the setting.
     */
    public $BestOfferAutoDeclineEnabled;
    /**
     * @var \Controle\LocalMarketSpecialitySubscriptionDefinitionType | Specifies the default site setting for  whether LocalMarketSpecialitySubscription feature
     * is supported for this category.
     */
    public $LocalMarketSpecialitySubscription;
    /**
     * @var \Controle\LocalMarketRegularSubscriptionDefinitionType | Specifies the default site setting for whether LocalMarketRegularSubscription feature
     * is supported for this category.
     */
    public $LocalMarketRegularSubscription;
    /**
     * @var \Controle\LocalMarketPremiumSubscriptionDefinitionType | Specifies the default site setting for whether LocalMarketPremiumSubscription feature
     * is supported for this category.
     */
    public $LocalMarketPremiumSubscription;
    /**
     * @var \Controle\LocalMarketNonSubscriptionDefinitionType | Specifies the default site setting for whether LocalMarketNonSubscription feature is
     * supported for this category.
     */
    public $LocalMarketNonSubscription;
    /**
     * @var \Controle\ExpressEnabledDefinitionType | Specifies whether most categories on the site are eligible for eBay Express. eBay Express
     * is a specialty site where customers can buy new, fixed-price goods in a more conventional
     * e-commerce experience.<br><br> If true, items on the site are eligible for Express, but
     * specific categories can override the setting if they don't support Express. For example,
     * categories that are not covered by PayPal Buyer Protection (e.g., Live Auctions and
     * Motors vehicles) are excluded from Express.<br> If false, items on the site are not
     * eligible for Express, but some categories may override the setting.<br><br> If you list
     * in an Express-enabled category, it does not necessarily mean that the item will appear
     * in that category when buyers browse and search Express. It only means that the item
     * can also be included on Express, assuming all other Express eligibility requirements
     * are met. See "eBay Express" in the eBay Web Services guide for information about other eligibility
     * requirements.
     */
    public $ExpressEnabled;
    /**
     * @var \Controle\ExpressPicturesRequiredDefinitionType | Specifies whether most categories on the site require a listing to include a picture in
     * order to qualify for eBay Express.<br><br> If true, items on the site require a picture
     * in order to qualify for Express, but specific categories can override this requirement.
     * For example, on the US site, pictures are normally required for Express listings. However,
     * the Event Tickets category could override this requirement if pictures are not commonly expected
     * for tickets.<br> If false, items on the site do not require a picture, but some categories
     * may override the setting.<br><br> Only meaningful if ExpressEnabled is true for the
     * category.
     */
    public $ExpressPicturesRequired;
    /**
     * @var \Controle\ExpressConditionRequiredDefinitionType | Specifies whether most categories on the site require a listing to include the Item
     * Condition attribute in order to qualify for eBay Express. <br><br> If true, items on
     * the site require the Item Condition in order to qualify for Express, but specific categories
     * can override this requirement. For example, on the US site, the Item Condition is normally
     * required for Express listings. However, the Event Tickets category could override this
     * requirement because there is little need to distinguish between new and used tickets.
     * (People rarely sell used tickets after an event unless the ticket is also a collectible
     * item.)<br> If false, items on the site do not require the Item Condition, but some categories
     * may override the setting.<br><br> Only meaningful if ExpressEnabled is true for the
     * category.
     */
    public $ExpressConditionRequired;
    /**
     * @var \Controle\MinimumReservePriceDefinitionType | Specifies the default site setting for whether the Minimum Reserve Price feature is
     * supported for this category.
     */
    public $MinimumReservePrice;
    /**
     * @var \Controle\TCREnabledDefinitionType | Specifies the default site setting for whether the Transaction Confirmation Request
     * feature is supported for this category.
     */
    public $TransactionConfirmationRequestEnabled;
    /**
     * @var \Controle\SellerContactDetailsEnabledDefinitionType | Specifies the default site setting for whether categories allow seller-level contact
     * information for Classified Ad format listings. A value of true means seller-level contact
     * information is available for Classified Ad format listings site-wide, unless a specific
     * category overrides the setting.
     */
    public $SellerContactDetailsEnabled;
    /**
     * @var \Controle\StoreInventoryEnabledDefinitionType | Specifies the default site setting for whether categories allow the Store Inventory
     * Format feature. True means the feature is allowed site-wide, unless a specific category
     * overrides the setting.
     */
    public $StoreInventoryEnabled;
    /**
     * @var \Controle\SkypeMeTransactionalEnabledDefinitionType | Specifies the default site setting for whether categories allow the addition of Skype
     * buttons to listings for transactional formats (e.g., the Chinese auction format).
     */
    public $SkypeMeTransactionalEnabled;
    /**
     * @var \Controle\SkypeMeNonTransactionalEnabledDefinitionType | Specifies the default site setting for whether categories allow the addition of Skype
     * buttons to listings for nontransactional formats (e.g., the advertisement format).
     */
    public $SkypeMeNonTransactionalEnabled;
    /**
     * @var \Controle\LocalListingDistancesRegularDefinitionType | Specifies the supported local listing distances of regular vehicles.
     */
    public $LocalListingDistancesRegular;
    /**
     * @var \Controle\LocalListingDistancesSpecialtyDefinitionType | Specifies the supported local listing distances of specialty vehicles.
     */
    public $LocalListingDistancesSpecialty;
    /**
     * @var \Controle\LocalListingDistancesNonSubscriptionDefinitionType | Specifies the supported local listing distances for users who have not subscribed to
     * either Regular or Specialty vehicles.
     */
    public $LocalListingDistancesNonSubscription;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param ListingDurationDefinitionsType $val
     * @throws Exception
     */
    public function setListingDurations($val) {
        
        $this->ListingDurations = (int)$val;
    }

    /**
     * @param ShippingTermRequiredDefinitionType $val
     * @throws Exception
     */
    public function setShippingTermsRequired($val) {
        
        $this->ShippingTermsRequired = (int)$val;
    }

    /**
     * @param BestOfferEnabledDefinitionType $val
     * @throws Exception
     */
    public function setBestOfferEnabled($val) {
        
        $this->BestOfferEnabled = (int)$val;
    }

    /**
     * @param DutchBINEnabledDefinitionType $val
     * @throws Exception
     */
    public function setDutchBINEnabled($val) {
        
        $this->DutchBINEnabled = (int)$val;
    }

    /**
     * @param UserConsentRequiredDefinitionType $val
     * @throws Exception
     */
    public function setUserConsentRequired($val) {
        
        $this->UserConsentRequired = (int)$val;
    }

    /**
     * @param HomePageFeaturedEnabledDefinitionType $val
     * @throws Exception
     */
    public function setHomePageFeaturedEnabled($val) {
        
        $this->HomePageFeaturedEnabled = (int)$val;
    }

    /**
     * @param ProPackEnabledDefinitionType $val
     * @throws Exception
     */
    public function setProPackEnabled($val) {
        
        $this->ProPackEnabled = (int)$val;
    }

    /**
     * @param BasicUpgradePackEnabledDefinitionType $val
     * @throws Exception
     */
    public function setBasicUpgradePackEnabled($val) {
        
        $this->BasicUpgradePackEnabled = (int)$val;
    }

    /**
     * @param ValuePackEnabledDefinitionType $val
     * @throws Exception
     */
    public function setValuePackEnabled($val) {
        
        $this->ValuePackEnabled = (int)$val;
    }

    /**
     * @param ProPackPlusEnabledDefinitionType $val
     * @throws Exception
     */
    public function setProPackPlusEnabled($val) {
        
        $this->ProPackPlusEnabled = (int)$val;
    }

    /**
     * @param AdFormatEnabledDefinitionType $val
     * @throws Exception
     */
    public function setAdFormatEnabled($val) {
        
        $this->AdFormatEnabled = (int)$val;
    }

    /**
     * @param DigitalDeliveryEnabledDefinitionType $val
     * @throws Exception
     */
    public function setDigitalDeliveryEnabled($val) {
        
        $this->DigitalDeliveryEnabled = (int)$val;
    }

    /**
     * @param BestOfferCounterEnabledDefinitionType $val
     * @throws Exception
     */
    public function setBestOfferCounterEnabled($val) {
        
        $this->BestOfferCounterEnabled = (int)$val;
    }

    /**
     * @param BestOfferAutoDeclineEnabledDefinitionType $val
     * @throws Exception
     */
    public function setBestOfferAutoDeclineEnabled($val) {
        
        $this->BestOfferAutoDeclineEnabled = (int)$val;
    }

    /**
     * @param LocalMarketSpecialitySubscriptionDefinitionType $val
     * @throws Exception
     */
    public function setLocalMarketSpecialitySubscription($val) {
        
        $this->LocalMarketSpecialitySubscription = (int)$val;
    }

    /**
     * @param LocalMarketRegularSubscriptionDefinitionType $val
     * @throws Exception
     */
    public function setLocalMarketRegularSubscription($val) {
        
        $this->LocalMarketRegularSubscription = (int)$val;
    }

    /**
     * @param LocalMarketPremiumSubscriptionDefinitionType $val
     * @throws Exception
     */
    public function setLocalMarketPremiumSubscription($val) {
        
        $this->LocalMarketPremiumSubscription = (int)$val;
    }

    /**
     * @param LocalMarketNonSubscriptionDefinitionType $val
     * @throws Exception
     */
    public function setLocalMarketNonSubscription($val) {
        
        $this->LocalMarketNonSubscription = (int)$val;
    }

    /**
     * @param ExpressEnabledDefinitionType $val
     * @throws Exception
     */
    public function setExpressEnabled($val) {
        
        $this->ExpressEnabled = (int)$val;
    }

    /**
     * @param ExpressPicturesRequiredDefinitionType $val
     * @throws Exception
     */
    public function setExpressPicturesRequired($val) {
        
        $this->ExpressPicturesRequired = (int)$val;
    }

    /**
     * @param ExpressConditionRequiredDefinitionType $val
     * @throws Exception
     */
    public function setExpressConditionRequired($val) {
        
        $this->ExpressConditionRequired = (int)$val;
    }

    /**
     * @param MinimumReservePriceDefinitionType $val
     * @throws Exception
     */
    public function setMinimumReservePrice($val) {
        
        $this->MinimumReservePrice = (int)$val;
    }

    /**
     * @param TCREnabledDefinitionType $val
     * @throws Exception
     */
    public function setTransactionConfirmationRequestEnabled($val) {
        
        $this->TransactionConfirmationRequestEnabled = (int)$val;
    }

    /**
     * @param SellerContactDetailsEnabledDefinitionType $val
     * @throws Exception
     */
    public function setSellerContactDetailsEnabled($val) {
        
        $this->SellerContactDetailsEnabled = (int)$val;
    }

    /**
     * @param StoreInventoryEnabledDefinitionType $val
     * @throws Exception
     */
    public function setStoreInventoryEnabled($val) {
        
        $this->StoreInventoryEnabled = (int)$val;
    }

    /**
     * @param SkypeMeTransactionalEnabledDefinitionType $val
     * @throws Exception
     */
    public function setSkypeMeTransactionalEnabled($val) {
        
        $this->SkypeMeTransactionalEnabled = (int)$val;
    }

    /**
     * @param SkypeMeNonTransactionalEnabledDefinitionType $val
     * @throws Exception
     */
    public function setSkypeMeNonTransactionalEnabled($val) {
        
        $this->SkypeMeNonTransactionalEnabled = (int)$val;
    }

    /**
     * @param LocalListingDistancesRegularDefinitionType $val
     * @throws Exception
     */
    public function setLocalListingDistancesRegular($val) {
        
        $this->LocalListingDistancesRegular = (int)$val;
    }

    /**
     * @param LocalListingDistancesSpecialtyDefinitionType $val
     * @throws Exception
     */
    public function setLocalListingDistancesSpecialty($val) {
        
        $this->LocalListingDistancesSpecialty = (int)$val;
    }

    /**
     * @param LocalListingDistancesNonSubscriptionDefinitionType $val
     * @throws Exception
     */
    public function setLocalListingDistancesNonSubscription($val) {
        
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

