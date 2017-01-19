<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetToken2
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Username;
    /**
     * @var string
     */
    public $Token;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setUsername($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Username');
        }
        $this->Username = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setToken($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Token');
        }
        $this->Token = $val;
    }
}
