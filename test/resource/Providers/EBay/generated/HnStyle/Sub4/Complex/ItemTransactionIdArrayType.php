<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ItemTransactionIdArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemTransactionIDType |      */
    public $itemtransactionid;
    /**
     * @param ItemTransactionIDType $val
     * @throws Exception
     */
    public function setItemTransactionID($val)
    {
        $this->itemtransactionid = (int)$val;
    }
}
