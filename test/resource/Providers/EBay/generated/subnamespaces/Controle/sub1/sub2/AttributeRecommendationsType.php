<?php

namespace Controle\sub1\sub2;

/**
 * AttributeRecommendationsType
 * Item Specifics data returned from the Suggested Attributes engine.
 */
class AttributeRecommendationsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\AttributeSetArrayType | Reserved for future use.
	 */
	public $AttributeSetArray;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param AttributeSetArrayType $val
	 * @throws \Exception
	 */
	public function setAttributeSetArray($val)
	{
        $this->AttributeSetArray = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
