<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ProductInfoType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The average start price (minimum bid), if any, of completed auction items that were
     * listed            with Pre-filled Item Information from this product.
     */
    public $averagestartprice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The average sold price (winning bid, Buy It Now price, or fixed price), if any, of completed
     * items that were listed with Pre-filled Item Information from this product.
     */
    public $averagesoldprice;
    /**
     * @var string | Title of a Want It Now post.
     */
    public $title;
    /**
     * @var string
     */
    public $productinfoid;
    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAverageStartPrice($val)
    {
        $this->averagestartprice = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setAverageSoldPrice($val)
    {
        $this->averagesoldprice = (int)$val;
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
        $this->title = (int)$val;
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
        $this->productinfoid = (int)$val;
    }
}
