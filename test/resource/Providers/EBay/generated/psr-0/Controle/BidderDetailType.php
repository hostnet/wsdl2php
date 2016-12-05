<?php

namespace Controle;

/**
 * BidderDetailType
 * Contains the data for a user who is interested in bidding on items in a Live Auctions catalog.
 */
class BidderDetailType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\UserIDType | Unique eBay user ID for the user.<br> <br> In GetSearchResultsExpress, only returned when
	 * ItemDetails is set to Fine. <br><br> Starting Jan 2007, when a bidder's user info is made anonymous,
	 * this tag will contain the real ID value only for that bidder, and the seller of an item
	 * that the user is bidding on. For all other users, the real ID value will be replaced with
	 * the value "Bidder X" where X is a number indicating the order of that user's first bid.
	 * For example, if the user was the third bidder, UserID = Bidder 3. <br><br> Note that the
	 * anonymous bidder ID stays the same for a given auction, but is different for different
	 * auctions. For example, a bidder who is the third and then the seventh bidder in an auction
	 * will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder
	 * on a different auction, the bidder will be listed for that auction as "Bidder 1", not "Bidder
	 * 3".
	 */
	public $UserID;
	/**
	 * @var string | Email address for the user. You cannot retrieve an email address for any user with whom
	 * you do not have a transactional relationship, regardless of site. Email is only returned
	 * for applicable calls when you are retrieving your own user data OR when you and the other
	 * user are in a transactional relationship and the call is being executed within a certain
	 * amount of time after the transaction is created. Based on Trust and Safety policies, the
	 * time is unspecified and can vary by site. <br><br> Starting Jan 2007, when a bidder's user
	 * info is made anonymous, this tag will be returned only for that bidder, and the seller
	 * of an item that the user is bidding on.
	 */
	public $Email;
	/**
	 * @var int | The aggregate feedback score for a user. A user's feedback score is the net positive feedback
	 * minus the net negative feedback left for the user. Feedback scores are a quantitative expression
	 * of the desirability of dealing with a user as a buyer or a seller in transactions. Each
	 * transaction can result in one feedback entry for a given user (the buyer can leave feedback
	 * for the seller, and the seller can leave feedback for the buyer.). That one feedback can
	 * be positive, negative, or neutral. The aggregated feedback counts for a particular user
	 * represent that user's overall feedback score (referred to as a "feedback rating" on the
	 * eBay site). If the user has chosen to make their feedback private and that user is not
	 * the user identified in the request's authentication token, FeedbackScore is not returned
	 * and FeedbackPrivate is returned with a value of true.<br> <br> To be eligible to list on
	 * Express, a seller's feedback score needs to be 100 or higher. See "eBay Express" in the
	 * eBay Web Services guide. In GetSearchResultsExpress, only returned when ItemDetails is
	 * set to Fine.<br> <br> In GetSearchResults and GetCategoryListings, feedback information
	 * is only returned if IncludeFeedback = true in the request. <br><br> Starting Jan 2007,
	 * when a bidder's user info is made anonymous, the real feedback score will be returned only
	 * for that bidder, and the seller of an item that the user is bidding on. For all other users,
	 * the value -99 is returned.
	 */
	public $FeedbackScore;
	/**
	 * @var int | Total count of negative feedback entries from unique (distinct) users.
	 */
	public $UniqueNegativeFeedbackCount;
	/**
	 * @var int | Total count of positive feedback entries from unique (distinct) users. Contains the aggregate
	 * feedback score for a user. A member's feedback score is the net positive feedback minus
	 * the net negative feedback left for the member. Feedback scores are a quantitative expression
	 * of the desirability of dealing with that person as a Buyer or a Seller in auction transactions.
	 * Each auction transaction can result in one feedback entry for a given user (the buyer can leave
	 * feedback for the seller, and the seller can leave feedback for the buyer.). That one feedback
	 * can be positive, negative, or neutral. The aggregated feedback counts for a particular
	 * user represent that user's overall feedback score (referred to as a "feedback rating" on
	 * the eBay site). This rating is commonly expressed as the eBay Feedback score for the user.
	 */
	public $UniquePositiveFeedbackCount;
	/**
	 * @var \Controle\LiveAuctionBidType | Contains the bidder details that match the bidder query passed in the request. Always returned
	 * when bidder search results are found.
	 */
	public $LiveAuctionBidResult;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param UserIDType $val
	 * @throws Exception
	 */
	public function setUserID($val)
	{
        $this->UserID = ()$val;
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
        $this->Email = ()$val;
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
        $this->FeedbackScore = ()$val;
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
        $this->UniqueNegativeFeedbackCount = ()$val;
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
        $this->UniquePositiveFeedbackCount = ()$val;
	}

	/**
	 * @param LiveAuctionBidType $val
	 * @throws Exception
	 */
	public function setLiveAuctionBidResult($val)
	{
        $this->LiveAuctionBidResult = ()$val;
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
