<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetOrderTransactionsRequestType
 * Retrieves information about one or more orders or one or more transactions (or both). If
 * you have both orderIDs and itemIDs/transactionIDs, you may find this "combined call" more
 * convenient than calling GetOrders and GetItemTransactions separately. Note that every transaction
 * is nested within an Order node, even if the transaction does not belong to an order. <b>Please
 * note that documentation for this call is currently incomplete.</b>
 */
class GetOrderTransactionsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemTransactionIDArrayType | An array of ItemTransactionIDs.
     */
    public $ItemTransactionIDArray;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderIDArrayType | A set of orders to retrieve. Not applicable to Half.com.
     */
    public $OrderIDArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemTransactionIDArrayType $val
     * @throws Exception
     */
    public function setItemTransactionIDArray($val)
    {
        $this->ItemTransactionIDArray = ()$val;
    }

    /**
     * @param OrderIDArrayType $val
     * @throws Exception
     */
    public function setOrderIDArray($val)
    {
        $this->OrderIDArray = ()$val;
    }
}
