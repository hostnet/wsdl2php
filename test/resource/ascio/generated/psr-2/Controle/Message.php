<?php

namespace Controle;

class Message
{
    /**
     * @var array \Controle\Attachment
     */
    public $attachments;
    /**
     * @var string
     */
    public $body;
    /**
     * @var dateTime
     */
    public $created;
    /**
     * @var string
     */
    public $fromaddress;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string
     */
    public $toaddress;
    /**
     * @var \Controle\MessageType
     */
    public $type;
    /**
     * @param ArrayOfAttachment $val
     * @throws Exception
     */
    public function setAttachments($val)
    {
        $this->attachments = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBody($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Body');
        }
        $this->body = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreated($val)
    {
        $this->created = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFromAddress($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FromAddress');
        }
        $this->fromaddress = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSubject($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Subject');
        }
        $this->subject = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setToAddress($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ToAddress');
        }
        $this->toaddress = (int)$val;
    }

    /**
     * @param MessageType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->type = (int)$val;
    }
}
