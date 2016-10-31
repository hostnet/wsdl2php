<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DeleteRegistrantResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $deleteregistrantresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setDeleteRegistrantResult($val)
    {
        $this->deleteregistrantresult = (int)$val;
    }
}
