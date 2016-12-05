<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetRuNameResponseType
 * Contains the generated runame (unique identifier for an authentication data entry).
 */
class GetRuNameResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | A unique identifier associated with application and the combination            of URLs
     * within this authentication entry.            Unique across all applications that execute
     * eBay Web Services calls.            For convenience, you can call GetRuName to generate
     * a unique value.
     */
    public $RuName;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRuName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RuName');
        }
        $this->RuName = (string)$val;
    }
}
