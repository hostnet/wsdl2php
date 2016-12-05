<?php

namespace Controle;

/**
 * GetItemsAwaitingFeedbackResponseType
 * Response to GetItemsAwaitingFeedback.
 */
class GetItemsAwaitingFeedbackResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\PaginatedTransactionArrayType | Contains the items awaiting feedback. Returned only if there are items that do not yet have
	 * feedback.
	 */
	public $ItemsAwaitingFeedback;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PaginatedTransactionArrayType $val
	 * @throws Exception
	 */
	public function setItemsAwaitingFeedback($val)
	{
        $this->ItemsAwaitingFeedback = (PaginatedTransactionArrayType)$val;
	}
}
