<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateApprovalDocumentationResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $CreateApprovalDocumentationResult;
    /**
     * @var string
     */
    public $documentationId;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setCreateApprovalDocumentationResult($val)
    {
        $this->CreateApprovalDocumentationResult = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDocumentationId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for documentationId');
        }
        $this->documentationId = $val;
    }
}
