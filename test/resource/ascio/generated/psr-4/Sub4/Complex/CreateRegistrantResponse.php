<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateRegistrantResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $createregistrantresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Registrant
     */
    public $registrant;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateRegistrantResult($val)
    {
        $this->createregistrantresult = (int)$val;
    }

    /**
     * @param Registrant $val
     * @throws Exception
     */
    public function setRegistrant($val)
    {
        $this->registrant = (int)$val;
    }
}
