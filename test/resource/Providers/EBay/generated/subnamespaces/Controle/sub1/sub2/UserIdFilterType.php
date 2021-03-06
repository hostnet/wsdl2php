<?php

namespace Controle\sub1\sub2;

/**
 * UserIdFilterType
 * One of the data filters used when searching for items using        GetSearchResults. Allows
 * filtering based on the eBay user IDs of        sellers. May be used to limit the list of
 * found items to just those        listed by one or more specified sellers. Or may be used
 * to limit the        list to those items NOT listed by specified excluded sellers.
 */
class UserIdFilterType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\UserIDType | Specifies a list of one or more eBay user IDs that represent sellers whose item
	 *     listings should NOT be returned in the search result set. That is, the sellers'
	 *         items are excluded from the search results.
	 */
	public $ExcludeSellers;
	/**
	 * @var \Controle\sub1\sub2\UserIDType | Specifies a list of one or more eBay user IDs that represent sellers whose item
	 *     listings are returned in the search result set (and only listings by the
	 *  specified sellers. That is, the sellers' items are included in the search            results.
	 */
	public $IncludeSellers;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param UserIDType $val
	 * @throws \Exception
	 */
	public function setExcludeSellers($val)
	{
        $this->ExcludeSellers = $val;
	}

	/**
	 * @param UserIDType $val
	 * @throws \Exception
	 */
	public function setIncludeSellers($val)
	{
        $this->IncludeSellers = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
