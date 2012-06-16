<?php

namespace Controle;
class DeleteContactResponse {
	/**
	 * @var \Controle\Response
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

