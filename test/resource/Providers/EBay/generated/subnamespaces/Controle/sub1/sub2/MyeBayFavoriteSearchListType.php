<?php

namespace Controle\sub1\sub2;

/**
 * MyeBayFavoriteSearchListType
 * A list of favorite searches a user has saved on the My eBay page.
 */
class MyeBayFavoriteSearchListType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | The total number of My eBay Second Chance Offers available.
	 */
	public $TotalAvailable;
	/**
	 * @var \Controle\sub1\sub2\MyeBayFavoriteSearchType | A favorite search the user has saved, with a name and a search query.
	 */
	public $FavoriteSearch;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setTotalAvailable($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalAvailable = (int)$val;
	}

	/**
	 * @param MyeBayFavoriteSearchType $val
	 * @throws Exception
	 */
	public function setFavoriteSearch($val)
	{
        $this->FavoriteSearch = (int)$val;
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
