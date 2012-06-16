<?php

namespace Controle;
/**
 * ValidateChallengeInputResponseType
 * Validate the user response to botblock challenge.
 */
class ValidateChallengeInputResponseType extends \Controle\AbstractResponseType {
    /**
     * @var boolean | Indicates whether the token is valid.
     */
    public $ValidToken;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setValidToken($val) {
        
        $this->ValidToken = (int)$val;
    }

}

