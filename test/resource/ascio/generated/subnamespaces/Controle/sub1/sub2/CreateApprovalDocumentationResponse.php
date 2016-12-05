<?php

namespace Controle\sub1\sub2;

class CreateApprovalDocumentationResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateApprovalDocumentationResult;
	/**
	 * @var string
	 */
	public $documentationId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateApprovalDocumentationResult($val)
	{
        $this->CreateApprovalDocumentationResult = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDocumentationId($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for documentationId');
        }
        $this->documentationId = ()$val;
	}
}
