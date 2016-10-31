<?php

namespace Controle;
class Extensions {
    /**
     * @var \Controle\Extension
     */
    public $Extension;
    /**
     * @param Extension $val
     * @throws Exception
     */
    public function setExtension($val) {
        
        $this->Extension = (int)$val;
    }

}

