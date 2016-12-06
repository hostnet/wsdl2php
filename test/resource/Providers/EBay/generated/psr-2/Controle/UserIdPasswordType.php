<?php

namespace Controle;

class UserIdPasswordType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | The application ID that is unique to each application you (or your company) has registered
     * with the eBay Developers Program. If you are executing a call in the Sandbox, this is
     * the "AppId" value that eBay issued to you when you received your Sandbox keys. If you
     * are executing a call in Production, this is the "AppId" value that eBay issued to you
     * when you received your Production keys.
     */
    public $AppId;
    /**
     * @var string | The unique developer ID that the eBay Developers Program issued to you (or your company).
     * If you are executing a call in the Sandbox, this is the "DevId" value that eBay issued
     * to you when you received your Sandbox keys. Typically, you receive your Sandbox keys
     * when you register as a new developer. If you are executing a call in Production, this
     * is the "DevId" value that eBay issued to you when you received your Production keys.
     * Typically, you receive your Production keys when you certify an application.
     */
    public $DevId;
    /**
     * @var string | Authentication certificate that authenticates the application when making API calls.
     * If you are executing a call in the Sandbox, this is the "CertId" value that eBay issued
     * to you when you received your Sandbox keys. If you are executing a call in Production,
     * this is the "CertId" value that eBay issued to you when you received your Production
     * keys. This is unrelated to auth tokens.
     */
    public $AuthCert;
    /**
     * @var string | eBay user ID (i.e., eBay.com Web site login name) for the user the application is retrieving
     * a token for. This is typically the application's end-user (not the developer).
     */
    public $Username;
    /**
     * @var string | Password for the user specified in Username.
     */
    public $Password;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAppId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AppId');
        }
        $this->AppId = $val;
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
        $this->DevId = $val;
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
        $this->AuthCert = $val;
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
        $this->Username = $val;
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
        $this->Password = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
