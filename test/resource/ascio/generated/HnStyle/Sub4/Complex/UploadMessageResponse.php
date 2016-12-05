<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UploadMessageResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $UploadMessageResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUploadMessageResult($val)
    {
        $this->UploadMessageResult = (Response)$val;
    }
}
