<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetRegistrantResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getregistrantresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Registrant
     */
    public $registrant;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetRegistrantResult($val)
    {
        $this->getregistrantresult = (int)$val;
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
