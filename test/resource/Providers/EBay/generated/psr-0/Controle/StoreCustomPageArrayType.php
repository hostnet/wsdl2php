<?php

namespace Controle;

/**
 * StoreCustomPageArrayType
 * Set of Store custom pages.
 */
class StoreCustomPageArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\StoreCustomPageType | A Store custom page.
	 */
	public $CustomPage;
	// @codingStandardsIgnoreEnd

	/**
	 * @param StoreCustomPageType $val
	 * @throws Exception
	 */
	public function setCustomPage($val)
	{
        $this->CustomPage = $val;
	}
}
