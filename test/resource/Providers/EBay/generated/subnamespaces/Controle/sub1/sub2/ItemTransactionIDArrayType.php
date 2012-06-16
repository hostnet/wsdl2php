<?php

namespace Controle\sub1\sub2;
/**
 * ItemTransactionIDArrayType
 * Container of ItemTransactionIDs.
 */
class ItemTransactionIDArrayType {
	/**
	 * @var \Controle\sub1\sub2\ItemTransactionIDType | 	 */
	public $ItemTransactionID;
	/**
	 * @param ItemTransactionIDType $val
	 * @throws Exception
	 */
	public function setItemTransactionID($val) {
		
		$this->ItemTransactionID = (int)$val;
	}

}

