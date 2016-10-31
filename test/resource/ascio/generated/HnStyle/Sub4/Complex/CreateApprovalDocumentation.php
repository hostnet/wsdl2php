<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateApprovalDocumentation
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ApprovalDocumentation
     */
    public $approvaldocumentation;
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
     * @param ApprovalDocumentation $val
     * @throws Exception
     */
    public function setApprovalDocumentation($val)
    {
        $this->approvaldocumentation = (int)$val;
    }
}
