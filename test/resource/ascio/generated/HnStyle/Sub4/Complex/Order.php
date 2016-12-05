<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Order
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $OrderId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderType
     */
    public $Type;
    /**
     * @var string
     */
    public $AccountReference;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderStatusType
     */
    public $Status;
    /**
     * @var string
     */
    public $TransactionComment;
    /**
     * @var string
     */
    public $Comments;
    /**
     * @var string
     */
    public $Options;
    /**
     * @var string
     */
    public $LocalPresence;
    /**
     * @var string
     */
    public $Batch;
    /**
     * @var string
     */
    public $Documentation;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Domain
     */
    public $Domain;
    /**
     * @var dateTime
     */
    public $CreDate;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOrderId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OrderId');
        }
        $this->OrderId = (string)$val;
    }

    /**
     * @param OrderType $val
     * @throws Exception
     */
    public function setType($val)
    {
        $this->Type = (OrderType)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAccountReference($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AccountReference');
        }
        $this->AccountReference = (string)$val;
    }

    /**
     * @param OrderStatusType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->Status = (OrderStatusType)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTransactionComment($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionComment');
        }
        $this->TransactionComment = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setComments($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comments');
        }
        $this->Comments = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOptions($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Options');
        }
        $this->Options = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLocalPresence($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LocalPresence');
        }
        $this->LocalPresence = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBatch($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Batch');
        }
        $this->Batch = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDocumentation($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Documentation');
        }
        $this->Documentation = (string)$val;
    }

    /**
     * @param Domain $val
     * @throws Exception
     */
    public function setDomain($val)
    {
        $this->Domain = (Domain)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreDate($val)
    {
        $this->CreDate = (dateTime)$val;
    }
}
