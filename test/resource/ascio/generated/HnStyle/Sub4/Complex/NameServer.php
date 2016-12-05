<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

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
        $this->CreDate = (dateTime)$val;
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
        $this->Handle = (string)$val;
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
        $this->HostName = (string)$val;
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
        $this->IpAddress = (string)$val;
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
        $this->Status = (string)$val;
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
        $this->IpV6Address = (string)$val;
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
        $this->Details = (string)$val;
    }
}
