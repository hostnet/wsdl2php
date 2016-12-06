<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateDocumentation
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Attachment
     */
    public $attachments;
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
        $this->sessionId = $val;
    }

    /**
     * @param ArrayOfAttachment $val
     * @throws Exception
     */
    public function setAttachments($val)
    {
        $this->attachments = $val;
    }
}
