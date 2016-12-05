<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class QueueItem
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Attachment
     */
    public $Attachments;
    /**
     * @var string
     */
    public $DomainHandle;
    /**
     * @var string
     */
    public $DomainName;
    /**
     * @var string
     */
    public $Msg;
    /**
     * @var int
     */
    public $MsgId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MessageType
     */
    public $MsgType;
    /**
     * @var string
     */
    public $OrderId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderStatusType
     */
    public $OrderStatus;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\CallbackStatus
     */
    public $StatusList;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfAttachment $val
     * @throws Exception
     */
    public function setAttachments($val)
    {
        $this->Attachments = ()$val;
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
        $this->DomainHandle = ()$val;
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
        $this->DomainName = ()$val;
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
        $this->Msg = ()$val;
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
        $this->MsgId = ()$val;
    }

    /**
     * @param MessageType $val
     * @throws Exception
     */
    public function setMsgType($val)
    {
        $this->MsgType = ()$val;
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
        $this->OrderId = ()$val;
    }

    /**
     * @param OrderStatusType $val
     * @throws Exception
     */
    public function setOrderStatus($val)
    {
        $this->OrderStatus = ()$val;
    }

    /**
     * @param ArrayOfCallbackStatus $val
     * @throws Exception
     */
    public function setStatusList($val)
    {
        $this->StatusList = ()$val;
    }
}
