<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Employee
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $number;
    /**
     * @var string
     */
    public $displayname;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->number = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDisplayName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DisplayName');
        }
        $this->displayname = (int)$val;
    }
}
