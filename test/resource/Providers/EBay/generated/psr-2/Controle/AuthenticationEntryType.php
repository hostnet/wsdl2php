<?php

namespace Controle;

/**
 * AuthenticationEntryType
 * A set of application-level authentication preferences and related data that you configure
 * to support the user authentication and authorization process.
 */
class AuthenticationEntryType
{
    /**
     * @var \Controle\anyURI | A URL that you set up in order to determine when a            user's authentication
     * and authorization process succeeded.            After a user signs into eBay and authorizes
     * your application            to execute secure calls on their behalf, eBay redirects
     * the            user's browser to this URL and, if TokenReturnMethod is set
     *   to Redirect, appends the user's authentication token plus            other data that
     * you specified to identify the user.
     */
    public $accepturl;
    /**
     * @var \Controle\anyURI | Your privacy policy URL, which is shown to end users on the eBay sign-in page.
     */
    public $privacypolicyurl;
    /**
     * @var \Controle\anyURI | A URL that you set up in order to determine when a            user's authentication
     * and authorization process did not succeed.            After a user signs into eBay but
     * chooses NOT to authorize your application            to execute secure calls on their
     * behalf, eBay redirects the            user's browser to this URL and appends data that
     * you specified            to identify the user (but does not return an authentication
     * token).
     */
    public $rejecturl;
    /**
     * @var string | A unique identifier associated with application and the combination            of URLs
     * within this authentication entry.            Unique across all applications that execute
     * eBay Web Services calls.            For convenience, you can call GetRuName to generate
     * a unique value.
     */
    public $runame;
    /**
     * @var \Controle\TokenReturnMethodCodeType | Specifies whether to return the token in the HTTP response stream            sent to
     * the accept URL, or to make it available for retrieval via FetchToken.
     */
    public $tokenreturnmethod;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setAcceptURL($val)
    {
        $this->accepturl = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setPrivacyPolicyURL($val)
    {
        $this->privacypolicyurl = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setRejectURL($val)
    {
        $this->rejecturl = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRuName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RuName');
        }
        $this->runame = (int)$val;
    }

    /**
     * @param TokenReturnMethodCodeType $val
     * @throws Exception
     */
    public function setTokenReturnMethod($val)
    {
        $this->tokenreturnmethod = (int)$val;
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
