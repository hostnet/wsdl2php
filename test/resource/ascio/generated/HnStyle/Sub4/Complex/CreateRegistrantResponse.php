<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateRegistrantResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $CreateRegistrantResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Registrant
     */
    public $registrant;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateRegistrantResult($val)
    {
        $this->CreateRegistrantResult = ()$val;
    }

    /**
     * @param Registrant $val
     * @throws Exception
     */
    public function setRegistrant($val)
    {
        $this->registrant = ()$val;
    }
}
