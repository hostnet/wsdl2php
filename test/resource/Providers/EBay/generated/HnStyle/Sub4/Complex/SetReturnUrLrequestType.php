<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SetReturnUrLrequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AuthenticationEntryType | Contains the data properties that define one authentication entry.            Multiple
     * AuthenticationEntry fields can be returned.
     */
    public $AuthenticationEntry;
    /**
     * @var string | Sets an application display name for the eBay sign-in page. Need not be set with every
     * call. Optional.
     */
    public $ApplicationDisplayName;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ModifyActionCodeType | Indicates the type of offer being made on the specified listing. Valid values are enumerated
     * in the BidActionCodeType code list.
     */
    public $Action;
    // @codingStandardsIgnoreEnd

    /**
     * @param AuthenticationEntryType $val
     * @throws Exception
     */
    public function setAuthenticationEntry($val)
    {
        $this->AuthenticationEntry = $val;
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
        $this->ApplicationDisplayName = $val;
    }

    /**
     * @param ModifyActionCodeType $val
     * @throws Exception
     */
    public function setAction($val)
    {
        $this->Action = $val;
    }
}
