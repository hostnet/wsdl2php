<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * BuyerRequirementsType
 * Container for all buyer requirements in listing calls.
 */
class BuyerRequirementsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | If true, blocks bidders who are registered in countries to which the seller has specified
     * he will not shipo. Ignored as input if the application uses version 451 or older.
     */
    public $ShipToRegistrationCountry;
    /**
     * @var boolean | If true, blocks bidders with a feedback score of 0 who attempt to bid on Buy It Now
     * items worth 100 RMB or more. Ignored as input if the application uses version 451 or
     * older. This requirement is only enabled for the CN site.
     */
    public $ZeroFeedbackScore;
    /**
     * @var int | This field is ignored unless VerifiedUser is true. If this field is present, the user's
     * feedback score is also considered: a user is blocked from bidding if the user's feedback
     * score is less than or equal to the value of this field.
     */
    public $MinimumFeedbackScore;
    /**
     * @var boolean | If true, blocks bidders who have received two unpaid item strikes in the last 30 days. Ignored
     * as input if the application uses version 451 or older.
     */
    public $MaximumUnpaidItemStrikes;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MaximumItemRequirementsType | A means of limiting unpaying, low feedback bidders. Ignored as input if the application
     * uses version 451 or older.
     */
    public $MaximumItemRequirements;
    /**
     * @var boolean | If true, only bidders with PayPal accounts linked to eBay may bid. The MyeBay setting
     * is automatically picked up on AddItem only if the compatibility level is greater than
     * or equal to 453. For lower compatibility levels, you must send in explicit BuyerRequirement
     * input even if you have your "global" MyeBay setting set to require this.
     */
    public $LinkedPayPalAccount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VerifiedUserRequirementsType | A means of limiting unverified bidders. Ignored as input if the application uses version
     * 451 or older.
     */
    public $VerifiedUserRequirements;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setShipToRegistrationCountry($val)
    {
        $this->ShipToRegistrationCountry = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setZeroFeedbackScore($val)
    {
        $this->ZeroFeedbackScore = $val;
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
        $this->MinimumFeedbackScore = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setMaximumUnpaidItemStrikes($val)
    {
        $this->MaximumUnpaidItemStrikes = $val;
    }

    /**
     * @param MaximumItemRequirementsType $val
     * @throws Exception
     */
    public function setMaximumItemRequirements($val)
    {
        $this->MaximumItemRequirements = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setLinkedPayPalAccount($val)
    {
        $this->LinkedPayPalAccount = $val;
    }

    /**
     * @param VerifiedUserRequirementsType $val
     * @throws Exception
     */
    public function setVerifiedUserRequirements($val)
    {
        $this->VerifiedUserRequirements = $val;
    }
}
