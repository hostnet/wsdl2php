<?php

namespace Controle\sub1\sub2;

class SearchRegistrantResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $searchregistrantresult;
	/**
	 * @var array \Controle\sub1\sub2\Registrant
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
