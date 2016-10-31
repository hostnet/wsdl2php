<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DebtorContactPerson
{
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $phone;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmail($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Email');
        }
        $this->email = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPhone($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone');
        }
        $this->phone = (int)$val;
    }
}
