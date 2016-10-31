<?php

namespace Controle\sub1\sub2;

/**
 * GetItemResponseType
 * Contains the item data returned by the call. The data for the specified item listing is
 * returned in an ItemType object.
 */
class GetItemResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
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
