<?php

namespace Controle;

class DirectoryCategory
{
	/**
	 * @var string
	 */
	public $fullviewablename;
	/**
	 * @var string
	 */
	public $specialencoding;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFullViewableName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for fullViewableName');
        }
        $this->fullviewablename = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setSpecialEncoding($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for specialEncoding');
        }
        $this->specialencoding = (int)$val;
	}
}
