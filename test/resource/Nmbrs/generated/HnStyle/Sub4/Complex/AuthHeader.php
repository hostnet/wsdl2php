<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AuthHeader
{
    /**
     * @var string
     */
    public $username;
    /**
     * @var string
     */
    public $token;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setUsername($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Username');
        }
        $this->username = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Token');
        }
        $this->token = (int)$val;
    }
}
