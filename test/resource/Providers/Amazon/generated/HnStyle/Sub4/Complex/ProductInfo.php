<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ProductInfo
{
    /**
     * @var string
     */
    public $totalresults;
    /**
     * @var string
     */
    public $totalpages;
    /**
     * @var string
     */
    public $listname;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DetailsArray
     */
    public $details;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setTotalResults($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TotalResults');
        }
        $this->totalresults = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTotalPages($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TotalPages');
        }
        $this->totalpages = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setListName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListName');
        }
        $this->listname = (int)$val;
    }

    /**
     * @param DetailsArray $val
     * @throws Exception
     */
    public function setDetails($val)
    {
        $this->details = (int)$val;
    }
}
