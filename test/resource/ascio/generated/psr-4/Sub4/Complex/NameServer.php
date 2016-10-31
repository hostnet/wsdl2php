<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class NameServer
{
    /**
     * @var dateTime
     */
    public $credate;
    /**
     * @var string
     */
    public $handle;
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var string
     */
    public $ipaddress;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $ipv6address;
    /**
     * @var string
     */
    public $details;
    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setCreDate($val)
    {
        $this->credate = (int)$val;
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
        $this->handle = (int)$val;
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
        $this->hostname = (int)$val;
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
        $this->ipaddress = (int)$val;
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
        $this->status = (int)$val;
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
        $this->ipv6address = (int)$val;
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
        $this->details = (int)$val;
    }
}
