<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetUserPreferencesResponseType
 * Returns some or all of a user's preferences. The preferences are grouped in sets, according
 * to the sets requested.
 */
class GetUserPreferencesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BidderNoticePreferencesType | The user's bidder notice preferences to be set.
     */
    public $BidderNoticePreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CombinedPaymentPreferencesType | The user's combined payment preferences to be set. When you change these preferences,
     * it can take up to 7 days for the change to have any logical or functional effect on
     * eBay. <br> <br> For the US and Germany sites, combined payment preferences can also
     * affect whether a seller is eligible to list on Express. A seller needs to allow shoppers
     * to pay by single, combined payments for their purchases. A seller is not eligible for
     * Express if they don't allow combined payments. Once changes to these preferences take
     * effect on eBay (within 7 days), it can take up to 7 more days for existing items to
     * be added to or removed from Express. Thus, it can take up to 14 days (total) for combined
     * payment preference changes to affect whether listings appear on Express. Also see ExpressPreferences.ExpressSellingPreferences.
     */
    public $CombinedPaymentPreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CrossPromotionPreferencesType | The user's cross promotion preferences to be set.
     */
    public $CrossPromotionPreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerPaymentPreferencesType | The user's seller payment preferences to be set.
     */
    public $SellerPaymentPreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerFavoriteItemPreferencesType | Seller's favorite item preferences to be set.
     */
    public $SellerFavoriteItemPreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EndOfAuctionEmailPreferencesType | The seller's end of auction email preferences to be set.
     */
    public $EndOfAuctionEmailPreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\eBxOptInPreferenceType | If true: The seller wants their eligible eBay listings to be included on eBay Express
     * (in addition to the main eBay site). If false: The seller does not want their listings
     * to be included on eBay Express. If omitted (in SetUserPreferences): The seller does
     * not want to change their existing preference. (Initially, eBay sets this preference
     * to true for every seller.)
     */
    public $eBxOptInPreference;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressPreferencesType | The seller's Express preferences. Currently used to indicate which of the seller's eligible
     * listings to include on Express. You can only set these preferences for sellers who are
     * eligible to list on Express. To determine the seller's eligibility, call GetUser and
     * check the value of SellerInfo.ExpressEligible. Once you set Express preferences, you
     * cannot set them again (e.g., to change the value) within 7 days. Also see CombinedPaymentPreferences,
     * which affect a seller's eligibility to list on Express.
     */
    public $ExpressPreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ProStoresCheckoutPreferenceType | Details about the checkout preferences related to the ProStores store. Returned only
     * if set.
     */
    public $ProStoresPreference;
    // @codingStandardsIgnoreEnd

    /**
     * @param BidderNoticePreferencesType $val
     * @throws Exception
     */
    public function setBidderNoticePreferences($val)
    {
        $this->BidderNoticePreferences = $val;
    }

    /**
     * @param CombinedPaymentPreferencesType $val
     * @throws Exception
     */
    public function setCombinedPaymentPreferences($val)
    {
        $this->CombinedPaymentPreferences = $val;
    }

    /**
     * @param CrossPromotionPreferencesType $val
     * @throws Exception
     */
    public function setCrossPromotionPreferences($val)
    {
        $this->CrossPromotionPreferences = $val;
    }

    /**
     * @param SellerPaymentPreferencesType $val
     * @throws Exception
     */
    public function setSellerPaymentPreferences($val)
    {
        $this->SellerPaymentPreferences = $val;
    }

    /**
     * @param SellerFavoriteItemPreferencesType $val
     * @throws Exception
     */
    public function setSellerFavoriteItemPreferences($val)
    {
        $this->SellerFavoriteItemPreferences = $val;
    }

    /**
     * @param EndOfAuctionEmailPreferencesType $val
     * @throws Exception
     */
    public function setEndOfAuctionEmailPreferences($val)
    {
        $this->EndOfAuctionEmailPreferences = $val;
    }

    /**
     * @param eBxOptInPreferenceType $val
     * @throws Exception
     */
    public function setEBxOptInPreference($val)
    {
        $this->eBxOptInPreference = $val;
    }

    /**
     * @param ExpressPreferencesType $val
     * @throws Exception
     */
    public function setExpressPreferences($val)
    {
        $this->ExpressPreferences = $val;
    }

    /**
     * @param ProStoresCheckoutPreferenceType $val
     * @throws Exception
     */
    public function setProStoresPreference($val)
    {
        $this->ProStoresPreference = $val;
    }
}
