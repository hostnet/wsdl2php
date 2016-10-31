<?php

namespace Controle;

class DeleteContactResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $deletecontactresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteContactResult($val)
	{
        $this->deletecontactresult = (int)$val;
	}
}
