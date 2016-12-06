<?php

namespace Controle;

class DeleteRegistrantResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $DeleteRegistrantResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setDeleteRegistrantResult($val)
	{
        $this->DeleteRegistrantResult = $val;
	}
}
