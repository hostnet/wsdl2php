<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetUserPreferencesRequestType
 * Retrieves some or all of a user's preferences. The set of preferences retrieved depends on
 * the set of flags specified in the request.
 */
class GetUserPreferencesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | If true, requests a seller's preferences for receiving bidder notices.
     */
    public $ShowBidderNoticePreferences;
    /**
     * @var boolean | If true, requests a seller's preferences for accepting payments that combine item purchases
     * into one order.
     */
    public $ShowCombinedPaymentPreferences;
    /**
     * @var boolean | If true, requests a seller's cross-promotion preferences, such as whether cross-promotions
     * are enabled and the sort filters used.
     */
    public $ShowCrossPromotionPreferences;
    /**
     * @var boolean | If true, displays a seller's payment preferences, for displaying a Pay Now button, accepting
     * PayPal, and so on.
     */
    public $ShowSellerPaymentPreferences;
    /**
     * @var boolean | If true, displays the seller's end of auction email preferences.
     */
    public $ShowEndOfAuctionEmailPreferences;
    /**
     * @var boolean | If true, retrieves preferences the seller has set for displaying items on a buyer's
     * favorite sellers page and in the favorite sellers email digest.
     */
    public $ShowSellerFavoriteItemPreferences;
    /**
     * @var boolean | You do not need to specify a "Show" filter to retrieve the ExpressPreferences node. Regardless
     * of the request version you specify, the ExpressPreferences node is always returned if
     * the user is eligible for Express, and it is never returned if the user is not eligible. Express
     * preferences are dependent on the user's site of registration, not the site to which
     * you send the request.
     */
    public $ShoweBxOptInPreference;
    /**
     * @var boolean | If true, returns ProStores checkout preferences.
     */
    public $ShowProStoresPreferences;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShowBidderNoticePreferences($val)
    {
        $this->ShowBidderNoticePreferences = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShowCombinedPaymentPreferences($val)
    {
        $this->ShowCombinedPaymentPreferences = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShowCrossPromotionPreferences($val)
    {
        $this->ShowCrossPromotionPreferences = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShowSellerPaymentPreferences($val)
    {
        $this->ShowSellerPaymentPreferences = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShowEndOfAuctionEmailPreferences($val)
    {
        $this->ShowEndOfAuctionEmailPreferences = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShowSellerFavoriteItemPreferences($val)
    {
        $this->ShowSellerFavoriteItemPreferences = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShoweBxOptInPreference($val)
    {
        $this->ShoweBxOptInPreference = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShowProStoresPreferences($val)
    {
        $this->ShowProStoresPreferences = (int)$val;
    }
}
