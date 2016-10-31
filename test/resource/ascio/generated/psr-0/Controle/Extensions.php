<?php

namespace Controle;

class Extensions
{
	/**
	 * @var \Controle\Extension
	 */
	public $extension;
	/**
	 * @param Extension $val
	 * @throws Exception
	 */
	public function setExtension($val)
	{
        $this->extension = (int)$val;
	}
}
