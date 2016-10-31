<?php

namespace Controle;

class DeleteNameServerResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $deletenameserverresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteNameServerResult($val)
	{
        $this->deletenameserverresult = (int)$val;
	}
}
