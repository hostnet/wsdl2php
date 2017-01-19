<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MemberMessageExchangeArrayType
 * Container for messages. Returned for GetMemberMessages if messages that meet the request
 * criteria exist.
 */
class MemberMessageExchangeArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageExchangeType | Information about individual messages. Returned if the parent container is returned.
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
