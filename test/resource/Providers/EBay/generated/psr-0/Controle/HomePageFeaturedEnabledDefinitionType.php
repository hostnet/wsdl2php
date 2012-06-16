<?php

namespace Controle;
/**
 * HomePageFeaturedEnabledDefinitionType
 * Defines whether Home Page Featured is available on the site.
 */
class HomePageFeaturedEnabledDefinitionType {
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

