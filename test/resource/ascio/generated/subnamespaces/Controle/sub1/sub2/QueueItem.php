<?php

namespace Controle\sub1\sub2;
class QueueItem {
	/**
	 * @var array \Controle\sub1\sub2\Attachment
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
	 * @var \Controle\sub1\sub2\MessageType
	 */
	public $MsgType;
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var \Controle\sub1\sub2\OrderStatusType
	 */
	public $OrderStatus;
	/**
	 * @var array \Controle\sub1\sub2\CallbackStatus
	 */
	public $StatusList;
	/**
	 * @param ArrayOfAttachment $val
	 * @throws Exception
	 */
	public function setAttachments($val) {
		
		$this->Attachments = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainHandle($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainHandle');
		$this->DomainHandle = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainName');
		$this->DomainName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMsg($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for Msg');
		$this->Msg = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setMsgId($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->MsgId = (int)$val;
	}

	/**
	 * @param MessageType $val
	 * @throws Exception
	 */
	public function setMsgType($val) {
		
		$this->MsgType = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setOrderId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for OrderId');
		$this->OrderId = (int)$val;
	}

	/**
	 * @param OrderStatusType $val
	 * @throws Exception
	 */
	public function setOrderStatus($val) {
		
		$this->OrderStatus = (int)$val;
	}

	/**
	 * @param ArrayOfCallbackStatus $val
	 * @throws Exception
	 */
	public function setStatusList($val) {
		
		$this->StatusList = (int)$val;
	}

}

