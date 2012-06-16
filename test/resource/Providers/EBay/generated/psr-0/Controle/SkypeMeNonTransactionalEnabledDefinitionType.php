<?php

namespace Controle;
/**
 * SkypeMeNonTransactionalEnabledDefinitionType
 * Defines the feature of adding Skype buttons to listings for nontransactional formats (e.g.,
 * the advertisement format). If the field is present, the corresponding feature applies to
 * the category. The field is returned as an empty element (i.e., a boolean value is not returned).
 */
class SkypeMeNonTransactionalEnabledDefinitionType {
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

