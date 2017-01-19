<?php

namespace Controle;

class Department
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Id;
    /**
     * @var int
     */
    public $Code;
    /**
     * @var string
     */
    public $Description;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Id = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCode($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
    }
}
