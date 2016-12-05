<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ProductInfoType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The average start price (minimum bid), if any, of completed auction items that were
     * listed            with Pre-filled Item Information from this product.
     */
    public $AverageStartPrice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The average sold price (winning bid, Buy It Now price, or fixed price), if any, of completed
     * items that were listed with Pre-filled Item Information from this product.
     */
    public $AverageSoldPrice;
    /**
     * @var string | Title of a Want It Now post.
     */
    public $Title;
    /**
     * @var string
     */
    public $productInfoID;
    // @codingStandardsIgnoreEnd

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAverageStartPrice($val)
    {
        $this->AverageStartPrice = ()$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAverageSoldPrice($val)
    {
        $this->AverageSoldPrice = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Title');
        }
        $this->Title = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductInfoID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for productInfoID');
        }
        $this->productInfoID = ()$val;
    }
}
