<?php

namespace Controle;
/**
 * ItemTransactionIDArrayType
 * Container of ItemTransactionIDs.
 */
class ItemTransactionIDArrayType {
    /**
     * @var \Controle\ItemTransactionIDType |      */
    public $ItemTransactionID;
    /**
     * @param ItemTransactionIDType $val
     * @throws Exception
     */
    public function setItemTransactionID($val) {
        
        $this->ItemTransactionID = (int)$val;
    }

}

