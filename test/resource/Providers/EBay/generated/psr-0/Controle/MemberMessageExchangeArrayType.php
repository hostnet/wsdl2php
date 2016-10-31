<?php

namespace Controle;

/**
 * MemberMessageExchangeArrayType
 * Container for messages. Returned for GetMemberMessages if messages that meet the request
 * criteria exist.
 */
class MemberMessageExchangeArrayType
{
	/**
	 * @var \Controle\MemberMessageExchangeType | Information about individual messages. Returned if the parent container is returned.
	 */
	public $membermessageexchange;
	/**
	 * @param MemberMessageExchangeType $val
	 * @throws Exception
	 */
	public function setMemberMessageExchange($val)
	{
        $this->membermessageexchange = (int)$val;
	}
}
