<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ValidateChallengeInputRequestType
 * Validates the user response to a GetChallengeToken botblock challenge.
 */
class ValidateChallengeInputRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Botblock token that was returned by GetChallengeToken.
     */
    public $ChallengeToken;
    /**
     * @var string | User response to a botblock challenge.
     */
    public $UserInput;
    /**
     * @var boolean | Whether the challenge token should remain valid for up to two minutes.
     */
    public $KeepTokenValid;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setChallengeToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ChallengeToken');
        }
        $this->ChallengeToken = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setUserInput($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for UserInput');
        }
        $this->UserInput = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setKeepTokenValid($val)
    {
        $this->KeepTokenValid = $val;
    }
}
