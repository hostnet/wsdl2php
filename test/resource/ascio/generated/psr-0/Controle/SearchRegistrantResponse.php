<?php

namespace Controle;
class SearchRegistrantResponse {
	/**
	 * @var \Controle\Response
	 */
	public $SearchRegistrantResult;
	/**
	 * @var array \Controle\Registrant
	 */
	public $registrants;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchRegistrantResult($val) {
		
		$this->SearchRegistrantResult = (int)$val;
	}

	/**
	 * @param ArrayOfRegistrant $val
	 * @throws Exception
	 */
	public function setRegistrants($val) {
		
		$this->registrants = (int)$val;
	}

}

