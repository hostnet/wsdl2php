<?php

namespace Controle;

/**
 * SellingManagerProductDetailsType
 * Returned if the user is a Selling Manager Pro user.
 */
class SellingManagerProductDetailsType
{
    /**
     * @var string | The exact product name of an item.
     */
    public $productname;
    /**
     * @var int | The numeric part number of an item.
     */
    public $partnumber;
    /**
     * @var string | The alphanumeric part number of an item.
     */
    public $productpartnumber;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductName');
        }
        $this->productname = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPartNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->partnumber = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductPartNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductPartNumber');
        }
        $this->productpartnumber = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
