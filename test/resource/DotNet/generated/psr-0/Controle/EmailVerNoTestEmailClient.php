<?php

namespace Controle;

/**
 * EmailVerNoTestEmailClient
 * These functions deal with Email Address Verification.  <b>CDYNE advertises a 100% SLA.
 * Try to find that kind of SLA from other web service vendors!</b>
 */
class EmailVerNoTestEmailClient extends \SoapClient {

	const WSDL_FILE = "EmailVerifyTest.wsdl";
	private $classmap = array(
        'AdvancedVerifyEmailResponse\,' =>
            '\Controle\AdvancedVerifyEmailResponse',
        'ReturnIndicator\,' =>
            '\Controle\ReturnIndicator',
        'VerifyEmailResponse\,' =>
            '\Controle\VerifyEmailResponse',
        'ReturnCodesResponse\,' =>
            '\Controle\ReturnCodesResponse',
	);

	public function __construct($wsdl = null, $options = array()) {
        foreach($this->classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
            	$options['classmap'][$key] = $value;
            }
        }
        if(isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
	}

	/**
	 * VerifyMXRecord
	 * This function will verify the domains DNS (MX) mail entries.  If the function returns 0
	 * the persons email domain is invalid.  More than 0 will indicate there is mail servers to
	 * accept an email.  This function is great for quick email domain verification.  It is not
	 * as powerful as the other email routines.  Use a LicenseKey of 0 for testing.  A -9999 as
	 * a result means that you have tested to many emails.  Please try again later if you get
	 * this value.
	 *
	 * @param \Controle\VerifyMXRecord $parameters
	 * @return \Controle\VerifyMXRecordResponse
	 */
	public function VerifyMXRecord(\Controle\VerifyMXRecord $parameters) {
        return $this->__soapCall(
            'VerifyMXRecord',
            array($parameters),
            array('uri'=>'http://ws.cdyne.com/')
        );
	}

	/**
	 * AdvancedVerifyEmail
	 * This function will verify an email address and also includes the ability to timeout the
	 * verification process.  The Verification can be slowed down by the email server being verified
	 * against. <b>Timeout is in seconds</b> Use a licensekey of 0 for testing <br> NOTE: A timeout
	 * error (7) does not mean an email will not go through.  You should treat this as a good
	 * email address.
	 *
	 * @param \Controle\AdvancedVerifyEmail $parameters
	 * @return \Controle\AdvancedVerifyEmailResponse
	 */
	public function AdvancedVerifyEmail(\Controle\AdvancedVerifyEmail $parameters) {
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
	 * @param \Controle\VerifyEmail $parameters
	 * @return \Controle\VerifyEmailResponse
	 */
	public function VerifyEmail(\Controle\VerifyEmail $parameters) {
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
	 * @param \Controle\ReturnCodes $parameters
	 * @return \Controle\ReturnCodesResponse
	 */
	public function ReturnCodes(\Controle\ReturnCodes $parameters) {
        return $this->__soapCall(
            'ReturnCodes',
            array($parameters),
            array('uri'=>'http://ws.cdyne.com/')
        );
	}
}
