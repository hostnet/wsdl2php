<?php

namespace Controle;

/**
 * MyeBayFavoriteSearchType
 * Characteristics of a saved My eBay Favorite Search.
 */
class MyeBayFavoriteSearchType
{
	/**
	 * @var string | The name of the My eBay Favorite Search.
	 */
	public $searchname;
	/**
	 * @var string | The query string of a My eBay Favorite Search.
	 */
	public $searchquery;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSearchName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SearchName');
        }
        $this->searchname = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSearchQuery($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SearchQuery');
        }
        $this->searchquery = (int)$val;
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
