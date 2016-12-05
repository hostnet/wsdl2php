<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class LogIn
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Session
     */
    public $session;
    // @codingStandardsIgnoreEnd

    /**
     * @param Session $val
     * @throws Exception
     */
    public function setSession($val)
    {
        $this->session = (Session)$val;
    }
}
