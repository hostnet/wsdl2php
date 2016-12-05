<?php

namespace Controle\sub1\sub2;

/**
 * OrderTransactionArrayType
 * Contains a list of orders, transactions, or both, each of OrderTransactionType.
 */
class OrderTransactionArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\OrderTransactionType | The individual order or transaction.
	 */
	public $OrderTransaction;
	// @codingStandardsIgnoreEnd

	/**
	 * @param OrderTransactionType $val
	 * @throws Exception
	 */
	public function setOrderTransaction($val)
	{
        $this->OrderTransaction = ()$val;
	}
}
