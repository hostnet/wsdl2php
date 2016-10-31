<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DeleteContactResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $deletecontactresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setDeleteContactResult($val)
    {
        $this->deletecontactresult = (int)$val;
    }
}
