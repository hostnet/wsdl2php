<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetReturnUrLresponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Sets an application display name for the eBay sign-in page. Need not be set with every
     * call. Optional.
     */
    public $ApplicationDisplayName;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AuthenticationEntryArrayType | One or more sets of authentication preferences and other data that you have configured
     * for your application (if any). Call SetReturnURL to configure this data.
     */
    public $AuthenticationEntryArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setApplicationDisplayName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ApplicationDisplayName');
        }
        $this->ApplicationDisplayName = ()$val;
    }

    /**
     * @param AuthenticationEntryArrayType $val
     * @throws Exception
     */
    public function setAuthenticationEntryArray($val)
    {
        $this->AuthenticationEntryArray = ()$val;
    }
}
