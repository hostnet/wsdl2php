<?php

namespace Controle\sub1\sub2;
/**
 * FeedbackSummaryType
 * Specifies all feedback summary information (except Score). Contains FeedbackPeriodArrayType
 * objects that each convey feedback counts for positive, negative, neutral, and total feedback
 * counts - for various time periods each. Also conveys counts of bid retractions for the predefined
 * time periods.
 */
class FeedbackSummaryType {
	/**
	 * @var \Controle\sub1\sub2\FeedbackPeriodArrayType | Bid retractions count, for multiple predefined time periods preceding the call. Returned
	 * if no detail level is specified.
	 */
	public $BidRetractionFeedbackPeriodArray;
	/**
	 * @var \Controle\sub1\sub2\FeedbackPeriodArrayType | Negative feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $NegativeFeedbackPeriodArray;
	/**
	 * @var \Controle\sub1\sub2\FeedbackPeriodArrayType | Neutral feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $NeutralFeedbackPeriodArray;
	/**
	 * @var \Controle\sub1\sub2\FeedbackPeriodArrayType | Positive feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $PositiveFeedbackPeriodArray;
	/**
	 * @var \Controle\sub1\sub2\FeedbackPeriodArrayType | Total feedback score, for multiple predefined time periods preceding the call. Returned
	 * if no detail level is specified.
	 */
	public $TotalFeedbackPeriodArray;
	/**
	 * @var int | Number of neutral comments received from suspended users. Returned if no detail level is
	 * specified.
	 */
	public $NeutralCommentCountFromSuspendedUsers;
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
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

