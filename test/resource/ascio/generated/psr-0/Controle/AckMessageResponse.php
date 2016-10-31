<?php

namespace Controle;

class AckMessageResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $ackmessageresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAckMessageResult($val)
	{
        $this->ackmessageresult = (int)$val;
	}
}
