<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ValidateChallengeInputRequestType
 * Validates the user response to a GetChallengeToken botblock challenge.
 */
class ValidateChallengeInputRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var string | Botblock token that was returned by GetChallengeToken.
     */
    public $challengetoken;
    /**
     * @var string | User response to a botblock challenge.
     */
    public $userinput;
    /**
     * @var boolean | Whether the challenge token should remain valid for up to two minutes.
     */
    public $keeptokenvalid;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setChallengeToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ChallengeToken');
        }
        $this->challengetoken = (int)$val;
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
        $this->userinput = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setKeepTokenValid($val)
    {
        $this->keeptokenvalid = (int)$val;
    }
}
