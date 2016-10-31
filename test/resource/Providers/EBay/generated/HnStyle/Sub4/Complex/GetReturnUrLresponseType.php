<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetReturnUrLresponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var string | Sets an application display name for the eBay sign-in page. Need not be set with every
     * call. Optional.
     */
    public $applicationdisplayname;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AuthenticationEntryArrayType | One or more sets of authentication preferences and other data that you have configured
     * for your application (if any). Call SetReturnURL to configure this data.
     */
    public $authenticationentryarray;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setApplicationDisplayName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ApplicationDisplayName');
        }
        $this->applicationdisplayname = (int)$val;
    }

    /**
     * @param AuthenticationEntryArrayType $val
     * @throws Exception
     */
    public function setAuthenticationEntryArray($val)
    {
        $this->authenticationentryarray = (int)$val;
    }
}
