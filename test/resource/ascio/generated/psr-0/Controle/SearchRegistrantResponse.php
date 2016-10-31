<?php

namespace Controle;

class SearchRegistrantResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $searchregistrantresult;
	/**
	 * @var array \Controle\Registrant
	 */
	public $registrants;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchRegistrantResult($val)
	{
        $this->searchregistrantresult = (int)$val;
	}

	/**
	 * @param ArrayOfRegistrant $val
	 * @throws Exception
	 */
	public function setRegistrants($val)
	{
        $this->registrants = (int)$val;
	}
}
