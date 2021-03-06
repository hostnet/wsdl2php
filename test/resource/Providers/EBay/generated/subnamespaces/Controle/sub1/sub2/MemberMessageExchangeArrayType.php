<?php

namespace Controle\sub1\sub2;

/**
 * MemberMessageExchangeArrayType
 * Container for messages. Returned for GetMemberMessages if messages that meet the request
 * criteria exist.
 */
class MemberMessageExchangeArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\MemberMessageExchangeType | Information about individual messages. Returned if the parent container is returned.
	 */
	public $MemberMessageExchange;
	// @codingStandardsIgnoreEnd

	/**
	 * @param MemberMessageExchangeType $val
	 * @throws \Exception
	 */
	public function setMemberMessageExchange($val)
	{
        $this->MemberMessageExchange = $val;
	}
}
