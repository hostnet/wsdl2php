<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DebtorContactPerson
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Email;
    /**
     * @var string
     */
    public $Name;
    /**
     * @var string
     */
    public $Phone;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setEmail($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Email');
        }
        $this->Email = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setPhone($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Phone');
        }
        $this->Phone = $val;
    }
}
