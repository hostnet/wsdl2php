<?php

namespace Controle\sub1\sub2;

/**
 * GetTaxTableResponseType
 * Response to GetTaxTableRequest.
 */
class GetTaxTableResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var dateTime | The last time (in GMT) that the tax table was updated. Only returned if the user previously
	 * created a tax table and if the site has jurisdictions. LastUpdateTime is useful for synchronization.
	 * If you cache the user's tax table, you can use GetTaxTable to check if it has changed and whether
	 * you need to update the cached tax table.
	 */
	public $LastUpdateTime;
	/**
	 * @var \Controle\sub1\sub2\TaxTableType | Tax details for a jurisdiction such as a state or province. Returns empty in GetItem if
	 * no tax table was used. Not applicable to Half.com.
	 */
	public $TaxTable;
	// @codingStandardsIgnoreEnd

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastUpdateTime($val)
	{
        $this->LastUpdateTime = (dateTime)$val;
	}

	/**
	 * @param TaxTableType $val
	 * @throws Exception
	 */
	public function setTaxTable($val)
	{
        $this->TaxTable = (TaxTableType)$val;
	}
}
