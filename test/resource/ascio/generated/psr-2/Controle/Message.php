<?php

namespace Controle;

class Message
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Attachment
     */
    public $Attachments;
    /**
     * @var string
     */
    public $Body;
    /**
     * @var dateTime
     */
    public $Created;
    /**
     * @var string
     */
    public $FromAddress;
    /**
     * @var string
     */
    public $Subject;
    /**
     * @var string
     */
    public $ToAddress;
    /**
     * @var \Controle\MessageType
     */
    public $Type;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfAttachment $val
     * @throws Exception
     */
    public function setAttachments($val)
    {
        $this->Attachments = (ArrayOfAttachment)$val;
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
        $this->Body = (string)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreated($val)
    {
        $this->Created = (dateTime)$val;
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
        $this->FromAddress = (string)$val;
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
        $this->Subject = (string)$val;
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
        $this->ToAddress = (string)$val;
    }

    /**
     * @param MessageType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->Type = (MessageType)$val;
    }
}
