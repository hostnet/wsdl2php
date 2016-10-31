<?php

namespace Controle\sub1\sub2;

/**
 * AttributeRecommendationsType
 * Item Specifics data returned from the Suggested Attributes engine.
 */
class AttributeRecommendationsType
{
	/**
	 * @var \Controle\sub1\sub2\AttributeSetArrayType | Reserved for future use.
	 */
	public $attributesetarray;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param AttributeSetArrayType $val
	 * @throws Exception
	 */
	public function setAttributeSetArray($val)
	{
        $this->attributesetarray = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
