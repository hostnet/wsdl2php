<?php

class CreateApprovalDocumentationResponse {
    /**
     * @var ControleResponse
     */
    public $CreateApprovalDocumentationResult;
    /**
     * @var string
     */
    public $documentationId;

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateApprovalDocumentationResult($val) {
		
		$this->CreateApprovalDocumentationResult = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentationId($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for documentationId');
		$this->documentationId = (int)$val;
	}
}


