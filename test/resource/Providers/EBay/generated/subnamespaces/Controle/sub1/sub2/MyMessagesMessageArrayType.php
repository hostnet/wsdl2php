<?php

namespace Controle\sub1\sub2;

/**
 * MyMessagesMessageArrayType
 * Contains a list of message data.
 */
class MyMessagesMessageArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\MyMessagesMessageType | Contains the data for one message.
	 */
	public $Message;
	// @codingStandardsIgnoreEnd

	/**
	 * @param MyMessagesMessageType $val
	 * @throws \Exception
	 */
	public function setMessage($val)
	{
        $this->Message = $val;
	}
}
