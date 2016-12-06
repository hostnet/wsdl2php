<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Clause
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Attribute;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchOperatorType
     */
    public $Operator;
    /**
     * @var string
     */
    public $Value;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAttribute($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Attribute');
        }
        $this->Attribute = $val;
    }

    /**
     * @param SearchOperatorType $val
     * @throws Exception
     */
    public function setOperator($val)
    {
        $this->Operator = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
        $this->Value = $val;
    }
}
