<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MaximumItemRequirementsType
 * Container for items bid.
 */
class MaximumItemRequirementsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | If this field is present, blocking is enabled, where the value of this field represents
     * the maximum number of this seller's items a bidder is allowed to bid on in a 10 day
     * period before being blocked. Valid values: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 25, 50, 75,
     * 100.
     */
    public $MaximumItemCount;
    /**
     * @var int | This field is ignored unless VerifiedUser is true. If this field is present, the user's
     * feedback score is also considered: a user is blocked from bidding if the user's feedback
     * score is less than or equal to the value of this field.
     */
    public $MinimumFeedbackScore;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaximumItemCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->MaximumItemCount = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMinimumFeedbackScore($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->MinimumFeedbackScore = (int)$val;
    }
}
