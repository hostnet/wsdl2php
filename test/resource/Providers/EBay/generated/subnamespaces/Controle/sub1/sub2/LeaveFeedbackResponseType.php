<?php

namespace Controle\sub1\sub2;
/**
 * LeaveFeedbackResponseType
 * LeaveFeedback response message includes an acknowledgement if the          feedback was
 * successfully left.
 */
class LeaveFeedbackResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var string | Unique identifier for the feedback entry. Returned for a detail level of ReturnAll (if
	 * the parent is returned).
	 */
	public $FeedbackID;
}

