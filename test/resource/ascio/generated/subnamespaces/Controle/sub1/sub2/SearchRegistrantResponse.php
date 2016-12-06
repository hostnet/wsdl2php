<?php

namespace Controle\sub1\sub2;

class SearchRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $SearchRegistrantResult;
	/**
	 * @var array \Controle\sub1\sub2\Registrant
	 */
	public $registrants;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchRegistrantResult($val)
	{
        $this->SearchRegistrantResult = $val;
	}

	/**
	 * @param ArrayOfRegistrant $val
	 * @throws Exception
	 */
	public function setRegistrants($val)
	{
        $this->registrants = $val;
	}
}
