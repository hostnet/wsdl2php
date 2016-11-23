<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AuthenticationEntryArrayType
 * Container for a list of AuthenticationEntries. Can contain zero, one, or multiple AuthenticationEntryType
 * objects.
 */
class AuthenticationEntryArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AuthenticationEntryType | Contains the data properties that define one authentication entry.            Multiple
     * AuthenticationEntry fields can be returned.
     */
    public $AuthenticationEntry;
    // @codingStandardsIgnoreEnd

    /**
     * @param AuthenticationEntryType $val
     * @throws Exception
     */
    public function setAuthenticationEntry($val)
    {
        $this->AuthenticationEntry = (int)$val;
    }
}
