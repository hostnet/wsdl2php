<?php

namespace Controle;
class GetOrderResponse {
    /**
     * @var \Controle\Response
     */
    public $GetOrderResult;
    /**
     * @var \Controle\Order
     */
    public $order;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetOrderResult($val) {
        
        $this->GetOrderResult = (int)$val;
    }

    /**
     * @param Order $val
     * @throws Exception
     */
    public function setOrder($val) {
        
        $this->order = (int)$val;
    }

}

