<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchOrderResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $SearchOrderResult;
    /**
     * @var int
     */
    public $totalOrders;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Order
     */
    public $orders;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchOrderResult($val)
    {
        $this->SearchOrderResult = ()$val;
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
        $this->totalOrders = ()$val;
    }

    /**
     * @param ArrayOfOrder $val
     * @throws Exception
     */
    public function setOrders($val)
    {
        $this->orders = ()$val;
    }
}
