<?php

namespace Controle\sub1\sub2;

class Extensions
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Extension
	 */
	public $Extension;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Extension $val
	 * @throws Exception
	 */
	public function setExtension($val)
	{
        $this->Extension = (int)$val;
	}
}
