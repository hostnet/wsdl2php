<?php

namespace Controle;

class DeleteContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $DeleteContactResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteContactResult($val)
	{
        $this->DeleteContactResult = $val;
	}
}
