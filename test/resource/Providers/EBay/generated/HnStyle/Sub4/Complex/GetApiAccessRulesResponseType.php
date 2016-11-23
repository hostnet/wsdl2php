<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetApiAccessRulesResponseType
 * Responds to a call to GetApiAccessRules.
 */
class GetApiAccessRulesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ApiAccessRuleType | Contains the description of an API access rule, including the call name, the application's
     * current daily and hourly usage, and other values.
     */
    public $ApiAccessRule;
    // @codingStandardsIgnoreEnd

    /**
     * @param ApiAccessRuleType $val
     * @throws Exception
     */
    public function setApiAccessRule($val)
    {
        $this->ApiAccessRule = (int)$val;
    }
}
