<?php

namespace Controle;

/**
 * GetApiAccessRulesResponseType
 * Responds to a call to GetApiAccessRules.
 */
class GetApiAccessRulesResponseType extends
 \Controle\AbstractResponseType
{
    /**
     * @var \Controle\ApiAccessRuleType | Contains the description of an API access rule, including the call name, the application's
     * current daily and hourly usage, and other values.
     */
    public $apiaccessrule;
    /**
     * @param ApiAccessRuleType $val
     * @throws Exception
     */
    public function setApiAccessRule($val)
    {
        $this->apiaccessrule = (int)$val;
    }
}
