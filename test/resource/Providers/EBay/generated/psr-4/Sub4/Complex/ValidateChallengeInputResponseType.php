<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ValidateChallengeInputResponseType
 * Validate the user response to botblock challenge.
 */
class ValidateChallengeInputResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | Indicates whether the token is valid.
     */
    public $ValidToken;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setValidToken($val)
    {
        $this->ValidToken = $val;
    }
}
