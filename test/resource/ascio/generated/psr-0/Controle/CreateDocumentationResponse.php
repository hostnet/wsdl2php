<?php

namespace Controle;

class CreateDocumentationResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $createdocumentationresult;
	/**
	 * @var int
	 */
	public $documentationid;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDocumentationResult($val)
	{
        $this->createdocumentationresult = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDocumentationId($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->documentationid = (int)$val;
	}
}
