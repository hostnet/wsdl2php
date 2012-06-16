<?php

namespace Controle\sub1\sub2;
/**
 * MaximumItemRequirementsType
 * Container for items bid.
 */
class MaximumItemRequirementsType {
	/**
	 * @var int | If this field is present, blocking is enabled, where the value of this field represents
	 * the maximum number of this seller's items a bidder is allowed to bid on in a 10 day period
	 * before being blocked. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 25, 50, 75, 100.
	 */
	public $MaximumItemCount;
	/**
	 * @var int | This field is ignored unless VerifiedUser is true. If this field is present, the user's
	 * feedback score is also considered: a user is blocked from bidding if the user's feedback
	 * score is less than or equal to the value of this field.
	 */
	public $MinimumFeedbackScore;
}

