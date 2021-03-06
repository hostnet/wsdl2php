<?php

namespace Controle\sub1\sub2;

/**
 * GetItemsAwaitingFeedbackResponseType
 * Response to GetItemsAwaitingFeedback.
 */
class GetItemsAwaitingFeedbackResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\PaginatedTransactionArrayType | Contains the items awaiting feedback. Returned only if there are items that do not yet have
	 * feedback.
	 */
	public $ItemsAwaitingFeedback;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PaginatedTransactionArrayType $val
	 * @throws \Exception
	 */
	public function setItemsAwaitingFeedback($val)
	{
        $this->ItemsAwaitingFeedback = $val;
	}
}
