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
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Bid retractions count, for multiple predefined time periods preceding the call. Returned
	 * if no detail level is specified.
	 */
	public $bidretractionfeedbackperiodarray;
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Negative feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $negativefeedbackperiodarray;
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Neutral feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $neutralfeedbackperiodarray;
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Positive feedback entries count, for multiple predefined time periods preceding the call.
	 * Returned if no detail level is specified.
	 */
	public $positivefeedbackperiodarray;
	/**
	 * @var \Controle\FeedbackPeriodArrayType | Total feedback score, for multiple predefined time periods preceding the call. Returned
	 * if no detail level is specified.
	 */
	public $totalfeedbackperiodarray;
	/**
	 * @var int | Number of neutral comments received from suspended users. Returned if no detail level is
	 * specified.
	 */
	public $neutralcommentcountfromsuspendedusers;
	/**
	 * @var int | Total count of negative feedback entries from unique (distinct) users.
	 */
	public $uniquenegativefeedbackcount;
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
	public $uniquepositivefeedbackcount;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setBidRetractionFeedbackPeriodArray($val)
	{
        $this->bidretractionfeedbackperiodarray = (int)$val;
	}

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setNegativeFeedbackPeriodArray($val)
	{
        $this->negativefeedbackperiodarray = (int)$val;
	}

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setNeutralFeedbackPeriodArray($val)
	{
        $this->neutralfeedbackperiodarray = (int)$val;
	}

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setPositiveFeedbackPeriodArray($val)
	{
        $this->positivefeedbackperiodarray = (int)$val;
	}

	/**
	 * @param FeedbackPeriodArrayType $val
	 * @throws Exception
	 */
	public function setTotalFeedbackPeriodArray($val)
	{
        $this->totalfeedbackperiodarray = (int)$val;
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
        $this->neutralcommentcountfromsuspendedusers = (int)$val;
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
        $this->uniquenegativefeedbackcount = (int)$val;
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
        $this->uniquepositivefeedbackcount = (int)$val;
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
