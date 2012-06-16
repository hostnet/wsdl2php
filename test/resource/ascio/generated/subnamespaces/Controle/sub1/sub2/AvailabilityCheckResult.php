<?php

namespace Controle\sub1\sub2;
class AvailabilityCheckResult {
	/**
	 * @var string
	 */
	public $DomainName;
	/**
	 * @var \Controle\sub1\sub2\QualityType
	 */
	public $Quality;
	/**
	 * @var int
	 */
	public $StatusCode;
	/**
	 * @var string
	 */
	public $StatusMessage;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDomainName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for DomainName');
		$this->DomainName = (int)$val;
	}

	/**
	 * @param QualityType $val
	 * @throws Exception
	 */
	public function setQuality($val) {
		
		$this->Quality = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setStatusCode($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->StatusCode = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatusMessage($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for StatusMessage');
		$this->StatusMessage = (int)$val;
	}

}

