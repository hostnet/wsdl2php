<?php

namespace Controle\sub1\sub2;
/**
 * ExpressPicturesRequiredDefinitionType
 * For the US and Germany sites, an eBay item must meet a number of eligibility requirements
 * in order to also be included on eBay Express. One requirement is that the item must include
 * a picture (or gallery image). Currently, this type defines no special meta-data. (An empty
 * element is returned.)
 */
class ExpressPicturesRequiredDefinitionType {
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

