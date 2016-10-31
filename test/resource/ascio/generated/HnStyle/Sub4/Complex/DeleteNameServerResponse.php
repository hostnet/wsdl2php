<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DeleteNameServerResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $deletenameserverresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setDeleteNameServerResult($val)
    {
        $this->deletenameserverresult = (int)$val;
    }
}
