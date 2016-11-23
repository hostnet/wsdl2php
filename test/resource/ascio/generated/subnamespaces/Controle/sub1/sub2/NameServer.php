<?php

namespace Controle\sub1\sub2;

class NameServer
{
	// @codingStandardsIgnoreStart
	/**
	 * @var dateTime
	 */
	public $CreDate;
	/**
	 * @var string
	 */
	public $Handle;
	/**
	 * @var string
	 */
	public $HostName;
	/**
	 * @var string
	 */
	public $IpAddress;
	/**
	 * @var string
	 */
	public $Status;
	/**
	 * @var string
	 */
	public $IpV6Address;
	/**
	 * @var string
	 */
	public $Details;
	// @codingStandardsIgnoreEnd

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreDate($val)
	{
        $this->CreDate = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHandle($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Handle');
        }
        $this->Handle = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setHostName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HostName');
        }
        $this->HostName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setIpAddress($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for IpAddress');
        }
        $this->IpAddress = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setStatus($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setIpV6Address($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for IpV6Address');
        }
        $this->IpV6Address = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDetails($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Details');
        }
        $this->Details = (int)$val;
	}
}
