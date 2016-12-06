<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetRegistrantResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetRegistrantResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Registrant
     */
    public $registrant;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetRegistrantResult($val)
    {
        $this->GetRegistrantResult = $val;
    }

    /**
     * @param Registrant $val
     * @throws Exception
     */
    public function setRegistrant($val)
    {
        $this->registrant = $val;
    }
}
