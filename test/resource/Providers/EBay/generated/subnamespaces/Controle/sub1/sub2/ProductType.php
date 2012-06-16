<?php

namespace Controle\sub1\sub2;
/**
 * ProductType
 * A prototype description of a well-known type of item, such as a popular book.      Applicable
 * when working with eBay's Pre-filled Item Information feature.
 */
class ProductType {
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
}

