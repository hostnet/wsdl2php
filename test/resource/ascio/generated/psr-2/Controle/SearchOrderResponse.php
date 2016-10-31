<?php

namespace Controle;

class SearchOrderResponse
{
    /**
     * @var \Controle\Response
     */
    public $searchorderresult;
    /**
     * @var int
     */
    public $totalorders;
    /**
     * @var array \Controle\Order
     */
    public $orders;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchOrderResult($val)
    {
        $this->searchorderresult = (int)$val;
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
        $this->totalorders = (int)$val;
    }

    /**
     * @param ArrayOfOrder $val
     * @throws Exception
     */
    public function setOrders($val)
    {
        $this->orders = (int)$val;
    }
}
