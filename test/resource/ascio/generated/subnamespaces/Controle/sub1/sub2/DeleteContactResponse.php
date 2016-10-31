<?php

namespace Controle\sub1\sub2;
class DeleteContactResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $DeleteContactResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteContactResult($val) {
		
		$this->DeleteContactResult = (int)$val;
	}

}

