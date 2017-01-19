<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UploadDocumentation
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $orderId;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var base64Binary
     */
    public $content;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setOrderId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for orderId');
        }
        $this->orderId = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setFileName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for fileName');
        }
        $this->fileName = $val;
    }

    /**
     * @param base64Binary $val
     * @throws \Exception
     */
    public function setContent($val)
    {
        $this->content = $val;
    }
}
