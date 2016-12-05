<?php

namespace Controle;

class GetRegistrantResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $GetRegistrantResult;
    /**
     * @var \Controle\Registrant
     */
    public $registrant;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetRegistrantResult($val)
    {
        $this->GetRegistrantResult = (Response)$val;
    }

    /**
     * @param Registrant $val
     * @throws Exception
     */
    public function setRegistrant($val)
    {
        $this->registrant = (Registrant)$val;
    }
}
