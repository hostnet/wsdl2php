<?php

namespace Controle;

class ExpressSellerRequirementsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | If true, the seller's preferences in My eBay are set to include listings on eBay Express. If
	 * false, the seller prefers not to include listings on Express, so the seller is therefore
	 * ineligible for Express (and no other seller requirement settings are returned in this case).
	 */
	public $ExpressSellingPreference;
	/**
	 * @var boolean | If true, indicates eBay has marked the seller as eligible for eBay Express based on direct
	 * evaluation. Only returned if true, and no other seller requirement settings are returned
	 * in this case. For example, on the eBay Germany site, sellers need to fill out an application
	 * to become eligible to list on Express Germany. If they are approved, eBay sets ExpressApproved
	 * to true and no other seller requirement settings are relevant.
	 */
	public $ExpressApproved;
	/**
	 * @var boolean | If true, indicates that the user is in good standing with eBay. (One of the requirements
	 * for listing a new item with Immediate Payment.)
	 */
	public $GoodStanding;
	/**
	 * @var \Controle\FeedbackRequirementsType | The aggregate feedback score for a user. A user's feedback score is the net positive feedback
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
	 * @var \Controle\FeedbackRequirementsType | Percent of total feedback that is positive. For example, if the member has 50 feedbacks,
	 * where 49 are positive and 1 is neutral or negative, the positive feedback percent could
	 * be 98.0. The value uses a max precision of 4 and a scale of 1. If the user has feedback,
	 * this value can be returned regardless of whether the member has chosen to make their feedback
	 * private. Not returned if the user has no feedback. To be eligible to list on Express, a
	 * seller's feedback percent needs to be 98 or higher. See "eBay Express" in the eBay Web Services
	 * guide. In GetSearchResults and GetCategoryListings, feedback information is only returned
	 * if IncludeFeedback = true in the request.
	 */
	public $PositiveFeedbackPercent;
	/**
	 * @var \Controle\FeedbackRequirementsType | If true, indicates that the seller meets the Express site's minimum feedback requirement
	 * (if any) for transactions as a seller (not a buyer).
	 */
	public $FeedbackAsSellerScore;
	/**
	 * @var \Controle\FeedbackRequirementsType | If true, indicates that the seller meets the Express site's minimum positive feedback requirement
	 * (if any) for transactions as a seller (not a buyer).
	 */
	public $PositiveFeedbackAsSellerPercent;
	/**
	 * @var boolean | If true, this indicates that the seller is a business user and intends to use listing features
	 * that are offered to business users only. Applicable only to business sellers residing in
	 * Germany, Austria, or Switzerland who are listing in a B2B VAT- enabled category on the
	 * eBay Germany (DE), Austria (AT), or Switzerland (CH) sites. The seller must have a valid VAT
	 * ID registered with eBay. This must be set to true if RestrictedToBusiness is true. It has
	 * no effect (and it's not returned) if RestrictedToBusiness is false. If an item was not
	 * qualified as a business item when originally listed, but meets the conditions for business
	 * items when the item is revised or relisted, the seller can convert the item to a business
	 * item by specifying the appropriate VAT details. See the eBay Web Services guide for more
	 * information and additional rules.
	 */
	public $BusinessSeller;
	/**
	 * @var boolean | If true, the seller has an eligible PayPal account for Express. Only returned if the site
	 * assesses this requirement at the seller level.
	 */
	public $EligiblePayPalAccount;
	/**
	 * @var boolean | If true, the seller has a PayPal account that accepts a payment from a buyer with an unconfirmed
	 * address. Only returned if the site assesses this requirement at the seller level.
	 */
	public $PayPalAccountAcceptsUnconfirmedAddress;
	/**
	 * @var boolean | If true, the seller accepts combined payments. If false, the seller doesn't accept combined
	 * payments (and the seller is therefore ineligible for Express, if the site requires this
	 * preference).
	 */
	public $CombinedPaymentsAccepted;
	/**
	 * @var boolean | If true, the seller's feedback profile is public. If false, the seller's feedback details
	 * are private; that is, User.FeedbackPrivate is true (and the seller is therefore ineligible).
	 */
	public $FeedbackPublic;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressSellingPreference($val)
	{
        $this->ExpressSellingPreference = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setExpressApproved($val)
	{
        $this->ExpressApproved = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setGoodStanding($val)
	{
        $this->GoodStanding = (int)$val;
	}

	/**
	 * @param FeedbackRequirementsType $val
	 * @throws Exception
	 */
	public function setFeedbackScore($val)
	{
        $this->FeedbackScore = (int)$val;
	}

	/**
	 * @param FeedbackRequirementsType $val
	 * @throws Exception
	 */
	public function setPositiveFeedbackPercent($val)
	{
        $this->PositiveFeedbackPercent = (int)$val;
	}

	/**
	 * @param FeedbackRequirementsType $val
	 * @throws Exception
	 */
	public function setFeedbackAsSellerScore($val)
	{
        $this->FeedbackAsSellerScore = (int)$val;
	}

	/**
	 * @param FeedbackRequirementsType $val
	 * @throws Exception
	 */
	public function setPositiveFeedbackAsSellerPercent($val)
	{
        $this->PositiveFeedbackAsSellerPercent = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setBusinessSeller($val)
	{
        $this->BusinessSeller = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setEligiblePayPalAccount($val)
	{
        $this->EligiblePayPalAccount = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPayPalAccountAcceptsUnconfirmedAddress($val)
	{
        $this->PayPalAccountAcceptsUnconfirmedAddress = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCombinedPaymentsAccepted($val)
	{
        $this->CombinedPaymentsAccepted = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setFeedbackPublic($val)
	{
        $this->FeedbackPublic = (int)$val;
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
