<?php

namespace Controle;

class UploadDocumentationResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $UploadDocumentationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadDocumentationResult($val)
	{
        $this->UploadDocumentationResult = (Response)$val;
	}
}
