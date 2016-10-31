<?php

namespace Controle;

class DeleteRegistrantResponse
{
    /**
     * @var \Controle\Response
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
