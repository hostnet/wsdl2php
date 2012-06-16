<?php

namespace Controle\sub1\sub2;
/**
 * GetApiAccessRulesResponseType
 * Responds to a call to GetApiAccessRules.
 */
class GetApiAccessRulesResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\ApiAccessRuleType | Contains the description of an API access rule, including the call name, the application's
	 * current daily and hourly usage, and other values.
	 */
	public $ApiAccessRule;
	/**
	 * @param ApiAccessRuleType $val
	 * @throws Exception
	 */
	public function setApiAccessRule($val) {
		
		$this->ApiAccessRule = (int)$val;
	}

}

