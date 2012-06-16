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
}

