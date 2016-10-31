<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UpdateContactResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $updatecontactresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUpdateContactResult($val)
    {
        $this->updatecontactresult = (int)$val;
    }
}
