<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class XmLrequesterCredentialsType
{
    // @codingStandardsIgnoreStart
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
     * @var string | Authentication token representing the user who is making the request. The user's token
     * must be retrieved from eBay. To determine a user's authentication token, see the Authentication
     * and Authorization information in the eBay Web Services guide. For calls that list or
     * retrieve item or transaction data, the user usually needs to be the seller of the item
     * in question or, in some cases, the buyer. Similarly, calls that retrieve user or account
     * data may be restricted to the user whose data is being requested. The documentation
     * for each call includes information about such restrictions.
     */
    public $eBayAuthToken;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setUsername($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Username');
        }
        $this->Username = (string)$val;
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
        $this->Password = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEBayAuthToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for eBayAuthToken');
        }
        $this->eBayAuthToken = (string)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
