<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateSupportOrder
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string
     */
    public $body;
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
     * @param string $val
     * @throws Exception
     */
    public function setSubject($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for subject');
        }
        $this->subject = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBody($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for body');
        }
        $this->body = (int)$val;
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
