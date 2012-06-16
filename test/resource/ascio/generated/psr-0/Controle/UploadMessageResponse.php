<?php

namespace Controle;
class UploadMessageResponse {
	/**
	 * @var \Controle\Response
	 */
	public $UploadMessageResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setUploadMessageResult($val) {
		
		$this->UploadMessageResult = (int)$val;
	}

}

