<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ItemTransactionIdType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $TransactionID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTransactionID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionID');
        }
        $this->TransactionID = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
