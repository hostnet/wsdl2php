<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FetchTokenRequestType
 * Retrieves an authentication token for the user. This can only be used to get the token only
 * after the user gives consent for the token to be generated via the eBay signin page. After
 * retrieval, the token can be used to authenticate other calls. This call must be authenticated
 * using the username you created for use by your applications (not an authentication token).
 */
class FetchTokenRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | A value that is associated with the token retrieval request. The secret ID is a value
     * that is defined by the application, and is passed in redirect URL to the eBay signin
     * page. eBay recommends using a UUID for the secret ID value. You must also set Username
     * (part of the RequesterCredentials) for the particular user of interest.
     */
    public $SecretID;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setSecretID($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for SecretID');
        }
        $this->SecretID = $val;
    }
}
