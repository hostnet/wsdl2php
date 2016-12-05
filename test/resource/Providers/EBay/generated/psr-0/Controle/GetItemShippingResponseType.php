<?php

namespace Controle;

/**
 * GetItemShippingResponseType
 * Contains the data returned by the call. The shipping details for the specified item are
 * returned in a ShippingDetails object.
 */
class GetItemShippingResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\ShippingDetailsType | The shipping-related details for an item or transaction, including flat and calculated
	 * shipping costs and shipping insurance costs. For GetOrders, also applicable to Half.com.
	 * For GetOrders, minimal ShippingDetails information is returned under the Transaction container.
	 */
	public $ShippingDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ShippingDetailsType $val
	 * @throws Exception
	 */
	public function setShippingDetails($val)
	{
        $this->ShippingDetails = ()$val;
	}
}
