<?php

namespace Controle;

/**
 * GetApiAccessRulesResponseType
 * Responds to a call to GetApiAccessRules.
 */
class GetApiAccessRulesResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\ApiAccessRuleType | Contains the description of an API access rule, including the call name, the application's
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
        $this->ApiAccessRule = $val;
    }
}
