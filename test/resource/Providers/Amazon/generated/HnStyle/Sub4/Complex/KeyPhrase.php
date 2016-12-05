<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class KeyPhrase
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $KeyPhrase;
    /**
     * @var string
     */
    public $Type;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeyPhrase($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for KeyPhrase');
        }
        $this->KeyPhrase = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Type');
        }
        $this->Type = (string)$val;
    }
}
