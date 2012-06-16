<?php

namespace Controle\sub1\sub2;
/**
 * AmountType
 * Basic type for specifying monetary amounts. A double value (e.g., 1.00 or 1.0) is meaningful
 * as a monetary amount when accompanied by a specification of the currency, in which case
 * the value specifies the amount in that currency. An AmountType expresses both the value (a
 * double) and the currency. Details such as prices, fees, costs, and payments are specified
 * as amount types.
 */
class AmountType {
	/**
	 * @var double
	 */
	public $_;
	/**
	 * @var \Controle\sub1\sub2\CurrencyCodeType
	 */
	public $currencyID;
}

