<?php

namespace Controle\sub1\sub2;

/**
 * ReminderCustomizationType
 * Specifies how to return certain reminder types from the user's My eBay account.
 */
class ReminderCustomizationType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | The length of time the reminder has existed in the user's My eBay account, in days. Valid
	 * values are 1-60.
	 */
	public $DurationInDays;
	/**
	 * @var boolean | Whether to include information about this type of reminder in the response. When true,
	 * the container is returned with default input parameters.
	 */
	public $Include;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDurationInDays($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->DurationInDays = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setInclude($val)
	{
        $this->Include = (int)$val;
	}
}
