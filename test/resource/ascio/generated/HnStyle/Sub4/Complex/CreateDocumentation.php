<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateDocumentation
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Attachment
     */
    public $attachments;
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
     * @param ArrayOfAttachment $val
     * @throws Exception
     */
    public function setAttachments($val)
    {
        $this->attachments = (int)$val;
    }
}
