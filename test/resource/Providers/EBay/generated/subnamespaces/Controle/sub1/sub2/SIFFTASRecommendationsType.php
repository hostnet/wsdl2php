<?php

namespace Controle\sub1\sub2;
/**
 * SIFFTASRecommendationsType
 * Reserved for future use..
 */
class SIFFTASRecommendationsType {
	/**
	 * @var \Controle\sub1\sub2\AttributeSetArrayType | Reserved for future use.
	 */
	public $AttributeSetArray;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param AttributeSetArrayType $val
	 * @throws Exception
	 */
	public function setAttributeSetArray($val) {
		
		$this->AttributeSetArray = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

