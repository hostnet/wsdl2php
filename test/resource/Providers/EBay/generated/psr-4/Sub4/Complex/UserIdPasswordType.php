<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UserIdPasswordType
{
    /**
     * @var string | The application ID that is unique to each application you (or your company) has registered
     * with the eBay Developers Program. If you are executing a call in the Sandbox, this is
     * the "AppId" value that eBay issued to you when you received your Sandbox keys. If you
     * are executing a call in Production, this is the "AppId" value that eBay issued to you
     * when you received your Production keys.
     */
    public $appid;
    /**
     * @var string | The unique developer ID that the eBay Developers Program issued to you (or your company).
     * If you are executing a call in the Sandbox, this is the "DevId" value that eBay issued
     * to you when you received your Sandbox keys. Typically, you receive your Sandbox keys
     * when you register as a new developer. If you are executing a call in Production, this
     * is the "DevId" value that eBay issued to you when you received your Production keys.
     * Typically, you receive your Production keys when you certify an application.
     */
    public $devid;
    /**
     * @var string | Authentication certificate that authenticates the application when making API calls.
     * If you are executing a call in the Sandbox, this is the "CertId" value that eBay issued
     * to you when you received your Sandbox keys. If you are executing a call in Production,
     * this is the "CertId" value that eBay issued to you when you received your Production
     * keys. This is unrelated to auth tokens.
     */
    public $authcert;
    /**
     * @var string | eBay user ID (i.e., eBay.com Web site login name) for the user the application is retrieving
     * a token for. This is typically the application's end-user (not the developer).
     */
    public $username;
    /**
     * @var string | Password for the user specified in Username.
     */
    public $password;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setAppId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AppId');
        }
        $this->appid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDevId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DevId');
        }
        $this->devid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAuthCert($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AuthCert');
        }
        $this->authcert = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setUsername($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Username');
        }
        $this->username = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPassword($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Password');
        }
        $this->password = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}