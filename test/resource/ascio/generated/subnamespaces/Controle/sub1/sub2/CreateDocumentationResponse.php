<?php

namespace Controle\sub1\sub2;
class CreateDocumentationResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateDocumentationResult;
	/**
	 * @var int
	 */
	public $documentationId;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDocumentationResult($val) {
		
		$this->CreateDocumentationResult = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDocumentationId($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->documentationId = (int)$val;
	}

}

