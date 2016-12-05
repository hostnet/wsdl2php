<?php

namespace Controle\sub1\sub2;

/**
 * FeedbackDetailType
 * Detailed feedback information for a user. Conveys the score for the feedback, textual comment
 * from the leaving user, and other information.
 */
class FeedbackDetailType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\UserIDType | eBay user ID for the user who left the feedback. Returned for a detail level of ReturnAll
	 * (if the parent is returned).
	 */
	public $CommentingUser;
	/**
	 * @var int | Feedback score of the user indicated in CommentingUser. Returned for a detail level of
	 * ReturnAll (if the parent is returned).
	 */
	public $CommentingUserScore;
	/**
	 * @var string | Textual comment that explains, clarifies, or justifies the feedback rating specified in
	 * CommentType. Still displayed if feedback is withdrawn.
	 */
	public $CommentText;
	/**
	 * @var dateTime | Date and time (in GMT) that the feedback was submitted to eBay. Returned for a detail level
	 * of ReturnAll (if the parent is returned).
	 */
	public $CommentTime;
	/**
	 * @var \Controle\sub1\sub2\CommentTypeCodeType | Rating of the feedback being left (e.g., Positive).
	 */
	public $CommentType;
	/**
	 * @var string | Textual comment that the user targeted by feedback may leave in response or rebuttal to
	 * the feedback. (Cannot be submitted or edited via the API.)
	 */
	public $FeedbackResponse;
	/**
	 * @var string | Explanation a user can give to a response. (Cannot be submitted or edited via the API.) Returned
	 * for a detail level of ReturnAll (if the parent is returned).
	 */
	public $Followup;
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
	 */
	public $ItemID;
	/**
	 * @var \Controle\sub1\sub2\TradingRoleCodeType | Indicates whether the user who was the feedback recipient was a Buyer or the Seller for
	 * that transaction. Returned for a detail level of ReturnAll (if the parent is returned).
	 */
	public $Role;
	/**
	 * @var string | Name of the listing for which feedback was provided. Returned as CDATA. This value is returned
	 * only if the site is China (site ID 223).
	 */
	public $ItemTitle;
	/**
	 * @var \Controle\sub1\sub2\AmountType | The final price for the item, associated with the currency identified by the currencyId
	 * attribute of the AmountType. This value is returned only if the site is China (site ID
	 * 223).
	 */
	public $ItemPrice;
	/**
	 * @var string | Unique identifier for the feedback entry. Returned for a detail level of ReturnAll (if
	 * the parent is returned).
	 */
	public $FeedbackID;
	/**
	 * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
	 * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
	 * spawned it, so a transaction is only uniquely identified on a global basis by a combination
	 * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
	 */
	public $TransactionID;
	/**
	 * @var boolean | Indicates whether eBay replaced the comment with a message that the comment was removed.
	 */
	public $CommentReplaced;
	/**
	 * @var boolean | Indicates whether eBay replaced the response with a message that the response was removed.
	 */
	public $ResponseReplaced;
	/**
	 * @var boolean | Indicates whether eBay replaced the follow-up with a message that the follow-up was removed.
	 */
	public $FollowUpReplaced;
	/**
	 * @var boolean | Specifies if a user's feedback score is or is not countable. This field is returned only
	 * when a user's feedback score is not countable (value is false). <br><br> Only feedback
	 * left by verified users can count toward the aggregate score of another user. China users
	 * must go through a verification process before the feedback they leave can be counted in
	 * the score. Whether or not a feedback is countable is determined by the verification status
	 * of the person leaving the feedback at the time the feedback is left. <br><br> If a user
	 * is not verified and leaves a feedback, then later becomes verified, that feedback will
	 * still not be counted. Or, if a user is verified and at some later date changes to unverified
	 * status, the feedback left while the user was verified remains countable. So you cannot
	 * determine a user's current verification status from whether or not feedback they've left
	 * is or was countable. Whether or not feedback is countable has nothing to do with the verification
	 * status of the one receiving the comment, only the one leaving the feedback.
	 */
	public $Countable;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param UserIDType $val
	 * @throws Exception
	 */
	public function setCommentingUser($val)
	{
        $this->CommentingUser = (UserIDType)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCommentingUserScore($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CommentingUserScore = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCommentText($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CommentText');
        }
        $this->CommentText = (string)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCommentTime($val)
	{
        $this->CommentTime = (dateTime)$val;
	}

	/**
	 * @param CommentTypeCodeType $val
	 * @throws Exception
	 */
	public function setCommentType($val)
	{
        $this->CommentType = (CommentTypeCodeType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFeedbackResponse($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackResponse');
        }
        $this->FeedbackResponse = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFollowup($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Followup');
        }
        $this->Followup = (string)$val;
	}

	/**
	 * @param ItemIDType $val
	 * @throws Exception
	 */
	public function setItemID($val)
	{
        $this->ItemID = (ItemIDType)$val;
	}

	/**
	 * @param TradingRoleCodeType $val
	 * @throws Exception
	 */
	public function setRole($val)
	{
        $this->Role = (TradingRoleCodeType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setItemTitle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ItemTitle');
        }
        $this->ItemTitle = (string)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setItemPrice($val)
	{
        $this->ItemPrice = (AmountType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFeedbackID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FeedbackID');
        }
        $this->FeedbackID = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionID');
        }
        $this->TransactionID = (string)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCommentReplaced($val)
	{
        $this->CommentReplaced = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setResponseReplaced($val)
	{
        $this->ResponseReplaced = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setFollowUpReplaced($val)
	{
        $this->FollowUpReplaced = (boolean)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCountable($val)
	{
        $this->Countable = (boolean)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}
