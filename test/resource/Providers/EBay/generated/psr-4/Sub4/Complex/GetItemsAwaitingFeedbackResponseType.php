<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetItemsAwaitingFeedbackResponseType
 * Response to GetItemsAwaitingFeedback.
 */
class GetItemsAwaitingFeedbackResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginatedTransactionArrayType | Contains the items awaiting feedback. Returned only if there are items that do not yet have
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
        $this->ItemsAwaitingFeedback = $val;
    }
}
