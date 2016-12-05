<?php

namespace Controle\sub1\sub2;

/**
 * StoreCustomPageArrayType
 * Set of Store custom pages.
 */
class StoreCustomPageArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\StoreCustomPageType | A Store custom page.
	 */
	public $CustomPage;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreCustomPageType $val
	 * @throws Exception
	 */
	public function setCustomPage($val)
	{
        $this->CustomPage = ()$val;
	}
}
