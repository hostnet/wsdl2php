<?php

namespace Controle;

class GetMessagesResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $getmessagesresult;
	/**
	 * @var array \Controle\Message
	 */
	public $messages;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetMessagesResult($val)
	{
        $this->getmessagesresult = (int)$val;
	}

	/**
	 * @param ArrayOfMessage $val
	 * @throws Exception
	 */
	public function setMessages($val)
	{
        $this->messages = (int)$val;
	}
}
