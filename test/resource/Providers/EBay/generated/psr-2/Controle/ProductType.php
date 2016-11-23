<?php

namespace Controle;

/**
 * ProductType
 * A prototype description of a well-known type of item, such as a popular book.      Applicable
 * when working with eBay's Pre-filled Item Information feature.
 */
class ProductType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\CharacteristicsSetType | Container for site-wide characteristics set information.
     */
    public $CharacteristicsSet;
    /**
     * @var \Controle\anyURI | Fully qualified URL for optional information about the product,            such as a
     * movie's description or film credits. This information            is hosted through the
     * eBay site and cannot be edited.            Applications can include this URL as a link
     * in product search results            so that end users can view additional descriptive
     * details about the product.
     */
    public $DetailsURL;
    /**
     * @var int | Total number of active listings on the specified eBay site            that were pre-filled
     * based on this product.
     */
    public $NumItems;
    /**
     * @var \Controle\AmountType | Specifies the lower limit of price range for the automatic search criteria.
     */
    public $MinPrice;
    /**
     * @var \Controle\AmountType | Specifies the upper limit of price range for the automatic search criteria.
     */
    public $MaxPrice;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var string
     */
    public $productID;
    /**
     * @var \Controle\anyURI
     */
    public $stockPhotoURL;
    /**
     * @var string
     */
    public $title;
    // @codingStandardsIgnoreEnd

    /**
     * @param CharacteristicsSetType $val
     * @throws Exception
     */
    public function setCharacteristicsSet($val)
    {
        $this->CharacteristicsSet = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setDetailsURL($val)
    {
        $this->DetailsURL = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setNumItems($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->NumItems = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setMinPrice($val)
    {
        $this->MinPrice = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setMaxPrice($val)
    {
        $this->MaxPrice = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for productID');
        }
        $this->productID = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setStockPhotoURL($val)
    {
        $this->stockPhotoURL = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for title');
        }
        $this->title = (int)$val;
    }
}
