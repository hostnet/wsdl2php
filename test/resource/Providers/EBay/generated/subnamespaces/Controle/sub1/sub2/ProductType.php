<?php

namespace Controle\sub1\sub2;

/**
 * ProductType
 * A prototype description of a well-known type of item, such as a popular book.      Applicable
 * when working with eBay's Pre-filled Item Information feature.
 */
class ProductType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\CharacteristicsSetType | Container for site-wide characteristics set information.
	 */
	public $CharacteristicsSet;
	/**
	 * @var \Controle\sub1\sub2\anyURI | Fully qualified URL for optional information about the product,            such as a movie's
	 * description or film credits. This information            is hosted through the eBay site
	 * and cannot be edited.            Applications can include this URL as a link in product
	 * search results            so that end users can view additional descriptive details about
	 * the product.
	 */
	public $DetailsURL;
	/**
	 * @var int | Total number of active listings on the specified eBay site            that were pre-filled
	 * based on this product.
	 */
	public $NumItems;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies the lower limit of price range for the automatic search criteria.
	 */
	public $MinPrice;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies the upper limit of price range for the automatic search criteria.
	 */
	public $MaxPrice;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @var string
	 */
	public $productID;
	/**
	 * @var \Controle\sub1\sub2\anyURI
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
        $this->CharacteristicsSet = (CharacteristicsSetType)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setDetailsURL($val)
	{
        $this->DetailsURL = (anyURI)$val;
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
        $this->MinPrice = (AmountType)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setMaxPrice($val)
	{
        $this->MaxPrice = (AmountType)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
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
        $this->productID = (string)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setStockPhotoURL($val)
	{
        $this->stockPhotoURL = (anyURI)$val;
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
        $this->title = (string)$val;
	}
}
