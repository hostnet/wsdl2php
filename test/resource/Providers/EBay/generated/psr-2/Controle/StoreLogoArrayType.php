<?php

namespace Controle;
/**
 * StoreLogoArrayType
 * Set of Store logos.
 */
class StoreLogoArrayType {
    /**
     * @var \Controle\StoreLogoType | Store logo.
     */
    public $Logo;
    /**
     * @param StoreLogoType $val
     * @throws Exception
     */
    public function setLogo($val) {
        
        $this->Logo = (int)$val;
    }

}

