<?php

namespace Controle\sub1\sub2;
class Order {
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var \Controle\sub1\sub2\OrderType
	 */
	public $Type;
	/**
	 * @var string
	 */
	public $AccountReference;
	/**
	 * @var \Controle\sub1\sub2\OrderStatusType
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
	 * @var \Controle\sub1\sub2\Domain
	 */
	public $Domain;
	/**
	 * @var dateTime
	 */
	public $CreDate;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for OrderId');
		$this->OrderId = (int)$val;
	}

	/**
	 * @param OrderType $val
	 * @throws Exception
	 */
	public function setType($val) {
		
		$this->Type = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAccountReference($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for AccountReference');
		$this->AccountReference = (int)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setStatus($val) {
		
		$this->Status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTransactionComment($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for TransactionComment');
		$this->TransactionComment = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setComments($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Comments');
		$this->Comments = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOptions($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Options');
		$this->Options = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLocalPresence($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for LocalPresence');
		$this->LocalPresence = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBatch($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Batch');
		$this->Batch = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentation($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Documentation');
		$this->Documentation = (int)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val) {
		
		$this->Domain = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val) {
		
		$this->CreDate = (int)$val;
	}

}

