<?php

namespace Controle;
class Extension {
    /**
     * @var string
     */
    public $Key;
    /**
     * @var string
     */
    public $Value;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setKey($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for Key');
        $this->Key = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setValue($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for Value');
        $this->Value = (int)$val;
    }

}

