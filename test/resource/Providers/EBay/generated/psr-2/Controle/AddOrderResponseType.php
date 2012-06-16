<?php

namespace Controle;
/**
 * AddOrderResponseType
 * Returns a unique identifier for the order. A buyer may make a single payment to purchase
 * all of the item transactions that are included in the order.
 */
class AddOrderResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\OrderIDType | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
     * orders.
     */
    public $OrderID;
    /**
     * @var dateTime | Date and time the order was created. Also applicable to Half.com (for GetOrders).
     */
    public $CreatedTime;
}

