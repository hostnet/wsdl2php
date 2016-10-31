<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UploadMessageResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $uploadmessageresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUploadMessageResult($val)
    {
        $this->uploadmessageresult = (int)$val;
    }
}
