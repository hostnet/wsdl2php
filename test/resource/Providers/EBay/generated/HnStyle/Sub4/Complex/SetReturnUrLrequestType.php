<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SetReturnUrLrequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AuthenticationEntryType | Contains the data properties that define one authentication entry.            Multiple
     * AuthenticationEntry fields can be returned.
     */
    public $authenticationentry;
    /**
     * @var string | Sets an application display name for the eBay sign-in page. Need not be set with every
     * call. Optional.
     */
    public $applicationdisplayname;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ModifyActionCodeType | Indicates the type of offer being made on the specified listing. Valid values are enumerated
     * in the BidActionCodeType code list.
     */
    public $action;
    /**
     * @param AuthenticationEntryType $val
     * @throws Exception
     */
    public function setAuthenticationEntry($val)
    {
        $this->authenticationentry = (int)$val;
    }

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
     * @param ModifyActionCodeType $val
     * @throws Exception
     */
    public function setAction($val)
    {
        $this->action = (int)$val;
    }
}
