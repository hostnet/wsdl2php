<?php

namespace Controle;
class ProductInfo {
    /**
     * @var string
     */
    public $TotalResults;
    /**
     * @var string
     */
    public $TotalPages;
    /**
     * @var string
     */
    public $ListName;
    /**
     * @var \Controle\DetailsArray
     */
    public $Details;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setTotalResults($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for TotalResults');
        $this->TotalResults = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTotalPages($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for TotalPages');
        $this->TotalPages = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setListName($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for ListName');
        $this->ListName = (int)$val;
    }

    /**
     * @param DetailsArray $val
     * @throws Exception
     */
    public function setDetails($val) {
        
        $this->Details = (int)$val;
    }

}

