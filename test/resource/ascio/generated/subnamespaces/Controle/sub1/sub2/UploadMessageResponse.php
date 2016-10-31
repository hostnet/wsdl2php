<?php

namespace Controle\sub1\sub2;

class UploadMessageResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
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
