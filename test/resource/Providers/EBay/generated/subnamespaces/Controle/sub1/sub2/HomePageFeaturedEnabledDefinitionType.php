<?php

namespace Controle\sub1\sub2;
/**
 * HomePageFeaturedEnabledDefinitionType
 * Defines whether Home Page Featured is available on the site.
 */
class HomePageFeaturedEnabledDefinitionType {
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
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

