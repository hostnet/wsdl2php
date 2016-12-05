<?php

namespace Controle\sub1\sub2;

class CreateRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateRegistrantResult;
	/**
	 * @var \Controle\sub1\sub2\Registrant
	 */
	public $registrant;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateRegistrantResult($val)
	{
        $this->CreateRegistrantResult = (Response)$val;
	}

	/**
	 * @param Registrant $val
	 * @throws Exception
	 */
	public function setRegistrant($val)
	{
        $this->registrant = (Registrant)$val;
	}
}
