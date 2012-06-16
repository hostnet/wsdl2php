<?php

namespace Controle;
class QueueItem {
	/**
	 * @var array \Controle\Attachment
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
	 * @var \Controle\MessageType
	 */
	public $MsgType;
	/**
	 * @var string
	 */
	public $OrderId;
	/**
	 * @var \Controle\OrderStatusType
	 */
	public $OrderStatus;
	/**
	 * @var array \Controle\CallbackStatus
	 */
	public $StatusList;
}

