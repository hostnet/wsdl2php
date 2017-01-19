<?php

namespace Controle\sub1\sub2;

class GetTokenResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $GetTokenResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setGetTokenResult($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for GetTokenResult');
        }
        $this->GetTokenResult = $val;
	}
}
