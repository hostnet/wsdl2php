<?php

namespace Controle\sub1\sub2;
/**
 * LookupAttributeArrayType
 * Only valid when using AddItem for items in Media categories        (Books, DVD and Movies,
 * Music, and Video Game categories).        You can pass either AttributeSetArrayType or
 *       LookupAttributeArrayType, but you cannot pass both containers in the same request.
 *       See the eBay Web Services guide for additional information.
 */
class LookupAttributeArrayType {
	/**
	 * @var \Controle\sub1\sub2\LookupAttributeType | The condition of the item.
	 */
	public $LookupAttribute;
	/**
	 * @param LookupAttributeType $val
	 * @throws Exception
	 */
	public function setLookupAttribute($val) {
		
		$this->LookupAttribute = (int)$val;
	}

}

