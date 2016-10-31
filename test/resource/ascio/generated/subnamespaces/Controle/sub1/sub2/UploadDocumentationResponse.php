<?php

namespace Controle\sub1\sub2;
class UploadDocumentationResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $UploadDocumentationResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadDocumentationResult($val) {
		
		$this->UploadDocumentationResult = (int)$val;
	}

}

