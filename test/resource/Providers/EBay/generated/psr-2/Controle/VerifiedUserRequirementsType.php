<?php

namespace Controle;

/**
 * VerifiedUserRequirementsType
 * Container for verified user requirements.
 */
class VerifiedUserRequirementsType
{
    /**
     * @var boolean | If true, blocks bidding by users who do not pass a simple check (for example, for credit
     * card on file). See "Buyer Requirements - VerifiedUser" in the chapter "Field Differences
     * for eBay Sites."
     */
    public $verifieduser;
    /**
     * @var int | This field is ignored unless VerifiedUser is true. If this field is present, the user's
     * feedback score is also considered: a user is blocked from bidding if the user's feedback
     * score is less than or equal to the value of this field.
     */
    public $minimumfeedbackscore;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setVerifiedUser($val)
    {
        $this->verifieduser = (int)$val;
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
        $this->minimumfeedbackscore = (int)$val;
    }
}
