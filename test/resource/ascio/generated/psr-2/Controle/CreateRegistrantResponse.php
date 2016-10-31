<?php

namespace Controle;

class CreateRegistrantResponse
{
    /**
     * @var \Controle\Response
     */
    public $createregistrantresult;
    /**
     * @var \Controle\Registrant
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
