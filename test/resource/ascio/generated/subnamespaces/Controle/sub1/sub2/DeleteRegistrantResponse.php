<?php

namespace Controle\sub1\sub2;

class DeleteRegistrantResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $deleteregistrantresult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteRegistrantResult($val)
	{
        $this->deleteregistrantresult = (int)$val;
	}
}
