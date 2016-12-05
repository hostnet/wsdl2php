<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateApprovalDocumentation
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ApprovalDocumentation
     */
    public $approvalDocumentation;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (string)$val;
    }

    /**
     * @param ApprovalDocumentation $val
     * @throws Exception
     */
    public function setApprovalDocumentation($val)
    {
        $this->approvalDocumentation = (ApprovalDocumentation)$val;
    }
}
