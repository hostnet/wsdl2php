<?php

namespace Controle\sub1\sub2;

/**
 * MyMessagesAlertArrayType
 * Contains a list of alert data.
 */
class MyMessagesAlertArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\MyMessagesAlertType | Contains the data for one alert. Returned for detail levels ReturnHeaders and ReturnMessages. Parent
	 * returned as an empty node if user has no alerts.
	 */
	public $Alert;
	// @codingStandardsIgnoreEnd

	/**
	 * @param MyMessagesAlertType $val
	 * @throws Exception
	 */
	public function setAlert($val)
	{
        $this->Alert = $val;
	}
}
