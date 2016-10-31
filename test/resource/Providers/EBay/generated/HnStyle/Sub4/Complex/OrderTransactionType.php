<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * OrderTransactionType
 * Contains an order or a transaction. A transaction is the sale of one or more items from
 * a seller's listing to a buyer. An order combines two or more transactions into a single
 * payment.
 */
class OrderTransactionType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderType | Order in which the page is displayed in the list of custom pages.
     */
    public $order;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TransactionType | Information about one transaction. Also applicable to Half.com (for GetOrders).
     */
    public $transaction;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param OrderType $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        $this->order = (int)$val;
    }

    /**
     * @param TransactionType $val
     * @throws Exception
     */
    public function setTransaction($val)
    {
        $this->transaction = (int)$val;
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
