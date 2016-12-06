<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetRuNameRequestType
 * Returns a globally unique runame (unique identifier for an authentication data entry). This
 * call needs the ebay userid/password you created for use by your applications (not an authentication
 * token).
 */
class GetRuNameRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Optional value that is appended to the generated runame.
     */
    public $ClientUseCase;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setClientUseCase($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ClientUseCase');
        }
        $this->ClientUseCase = $val;
    }
}
