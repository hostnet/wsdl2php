<?php

namespace Controle\sub1\sub2;
class DeleteRegistrantResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $DeleteRegistrantResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteRegistrantResult($val) {
		
		$this->DeleteRegistrantResult = (int)$val;
	}

}

