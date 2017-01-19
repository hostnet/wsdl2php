<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetModelImportKenmerkenResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $getModelImportKenmerkenResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setGetModelImportKenmerkenResult($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for getModelImportKenmerkenResult');
        }
        $this->getModelImportKenmerkenResult = $val;
    }
}
