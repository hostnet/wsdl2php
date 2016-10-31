<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CallbackStatus
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $status;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Message');
        }
        $this->message = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->status = (int)$val;
    }
}
