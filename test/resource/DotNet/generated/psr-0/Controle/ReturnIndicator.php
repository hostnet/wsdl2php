<?php

namespace Controle;
class ReturnIndicator {
	/**
	 * @var string
	 */
	public $ResponseText;
	/**
	 * @var int
	 */
	public $ResponseCode;
	/**
	 * @var string
	 */
	public $LastMailServer;
	/**
	 * @var boolean
	 */
	public $GoodEmail;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setResponseText($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for ResponseText');
		$this->ResponseText = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setResponseCode($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ResponseCode = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLastMailServer($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for LastMailServer');
		$this->LastMailServer = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setGoodEmail($val) {
		
		$this->GoodEmail = (int)$val;
	}

}

