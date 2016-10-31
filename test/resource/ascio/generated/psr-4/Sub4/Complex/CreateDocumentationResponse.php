<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateDocumentationResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
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
