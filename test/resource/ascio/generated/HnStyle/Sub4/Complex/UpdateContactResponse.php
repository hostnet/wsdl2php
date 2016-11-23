<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UpdateContactResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $UpdateContactResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUpdateContactResult($val)
    {
        $this->UpdateContactResult = (int)$val;
    }
}
