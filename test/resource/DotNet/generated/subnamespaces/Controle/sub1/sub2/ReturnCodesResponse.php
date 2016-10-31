<?php

namespace Controle\sub1\sub2;

class ReturnCodesResponse
{
	/**
	 * @var array \Controle\sub1\sub2\AnyType
	 */
	public $returncodesresult;
	/**
	 * @param ArrayOfAnyType $val
	 * @throws Exception
	 */
	public function setReturnCodesResult($val)
	{
        $this->returncodesresult = (int)$val;
	}
}
