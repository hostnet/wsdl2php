<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UploadDocumentation
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $orderid;
    /**
     * @var string
     */
    public $filename;
    /**
     * @var base64Binary
     */
    public $content;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOrderId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for orderId');
        }
        $this->orderid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFileName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for fileName');
        }
        $this->filename = (int)$val;
    }

    /**
     * @param base64Binary $val
     * @throws Exception
     */
    public function setContent($val)
    {
        $this->content = (int)$val;
    }
}
