<?php

namespace Controle;

/**
 * FeedbackSummaryType
 * Specifies all feedback summary information (except Score). Contains FeedbackPeriodArrayType
 * objects that each convey feedback counts for positive, negative, neutral, and total feedback
 * counts - for various time periods each. Also conveys counts of bid retractions for the predefined
 * time periods.
 */
class FeedbackSummaryType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Bid retractions count, for multiple predefined time periods preceding the call. Returned
	 * if no detail level is specified.
	 */
	public $BidRetractionFeedbackPeriodArray;
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Negative feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $NegativeFeedbackPeriodArray;
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Neutral feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $NeutralFeedbackPeriodArray;
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Positive feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $PositiveFeedbackPeriodArray;
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Total feedback score, for multiple predefined time periods preceding the call. Returned
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
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setBidRetractionFeedbackPeriodArray($val)
	{
        $this->BidRetractionFeedbackPeriodArray = ()$val;
	}

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setNegativeFeedbackPeriodArray($val)
	{
        $this->NegativeFeedbackPeriodArray = ()$val;
	}

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setNeutralFeedbackPeriodArray($val)
	{
        $this->NeutralFeedbackPeriodArray = ()$val;
	}

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setPositiveFeedbackPeriodArray($val)
	{
        $this->PositiveFeedbackPeriodArray = ()$val;
	}

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setTotalFeedbackPeriodArray($val)
	{
        $this->TotalFeedbackPeriodArray = ()$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setNeutralCommentCountFromSuspendedUsers($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->NeutralCommentCountFromSuspendedUsers = ()$val;
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
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
