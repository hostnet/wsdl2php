<?php

namespace Controle;

class UploadRegistrantVerificationMessageResponse
{
	/**
	 * @var \Controle\Response
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
