<?php

namespace Controle\sub1\sub2;

/**
 * ValidateChallengeInputResponseType
 * Validate the user response to botblock challenge.
 */
class ValidateChallengeInputResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var boolean | Indicates whether the token is valid.
	 */
	public $validtoken;
	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setValidToken($val)
	{
        $this->validtoken = (int)$val;
	}
}
