<?php

namespace Controle\sub1\sub2;

class CreateApprovalDocumentationResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $createapprovaldocumentationresult;
	/**
	 * @var string
	 */
	public $documentationid;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateApprovalDocumentationResult($val)
	{
        $this->createapprovaldocumentationresult = (int)$val;
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
        $this->documentationid = (int)$val;
	}
}
