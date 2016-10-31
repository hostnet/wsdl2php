<?php

namespace Controle;

class QueueItem
{
    /**
     * @var array \Controle\Attachment
     */
    public $attachments;
    /**
     * @var string
     */
    public $domainhandle;
    /**
     * @var string
     */
    public $domainname;
    /**
     * @var string
     */
    public $msg;
    /**
     * @var int
     */
    public $msgid;
    /**
     * @var \Controle\MessageType
     */
    public $msgtype;
    /**
     * @var string
     */
    public $orderid;
    /**
     * @var \Controle\OrderStatusType
     */
    public $orderstatus;
    /**
     * @var array \Controle\CallbackStatus
     */
    public $statuslist;
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
    public function setDomainHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainHandle');
        }
        $this->domainhandle = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDomainName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DomainName');
        }
        $this->domainname = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMsg($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Msg');
        }
        $this->msg = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMsgId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->msgid = (int)$val;
    }

    /**
     * @param MessageType $val
     * @throws Exception
     */
    public function setMsgType($val)
    {
        $this->msgtype = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOrderId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->orderid = (int)$val;
    }

    /**
     * @param OrderStatusType $val
     * @throws Exception
     */
    public function setOrderStatus($val)
    {
        $this->orderstatus = (int)$val;
    }

    /**
     * @param ArrayOfCallbackStatus $val
     * @throws Exception
     */
    public function setStatusList($val)
    {
        $this->statuslist = (int)$val;
    }
}
