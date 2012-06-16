<?php

namespace Controle\sub1\sub2;
class Extensions {
	/**
	 * @var \Controle\sub1\sub2\Extension
	 */
	public $Extension;
	/**
	 * @param Extension $val
	 * @throws Exception
	 */
	public function setExtension($val) {
		
		$this->Extension = (int)$val;
	}

}

