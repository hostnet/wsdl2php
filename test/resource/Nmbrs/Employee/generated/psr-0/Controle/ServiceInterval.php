<?php

namespace Controle;

class ServiceInterval
{
	// @codingStandardsIgnoreStart
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var dateTime
	 */
	public $End;
	/**
	 * @var dateTime
	 */
	public $Ancienniteitsdatum;
	// @codingStandardsIgnoreEnd

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStart($val)
	{
        $this->Start = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setEnd($val)
	{
        $this->End = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setAncienniteitsdatum($val)
	{
        $this->Ancienniteitsdatum = $val;
	}
}
