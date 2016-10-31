<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class LogIn
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Session
     */
    public $session;
    /**
     * @param Session $val
     * @throws Exception
     */
    public function setSession($val)
    {
        $this->session = (int)$val;
    }
}
