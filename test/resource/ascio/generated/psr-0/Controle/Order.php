<?php

namespace Controle;

class Order
{
	/**
	 * @var string
	 */
	public $orderid;
	/**
	 * @var \Controle\OrderType
	 */
	public $type;
	/**
	 * @var string
	 */
	public $accountreference;
	/**
	 * @var \Controle\OrderStatusType
	 */
	public $status;
	/**
	 * @var string
	 */
	public $transactioncomment;
	/**
	 * @var string
	 */
	public $comments;
	/**
	 * @var string
	 */
	public $options;
	/**
	 * @var string
	 */
	public $localpresence;
	/**
	 * @var string
	 */
	public $batch;
	/**
	 * @var string
	 */
	public $documentation;
	/**
	 * @var \Controle\Domain
	 */
	public $domain;
	/**
	 * @var dateTime
	 */
	public $credate;
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
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = (int)$val;
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
        $this->accountreference = (int)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        $this->status = (int)$val;
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
        $this->transactioncomment = (int)$val;
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
        $this->comments = (int)$val;
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
        $this->options = (int)$val;
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
        $this->localpresence = (int)$val;
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
        $this->batch = (int)$val;
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
        $this->documentation = (int)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val)
	{
        $this->domain = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->credate = (int)$val;
	}
}
