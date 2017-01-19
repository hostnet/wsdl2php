<?php

namespace Controle;

class AvailabilityCheckResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $AvailabilityCheckResult;
	/**
	 * @var array \Controle\AvailabilityCheckResult
	 */
	public $results;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setAvailabilityCheckResult($val)
	{
        $this->AvailabilityCheckResult = $val;
	}

	/**
	 * @param ArrayOfAvailabilityCheckResult $val
	 * @throws \Exception
	 */
	public function setResults($val)
	{
        $this->results = $val;
	}
}
