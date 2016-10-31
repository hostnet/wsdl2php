<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UploadDocumentationResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $uploaddocumentationresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUploadDocumentationResult($val)
    {
        $this->uploaddocumentationresult = (int)$val;
    }
}
