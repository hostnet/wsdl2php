<?php

namespace Controle;

class UploadMessageResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $uploadmessageresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadMessageResult($val)
	{
        $this->uploadmessageresult = (int)$val;
	}
}
