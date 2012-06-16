<?php

namespace Controle;
class DeleteNameServerResponse {
	/**
	 * @var \Controle\Response
	 */
	public $DeleteNameServerResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteNameServerResult($val) {
		
		$this->DeleteNameServerResult = (int)$val;
	}

}

