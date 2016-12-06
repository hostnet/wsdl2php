<?php

namespace Controle;

class UpdateContactResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $UpdateContactResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUpdateContactResult($val)
    {
        $this->UpdateContactResult = $val;
    }
}
