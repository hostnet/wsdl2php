<?php

namespace Controle\sub1\sub2;

/**
 * ItemArrayType
 * Container for a list of items. Can contain zero, one, or multiple ItemType objects, each
 * of which conveys the data for one item listing.
 */
class ItemArrayType
{
	/**
	 * @var \Controle\sub1\sub2\ItemType | Information about the item that spawned the transaction. It is a purchase from this item's
	 * listing that the transaction represents. To remove a property from an item, specify it
	 * in ModifyType as a changed property, but do not give it a value in Item. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $item;
	/**
	 * @param ItemType $val
	 * @throws Exception
	 */
	public function setItem($val)
	{
        $this->item = (int)$val;
	}
}
