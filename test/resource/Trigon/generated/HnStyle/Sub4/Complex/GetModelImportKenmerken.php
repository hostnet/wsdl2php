<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetModelImportKenmerken
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $modelCode;
    /**
     * @var string
     */
    public $modelPassword;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setModelCode($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for modelCode');
        }
        $this->modelCode = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setModelPassword($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for modelPassword');
        }
        $this->modelPassword = $val;
    }
}
