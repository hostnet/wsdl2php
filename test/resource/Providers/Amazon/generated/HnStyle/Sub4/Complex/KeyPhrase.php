<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class KeyPhrase
{
    /**
     * @var string
     */
    public $keyphrase;
    /**
     * @var string
     */
    public $type;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeyPhrase($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for KeyPhrase');
        }
        $this->keyphrase = (int)$val;
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
        $this->type = (int)$val;
    }
}
