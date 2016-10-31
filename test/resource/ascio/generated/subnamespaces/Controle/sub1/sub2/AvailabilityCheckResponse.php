<?php

namespace Controle\sub1\sub2;

class AvailabilityCheckResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $availabilitycheckresult;
	/**
	 * @var array \Controle\sub1\sub2\AvailabilityCheckResult
	 */
	public $results;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setAvailabilityCheckResult($val)
	{
        $this->availabilitycheckresult = (int)$val;
	}

	/**
	 * @param ArrayOfAvailabilityCheckResult $val
	 * @throws Exception
	 */
	public function setResults($val)
	{
        $this->results = (int)$val;
	}
}
