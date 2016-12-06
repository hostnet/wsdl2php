<?php

namespace Controle;

/**
 * UserType
 * Type to contain the data for one eBay user. Depending on the context, the user might be
 * the seller or the buyer in a transaction, or the bidder or winning bidder in a listing.
 * An object of this type is returned by a number of calls, including the GetUser call.
 */
class UserType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | If true, indicates that the user has set up an About Me page.
     */
    public $AboutMePage;
    /**
     * @var string | Unique identifier for the user that does not change when the eBay user name is changed.
     * Use when an application needs to associate a new eBay user name with the corresponding
     * eBay user. <br><br> Starting Jan 2007, when a bidder's user info is made anonymous,
     * this tag will be returned only for that bidder, and the seller of an item that the user
     * is bidding on.
     */
    public $EIASToken;
    /**
     * @var string | REST token (if available) for the user who is making the request. Not returned when
     * UserID is for a different user than the one identified in eBayAuthToken. Use the REST
     * token to authenticate REST API calls. For more information about REST tokens and the
     * REST API, see http://developer.ebay.com/rest/.
     */
    public $RESTToken;
    /**
     * @var string | Email address for the user. You cannot retrieve an email address for any user with whom
     * you do not have a transactional relationship, regardless of site. Email is only returned
     * for applicable calls when you are retrieving your own user data OR when you and the
     * other user are in a transactional relationship and the call is being executed within
     * a certain amount of time after the transaction is created. Based on Trust and Safety
     * policies, the time is unspecified and can vary by site. <br><br> Starting Jan 2007,
     * when a bidder's user info is made anonymous, this tag will be returned only for that
     * bidder, and the seller of an item that the user is bidding on.
     */
    public $Email;
    /**
     * @var int | The aggregate feedback score for a user. A user's feedback score is the net positive
     * feedback minus the net negative feedback left for the user. Feedback scores are a quantitative
     * expression of the desirability of dealing with a user as a buyer or a seller in transactions.
     * Each transaction can result in one feedback entry for a given user (the buyer can leave
     * feedback for the seller, and the seller can leave feedback for the buyer.). That one
     * feedback can be positive, negative, or neutral. The aggregated feedback counts for a particular
     * user represent that user's overall feedback score (referred to as a "feedback rating"
     * on the eBay site). If the user has chosen to make their feedback private and that user
     * is not the user identified in the request's authentication token, FeedbackScore is not
     * returned and FeedbackPrivate is returned with a value of true.<br> <br> To be eligible
     * to list on Express, a seller's feedback score needs to be 100 or higher. See "eBay Express"
     * in the eBay Web Services guide. In GetSearchResultsExpress, only returned when ItemDetails
     * is set to Fine.<br> <br> In GetSearchResults and GetCategoryListings, feedback information
     * is only returned if IncludeFeedback = true in the request. <br><br> Starting Jan 2007,
     * when a bidder's user info is made anonymous, the real feedback score will be returned
     * only for that bidder, and the seller of an item that the user is bidding on. For all
     * other users, the value -99 is returned.
     */
    public $FeedbackScore;
    /**
     * @var int | Total count of negative feedback entries from unique (distinct) users.
     */
    public $UniqueNegativeFeedbackCount;
    /**
     * @var int | Total count of positive feedback entries from unique (distinct) users. Contains the
     * aggregate feedback score for a user. A member's feedback score is the net positive feedback
     * minus the net negative feedback left for the member. Feedback scores are a quantitative
     * expression of the desirability of dealing with that person as a Buyer or a Seller in
     * auction transactions. Each auction transaction can result in one feedback entry for
     * a given user (the buyer can leave feedback for the seller, and the seller can leave
     * feedback for the buyer.). That one feedback can be positive, negative, or neutral. The aggregated
     * feedback counts for a particular user represent that user's overall feedback score (referred
     * to as a "feedback rating" on the eBay site). This rating is commonly expressed as the
     * eBay Feedback score for the user.
     */
    public $UniquePositiveFeedbackCount;
    /**
     * @var float | Percent of total feedback that is positive. For example, if the member has 50 feedbacks,
     * where 49 are positive and 1 is neutral or negative, the positive feedback percent could
     * be 98.0. The value uses a max precision of 4 and a scale of 1. If the user has feedback,
     * this value can be returned regardless of whether the member has chosen to make their
     * feedback private. Not returned if the user has no feedback. To be eligible to list on
     * Express, a seller's feedback percent needs to be 98 or higher. See "eBay Express" in
     * the eBay Web Services guide. In GetSearchResults and GetCategoryListings, feedback information
     * is only returned if IncludeFeedback = true in the request.
     */
    public $PositiveFeedbackPercent;
    /**
     * @var boolean | Indicates whether the user has chosen to make their feedback score and feedback details
     * private (hidden from other users). Note that the percentage of positive feedback can
     * still be returned, even if other feedback details are private. To be eligible to list
     * on Express, a seller's feedback needs to be public. See "eBay Express" in the eBay Web
     * Services guide. In GetSearchResults and GetCategoryListings, feedback information is
     * only returned if IncludeFeedback = true in the request. <br><br> Starting Jan 2007,
     * when a bidder's user info is made anonymous, this tag will be returned only for that
     * bidder, and the seller of an item that the user is bidding on.
     */
    public $FeedbackPrivate;
    /**
     * @var \Controle\FeedbackRatingStarCodeType | Visual indicator of user's feedback score. See FeedbackRatingStarCodeType for specific
     * values.
     */
    public $FeedbackRatingStar;
    /**
     * @var boolean | Indicates whether the user has been verified. For more information about the ID Verify
     * program, see: http://pages.ebay.com/help/policies/identity-idverify.html
     */
    public $IDVerified;
    /**
     * @var boolean | If true, indicates that the user is in good standing with eBay.
     */
    public $eBayGoodStanding;
    /**
     * @var boolean | If true, identifies a new user who has been a registered eBay user for 30 days or less.
     * Always false after the user has been registered for more than 30 days. Does not indicate
     * an ID change (see UserIdChanged).
     */
    public $NewUser;
    /**
     * @var \Controle\AddressType | Registration address for a user.<br> <br> <b>GetUser:</b> eBay returns complete RegistrationAddress
     * details (including Phone), as applicable to the registration site, when you retrieve
     * your own user data. <br> <br> <b>GetItem:</b> RegistrationAddress for another user (except
     * for Phone) is only returned if you have a transactional relationship with that user
     * AND that user is registered on DE/AT/CH, regardless of your registration site and the
     * site to which you send the request. For example, the seller can see the buyer's registration
     * address if the buyer is registered on DE/AT/CH, or the buyer can see the seller's registration
     * address if the seller is registered on DE/AT/CH. (The buyer and seller won't see their
     * own registration addresses in GetItem.) <br> <br> To be eligible to list on Express
     * US, a seller's registration address must be in the US or Canada. To list on Express
     * Germany, a seller's registration address must be in Germany. See "eBay Express" in the eBay
     * Web Services guide.
     */
    public $RegistrationAddress;
    /**
     * @var dateTime | Indicates the date the specified user originally registered with eBay. <br><br> Starting
     * Jan 2007, when a bidder's user info is made anonymous, this tag will be returned only
     * for that bidder, and the seller of an item that the user is bidding on.
     */
    public $RegistrationDate;
    /**
     * @var \Controle\SiteCodeType | Site where the Want It Now post is listed.
     */
    public $Site;
    /**
     * @var \Controle\UserStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var \Controle\UserIDType | Unique eBay user ID for the user.<br> <br> In GetSearchResultsExpress, only returned
     * when ItemDetails is set to Fine. <br><br> Starting Jan 2007, when a bidder's user info
     * is made anonymous, this tag will contain the real ID value only for that bidder, and
     * the seller of an item that the user is bidding on. For all other users, the real ID
     * value will be replaced with the value "Bidder X" where X is a number indicating the
     * order of that user's first bid. For example, if the user was the third bidder, UserID
     * = Bidder 3. <br><br> Note that the anonymous bidder ID stays the same for a given auction,
     * but is different for different auctions. For example, a bidder who is the third and
     * then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However,
     * if that same bidder is the first bidder on a different auction, the bidder will be listed
     * for that auction as "Bidder 1", not "Bidder 3".
     */
    public $UserID;
    /**
     * @var boolean | If true, identifies a user whose ID has changed within the last 30 days. Does not indicate
     * a new user (see NewUser). <br><br> Starting Jan 2007, when a bidder's user info is made anonymous,
     * this tag will be returned only for that bidder, and the seller of an item that the user
     * is bidding on.
     */
    public $UserIDChanged;
    /**
     * @var dateTime | Date and time the user's data was last changed (in GMT). <br><br> Starting Jan 2007,
     * when a bidder's user info is made anonymous, this tag will be returned only for that
     * bidder, and the seller of an item that the user is bidding on.
     */
    public $UserIDLastChanged;
    /**
     * @var \Controle\VATStatusCodeType | Indicates whether or not the user is subject to VAT. Users who have registered with
     * eBay as VAT-exempt are not subject to VAT. See documentation on Value-Added Tax (VAT).
     */
    public $VATStatus;
    /**
     * @var \Controle\BuyerType | Contains information about the user as a buyer, such as the shipping address. See BuyerType
     * for its child elements. <br><br> Starting Jan 2007, when a bidder's user info is made anonymous,
     * this tag will be returned only for that bidder, and the seller of an item that the user
     * is bidding on.
     */
    public $BuyerInfo;
    /**
     * @var \Controle\SellerType | Contains information about the user as a seller, such as whether the seller is authorized
     * to list Live Auctions items or opts to have items cross-promoted. See SellerType for
     * its child elements.
     */
    public $SellerInfo;
    /**
     * @var \Controle\CharityAffiliationsType | Contains information about the seller's charity affliations. Returned if the user is
     * affiliated with one or more charities. Seller must be registered with the eBay Giving Works
     * provider to be affiliated with a charity non-profit organization.
     */
    public $CharityAffiliations;
    /**
     * @var \Controle\CharitySellerType | Contains information about the registered charity seller. Registered charity sellers
     * have registered and are in good standing with the eBay Giving Works provider and are eligible
     * to list items with the eBay Giving Works program.
     */
    public $CharitySeller;
    /**
     * @var \Controle\PayPalAccountLevelCodeType | The user's PayPal account level. Only returned for the user identified in eBayAuthToken.
     * That is, you cannot see someone else's PayPal account level. Use this information to
     * check whether a seller is eligible to specify Item.DigitalDeliveryDetails in listing
     * requests. See the eBay Web site online help for current PayPal requirements for listing
     * digital items.
     */
    public $PayPalAccountLevel;
    /**
     * @var \Controle\PayPalAccountTypeCodeType | The user's PayPal account type. Only returned for the user identified in eBayAuthToken.
     * That is, you cannot see someone else's PayPal account type. Use this information to
     * check whether a seller is likely to be eligible to specify Item.DigitalDeliveryDetails
     * in listing requests. See the eBay Web site online help for current PayPal requirements
     * for listing digital items. Please note that this information cannot necessarily be used
     * to determine whether a seller is eligible to list items on eBay Express, because a seller
     * can have more than one PayPal account (and any of these accounts can be used for a given listing).
     */
    public $PayPalAccountType;
    /**
     * @var \Controle\PayPalAccountStatusCodeType | The user's PayPal account status. Only returned for the user identified in eBayAuthToken.
     * That is, you cannot see someone else's PayPal account status. Use this information to
     * check whether a seller is eligible to specify Item.DigitalDeliveryDetails in listing
     * requests. See the eBay Web site online help for current PayPal requirements for listing
     * digital items.
     */
    public $PayPalAccountStatus;
    /**
     * @var \Controle\EBaySubscriptionTypeCodeType | Specifies the subscription level for a user.
     */
    public $UserSubscription;
    /**
     * @var boolean | If the user is a registered eBay China site user, this indicates whether the user has
     * been verified. This value is based on the user's registration site, not the site that
     * was specified in the request. If true, the China site user is verified. If false, the
     * China site user is unverified. This field is returned only when the user is registered
     * on the China site and is verified (value is true). <br><br> Not applicable to users
     * who are not registered China site users.
     */
    public $SiteVerified;
    /**
     * @var string | Indicates the Skype name of the user. Available if the seller has a Skype account and
     * has linked it (on the eBay site) with his or her eBay account.
     */
    public $SkypeID;
    /**
     * @var boolean | Indicates whether a user has read-only access to the eBay Wiki (true) or whether the
     * user is able contribute or edit articles on the eBay Wiki (false). By default, all registered
     * eBay users have access to contribute and edit articles on the eBay Wiki. All content
     * contributed to the eBay Wiki is subject to the Community Content Policy.
     */
    public $eBayWikiReadOnly;
    /**
     * @var int | TUV level is a number allocated to a user based on various characteristics such as buyer,
     * seller, new buyer, new seller, high risk, or bid limit. Applies to eBay Motors Pro applications
     * only.
     */
    public $TUVLevel;
    /**
     * @var string | The value added tax identifier (VATID) is applicable to the VAT-enabled sites. Applies
     * to eBay Motors Pro applications only.
     */
    public $VATID;
    /**
     * @var boolean | Indicates if item is listed for sale by owner (FSBO) or listed by a dealer. Applies
     * to eBay Motors Pro applications only.
     */
    public $MotorsDealer;
    /**
     * @var \Controle\SellerPaymentMethodCodeType | Indicates the method the seller selected to pay eBay with for the account. The payment
     * methods vary from one eBay site to the next. Payment methods are enumerated in the SellerPaymentMethodCodeType
     * code list.
     */
    public $SellerPaymentMethod;
    /**
     * @var \Controle\BiddingSummaryType | Contains information about the user as a bidder on a certain item. Returned for GetAllBidders
     * if IncludeBiddingSummary = true is included in the request.
     */
    public $BiddingSummary;
    /**
     * @var boolean | Indicates whether or not the User container has been made anonymous. If true, some elements
     * in the User container have either been removed, or had their values changed to remove identifying
     * characteristics. If false, all expected elements are returned, and no values are changed. <br><br> Starting
     * Jan 2007, when a bidder's user info is made anonymous, this tag will be returned as
     * false only for that bidder, and the seller of an item that the user is bidding on. All
     * other users will have this tag returned as true.
     */
    public $UserAnonymized;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setAboutMePage($val)
    {
        $this->AboutMePage = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEIASToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EIASToken');
        }
        $this->EIASToken = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRESTToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RESTToken');
        }
        $this->RESTToken = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmail($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Email');
        }
        $this->Email = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFeedbackScore($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->FeedbackScore = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setUniqueNegativeFeedbackCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->UniqueNegativeFeedbackCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setUniquePositiveFeedbackCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->UniquePositiveFeedbackCount = $val;
    }

    /**
     * @param float $val
     * @throws Exception
     */
    public function setPositiveFeedbackPercent($val)
    {
        $this->PositiveFeedbackPercent = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setFeedbackPrivate($val)
    {
        $this->FeedbackPrivate = $val;
    }

    /**
     * @param FeedbackRatingStarCodeType $val
     * @throws Exception
     */
    public function setFeedbackRatingStar($val)
    {
        $this->FeedbackRatingStar = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIDVerified($val)
    {
        $this->IDVerified = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEBayGoodStanding($val)
    {
        $this->eBayGoodStanding = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setNewUser($val)
    {
        $this->NewUser = $val;
    }

    /**
     * @param AddressType $val
     * @throws Exception
     */
    public function setRegistrationAddress($val)
    {
        $this->RegistrationAddress = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRegistrationDate($val)
    {
        $this->RegistrationDate = $val;
    }

    /**
     * @param SiteCodeType $val
     * @throws Exception
     */
    public function setSite($val)
    {
        $this->Site = $val;
    }

    /**
     * @param UserStatusCodeType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->Status = $val;
    }

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setUserID($val)
    {
        $this->UserID = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setUserIDChanged($val)
    {
        $this->UserIDChanged = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setUserIDLastChanged($val)
    {
        $this->UserIDLastChanged = $val;
    }

    /**
     * @param VATStatusCodeType $val
     * @throws Exception
     */
    public function setVATStatus($val)
    {
        $this->VATStatus = $val;
    }

    /**
     * @param BuyerType $val
     * @throws Exception
     */
    public function setBuyerInfo($val)
    {
        $this->BuyerInfo = $val;
    }

    /**
     * @param SellerType $val
     * @throws Exception
     */
    public function setSellerInfo($val)
    {
        $this->SellerInfo = $val;
    }

    /**
     * @param CharityAffiliationsType $val
     * @throws Exception
     */
    public function setCharityAffiliations($val)
    {
        $this->CharityAffiliations = $val;
    }

    /**
     * @param CharitySellerType $val
     * @throws Exception
     */
    public function setCharitySeller($val)
    {
        $this->CharitySeller = $val;
    }

    /**
     * @param PayPalAccountLevelCodeType $val
     * @throws Exception
     */
    public function setPayPalAccountLevel($val)
    {
        $this->PayPalAccountLevel = $val;
    }

    /**
     * @param PayPalAccountTypeCodeType $val
     * @throws Exception
     */
    public function setPayPalAccountType($val)
    {
        $this->PayPalAccountType = $val;
    }

    /**
     * @param PayPalAccountStatusCodeType $val
     * @throws Exception
     */
    public function setPayPalAccountStatus($val)
    {
        $this->PayPalAccountStatus = $val;
    }

    /**
     * @param EBaySubscriptionTypeCodeType $val
     * @throws Exception
     */
    public function setUserSubscription($val)
    {
        $this->UserSubscription = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSiteVerified($val)
    {
        $this->SiteVerified = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSkypeID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SkypeID');
        }
        $this->SkypeID = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEBayWikiReadOnly($val)
    {
        $this->eBayWikiReadOnly = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTUVLevel($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TUVLevel = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVATID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for VATID');
        }
        $this->VATID = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setMotorsDealer($val)
    {
        $this->MotorsDealer = $val;
    }

    /**
     * @param SellerPaymentMethodCodeType $val
     * @throws Exception
     */
    public function setSellerPaymentMethod($val)
    {
        $this->SellerPaymentMethod = $val;
    }

    /**
     * @param BiddingSummaryType $val
     * @throws Exception
     */
    public function setBiddingSummary($val)
    {
        $this->BiddingSummary = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setUserAnonymized($val)
    {
        $this->UserAnonymized = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
