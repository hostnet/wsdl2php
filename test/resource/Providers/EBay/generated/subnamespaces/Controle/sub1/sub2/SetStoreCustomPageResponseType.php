<?php

namespace Controle\sub1\sub2;

/**
 * SetStoreCustomPageResponseType
 * Returned after calling SetStoreCustomPageRequest. This serves as      confirmation that
 * the custom page was successfully submitted.
 */
class SetStoreCustomPageResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
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
