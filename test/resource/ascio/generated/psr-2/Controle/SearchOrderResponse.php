<?php

namespace Controle;

class SearchOrderResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $SearchOrderResult;
    /**
     * @var int
     */
    public $totalOrders;
    /**
     * @var array \Controle\Order
     */
    public $orders;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchOrderResult($val)
    {
        $this->SearchOrderResult = (Response)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalOrders($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->totalOrders = (int)$val;
    }

    /**
     * @param ArrayOfOrder $val
     * @throws Exception
     */
    public function setOrders($val)
    {
        $this->orders = (ArrayOfOrder)$val;
    }
}
