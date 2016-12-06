<?php

namespace Controle;

class CreateRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $CreateRegistrantResult;
	/**
	 * @var \Controle\Registrant
	 */
	public $registrant;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateRegistrantResult($val)
	{
        $this->CreateRegistrantResult = $val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = $val;
	}
}
