<?php

namespace Controle\sub1\sub2;
/**
 * ItemTransactionIDType
 * A container for item and transaction IDs.
 */
class ItemTransactionIDType {
	/**
	 * @var \Controle\sub1\sub2\ItemIDType | The item ID of the item reported for infringment.
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
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

