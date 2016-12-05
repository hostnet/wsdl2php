<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateSupportOrder
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
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
     * @param string $val
     * @throws Exception
     */
    public function setSubject($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for subject');
        }
        $this->subject = (string)$val;
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
        $this->body = (string)$val;
    }

    /**
     * @param ArrayOfAttachment $val
     * @throws Exception
     */
    public function setAttachments($val)
    {
        $this->attachments = (ArrayOfAttachment)$val;
    }
}
