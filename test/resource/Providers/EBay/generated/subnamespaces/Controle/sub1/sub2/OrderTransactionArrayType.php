<?php

namespace Controle\sub1\sub2;

/**
 * OrderTransactionArrayType
 * Contains a list of orders, transactions, or both, each of OrderTransactionType.
 */
class OrderTransactionArrayType
{
	/**
	 * @var \Controle\sub1\sub2\OrderTransactionType | The individual order or transaction.
	 */
	public $ordertransaction;
	/**
	 * @param OrderTransactionType $val
	 * @throws Exception
	 */
	public function setOrderTransaction($val)
	{
        $this->ordertransaction = (int)$val;
	}
}
