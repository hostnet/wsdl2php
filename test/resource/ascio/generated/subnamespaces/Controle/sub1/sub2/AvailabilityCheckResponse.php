<?php

namespace Controle\sub1\sub2;

class AvailabilityCheckResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $AvailabilityCheckResult;
	/**
	 * @var array \Controle\sub1\sub2\AvailabilityCheckResult
	 */
	public $results;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAvailabilityCheckResult($val)
	{
        $this->AvailabilityCheckResult = ()$val;
	}

	/**
	 * @param ArrayOfAvailabilityCheckResult $val
	 * @throws Exception
	 */
	public function setResults($val)
	{
        $this->results = ()$val;
	}
}
