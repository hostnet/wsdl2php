<?php

namespace Controle\Hostnet\Namesp;

/**
 * EmailVerNoTestEmailClient
 * These functions deal with Email Address Verification.  <b>CDYNE advertises a 100% SLA.
 * Try to find that kind of SLA from other web service vendors!</b>
 */
class EmailVerNoTestEmailClient extends \SoapClient
{
    const WSDL_FILE = "EmailVerifyTest.wsdl";

    private $classmap = array(
        'VerifyMXRecord' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\VerifyMxRecord',
        'VerifyMXRecordResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\VerifyMxRecordResponse',
        'AdvancedVerifyEmail' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AdvancedVerifyEmail',
        'AdvancedVerifyEmailResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AdvancedVerifyEmailResponse',
        'ReturnIndicator' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReturnIndicator',
        'VerifyEmail' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\VerifyEmail',
        'VerifyEmailResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\VerifyEmailResponse',
        'ReturnCodes' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReturnCodes',
        'ReturnCodesResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReturnCodesResponse',
    );

    public function __construct(
        $wsdl = null,
        $options = array()
    ) {
        foreach ($this->classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
    }

    /**
     * VerifyMXRecord
     * This function will verify the domains DNS (MX) mail entries.  If the function returns
     * 0 the persons email domain is invalid.  More than 0 will indicate there is mail servers
     * to accept an email.  This function is great for quick email domain verification.  It
     * is not as powerful as the other email routines.  Use a LicenseKey of 0 for testing.
     *  A -9999 as a result means that you have tested to many emails.  Please try again later
     * if you get this value.
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\VerifyMXRecord $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\VerifyMXRecordResponse
     */
    public function verifyMXRecord(
        \Controle\Hostnet\Namesp\Sub4\Complex\VerifyMXRecord $parameters
    ) {
        return $this->__soapCall(
            'VerifyMXRecord',
            array($parameters),
            array('uri'=>'http://ws.cdyne.com/')
        );
    }

    /**
     * AdvancedVerifyEmail
     * This function will verify an email address and also includes the ability to timeout
     * the verification process.  The Verification can be slowed down by the email server being
     * verified against. <b>Timeout is in seconds</b> Use a licensekey of 0 for testing <br>
     * NOTE: A timeout error (7) does not mean an email will not go through.  You should treat
     * this as a good email address.
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AdvancedVerifyEmail $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AdvancedVerifyEmailResponse
     */
    public function advancedVerifyEmail(
        \Controle\Hostnet\Namesp\Sub4\Complex\AdvancedVerifyEmail $parameters
    ) {
        return $this->__soapCall(
            'AdvancedVerifyEmail',
            array($parameters),
            array('uri'=>'http://ws.cdyne.com/')
        );
    }

    /**
     * VerifyEmail
     * This function allows you to verify an email address against the mail servers it belongs
     * to.  This function differs from the advanced function only by it automatically setting
     * a timeout of 5 seconds
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\VerifyEmail $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\VerifyEmailResponse
     */
    public function verifyEmail(
        \Controle\Hostnet\Namesp\Sub4\Complex\VerifyEmail $parameters
    ) {
        return $this->__soapCall(
            'VerifyEmail',
            array($parameters),
            array('uri'=>'http://ws.cdyne.com/')
        );
    }

    /**
     * ReturnCodes
     * This function will give you all the possible code returns
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ReturnCodes $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ReturnCodesResponse
     */
    public function returnCodes(
        \Controle\Hostnet\Namesp\Sub4\Complex\ReturnCodes $parameters
    ) {
        return $this->__soapCall(
            'ReturnCodes',
            array($parameters),
            array('uri'=>'http://ws.cdyne.com/')
        );
    }
}
