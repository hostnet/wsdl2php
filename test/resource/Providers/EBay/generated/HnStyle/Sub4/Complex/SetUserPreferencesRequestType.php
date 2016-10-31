<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetUserPreferencesRequestType
 * Sets the user's preferences to those specified in the request. As a general rule, once you
 * set a preference,  GetUserPreferences and the user's preferences displayed on the eBay Web
 * site should reflect the new setting immediately. However, it could take up to 7 days for
 * the change to have any logical or functional effect. For example, if you change your combined
 * payment preferences, it could take up to 7 days for eBay to apply the updated combined payment
 * settings to your listings. Also, once you set a preference, you cannot change its setting
 * again within 7 days.
 */
class SetUserPreferencesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BidderNoticePreferencesType | The user's bidder notice preferences to be set.
     */
    public $biddernoticepreferences;
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
    public $combinedpaymentpreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CrossPromotionPreferencesType | The user's cross promotion preferences to be set.
     */
    public $crosspromotionpreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerPaymentPreferencesType | The user's seller payment preferences to be set.
     */
    public $sellerpaymentpreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SellerFavoriteItemPreferencesType | Seller's favorite item preferences to be set.
     */
    public $sellerfavoriteitempreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EndOfAuctionEmailPreferencesType | The seller's end of auction email preferences to be set.
     */
    public $endofauctionemailpreferences;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\eBxOptInPreferenceType | If true: The seller wants their eligible eBay listings to be included on eBay Express
     * (in addition to the main eBay site). If false: The seller does not want their listings
     * to be included on eBay Express. If omitted (in SetUserPreferences): The seller does
     * not want to change their existing preference. (Initially, eBay sets this preference
     * to true for every seller.)
     */
    public $ebxoptinpreference;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ExpressPreferencesType | The seller's Express preferences. Currently used to indicate which of the seller's eligible
     * listings to include on Express. You can only set these preferences for sellers who are
     * eligible to list on Express. To determine the seller's eligibility, call GetUser and
     * check the value of SellerInfo.ExpressEligible. Once you set Express preferences, you
     * cannot set them again (e.g., to change the value) within 7 days. Also see CombinedPaymentPreferences,
     * which affect a seller's eligibility to list on Express.
     */
    public $expresspreferences;
    /**
     * @param BidderNoticePreferencesType $val
     * @throws Exception
     */
    public function setBidderNoticePreferences($val)
    {
        $this->biddernoticepreferences = (int)$val;
    }

    /**
     * @param CombinedPaymentPreferencesType $val
     * @throws Exception
     */
    public function setCombinedPaymentPreferences($val)
    {
        $this->combinedpaymentpreferences = (int)$val;
    }

    /**
     * @param CrossPromotionPreferencesType $val
     * @throws Exception
     */
    public function setCrossPromotionPreferences($val)
    {
        $this->crosspromotionpreferences = (int)$val;
    }

    /**
     * @param SellerPaymentPreferencesType $val
     * @throws Exception
     */
    public function setSellerPaymentPreferences($val)
    {
        $this->sellerpaymentpreferences = (int)$val;
    }

    /**
     * @param SellerFavoriteItemPreferencesType $val
     * @throws Exception
     */
    public function setSellerFavoriteItemPreferences($val)
    {
        $this->sellerfavoriteitempreferences = (int)$val;
    }

    /**
     * @param EndOfAuctionEmailPreferencesType $val
     * @throws Exception
     */
    public function setEndOfAuctionEmailPreferences($val)
    {
        $this->endofauctionemailpreferences = (int)$val;
    }

    /**
     * @param eBxOptInPreferenceType $val
     * @throws Exception
     */
    public function setEBxOptInPreference($val)
    {
        $this->ebxoptinpreference = (int)$val;
    }

    /**
     * @param ExpressPreferencesType $val
     * @throws Exception
     */
    public function setExpressPreferences($val)
    {
        $this->expresspreferences = (int)$val;
    }
}
