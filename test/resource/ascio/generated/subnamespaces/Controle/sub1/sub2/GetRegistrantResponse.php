<?php

namespace Controle\sub1\sub2;

class GetRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetRegistrantResult;
	/**
	 * @var \Controle\sub1\sub2\Registrant
	 */
	public $registrant;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetRegistrantResult($val)
	{
        $this->GetRegistrantResult = (Response)$val;
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
