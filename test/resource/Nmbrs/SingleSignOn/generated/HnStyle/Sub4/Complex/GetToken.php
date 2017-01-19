<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetToken
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Username;
    /**
     * @var string
     */
    public $Password;
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
    public function setPassword($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Password');
        }
        $this->Password = $val;
    }
}
