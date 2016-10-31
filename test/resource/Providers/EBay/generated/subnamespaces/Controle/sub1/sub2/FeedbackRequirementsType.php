<?php

namespace Controle\sub1\sub2;
class FeedbackRequirementsType {
	/**
	 * @var boolean
	 */
	public $_;
	/**
	 * @var string
	 */
	public $minimum;
	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function set_($val) {
		
		$this->_ = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setMinimum($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for minimum');
		$this->minimum = (int)$val;
	}

}

