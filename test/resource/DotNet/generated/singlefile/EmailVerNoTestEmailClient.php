<?php

class VerifyMxRecord
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $email;
	/**
	 * @var string
	 */
	public $LicenseKey;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for email');
        }
        $this->email = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLicenseKey($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for LicenseKey');
        }
        $this->LicenseKey = $val;
	}
}

class VerifyMxRecordResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $VerifyMXRecordResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setVerifyMXRecordResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->VerifyMXRecordResult = $val;
	}
}

class AdvancedVerifyEmail
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $email;
	/**
	 * @var int
	 */
	public $timeout;
	/**
	 * @var string
	 */
	public $LicenseKey;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for email');
        }
        $this->email = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setTimeout($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->timeout = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLicenseKey($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for LicenseKey');
        }
        $this->LicenseKey = $val;
	}
}

class AdvancedVerifyEmailResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var ReturnIndicator
	 */
	public $AdvancedVerifyEmailResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ReturnIndicator $val
	 * @throws \Exception
	 */
	public function setAdvancedVerifyEmailResult($val)
	{
        $this->AdvancedVerifyEmailResult = $val;
	}
}

class ReturnIndicator
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $ResponseText;
	/**
	 * @var int
	 */
	public $ResponseCode;
	/**
	 * @var string
	 */
	public $LastMailServer;
	/**
	 * @var boolean
	 */
	public $GoodEmail;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setResponseText($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ResponseText');
        }
        $this->ResponseText = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setResponseCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ResponseCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLastMailServer($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for LastMailServer');
        }
        $this->LastMailServer = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setGoodEmail($val)
	{
        $this->GoodEmail = $val;
	}
}

class VerifyEmail
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $email;
	/**
	 * @var string
	 */
	public $LicenseKey;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for email');
        }
        $this->email = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLicenseKey($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for LicenseKey');
        }
        $this->LicenseKey = $val;
	}
}

class VerifyEmailResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var ReturnIndicator
	 */
	public $VerifyEmailResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ReturnIndicator $val
	 * @throws \Exception
	 */
	public function setVerifyEmailResult($val)
	{
        $this->VerifyEmailResult = $val;
	}
}

class ReturnCodes
{}

class ReturnCodesResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var AnyType[]
	 */
	public $ReturnCodesResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfAnyType $val
	 * @throws \Exception
	 */
	public function setReturnCodesResult($val)
	{
        $this->ReturnCodesResult = $val;
	}
}

/**
 * EmailVerNoTestEmailClient
 * These functions deal with Email Address Verification.  <b>CDYNE advertises a 100% SLA.
 * Try to find that kind of SLA from other web service vendors!</b>
 */
class EmailVerNoTestEmailClient extends SoapClient {

	const WSDL_FILE = "EmailVerifyTest.wsdl";
	private $classmap = array(
        'VerifyMXRecord' =>
            'VerifyMXRecord',
        'VerifyMXRecordResponse' =>
            'VerifyMXRecordResponse',
        'AdvancedVerifyEmail' =>
            'AdvancedVerifyEmail',
        'AdvancedVerifyEmailResponse' =>
            'AdvancedVerifyEmailResponse',
        'ReturnIndicator' =>
            'ReturnIndicator',
        'VerifyEmail' =>
            'VerifyEmail',
        'VerifyEmailResponse' =>
            'VerifyEmailResponse',
        'ReturnCodes' =>
            'ReturnCodes',
        'ReturnCodesResponse' =>
            'ReturnCodesResponse',
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
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
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
	 * @param VerifyMXRecord $parameters
	 * @return VerifyMXRecordResponse
	 */
	public function VerifyMXRecord(VerifyMXRecord $parameters) {
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
	 * @param AdvancedVerifyEmail $parameters
	 * @return AdvancedVerifyEmailResponse
	 */
	public function AdvancedVerifyEmail(AdvancedVerifyEmail $parameters) {
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
	 * @param VerifyEmail $parameters
	 * @return VerifyEmailResponse
	 */
	public function VerifyEmail(VerifyEmail $parameters) {
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
	 * @param ReturnCodes $parameters
	 * @return ReturnCodesResponse
	 */
	public function ReturnCodes(ReturnCodes $parameters) {
        return $this->__soapCall(
            'ReturnCodes',
            array($parameters),
            array('uri'=>'http://ws.cdyne.com/')
        );
	}
}
