<?php

namespace Controle;
class Message {
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
}

