<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetToken
{
    /**
     * @var string
     */
    public $username;
    /**
     * @var string
     */
    public $password;
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
    public function setPassword($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Password');
        }
        $this->password = (int)$val;
    }
}
