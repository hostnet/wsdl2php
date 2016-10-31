<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class BasicAmountType
{
    /**
     * @var string
     */
    public $_;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CurrencyCodeType
     */
    public $currencyid;
    /**
     * @param string $val
     * @throws Exception
     */
    public function set($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for _');
        }
        $this->_ = (int)$val;
    }

    /**
     * @param CurrencyCodeType $val
     * @throws Exception
     */
    public function setCurrencyID($val)
    {
        $this->currencyid = (int)$val;
    }
}
