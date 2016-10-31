<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UploadRegistrantVerificationMessageResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $uploadregistrantverificationmessageresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUploadRegistrantVerificationMessageResult($val)
    {
        $this->uploadregistrantverificationmessageresult = (int)$val;
    }
}
