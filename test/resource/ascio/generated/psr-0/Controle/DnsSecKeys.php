<?php

namespace Controle;

class DnsSecKeys
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\DnsSecKey
	 */
	public $DnsSecKey1;
	/**
	 * @var \Controle\DnsSecKey
	 */
	public $DnsSecKey2;
	/**
	 * @var \Controle\DnsSecKey
	 */
	public $DnsSecKey3;
	/**
	 * @var \Controle\DnsSecKey
	 */
	public $DnsSecKey4;
	/**
	 * @var \Controle\DnsSecKey
	 */
	public $DnsSecKey5;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey1($val)
	{
        $this->DnsSecKey1 = $val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey2($val)
	{
        $this->DnsSecKey2 = $val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey3($val)
	{
        $this->DnsSecKey3 = $val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey4($val)
	{
        $this->DnsSecKey4 = $val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey5($val)
	{
        $this->DnsSecKey5 = $val;
	}
}
