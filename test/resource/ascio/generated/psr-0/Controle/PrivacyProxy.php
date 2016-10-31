<?php

namespace Controle;

class PrivacyProxy
{
	/**
	 * @var \Controle\PrivacyProxyType
	 */
	public $type;
	/**
	 * @var boolean
	 */
	public $privacyadmin;
	/**
	 * @var boolean
	 */
	public $privacytech;
	/**
	 * @var boolean
	 */
	public $privacybilling;
	/**
	 * @var \Controle\Extensions
	 */
	public $extensions;
	/**
	 * @param PrivacyProxyType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyAdmin($val)
	{
        $this->privacyadmin = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyTech($val)
	{
        $this->privacytech = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPrivacyBilling($val)
	{
        $this->privacybilling = (int)$val;
	}

	/**
	 * @param Extensions $val
	 * @throws Exception
	 */
	public function setExtensions($val)
	{
        $this->extensions = (int)$val;
	}
}
