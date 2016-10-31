<?php

namespace Controle;

class UploadDocumentationResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $uploaddocumentationresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadDocumentationResult($val)
	{
        $this->uploaddocumentationresult = (int)$val;
	}
}
