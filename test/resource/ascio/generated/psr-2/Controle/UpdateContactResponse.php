<?php

namespace Controle;

class UpdateContactResponse
{
    /**
     * @var \Controle\Response
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
