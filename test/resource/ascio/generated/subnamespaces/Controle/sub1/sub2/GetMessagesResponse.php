<?php

namespace Controle\sub1\sub2;

class GetMessagesResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetMessagesResult;
	/**
	 * @var array \Controle\sub1\sub2\Message
	 */
	public $messages;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setGetMessagesResult($val)
	{
        $this->GetMessagesResult = $val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws \Exception
	 */
	public function setMessages($val)
	{
        $this->messages = $val;
	}
}
