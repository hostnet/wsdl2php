<?php

namespace Controle\sub1\sub2;

/**
 * ItemType
 * Contains the data defining one item. A seller populates an object of this type at listing
 * time with the definition of a new item. A seller also uses an object of this type to re-list
 * or revise an item. Calls that retrieve item data (such as the GetSellerList call) return
 * an object of this type, filled with the item's data. Some fields are applicable both to
 * eBay listings and Half.com listings. Some fields are only applicable to eBay listings, and
 * others are only applicable to Half.com listings.
 */
class ItemType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Returns custom, application-specific data associated with the item. The data you specify
	 * is stored by eBay with the item for your own reference, but it is not used by eBay in any
	 * way. Use ApplicationData to store special information for yourself, such as a part number. For
	 * a SKU in an eBay.com listing, use the SKU element instead. To remove this value when revising
	 * or relisting an item, use DeletedField. ApplicationData is not applicable to Half.com.
	 * For Half.com listings, use SellerInventoryID instead.
	 */
	public $ApplicationData;
	/**
	 * @var \Controle\sub1\sub2\AttributeSetArrayType | Reserved for future use.
	 */
	public $AttributeSetArray;
	/**
	 * @var \Controle\sub1\sub2\AttributeArrayType | Used to specify the item condition. Only applicable to Half.com (not eBay listings). You
	 * can revise this property for Half.com listings. This does not use the same Attributes format
	 * as eBay's Item Specifics.
	 */
	public $AttributeArray;
	/**
	 * @var \Controle\sub1\sub2\LookupAttributeArrayType | Use this as a shortcut for specifying the Item Condition attribute by name instead of by
	 * ID. Only valid when using AddItem for items in Media categories (Books, DVD and Movies,
	 * Music, and Video Game categories). You can pass either AttributeSetArray or LookupAttributeArray,
	 * but you cannot pass both in the same request. Not applicable to Half.com.
	 */
	public $LookupAttributeArray;
	/**
	 * @var boolean | Whether the seller specifies that a shipping discount is to be applied (in the event that
	 * an item's transaction is later combined with others into a single order). Not applicable
	 * to Half.com.
	 */
	public $ApplyShippingDiscount;
	/**
	 * @var boolean | If true, the seller requests immediate payment for the item. If false or not specified,
	 * immediate payment is not requested. (In responses, does not indicate whether the item is
	 * actually still a candidate for purchase via immediate payment.)<br> <br> Only applicable
	 * to items listed on PayPal-enabled sites in categories that support immediate payment (see
	 * AutoPayEnabled in GetCategories), when seller has a Premier or Business PayPal account
	 * (see PayPalAccountType in Getuser). If true, the seller must also accept PayPal as a payment
	 * method for the item (see Item.PaymentMethods).<br> <br> Required for digitally delivered
	 * goods (see Item.DigitalDeliveryDetails). <br> <br> Not supported if ThirdPartyCheckout
	 * is true.<br> <br> See the eBay Web Services guide section on Immediate Payment for additional requirements
	 * and dependencies. Also see the section on working with the eBay Motors site for additional
	 * rules. Not applicable to Half.com.
	 */
	public $AutoPay;
	/**
	 * @var \Controle\sub1\sub2\PaymentDetailsType | Contains data associated with eBay Motors payments (Durations for deposit and full payments).
	 * Returned for Motors listings. Not applicable to Half.com.
	 */
	public $PaymentDetails;
	/**
	 * @var \Controle\sub1\sub2\BiddingDetailsType | Detailed information about a bid. For GetMyeBayBuying, returned as a self-closed element
	 * if no bids meet the request criteria. Not applicable to Half.com.
	 */
	public $BiddingDetails;
	/**
	 * @var boolean | Listing upgrade that features the item in eBay search results on the mobile.de partner
	 * site. Applicable to eBay Germany. If true in listing requests and responses, the seller
	 * is purchasing or has purchased cross-promotional placement on the mobile.de site. See the
	 * eBay Web Services Guide for applicable categories, revise and relist rules, and additional
	 * information on featuring vehicles on the Mobile.de Site. Not applicable to Half.com.
	 */
	public $MotorsGermanySearchable;
	/**
	 * @var \Controle\sub1\sub2\BuyerProtectionCodeType | Indicates the status of the item's eligibility for the PayPal Buyer Protection program.
	 * Not applicable to Half.com.
	 */
	public $BuyerProtection;
	/**
	 * @var \Controle\sub1\sub2\AmountType | For Chinese auction listings, Buy It Now allows a user to purchase the item at a fixed
	 * price and end the auction immediately. eBay China also supports Buy It Now for Dutch auction
	 * listings (see International Differences Overview in the eBay Web Services guide). Use this
	 * field to add Buy It Now and specify the amount a buyer would need to bid to take advantage
	 * of the Buy It Now feature. <br><br> On the main eBay site, not applicable to fixed-price
	 * items (ListingTypeCodeType type StoresFixedPrice or FixedPriceItem), AdFormat listings,
	 * or Half.com listings. For fixed-price and Half.com listings, see StartPrice instead. See
	 * the eBay Web Services Guide for validation rules when revising US eBay Motors listings,
	 * including rules for lowering the Buy It Now price of a Motors listing. <br><br> On most
	 * sites, once a Chinese auction has bids, the listing is no longer eligible for Buy It Now.
	 * However, calls like GetItem and GetSearchResults still return the BuyItNowPrice that the
	 * seller set for the listing. You can use Item.SellingStatus.BidCount to determine whether
	 * an auction with Buy It Now has bids or not. With GetSearchResults, you can examine the
	 * Item.SearchDetails.BuyItNowEnabled flag to determine whether an auction is still a Buy
	 * It Now listing. With GetItem, you can examine the Item.ListingDetails.BuyItNowAvailable
	 * flag to determine whether a Dutch auction is still a Buy It Now listing. <br><br> For a
	 * listing to be eligible for Express, the max Buy It Now Price is USD 10,000.00 for the US. (Additional
	 * price limits may be imposed by the seller's PayPal account or the payment method used.
	 * Such limits cannot be determined via the eBay API and are not covered in eBay's API documentation,
	 * as they may vary for each user.) <br><br> To remove this value when revising or relisting
	 * an item, use DeletedField.
	 */
	public $BuyItNowPrice;
	/**
	 * @var boolean | Controls how eBay handles cases in which an ID specified in PrimaryCategory and/or SecondaryCategory
	 * no longer exists in the current category structure: If you pass a value of true in CategoryMappingAllowed,
	 * eBay will look up the current ID that is mapped to the same category and use the new ID
	 * for the listing (if any). The new ID will be returned in the response as CategoryID (for
	 * the primary category) or Category2ID (for the secondary category). If CategoryMappingAllowed
	 * is not set or contains a value of "false" (the default), an error will be returned if a
	 * selected category ID no longer exists. Not applicable to Half.com.
	 */
	public $CategoryMappingAllowed;
	/**
	 * @var \Controle\sub1\sub2\CharityType | Identifies a Giving Works listing and the benefiting nonprofit charity organization selected
	 * by the charity seller, if any. If specified, the seller must also accept PayPal as a payment
	 * method for the item (see Item.PaymentMethods). <br> <br>Giving Works listings are not eligible
	 * for some eBay Express sites. (If ExpressListing is false in GetItem or VerifyAddItem and
	 * you specified Charity, check whether ExpressItemRequirements returns NoCharity as a cause.) <br><br> When
	 * you revise a item, you can add or change the charity information, but you cannot remove
	 * it. When you relist an item, use DeletedField to remove a charity information. <br><br> Not
	 * applicable to Half.com.
	 */
	public $Charity;
	/**
	 * @var \Controle\sub1\sub2\CountryCodeType | Two-letter ISO 3166 country code. In some calls, used with the Location field to indicate
	 * the city and country where the item is located. Also applicable as input to AddItem and
	 * related calls when you list items to Half.com (specify US). <br> <br> In GetSearchResultsExpress,
	 * only returned when ItemDetails is set to Fine.
	 */
	public $Country;
	/**
	 * @var \Controle\sub1\sub2\CrossPromotionsType | Container for cross-promoted items related to a specific item ID. The items are either
	 * upsell or cross-sell, according to the promotion method passed in the request. Not applicable
	 * to Half.com.
	 */
	public $CrossPromotion;
	/**
	 * @var \Controle\sub1\sub2\CurrencyCodeType | Limits the result set to just those items with a specified currency.
	 */
	public $Currency;
	/**
	 * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
	 */
	public $Description;
	/**
	 * @var \Controle\sub1\sub2\DescriptionReviseModeCodeType | If you are changing the description of an item, specifies whether the new next is an addition,
	 * a replacement, etc.
	 */
	public $DescriptionReviseMode;
	/**
	 * @var \Controle\sub1\sub2\DistanceType | The distance used in a proximity search distance calculation. Not applicable to Half.com.
	 */
	public $Distance;
	/**
	 * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
	 */
	public $FinanceOfferID;
	/**
	 * @var int | If set, a generic gift icon displays next the listing's title in search and browse pages.
	 * GiftIcon must be set to be able to use GiftServices options. Not applicable to Half.com.
	 */
	public $GiftIcon;
	/**
	 * @var \Controle\sub1\sub2\GiftServicesCodeType | Optional gift services that the seller is offering if the buyer chooses to purchase the
	 * item as a gift. Only returned if offered by the seller. Not applicable to Half.com.
	 */
	public $GiftServices;
	/**
	 * @var \Controle\sub1\sub2\HitCounterCodeType | Indicates whether an optional hit counter is displayed on the item's listing page and,
	 * if so, what type. See HitCounterCodeType for specific values. Not applicable to Half.com. This
	 * field is ignored when Item.ListingType=Express.
	 */
	public $HitCounter;
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var \Controle\sub1\sub2\ListingDetailsType | Various details about a listing, some of which are calculated or derived after the item
	 * is listed. These include the start and end time, converted (localized) prices, and certain
	 * flags that indicate whether the seller specified fields whose values are not visible to
	 * the requesting user. For GetMyeBayBuying, returned as a self- closed element if no listings
	 * meet the request criteria. Not applicable to Half.com.
	 */
	public $ListingDetails;
	/**
	 * @var \Controle\sub1\sub2\ListingDesignerType | Contains the detail data for the Listing Designer theme and template (if either are used),
	 * which can optionally be used to enhance the appearance of the description area of an item's
	 * description. See ListingDesignerType for its child elements. Not applicable to Half.com.
	 */
	public $ListingDesigner;
	/**
	 * @var \Controle\sub1\sub2\token | Specifies the ID of a set of default durations for a certain type of listing. The actual
	 * duration values are returned within the FeatureDefinitions node. The type of listing is
	 * named in the type attribute.
	 */
	public $ListingDuration;
	/**
	 * @var \Controle\sub1\sub2\ListingEnhancementsCodeType | Describes listing upgrades that sellers can select for a fee, such as the BoldTitle upgrade.
	 * Also includes feature packs for saving on listing upgrades. See <a href="http://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing
	 * Upgrades</a> in the eBay Web site online help. <br><br> You cannot remove listing upgrades
	 * when you revise a listing. When you relist an item, use DeletedField to remove a listing
	 * upgrades. <br><br> For AddLiveAuctionItem and ReviseLiveAuctionItem, you can specify a
	 * maximum of 10 featured lot items per live auction catalog. Not applicable to Half.com. This
	 * field is ignored when Item.ListingType=Express.
	 */
	public $ListingEnhancement;
	/**
	 * @var \Controle\sub1\sub2\ListingTypeCodeType | The listing format (fixed price, auction, etc) for the automatic item search criteria.
	 */
	public $ListingType;
	/**
	 * @var \Controle\sub1\sub2\ListingSubtypeEnum | Indicates the specific type of lead generation format listing (i.e., classified subtypes).
	 */
	public $ListingSubtype;
	/**
	 * @var string | Indicates the geographical location of the item (along with Country). When you revise a
	 * listing, you can add or change this value only if the listing has no bids (or no items
	 * have sold) and it does not end within 12 hours. Also applicable as input to AddItem and
	 * related calls when you list items to Half.com.
	 */
	public $Location;
	/**
	 * @var int | A lot is a set of two or more similar items that must be purchased together in a single
	 * transaction. A listing can have multiple lots (instead of multiple items). When LotSize
	 * is specified, the listing price reflects the price of each lot (not each item within the
	 * lot). In this case, Quantity indicates the number of lots being listed, and LotSize indicates
	 * the number of items in each lot. (If a listing has no lots, Quantity indicates the number
	 * of separate items being listed.) Important: Lot items can be listed only in lot-enabled categories.
	 * GetCategories returns LSD (lot size disabled) with a value of true for categories that
	 * do not support lots. Not applicable to Half.com. This field is ignored when Item.ListingType=Express.
	 */
	public $LotSize;
	/**
	 * @var boolean | If true in listing requests and responses, the item is listed with Now and New. Only applicable
	 * to Buy It Now, fixed-price, and Store Inventory listings on certain eBay sites. See the
	 * eBay Web Services guide for details. In requests that list items, only valid if the seller
	 * also specifies the item condition (as new), predefined return policy attributes, a buy
	 * it now or fixed price, and shipping costs. To remove Now and New from a listing, set the
	 * value to false. If the listing has bids (or items have been sold) or the listing ends within
	 * 12 hours, you cannot add or remove NowAndNew when you revise the listing. Not applicable
	 * to Half.com.
	 */
	public $NowAndNew;
	/**
	 * @var string | Not currently operational.
	 */
	public $PartnerCode;
	/**
	 * @var string | Not currently operational.
	 */
	public $PartnerName;
	/**
	 * @var \Controle\sub1\sub2\BuyerPaymentMethodCodeType | The payment methods the buyer uses to pay for      the order. An order can have multiple
	 * payment methods if the      buyer combines several transactions into one order.      Also
	 * applicable to Half.com (for GetOrders).
	 */
	public $PaymentMethods;
	/**
	 * @var string | Valid PayPal email address for the PayPal account that the seller will use if they offer
	 * PayPal as a payment method for the listing. eBay uses this to identify the correct PayPal
	 * account when the buyer pays via PayPal during the checkout process. (As a seller can have
	 * more than one PayPal account, you cannot necessarily rely on PayPal account data returned
	 * from GetUser for details about the account associated with the PayPal email address that
	 * the seller specifies.)<br> <br> Required if seller has chosen PayPal as a payment method
	 * (PaymentMethods) for the listing.<br> <br> For a listing to be eligible for Express US,
	 * the seller needs to use an email address that is in good standing and that is associated
	 * with a PayPal Premier or PayPal business account that is set to ship to unconfirmed addresses.
	 * For Express Germany, PayPalEmailAddress must be specified for Express format listings,
	 * but it is optional for other formats (as long as an eligible default PayPal account is
	 * specified in the seller's Express preferences). If the specified PayPal account becomes
	 * ineligible for eBay Express payments (because the seller blocked unconfirmed addresses
	 * or some other change occurred), the items associated with that account may become ineligible
	 * for Express and may no longer appear on Express. See eBay Express information in the eBay
	 * Web Services Guide for more information.<br> <br> For digital listings, the seller needs
	 * to use an email address that is associated with a PayPal Premier or PayPal business account.
	 * <br> <br> <b>For ReviseItem and RelistItem only:</b> To remove this value when you revise
	 * or relist an item, use DeletedField. When you revise a listing, if the listing has bids
	 * (or items have been sold) or it ends within 12 hours, you can add PayPalEmailAddress, but
	 * you cannot remove it.<br> <br> Not applicable to eBay Motors listings. Also not applicable
	 * to Half.com.
	 */
	public $PayPalEmailAddress;
	/**
	 * @var \Controle\sub1\sub2\CategoryType | Category ID for the first (or only) category in which the item is listed (or will be listed,
	 * if the item is new). A number of listing features have dependencies on the primary category.
	 * We have pointed out a few of the notable dependencies below. See the descriptions of the
	 * fields you are using to determine whether the feature you're supporting depends on the
	 * listing's primary category. <br> <br> <b>For the AddItem family of calls:</b> Use calls
	 * like GetCategories and GetCategoryFeatures to determine valid values for the site on which
	 * you are listing (see the eBay Web Services Guide for information on working with categories).
	 * Also see Item.CategoryMappingAllowed and Item.CategoryBasedAttributesPrefill.<br> <br> Most
	 * eBay.com categories are also eligible for eBay Express. Categories not covered by PayPal
	 * Buyer Protection are excluded. Also, certain categories that do not support item condition
	 * may be excluded (use GetCategoryFeatures to determine eligible categories). See "eBay Express"
	 * in the eBay Web Services Guide.<br> <br> There are a number of categories on some eBay
	 * sites that always add the Gallery feature (for free) when you include a picture in the
	 * listing and you don't specify the Gallery feature yourself. See GalleryType for information
	 * about fees that could be charged if you change the category in these cases. <br> <br> Not
	 * applicable to Half.com.<br> <br> <b>For ReviseItem only:</b> When revising a listing, you
	 * can change the primary category only if an item has no bids (or no items have sold) and
	 * the listing does not end within 12 hours. If you change the listing category, any Item
	 * Specifics (attributes) that were previously specified may be dropped from the listing if
	 * they aren't valid for the new category. See Item.AttributeSetArray.<br> <br> You cannot
	 * change the meta-categories for vehicles (i.e., you cannot change a truck to a motorcycle),
	 * but you can change the leaf category (e.g., change one motorcycle subcategory to another
	 * motorcycle subcategory). See the eBay Web Services Guide for additional rules. International
	 * sites (such as the eBay Germany site) have similar rules for revising vehicle categories.
	 * <br> <br> <b>For AddLiveAuctionItem only:</b> For eBay Live Auctions (e.g., in AddLiveAuctionItem),
	 * this is the eBay Live Auctions site category in which to list the item. This can be different
	 * from the category that is associated with the seller's catalog. See Specifying eBay Live
	 * Auctions Categories in the eBay Web Services guide.<br> <br> <b>For GetItemRecommendations
	 * only:</b> For GetItemRecommendations, use this to control the category that will be searched
	 * for recommendations. Specify the category in which the item will be listed. See the eBay
	 * Web Services guide for differences in validation rules depending on whether you are using the
	 * Listing Analyzer engine, Product Pricing engine, or Suggested Attributes engine.
	 */
	public $PrimaryCategory;
	/**
	 * @var boolean | If true, designates the listing as a private auction. The list of bidders on private auctions
	 * is hidden when the active listing is viewed. Sellers may want to use this option when they
	 * believe that potential bidders for a listing would not want their User IDs disclosed to
	 * others. Not applicable to Half.com.
	 */
	public $PrivateListing;
	/**
	 * @var \Controle\sub1\sub2\ProductListingDetailsType | Specifies stock product information to include in a listing. Only applicable when listing
	 * items with Pre-filled Item Information. If the item's primary and secondary category are
	 * both catalog-enabled, the product listing details must be applicable to the primary category.
	 * If only one category is catalog- enabled, the product listing details must be applicable
	 * to the catalog-enabled category. Either Item.ExternalProductID or Item.ProductListingDetails
	 * can be specified in an AddItem request, but not both. See the eBay Web Services Guide for
	 * information on listing with Pre-filled Item Information.<br> <br> <b>For ReviseItem and
	 * RelistItem only:</b> If a listing includes Pre-filled Item Information and you change a
	 * category, the rules for continuing to include Pre-filled Item Information depend on whether
	 * or not the new category is mapped to a characteristic set associated with the same product
	 * ID. When you revise a listing, if it has bids or it ends within 12 hours, you cannot change
	 * the product ID and you cannot remove existing product data. However, you can change or
	 * add preferences such as IncludeStockPhotoURL, UseStockPhotoURLAsGallery, and IncludePrefilledItemInformation.
	 * To delete all catalog data when you revise or relist an item, specify Item.ProductListingDetails
	 * in DeletedField and don't pass ProductListingDetails in the request.<br> <br> <b>For GetItemRecommendations
	 * only:</b> For GetItemRecommendations, see the eBay Web Services guide for validation rule
	 * differences when using the Product Pricing engine.<br><br> Not applicable to Half.com.
	 */
	public $ProductListingDetails;
	/**
	 * @var \Controle\sub1\sub2\ProximitySearchDetailsType | Applications should remove dependencies on this type. For item location, refer to Item.PostalCode
	 * instead.
	 */
	public $ProximitySearchDetails;
	/**
	 * @var int | Specifies the number of items from the specified listing the user tendering the offer intends
	 * to purchase or bid on. For Chinese auctions and other listing formats that only allow one
	 * item per listing, value may not exceed one. For multi-item listings, must be greater than
	 * zero and not exceeding the number of items offered for sale in the listing.
	 */
	public $Quantity;
	/**
	 * @var string | A text note that the seller specified for the Half.com item, if any. Only visible to the
	 * seller. Not returned if the seller specified no notes.
	 */
	public $PrivateNotes;
	/**
	 * @var string | Specifies a region ID. The item must have been listed for the specified region to be returned
	 * in the search result set.
	 */
	public $RegionID;
	/**
	 * @var boolean | Applicable only to re-listing an item. If true, creates a link in the item's old listing
	 * for the item that points to the new relist page, which accommodates users who might still
	 * look for the item under its old item ID. Not applicable to Half.com.
	 */
	public $RelistLink;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The lowest price at which the seller is willing to sell the item. (StartPrice must be lower
	 * than ReservePrice.) Not all categories support reserve prices. See GetCategories and "Determining
	 * Whether a Category Supports Reserve Prices" in the eBay Web Services guide. In calls that
	 * retrieve item data, ReservePrice only has a non-zero value for listings with a reserve
	 * price and where the user requesting the item data is also the item's seller. Not applicable
	 * to fixed- price items or ad format listings.<br> <br> You can remove the reserve price
	 * of a US eBay Motors listing if the category allows it, the current reserve price has not
	 * been met, and the reserve price is at least $2.00 more than the current high bid. In this
	 * case, if the item has bids, the reserve price is set to $1.00 over the current high bid.
	 * The next bid meets the reserve and wins. See the Fees Overview on the eBay Web site for
	 * information about fee credits that may be available when the reserve price is removed for
	 * a Motors listing. See the eBay Web Services guide for validation rules when revising US
	 * Motors listings.<br><br> For AddLiveAuctionItem and ReviseLiveAuctionItem, the seller needs
	 * to make sure they specify the amount in the currency selected for the live auction event.
	 * When you revise a Live Auction item, you can lower an existing reserve price, but you cannot
	 * add a reserve price or remove an existing reserve price if the item has absentee bids or
	 * ends in less than 12 hours.<br><br> Not applicable to Half.com. This field is ignored when
	 * Item.ListingType=Express.
	 */
	public $ReservePrice;
	/**
	 * @var \Controle\sub1\sub2\ReviseStatusType | Indicates whether an item has been revised since the listing became active and, if so,
	 * which among a subset of properties have been changed by the revision. Output only. Not
	 * applicable to Half.com.
	 */
	public $ReviseStatus;
	/**
	 * @var dateTime | Date and time that the sale schedule starts.
	 */
	public $ScheduleTime;
	/**
	 * @var \Controle\sub1\sub2\CategoryType | ID for second category in which the item is listed (also see Item.PrimaryCategory). <br> <br> <b>For
	 * the AddItem family of calls:</b> Listing an item in a second category is optional. Also
	 * see Item.CategoryMappingAllowed and Item.CategoryBasedAttributesPrefill. <br> <br> Most
	 * eBay.com categories are also eligible for eBay Express. Categories not covered by PayPal
	 * Buyer Protection are excluded. Also, certain categories that do not support item condition
	 * may be excluded.<br> <br> Not applicable to eBay China (site 223). Not applicable to Half.com.
	 * <br> <br> You cannot list US eBay Motors vehicles in two categories. However, you can list
	 * Parts & Accessories in two categories. The Final Value Fee is based on the primary category
	 * in which the item is listed. Furthermore, you can list the same item in an eBay Motors Parts
	 * & Accessories category and in an eligible eBay category, as long as the primary category
	 * is associated with the site on which you are listing. That is, the two categories can be
	 * a mix of Motors Parts & Accessories and eBay site categories. (Real Estate, Mature Audience
	 * (adult), and Business & Industrial categories are not eligible for listing in two categories in
	 * this manner.) For example, if you list on Motors, the primary category could be 6750 (eBay
	 * Motors > Parts & Accessories > Apparel & Merchandise > Motorcycle > Jackets & Leathers),
	 * and the secondary category could be 57988 (eBay > Clothing, Shoes > Accessories > Men's
	 * Clothing > Outerwear). If you list on the main eBay site, the primary category could be 57988
	 * and the secondary category could be 6750. <br> <br> To remove this value when relisting
	 * an item, use DeletedField. <br><br> <b>For ReviseItem only:</b> When revising a listing,
	 * you can add, remove, or change the secondary category only if the listing has no bids (or
	 * no items have sold) and it does not end within 12 hours. If you change the secondary category, any
	 * corresponding Item Specifics (attributes) that were previously specified may be dropped
	 * from the listing if they aren't valid for the category. See Item.AttributeSetArray.<br> <br> When
	 * you revise an item, you can change the secondary category from a Motors Parts & Accessories
	 * category to an eBay category or vice versa if the listing has no bids (or no items have
	 * sold) and it does not end within 12 hours. <br> <br> <b>For AddLiveAuctionItem only:</b>
	 * For eBay Live Auctions (e.g., AddLiveAuctionItem), this is the eBay US site category in
	 * which to list the item. (This can be any eBay US category except Motors or Real Estate
	 * categories.) Note that eBay Live Auctions does not charge a fee to specify an eBay category (i.e.,
	 * no List in Two Category fees). See Specifying eBay Live Auctions Categories in the eBay
	 * Web Services guide. In AddLiveAuctionItem, you need to specify SecondaryCategory if you
	 * are including Item Specifics (AttributeSetArray). <br> <br> <b>For ReviseLiveAuctionItem
	 * only:</b> For eBay Live Auctions, you can add SecondaryCategory when you revise the lot
	 * item, but you cannot change or remove an existing secondary category if the item has absentee
	 * bids or it ends in less than 12 hours.<br> <br> <b>For GetItemRecommendations only:</b> For
	 * GetItemRecommendations, use this to control the category that will be searched for recommendations.
	 * Specify the category in which the item will be listed. See the eBay Web Services guide
	 * for differences in validation rules depending on whether you are using the Listing Analyzer
	 * engine, Product Pricing engine, or Suggested Attributes engine.
	 */
	public $SecondaryCategory;
	/**
	 * @var \Controle\sub1\sub2\CategoryType | ID for a second category that eBay added as a free promotion. You cannot add this yourself. Only
	 * returned if the item was listed in a single category and eBay added a free second category. Not
	 * applicable to Half.com.
	 */
	public $FreeAddedCategory;
	/**
	 * @var \Controle\sub1\sub2\SiteHostedPictureType | In requests, if SiteHostedPicture or VendorHostedPicture are passed in with PictureDetails,
	 * PictureDetails will take precedence. In responses, PictureDetails is returned instead of
	 * SiteHostedPicture or VendorHostedPicture with request version 439 and higher. <br> <br> Previous
	 * behavior (for applications that still use older versions of the schema):<br> <br> SiteHostedPicture
	 * contains the data for pictures associated with an item, when those pictures are hosted
	 * on the eBay site (eBay Picture Services). The related element, VendorHostedPicture, contains
	 * the data for pictures hosted somewhere other than on the eBay site. <br> <br> For a listing
	 * to be eligible for eBay Express, it must include a picture, gallery, or stock photo URL.
	 * Some categories are exempt from this requirement.<br> <br> Not applicable to Half.com.
	 */
	public $SiteHostedPicture;
	/**
	 * @var \Controle\sub1\sub2\UserType | Container for information about this listing's seller. Not applicable to Half.com. <br> <br> In
	 * GetSearchResultsExpress, only returned when ItemDetails is set to Fine.
	 */
	public $Seller;
	/**
	 * @var \Controle\sub1\sub2\SellingStatusType | Various details about the current status of the listing, such as the current number of
	 * bids and the current high bidder. Not applicable to Half.com.<br> <br> For GetSearchResultsExpress,
	 * this is always returned when ItemArray.Item is returned.
	 */
	public $SellingStatus;
	/**
	 * @var \Controle\sub1\sub2\ShippingOptionCodeType | Previous behavior: Indicates where the seller is willing to ship the item. Default is SiteOnly.
	 * If SitePlusRegions is selected, when the item is listed, then at least one region must
	 * also be specified (in ShippingRegions). Not applicable to Half.com.
	 */
	public $ShippingOption;
	/**
	 * @var \Controle\sub1\sub2\ShippingDetailsType | The shipping-related details for an item or transaction, including flat and calculated
	 * shipping costs and shipping insurance costs. For GetOrders, also applicable to Half.com.
	 * For GetOrders, minimal ShippingDetails information is returned under the Transaction container.
	 */
	public $ShippingDetails;
	/**
	 * @var \Controle\sub1\sub2\ShippingRegionCodeType | Previous behavior: Indicates the global regions to which the seller is willing to ship
	 * the item(s). Only applicable if the seller specifies SitePlusRegions for the shipping option
	 * (ShippingOptionCodeType). Not applicable to Half.com.
	 */
	public $ShippingRegions;
	/**
	 * @var \Controle\sub1\sub2\ShippingTermsCodeType | Previous behavior: Indicates who pays the shipping costs for the item(s), the buyer or
	 * the seller. Not applicable to Half.com.
	 */
	public $ShippingTerms;
	/**
	 * @var string | An international location or region to which the seller is willing to ship, regardless
	 * of shipping service. The country of the listing site is added by eBay. Use GeteBayDetails
	 * with a DetailName of ShippingLocationDetails to determine which international locations
	 * are valid for the site. Omit ShipToLocations if you want to ship only within the country
	 * of the listing site. To state that you do not wish to ship at all, set ShipToLocations
	 * to None. ReviseItem can add a ShipToLocation. Applicable with compatibility level 373 and
	 * higher. Not applicable to Half.com.
	 */
	public $ShipToLocations;
	/**
	 * @var \Controle\sub1\sub2\SiteCodeType | Site where the Want It Now post is listed.
	 */
	public $Site;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The original price of the item at listing or re-listing time. If this value changes when
	 * the item is revised, the new value becomes the original price. <br><br> For auction-type
	 * listings, competitive bidding starts at this value. Once at least one bid has been placed,
	 * StartPrice remains the same but CurrentPrice is incremented to the amount of each succeeding
	 * bid. If ReservePrice is also specified, the value of StartPrice must be lower than the
	 * value of ReservePrice. <br><br> For fixed-price listings (FixedPriceItem), Store Inventory
	 * (StoresFixedPrice) listings, and Express format listings, this is the constant price at
	 * which a buyer may purchase the item. <br><br> For a listing to be eligible for Express,
	 * the max start price is USD 10,000.00 for the US, EUR 5000 for Germany, and GBP 5500 for
	 * the UK. (Additional price limits may be imposed by the seller's PayPal account or the payment
	 * method used. Such limits cannot be determined via the eBay API and are not covered in eBay's
	 * API documentation, as they may vary for each user.)<br> <br> Also applicable to Half.com
	 * (valid range 0.75 to 9999.99). You can revise this field for Half.com listings. <br> For
	 * eBay Live Auctions items, this is the amount at which absentee Internet bidding for the
	 * item begins. Maximum length 16. Must be greater than zero. The seller needs to make sure
	 * they specify the amount in the currency selected for the live auction event.
	 */
	public $StartPrice;
	/**
	 * @var \Controle\sub1\sub2\StorefrontType | Contains information related to the item in the context of a seller's eBay Store. Applicable
	 * for auction formats, Basic Fixed Price, and Store Inventory format items listed by eBay
	 * Stores sellers. Not applicable to Half.com. This field is ignored when Item.ListingType=Express.
	 */
	public $Storefront;
	/**
	 * @var string | Subtitle to use in addition to the title. Provides more keywords when buyers search in
	 * titles and descriptions. You cannot use HTML in the Subtitle. (HTML characters will be
	 * interpreted literally as plain text.) If you pass any value, this feature is applied (with
	 * applicable fees).<br> <br> Not applicable to listings in US eBay Motors passenger vehicle,
	 * motorcycle, and "other vehicle" categories or to listings in CA eBay Motors passenger vehicle
	 * and motorcycle categories. (Other US and CA eBay Motors categories support this field as
	 * of December 2005.) For eBay Motors categories that do not support this field, use Item
	 * Specifics (AttributeSetArray) to specify the vehicle subtitle.<br> <br> Not applicable
	 * to Half.com.<br> <br> When you revise a item, you can add or change the subtitle, but you
	 * cannot remove it. When you relist an item, use DeletedField to remove a subtitle.<br> <br> In
	 * GetSearchResultsExpress, only returned when ItemDetails is set to Fine and a subtitle was
	 * specified for the item.
	 */
	public $SubTitle;
	/**
	 * @var \Controle\sub1\sub2\duration | Time left before the listing for the cross-promoted item ends. Output only. The duration
	 * is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). See Data Types in the
	 * eBay Web Services guide for information about this format. For ended listings, the time
	 * left is PT0S (zero seconds).
	 */
	public $TimeLeft;
	/**
	 * @var string | Title of a Want It Now post.
	 */
	public $Title;
	/**
	 * @var \Controle\sub1\sub2\UUIDType | Universally unique constraint tag. Use UUID to ensure that you only list a particular item
	 * once, particularly if you are listing many items at once. If you add an item and do not
	 * get a response, resend the request with the same UUID. If the item was successfully listed
	 * the first time, you will receive an error message for trying to use a UUID that you have
	 * already used. The error will also include the item ID for the duplicated item and a boolean value
	 * indicating whether the duplicate UUID was sent by the same application. <br><br> We recommend
	 * you use Item.UUID with calls that add item objects (for example, AddItem, AddLiveAuctionItem,
	 * and RelistItem). For calls that modify an existing item, such as ReviseItem, use InvocationID
	 * instead. <br><br> The UUID can only contain digits from 0-9 and letters from A-F and must
	 * be 32 characters long. The UUID value must be unique across all item listings on all sites. <br><br> Also
	 * applicable as input to AddItem and related calls when you list items to Half.com.
	 */
	public $UUID;
	/**
	 * @var \Controle\sub1\sub2\VATDetailsType | Container for eBay's VAT features. A business seller can choose to offer an item exclusively
	 * to bidders and buyers that also represent businesses. Only applicable when the item is
	 * listed in a B2B-enabled category (on a site that supports B2B business features). Not applicable
	 * to Half.com.
	 */
	public $VATDetails;
	/**
	 * @var \Controle\sub1\sub2\VendorHostedPictureType | In requests, if SiteHostedPicture or VendorHostedPicture are passed in with PictureDetails,
	 * PictureDetails will take precedence. In responses, PictureDetails is returned instead of
	 * SiteHostedPicture or VendorHostedPicture with request version 439 and higher.<br> <br> Previous
	 * behavior (for applications that still use older versions of the schema):<br> <br> VendorHostedPicture
	 * contains the data for a picture associated with an item, when that picture is hosted on
	 * a site of the seller's choice (other than on the eBay site with eBay Picture Services).
	 * The similar field, SiteHostedPicture, contains the data for pictures hosted on the eBay
	 * site.<br> <br> For a listing to be eligible for eBay Express, it must include a picture,
	 * gallery, or stock photo URL. Some categories are exempt from this requirement.<br> <br> Not
	 * applicable to Half.com.
	 */
	public $VendorHostedPicture;
	/**
	 * @var string | The seller is on vacation (as determined by the seller's store preferences) in two cases:
	 * i.) the item is a Store Inventory item and the seller has chosen to hide Store Inventory
	 * items while on vacation, and ii.) the seller has chosen to add a message to listed items
	 * while on vacation. Not applicable to Half.com.
	 */
	public $SellerVacationNote;
	/**
	 * @var long | The number of watches placed on this item from buyers' My eBay accounts. Specify IncludeWatchCount
	 * as true in the request. Not applicable to Half.com.
	 */
	public $WatchCount;
	/**
	 * @var long | The number of page views for the item. This number is calculated by eBay and cannot be
	 * set via the API. Returned if the hit counter type is BasicStyle, RetroStyle, or HiddenStyle.
	 * For HiddenStyle, HitCount is returned only if the requestor is the item's seller.
	 */
	public $HitCount;
	/**
	 * @var boolean | If false (or omitted): if BuyerRequirements is present, its requirements are to be used;
	 * otherwise, any requirements specified in My eBay are to be used. If true: no requirements
	 * are considered from any source (and if BuyerRequirements is present, it is ignored).
	 */
	public $DisableBuyerRequirements;
	/**
	 * @var \Controle\sub1\sub2\BuyerRequirementsType | Container for buyer requirements. Individual buyer requirements cannot be modified or added.
	 * The call needs to provide the entire set of buyer requirements to modify or add any. This
	 * is only returned if the caller is the seller. See also the eBay Web site help regarding <a
	 * target="_blank" href="http://pages.ebay.com/help/sell/buyer-requirements.html">Selecting Buyer
	 * Requirements</a>. Not applicable to Half.com.
	 */
	public $BuyerRequirements;
	/**
	 * @var \Controle\sub1\sub2\BestOfferDetailsType | Container for BestOffer properties associated with the item. Not applicable to Half.com.
	 */
	public $BestOfferDetails;
	/**
	 * @var boolean | No longer available. Always returns false.
	 */
	public $AnythingPoints;
	/**
	 * @var \Controle\sub1\sub2\LiveAuctionDetailsType | Describes the live auction-specific details of a lot item. Applicable to eBay Live Auctions
	 * only.
	 */
	public $LiveAuctionDetails;
	/**
	 * @var boolean | True if eBay provided a central location as a result of the user not specifying a location.
	 * This typically occurs when the seller specifies PostalCode without Location. Not applicable
	 * to Half.com.
	 */
	public $LocationDefaulted;
	/**
	 * @var boolean | Whether checkout for this is to be handled by a Third-Party Checkout application. The counterpart
	 * in the Add family of calls is Item.ThirdPartyCheckout. Not applicable to Half.com.
	 */
	public $ThirdPartyCheckout;
	/**
	 * @var boolean | Indicates whether the seller's tax table is to be used when applying and calculating taxes.
	 * If true, a tax table must exist for the seller, and the following tags should not be used:
	 * SalesTaxState, SalesTaxPercent, ShippingIncludedInTax.<br> <br> If the seller wants to
	 * charge sales tax for eBay Express sales, the seller needs to create a tax table on eBay
	 * and use it for their listings. As eBay Express payments are handled via a shopping cart,
	 * you will not be able to calculate and add sales tax during your own checkout flow. <br><br> Not
	 * applicable to Half.com.
	 */
	public $UseTaxTable;
	/**
	 * @var boolean | Indicates whether the seller has opted the listing into the Get It Fast feature. If GetItFast
	 * is true and if at least one of the domestic shipping services offered by the seller is
	 * an expedited shipping service, every shipping service offered by the seller is considered
	 * a Get It Fast service, and the seller commits to delivering the item to the buyer-selected
	 * shipping service within one day. Also applicable to Half.com (for GetOrders).
	 */
	public $GetItFast;
	/**
	 * @var boolean | Applicable for listings in vehicle categories on the US eBay Motors site and eBay Canada
	 * site. (No business effect if specified for other categories or sites, as the Web site will
	 * not display the information to buyers.) If true, the buyer is responsible for vehicle pickup
	 * or shipping. If false, specify vehicle shipping arrangements in the item description. Default
	 * is true. (The description can also include vehicle shipping arrangements when this value
	 * is true.) If the item has bids or ends within 12 hours, you cannot modify this flag. Do
	 * not specify ShippingOption or ShippingDetails.ShippingServiceOptions for vehicle listings. <br><br> If
	 * true and the listing is on the US eBay Motors site, and you want the listing to be visible
	 * on the eBay Canada site, set Item.ShipToLocations to CA. If true and the listing is on
	 * the eBay Canada site , and you want your listing to be visible on the US eBay Motors site,
	 * set Item.ShipToLocations to US. Not applicable to Half.com.
	 */
	public $BuyerResponsibleForShipping;
	/**
	 * @var boolean | Applicable to US eBay Motors vehicle listings only. If false, the vehicle will not be considered
	 * for a limited warranty by eBay. If your application lists Motors vehicles, you must provide
	 * the seller with an opportunity to indicate whether the vehicle has not been modified and
	 * is not a special type (e.g., Corvette ZR1). If LimitedWarrantyEligible is passed in, it
	 * means the application has presented the seller with checkboxes to indicate this information.
	 * If true, the seller has verified that the vehicle has not been modified and is not a special
	 * type. If false, the seller has verified that vehicle has been modified or it is a special
	 * type. Passing a value of true does not guarantee that eBay will offer a limited warranty.
	 * It only makes the listing eligible for consideration. See the eBay Web Services Guide for
	 * more information about Motors vehicle listings. Not applicable to Half.com.
	 */
	public $LimitedWarrantyEligible;
	/**
	 * @var string | Returns a note from eBay displayed below items in the user's My eBay account. Not applicable
	 * to Half.com.
	 */
	public $eBayNotes;
	/**
	 * @var long | Specifies the number of questions buyers have posted about the item. Not applicable to
	 * Half.com.
	 */
	public $QuestionCount;
	/**
	 * @var boolean | Whether or not the item is a relisted item. This value is determined by eBay and cannot
	 * be set.
	 */
	public $Relisted;
	/**
	 * @var int | Specifies how many of a certain item are available. Not applicable to Half.com.<br> <br> For
	 * GetSearchResultsExpress, only returned when ItemDetails is set to Fine.<br>
	 */
	public $QuantityAvailable;
	/**
	 * @var \Controle\sub1\sub2\SKUType | Identifier defined and used by a seller to identify an item. The seller can use a SKU to
	 * identify one item or use the same SKU for multiple items. Preferable to ApplicationData
	 * for SKUs and inventory tracking. Different sellers can use the same SKUs. This element
	 * can be used by sellers to track complex flows of products and information. This element
	 * preserves a SKU, enabling a seller to obtain it before and after a transaction is created.
	 */
	public $SKU;
	/**
	 * @var boolean | Allows eBay to auto-fill some of a listing's Item Specifics (attribute) values based on
	 * the listing's category (or categories). Auto-filling attributes based on a category is
	 * not the same as using Pre-filled Item Information based on a catalog product (see ProductListingDetails).
	 * If true, also specify Item.CategoryMappingAllowed with a value of true. (Alternatively,
	 * you can auto-fill attributes on the client side by using mapping meta-data returned by GetAttributesCS.)
	 * See the eBay Web Services guide for more information. Ignored if the category does not
	 * support auto-filling attributes.<br> <br> If you also pass in attributes in AttributeSetArray,
	 * your values will override any auto-filled values for the same attributes. Once you have
	 * overridden the value of an auto-filled attribute for a given listing, eBay will not auto-fill it
	 * on subsequent ReviseItem requests (even if you remove the overridden value). <br> <br> Not
	 * applicable to Half.com.
	 */
	public $CategoryBasedAttributesPrefill;
	/**
	 * @var \Controle\sub1\sub2\SearchDetailsType | Container for values that indicate whether a listing uses the Buy It Now feature, whether
	 * a listing is no more than one day old, and whether a listing has an image associated with
	 * it. Not applicable to Half.com.
	 */
	public $SearchDetails;
	/**
	 * @var string | The postal code to use as the basis for the proximity search.
	 */
	public $PostalCode;
	/**
	 * @var boolean | Indicates whether details about shipping costs and arrangements are specified in the item
	 * description. Not applicable to Half.com.
	 */
	public $ShippingTermsInDescription;
	/**
	 * @var \Controle\sub1\sub2\ExternalProductIDType | Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com
	 * item. All Half.com items are listed with Pre-filled Item Information.
	 */
	public $ExternalProductID;
	/**
	 * @var string | An ID that the seller specified when they listed the Half.com item, if any. It can be used
	 * for the seller's SKU. Note that SellerInventoryID is not returned if no ID was specified.
	 * (Note: The SKU field used for eBay.com listings is not applicable to Half.com listings.)
	 */
	public $SellerInventoryID;
	/**
	 * @var \Controle\sub1\sub2\PictureDetailsType | Contains the data for a picture associated with an item. Replaces the deprecated SiteHostedPicture
	 * and VendorHostedPicture in the response with compatibility level 439 or greater. With the
	 * future deprecation of SiteHostedPicture and VendorHostedPicture in the input, applications
	 * should use PictureDetails in the input as well. If SiteHostedPicture or VendorHostedPicture
	 * are passed in with PictureDetails, PictureDetails will take precedence.<br> <br> For a
	 * listing to be eligible for eBay Express, it must include a picture, gallery, or stock photo
	 * URL. Some categories are exempt from this requirement. See the eBay Web Services Guide
	 * links below for details.<br> <br> Not applicable to Half.com.
	 */
	public $PictureDetails;
	/**
	 * @var \Controle\sub1\sub2\DigitalDeliveryDetailsType | Indicates that the listing is a digitally delivered item. For listing calls, specifies
	 * information about the file and how it is delivered. By specifying the digital delivery
	 * fields, the seller agrees that they are the legal rights owner of this digital item or
	 * they have been authorized by the rights owner to sell this digital item.<br> <br> If you
	 * are listing in two categories and you specify this option, both categories must support
	 * digital listings. Call GetCategoryFeatures to determine which categories (if any) support
	 * digitally delivered goods. If a category supports this feature, it does not mean you are
	 * required to use this feature. (It only means that this feature is an option in that category.)<br> <br> If
	 * specified, the item must be sold at a fixed price (basic fixed price or Store Inventory),
	 * and the seller must require PayPal as the only payment method. The seller also needs to
	 * use a verified PayPal Premier or Business account. On some sites, the seller must require
	 * Immediate Payment (see Item.AutoPay) unless the seller is using Third-Party Checkout. Some
	 * sites may require the seller to be VAT registered (see the eBay online help for requirements). For
	 * digital items, the Item Condition attribute (Item Specifics) is not applicable in AttributeSetArray,
	 * AttributeArray, or LookupAttributeArray. If you pass in the item condition, it will be
	 * dropped. Fields that specify the item location, shipping details, payment methods other
	 * than PayPal, gift options, Now and New, and Best Offer are not applicable to digitally
	 * delivered items.<br> <br> Digital listings are not eligible for eBay Express.<br> <br> <b>For
	 * ReviseItem and RelistItem only:</b> When you revise or relist an item, if you change the
	 * listing format (e.g., to Chinese auction) or select a category that does not support this
	 * feature, eBay will remove the digital delivery option from the listing. As a result, you
	 * may need to specify different or additional information in the listing details. To remove
	 * DigitalDeliveryDetails when you modify a listing, use DeletedField. If any quantity of
	 * a multiple quantity digital delivery listing has been sold, the seller cannot remove the
	 * digital delivery option, edit the system requirements, or alter the delivery method information
	 * during the Revise flow. <br> <br> <b>For transaction calls only:</b> Transaction-retrieval
	 * calls like GetItemTransactions and GetSellerTransactions return an (intentionally) empty
	 * DigitalDeliveryDetails node for digital listing purchases. (If the transaction is not for
	 * a digital listing, the node is not returned.)<br> <br> Not supported for Half.com.
	 */
	public $DigitalDeliveryDetails;
	/**
	 * @var int | Specifies the maximum number of business days the seller commits to for shipping an item
	 * to domestic buyers after receiving a cleared payment. The seller sets this to an integer
	 * value (1, 2, 3, 4, 5, 10, 15, or 20) corresponding to the number of days. To add Get It
	 * Fast to listings, in addition to setting GetItFast to true, DispatchTimeMax must be set
	 * to 1 and the seller must specify at least one qualifying expedited shipping service. GetItem
	 * returns DispatchTimeMax only when shipping service options are specified for the item.
	 */
	public $DispatchTimeMax;
	/**
	 * @var boolean | Specifies that Skype-related information is included with an item listing, including, for
	 * example, Skype Voice. Skype-related information provides buttons that enable potential
	 * buyers to contact sellers through Skype. Information about Skype is available at www.Skype.com.
	 * If all of the prerequisites for adding Skype buttons to listings are met (see the eBay
	 * Web Services Guide), you can make communication through Skype available in listings. SkypeEnabled
	 * must be true if SkypeID and SkypeContactOption are specified.
	 */
	public $SkypeEnabled;
	/**
	 * @var string | Indicates the Skype name of the user. Available if the seller has a Skype account and has
	 * linked it (on the eBay site) with his or her eBay account.
	 */
	public $SkypeID;
	/**
	 * @var \Controle\sub1\sub2\SkypeOptionCodeType | Regardless of the request version you specify, if you use SkypeOption when listing an item,
	 * it is mapped to the corresponding values of SkypeContactOption.
	 */
	public $SkypeOption;
	/**
	 * @var \Controle\sub1\sub2\SkypeContactOptionCodeType | Specifies the Skype contact options supported. Requires that SkypeEnabled is set to true.
	 * Available if the seller has a Skype account and has linked it (on the eBay site) with his
	 * or her eBay account.
	 */
	public $SkypeContactOption;
	/**
	 * @var boolean | Specifies the default site setting for whether categories allow best offers. True means
	 * best offers are allowed site-wide, unless a specific category overrides the setting.
	 */
	public $BestOfferEnabled;
	/**
	 * @var boolean | Indicates, when true, that an item is available locally.
	 */
	public $LocalListing;
	/**
	 * @var boolean | Only authorized Third-Party Checkout providers can use this flag. <br><br> IMPORTANT: If
	 * you are not authorized to support Third Party Checkout and your application is not the
	 * original listing application, never specify ThirdPartyCheckout or ThirdPartyCheckoutIntegration
	 * in your request (even if you revise a listing that already includes these flags). Otherwise,
	 * the listing may be dropped from Express or you may get unexpected results.<br> <br> A Third-Party
	 * Checkout provider uses this flag in two ways:<br> <br> 1) Set this flag to true to specify
	 * that you consent to use the Checkout notification (or calls like GetSellerTransactions
	 * and GetItemTransactions) to obtain data about eBay Express sales from the item, and to
	 * confirm that buyers will use the Express shopping cart for checkout processing without
	 * being redirected to your Third-Party Checkout site. If ThirdPartyCheckout is true, the
	 * ThirdPartyCheckoutIntegration field must also be true if you want an eligible listing to
	 * be included on eBay Express (and the Third Party Checkout checkout flow will be then be
	 * ignored for Express purchases). See the eBay Web Services Guide.<br> <br> In other words,
	 * assuming the seller and item meet all other eligibility requirements for Express, the seller
	 * opts into Express, and the seller (optionally) subscribes to the Checkout notification:<br> -
	 * If ThirdPartyCheckout == true   and ThirdPartyCheckoutIntegration == true,   the item will
	 * be listed on Express   and Checkout notifications will be sent.<br> - If ThirdPartyCheckout
	 * == true   and ThirdPartyCheckoutIntegration == omitted or false,   the item will be disqualified
	 * for Express   and no Checkout notification will be sent.<br> - If ThirdPartyCheckout ==
	 * omitted or false,   and ThirdPartyCheckoutIntegration == true,   the item will be listed
	 * on Express   and Checkout notifications will be sent.<br> - If ThirdPartyCheckout == omitted
	 * or false,  and ThirdPartyCheckoutIntegration == omitted or false,  the item will be listed
	 * on Express   but no Checkout notifications will be sent.<br>   <br> 2) If you subscribe
	 * to the Checkout notification, set this flag to true to enable Checkout notifications for
	 * a particular listing. These notifications can be sent for any transaction created from
	 * the listing, regardless of whether the listing is included on Express and regardless of
	 * the value of ThirdPartyCheckout. Checkout notifications are not sent if ThirdPartyCheckoutIntegration
	 * is false.<br> <br> Returned only if true for a listing.<br> <br> Not applicable to Half.com.<br> <br> To
	 * determine whether an item was listed on Express, call GetItem and check the value of Item.ListingDetails.ExpressListing. To
	 * determine whether an item sold on Express, use a transaction call like GetItemTransactions
	 * (or the Checkout notification), and check the value of TransactionPlatform.
	 */
	public $ThirdPartyCheckoutIntegration;
	/**
	 * @var boolean | Preference to opt out an individual fixed price, auction with Buy It Now, or Store Inventory
	 * item from eBay Express. Specify as input when listing an item to indicate that the item should
	 * not be listed on eBay Express. By default, an item is opted in unless the seller has configured
	 * their user preferences to opt all items out of Express (see GetUserPreferences). So, if
	 * the seller and item qualify for eBay Express, the item will be made available on the Express
	 * site unless you set this flag to true to opt out.<br> <br> ExpressOptOut has no effect if
	 * the seller opts out in their user preferences. Also, you cannot set ExpressOptOut to false
	 * to force an ineligible item to be included on Express.<br> <br> This value is ignored when
	 * ListingType=Express.<br> <br> To determine whether an item was listed on Express, call
	 * GetItem and check the value of Item.ListingDetails.ExpressListing. To determine whether
	 * an item sold on Express, use a transaction call like GetItemTransactions (or the Checkout
	 * notification), and check the value of TransactionPlatform.
	 */
	public $ExpressOptOut;
	/**
	 * @var \Controle\sub1\sub2\ListingCheckoutRedirectPreferenceType | ProStores listing level preferences regarding the store to which checkout should be redirected
	 * for the listing if ThirdPartyCheckout is true.
	 */
	public $ListingCheckoutRedirectPreference;
	/**
	 * @var \Controle\sub1\sub2\ExpressDetailsType | Additional item details that only appear in eBay Express search results. In GetSearchResultsExpress,
	 * only returned when ItemDetails is set to Fine.
	 */
	public $ExpressDetails;
	/**
	 * @var \Controle\sub1\sub2\AddressType | Contact information for sellers using the Classified Ad format for eBay Motors vehicles
	 * categories. To remove seller contact information when revising or relisting an item, use DeletedField.
	 * The seller contact details for the primary and secondary phone numbers cannot be deleted
	 * individually. To delete the secondary phone number, for example, you must delete all of
	 * the secondary phone fields:<br> Item.SellerContactDetails.Phone2AreaOrCityCode<br> Item.SellerContactDetails.Phone2CountryCode<br> Item.SellerContactDetails.Phone2CountryPrefix<br> Item.SellerContactDetails.Phone2LocalNumber
	 */
	public $SellerContactDetails;
	/**
	 * @var long | The number of questions asked about this item. Applies to eBay Motors Pro applications
	 * only.
	 */
	public $TotalQuestionCount;
	/**
	 * @var boolean | Some listings on the eBay platform originate from eBay affiliates. Depending on the relationship
	 * the affiliate has with eBay, there are times when the affiliate retains ownership of the
	 * listing. When this occurs the representation of the listing on eBay is considered a proxy
	 * item.  Proxy items can only be edited using API requests from the applications that originally
	 * listed them.
	 */
	public $ProxyItem;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setApplicationData($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ApplicationData');
        }
        $this->ApplicationData = $val;
	}

	/**
	 * @param AttributeSetArrayType $val
	 * @throws \Exception
	 */
	public function setAttributeSetArray($val)
	{
        $this->AttributeSetArray = $val;
	}

	/**
	 * @param AttributeArrayType $val
	 * @throws \Exception
	 */
	public function setAttributeArray($val)
	{
        $this->AttributeArray = $val;
	}

	/**
	 * @param LookupAttributeArrayType $val
	 * @throws \Exception
	 */
	public function setLookupAttributeArray($val)
	{
        $this->LookupAttributeArray = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setApplyShippingDiscount($val)
	{
        $this->ApplyShippingDiscount = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setAutoPay($val)
	{
        $this->AutoPay = $val;
	}

	/**
	 * @param PaymentDetailsType $val
	 * @throws \Exception
	 */
	public function setPaymentDetails($val)
	{
        $this->PaymentDetails = $val;
	}

	/**
	 * @param BiddingDetailsType $val
	 * @throws \Exception
	 */
	public function setBiddingDetails($val)
	{
        $this->BiddingDetails = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setMotorsGermanySearchable($val)
	{
        $this->MotorsGermanySearchable = $val;
	}

	/**
	 * @param BuyerProtectionCodeType $val
	 * @throws \Exception
	 */
	public function setBuyerProtection($val)
	{
        $this->BuyerProtection = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setBuyItNowPrice($val)
	{
        $this->BuyItNowPrice = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setCategoryMappingAllowed($val)
	{
        $this->CategoryMappingAllowed = $val;
	}

	/**
	 * @param CharityType $val
	 * @throws \Exception
	 */
	public function setCharity($val)
	{
        $this->Charity = $val;
	}

	/**
	 * @param CountryCodeType $val
	 * @throws \Exception
	 */
	public function setCountry($val)
	{
        $this->Country = $val;
	}

	/**
	 * @param CrossPromotionsType $val
	 * @throws \Exception
	 */
	public function setCrossPromotion($val)
	{
        $this->CrossPromotion = $val;
	}

	/**
	 * @param CurrencyCodeType $val
	 * @throws \Exception
	 */
	public function setCurrency($val)
	{
        $this->Currency = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param DescriptionReviseModeCodeType $val
	 * @throws \Exception
	 */
	public function setDescriptionReviseMode($val)
	{
        $this->DescriptionReviseMode = $val;
	}

	/**
	 * @param DistanceType $val
	 * @throws \Exception
	 */
	public function setDistance($val)
	{
        $this->Distance = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setFinanceOfferID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for FinanceOfferID');
        }
        $this->FinanceOfferID = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setGiftIcon($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->GiftIcon = $val;
	}

	/**
	 * @param GiftServicesCodeType $val
	 * @throws \Exception
	 */
	public function setGiftServices($val)
	{
        $this->GiftServices = $val;
	}

	/**
	 * @param HitCounterCodeType $val
	 * @throws \Exception
	 */
	public function setHitCounter($val)
	{
        $this->HitCounter = $val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws \Exception
	 */
	public function setItemID($val)
	{
        $this->ItemID = $val;
	}

	/**
	 * @param ListingDetailsType $val
	 * @throws \Exception
	 */
	public function setListingDetails($val)
	{
        $this->ListingDetails = $val;
	}

	/**
	 * @param ListingDesignerType $val
	 * @throws \Exception
	 */
	public function setListingDesigner($val)
	{
        $this->ListingDesigner = $val;
	}

	/**
	 * @param token $val
	 * @throws \Exception
	 */
	public function setListingDuration($val)
	{
        $this->ListingDuration = $val;
	}

	/**
	 * @param ListingEnhancementsCodeType $val
	 * @throws \Exception
	 */
	public function setListingEnhancement($val)
	{
        $this->ListingEnhancement = $val;
	}

	/**
	 * @param ListingTypeCodeType $val
	 * @throws \Exception
	 */
	public function setListingType($val)
	{
        $this->ListingType = $val;
	}

	/**
	 * @param ListingSubtypeEnum $val
	 * @throws \Exception
	 */
	public function setListingSubtype($val)
	{
        $this->ListingSubtype = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocation($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Location');
        }
        $this->Location = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setLotSize($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->LotSize = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setNowAndNew($val)
	{
        $this->NowAndNew = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPartnerCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PartnerCode');
        }
        $this->PartnerCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPartnerName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PartnerName');
        }
        $this->PartnerName = $val;
	}

	/**
	 * @param BuyerPaymentMethodCodeType $val
	 * @throws \Exception
	 */
	public function setPaymentMethods($val)
	{
        $this->PaymentMethods = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPayPalEmailAddress($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PayPalEmailAddress');
        }
        $this->PayPalEmailAddress = $val;
	}

	/**
	 * @param CategoryType $val
	 * @throws \Exception
	 */
	public function setPrimaryCategory($val)
	{
        $this->PrimaryCategory = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setPrivateListing($val)
	{
        $this->PrivateListing = $val;
	}

	/**
	 * @param ProductListingDetailsType $val
	 * @throws \Exception
	 */
	public function setProductListingDetails($val)
	{
        $this->ProductListingDetails = $val;
	}

	/**
	 * @param ProximitySearchDetailsType $val
	 * @throws \Exception
	 */
	public function setProximitySearchDetails($val)
	{
        $this->ProximitySearchDetails = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setQuantity($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Quantity = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPrivateNotes($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PrivateNotes');
        }
        $this->PrivateNotes = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRegionID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for RegionID');
        }
        $this->RegionID = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setRelistLink($val)
	{
        $this->RelistLink = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setReservePrice($val)
	{
        $this->ReservePrice = $val;
	}

	/**
	 * @param ReviseStatusType $val
	 * @throws \Exception
	 */
	public function setReviseStatus($val)
	{
        $this->ReviseStatus = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setScheduleTime($val)
	{
        $this->ScheduleTime = $val;
	}

	/**
	 * @param CategoryType $val
	 * @throws \Exception
	 */
	public function setSecondaryCategory($val)
	{
        $this->SecondaryCategory = $val;
	}

	/**
	 * @param CategoryType $val
	 * @throws \Exception
	 */
	public function setFreeAddedCategory($val)
	{
        $this->FreeAddedCategory = $val;
	}

	/**
	 * @param SiteHostedPictureType $val
	 * @throws \Exception
	 */
	public function setSiteHostedPicture($val)
	{
        $this->SiteHostedPicture = $val;
	}

	/**
	 * @param UserType $val
	 * @throws \Exception
	 */
	public function setSeller($val)
	{
        $this->Seller = $val;
	}

	/**
	 * @param SellingStatusType $val
	 * @throws \Exception
	 */
	public function setSellingStatus($val)
	{
        $this->SellingStatus = $val;
	}

	/**
	 * @param ShippingOptionCodeType $val
	 * @throws \Exception
	 */
	public function setShippingOption($val)
	{
        $this->ShippingOption = $val;
	}

	/**
	 * @param ShippingDetailsType $val
	 * @throws \Exception
	 */
	public function setShippingDetails($val)
	{
        $this->ShippingDetails = $val;
	}

	/**
	 * @param ShippingRegionCodeType $val
	 * @throws \Exception
	 */
	public function setShippingRegions($val)
	{
        $this->ShippingRegions = $val;
	}

	/**
	 * @param ShippingTermsCodeType $val
	 * @throws \Exception
	 */
	public function setShippingTerms($val)
	{
        $this->ShippingTerms = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setShipToLocations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ShipToLocations');
        }
        $this->ShipToLocations = $val;
	}

	/**
	 * @param SiteCodeType $val
	 * @throws \Exception
	 */
	public function setSite($val)
	{
        $this->Site = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setStartPrice($val)
	{
        $this->StartPrice = $val;
	}

	/**
	 * @param StorefrontType $val
	 * @throws \Exception
	 */
	public function setStorefront($val)
	{
        $this->Storefront = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSubTitle($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for SubTitle');
        }
        $this->SubTitle = $val;
	}

	/**
	 * @param duration $val
	 * @throws \Exception
	 */
	public function setTimeLeft($val)
	{
        $this->TimeLeft = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTitle($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Title');
        }
        $this->Title = $val;
	}

	/**
	 * @param UUIDType $val
	 * @throws \Exception
	 */
	public function setUUID($val)
	{
        $this->UUID = $val;
	}

	/**
	 * @param VATDetailsType $val
	 * @throws \Exception
	 */
	public function setVATDetails($val)
	{
        $this->VATDetails = $val;
	}

	/**
	 * @param VendorHostedPictureType $val
	 * @throws \Exception
	 */
	public function setVendorHostedPicture($val)
	{
        $this->VendorHostedPicture = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSellerVacationNote($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for SellerVacationNote');
        }
        $this->SellerVacationNote = $val;
	}

	/**
	 * @param long $val
	 * @throws \Exception
	 */
	public function setWatchCount($val)
	{
        $this->WatchCount = $val;
	}

	/**
	 * @param long $val
	 * @throws \Exception
	 */
	public function setHitCount($val)
	{
        $this->HitCount = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setDisableBuyerRequirements($val)
	{
        $this->DisableBuyerRequirements = $val;
	}

	/**
	 * @param BuyerRequirementsType $val
	 * @throws \Exception
	 */
	public function setBuyerRequirements($val)
	{
        $this->BuyerRequirements = $val;
	}

	/**
	 * @param BestOfferDetailsType $val
	 * @throws \Exception
	 */
	public function setBestOfferDetails($val)
	{
        $this->BestOfferDetails = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setAnythingPoints($val)
	{
        $this->AnythingPoints = $val;
	}

	/**
	 * @param LiveAuctionDetailsType $val
	 * @throws \Exception
	 */
	public function setLiveAuctionDetails($val)
	{
        $this->LiveAuctionDetails = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setLocationDefaulted($val)
	{
        $this->LocationDefaulted = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setThirdPartyCheckout($val)
	{
        $this->ThirdPartyCheckout = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUseTaxTable($val)
	{
        $this->UseTaxTable = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setGetItFast($val)
	{
        $this->GetItFast = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setBuyerResponsibleForShipping($val)
	{
        $this->BuyerResponsibleForShipping = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setLimitedWarrantyEligible($val)
	{
        $this->LimitedWarrantyEligible = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEBayNotes($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for eBayNotes');
        }
        $this->eBayNotes = $val;
	}

	/**
	 * @param long $val
	 * @throws \Exception
	 */
	public function setQuestionCount($val)
	{
        $this->QuestionCount = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setRelisted($val)
	{
        $this->Relisted = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setQuantityAvailable($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->QuantityAvailable = $val;
	}

	/**
	 * @param SKUType $val
	 * @throws \Exception
	 */
	public function setSKU($val)
	{
        $this->SKU = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setCategoryBasedAttributesPrefill($val)
	{
        $this->CategoryBasedAttributesPrefill = $val;
	}

	/**
	 * @param SearchDetailsType $val
	 * @throws \Exception
	 */
	public function setSearchDetails($val)
	{
        $this->SearchDetails = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPostalCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setShippingTermsInDescription($val)
	{
        $this->ShippingTermsInDescription = $val;
	}

	/**
	 * @param ExternalProductIDType $val
	 * @throws \Exception
	 */
	public function setExternalProductID($val)
	{
        $this->ExternalProductID = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSellerInventoryID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for SellerInventoryID');
        }
        $this->SellerInventoryID = $val;
	}

	/**
	 * @param PictureDetailsType $val
	 * @throws \Exception
	 */
	public function setPictureDetails($val)
	{
        $this->PictureDetails = $val;
	}

	/**
	 * @param DigitalDeliveryDetailsType $val
	 * @throws \Exception
	 */
	public function setDigitalDeliveryDetails($val)
	{
        $this->DigitalDeliveryDetails = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDispatchTimeMax($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DispatchTimeMax = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setSkypeEnabled($val)
	{
        $this->SkypeEnabled = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSkypeID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for SkypeID');
        }
        $this->SkypeID = $val;
	}

	/**
	 * @param SkypeOptionCodeType $val
	 * @throws \Exception
	 */
	public function setSkypeOption($val)
	{
        $this->SkypeOption = $val;
	}

	/**
	 * @param SkypeContactOptionCodeType $val
	 * @throws \Exception
	 */
	public function setSkypeContactOption($val)
	{
        $this->SkypeContactOption = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setBestOfferEnabled($val)
	{
        $this->BestOfferEnabled = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setLocalListing($val)
	{
        $this->LocalListing = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setThirdPartyCheckoutIntegration($val)
	{
        $this->ThirdPartyCheckoutIntegration = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setExpressOptOut($val)
	{
        $this->ExpressOptOut = $val;
	}

	/**
	 * @param ListingCheckoutRedirectPreferenceType $val
	 * @throws \Exception
	 */
	public function setListingCheckoutRedirectPreference($val)
	{
        $this->ListingCheckoutRedirectPreference = $val;
	}

	/**
	 * @param ExpressDetailsType $val
	 * @throws \Exception
	 */
	public function setExpressDetails($val)
	{
        $this->ExpressDetails = $val;
	}

	/**
	 * @param AddressType $val
	 * @throws \Exception
	 */
	public function setSellerContactDetails($val)
	{
        $this->SellerContactDetails = $val;
	}

	/**
	 * @param long $val
	 * @throws \Exception
	 */
	public function setTotalQuestionCount($val)
	{
        $this->TotalQuestionCount = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setProxyItem($val)
	{
        $this->ProxyItem = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
