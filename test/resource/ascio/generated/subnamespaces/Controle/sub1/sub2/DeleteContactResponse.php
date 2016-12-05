<?php

namespace Controle\sub1\sub2;

class DeleteContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $DeleteContactResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteContactResult($val)
	{
        $this->DeleteContactResult = (Response)$val;
	}
}
