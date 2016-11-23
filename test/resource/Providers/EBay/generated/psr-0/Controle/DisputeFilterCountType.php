<?php

namespace Controle;

/**
 * DisputeFilterCountType
 * The number of disputes that match a given filter.
 */
class DisputeFilterCountType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\DisputeFilterTypeCodeType | A filter used to reduce the number of disputes returned. The filter uses criteria such
	 * as whether the dispute is awaiting a response, is closed, or is eligible for credit. Both
	 * Unpaid Item and Item Not Received disputes can be returned for the same filter value.
	 */
	public $DisputeFilterType;
	/**
	 * @var int | The total number of My eBay Second Chance Offers available.
	 */
	public $TotalAvailable;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DisputeFilterTypeCodeType $val
	 * @throws Exception
	 */
	public function setDisputeFilterType($val)
	{
        $this->DisputeFilterType = (int)$val;
	}

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
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
