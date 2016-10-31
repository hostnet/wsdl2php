<?php

namespace Controle\sub1\sub2;

class UploadRegistrantVerificationMessageResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $uploadregistrantverificationmessageresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadRegistrantVerificationMessageResult($val)
	{
        $this->uploadregistrantverificationmessageresult = (int)$val;
	}
}
