<?php

namespace Controle\sub1\sub2;

class UploadDocumentationResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $UploadDocumentationResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setUploadDocumentationResult($val)
	{
        $this->UploadDocumentationResult = $val;
	}
}
