<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetUserResponseType
 * Contains the data retrieved by the call. User data is returned in a User object.
 */
class GetUserResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserType | Bidder information. See the schema documentation for UserType for details on its properties
     * and their meanings.
     */
    public $User;
    // @codingStandardsIgnoreEnd

    /**
     * @param UserType $val
     * @throws Exception
     */
    public function setUser($val)
    {
        $this->User = $val;
    }
}
