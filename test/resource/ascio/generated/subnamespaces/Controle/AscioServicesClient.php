<?php

namespace Controle;

/**
 * AscioServicesClient
 */
class AscioServicesClient extends \SoapClient {

	const WSDL_FILE = "AscioService.wsdl";
	private $classmap = array(
        'Session' =>
            '\Controle\sub1\sub2\Session',
        'LogInResponse' =>
            '\Controle\sub1\sub2\LogInResponse',
        'Response' =>
            '\Controle\sub1\sub2\Response',
        'LogOutResponse' =>
            '\Controle\sub1\sub2\LogOutResponse',
        'GetOrderResponse' =>
            '\Controle\sub1\sub2\GetOrderResponse',
        'Order' =>
            '\Controle\sub1\sub2\Order',
        'OrderType' =>
            '\Controle\sub1\sub2\OrderType',
        'OrderStatusType' =>
            '\Controle\sub1\sub2\OrderStatusType',
        'Domain' =>
            '\Controle\sub1\sub2\Domain',
        'Registrant' =>
            '\Controle\sub1\sub2\Registrant',
        'Contact' =>
            '\Controle\sub1\sub2\Contact',
        'NameServers' =>
            '\Controle\sub1\sub2\NameServers',
        'NameServer' =>
            '\Controle\sub1\sub2\NameServer',
        'TradeMark' =>
            '\Controle\sub1\sub2\TradeMark',
        'DnsSecKeys' =>
            '\Controle\sub1\sub2\DnsSecKeys',
        'DnsSecKey' =>
            '\Controle\sub1\sub2\DnsSecKey',
        'PrivacyProxy' =>
            '\Controle\sub1\sub2\PrivacyProxy',
        'PrivacyProxyType' =>
            '\Controle\sub1\sub2\PrivacyProxyType',
        'Extensions' =>
            '\Controle\sub1\sub2\Extensions',
        'Extension' =>
            '\Controle\sub1\sub2\Extension',
        'CreateOrderResponse' =>
            '\Controle\sub1\sub2\CreateOrderResponse',
        'SearchOrderRequest' =>
            '\Controle\sub1\sub2\SearchOrderRequest',
        'SearchOrderSortType' =>
            '\Controle\sub1\sub2\SearchOrderSortType',
        'PagingInfo' =>
            '\Controle\sub1\sub2\PagingInfo',
        'SearchOrderResponse' =>
            '\Controle\sub1\sub2\SearchOrderResponse',
        'GetMessagesResponse' =>
            '\Controle\sub1\sub2\GetMessagesResponse',
        'Message' =>
            '\Controle\sub1\sub2\Message',
        'Attachment' =>
            '\Controle\sub1\sub2\Attachment',
        'MessageType' =>
            '\Controle\sub1\sub2\MessageType',
        'ValidateOrderResponse' =>
            '\Controle\sub1\sub2\ValidateOrderResponse',
        'UploadDocumentationResponse' =>
            '\Controle\sub1\sub2\UploadDocumentationResponse',
        'CreateSupportOrderResponse' =>
            '\Controle\sub1\sub2\CreateSupportOrderResponse',
        'UploadMessageResponse' =>
            '\Controle\sub1\sub2\UploadMessageResponse',
        'GetDomainResponse' =>
            '\Controle\sub1\sub2\GetDomainResponse',
        'SearchCriteria' =>
            '\Controle\sub1\sub2\SearchCriteria',
        'Clause' =>
            '\Controle\sub1\sub2\Clause',
        'SearchOperatorType' =>
            '\Controle\sub1\sub2\SearchOperatorType',
        'SearchModeType' =>
            '\Controle\sub1\sub2\SearchModeType',
        'SearchDomainResponse' =>
            '\Controle\sub1\sub2\SearchDomainResponse',
        'WhoisResponse' =>
            '\Controle\sub1\sub2\WhoisResponse',
        'QualityType' =>
            '\Controle\sub1\sub2\QualityType',
        'AvailabilityCheckResponse' =>
            '\Controle\sub1\sub2\AvailabilityCheckResponse',
        'AvailabilityCheckResult' =>
            '\Controle\sub1\sub2\AvailabilityCheckResult',
        'GetRegistrantResponse' =>
            '\Controle\sub1\sub2\GetRegistrantResponse',
        'CreateRegistrantResponse' =>
            '\Controle\sub1\sub2\CreateRegistrantResponse',
        'DeleteRegistrantResponse' =>
            '\Controle\sub1\sub2\DeleteRegistrantResponse',
        'SearchRegistrantResponse' =>
            '\Controle\sub1\sub2\SearchRegistrantResponse',
        'GetRegistrantVerificationInfoResponse' =>
            '\Controle\sub1\sub2\GetRegistrantVerificationInfoResponse',
        'RegistrantVerificationInfo' =>
            '\Controle\sub1\sub2\RegistrantVerificationInfo',
        'RegistrantVerificationStatus' =>
            '\Controle\sub1\sub2\RegistrantVerificationStatus',
        'RegistrantVerificationDetails' =>
            '\Controle\sub1\sub2\RegistrantVerificationDetails',
        'DoRegistrantVerificationResponse' =>
            '\Controle\sub1\sub2\DoRegistrantVerificationResponse',
        'GetRegistrantVerificationStatusResponse' =>
            '\Controle\sub1\sub2\GetRegistrantVerificationStatusResponse',
        'UploadRegistrantVerificationMessageResponse' =>
            '\Controle\sub1\sub2\UploadRegistrantVerificationMessageResponse',
        'GetContactResponse' =>
            '\Controle\sub1\sub2\GetContactResponse',
        'CreateContactResponse' =>
            '\Controle\sub1\sub2\CreateContactResponse',
        'UpdateContactResponse' =>
            '\Controle\sub1\sub2\UpdateContactResponse',
        'DeleteContactResponse' =>
            '\Controle\sub1\sub2\DeleteContactResponse',
        'SearchContactResponse' =>
            '\Controle\sub1\sub2\SearchContactResponse',
        'GetNameServerResponse' =>
            '\Controle\sub1\sub2\GetNameServerResponse',
        'CreateNameServerResponse' =>
            '\Controle\sub1\sub2\CreateNameServerResponse',
        'DeleteNameServerResponse' =>
            '\Controle\sub1\sub2\DeleteNameServerResponse',
        'SearchNameServerResponse' =>
            '\Controle\sub1\sub2\SearchNameServerResponse',
        'PollMessageResponse' =>
            '\Controle\sub1\sub2\PollMessageResponse',
        'QueueItem' =>
            '\Controle\sub1\sub2\QueueItem',
        'CallbackStatus' =>
            '\Controle\sub1\sub2\CallbackStatus',
        'AckMessageResponse' =>
            '\Controle\sub1\sub2\AckMessageResponse',
        'GetMessageQueueResponse' =>
            '\Controle\sub1\sub2\GetMessageQueueResponse',
        'GetDnsSecKeyResponse' =>
            '\Controle\sub1\sub2\GetDnsSecKeyResponse',
        'CreateDnsSecKeyResponse' =>
            '\Controle\sub1\sub2\CreateDnsSecKeyResponse',
        'SearchDnsSecKeyResponse' =>
            '\Controle\sub1\sub2\SearchDnsSecKeyResponse',
        'CreateDocumentationResponse' =>
            '\Controle\sub1\sub2\CreateDocumentationResponse',
        'ApprovalDocumentationType' =>
            '\Controle\sub1\sub2\ApprovalDocumentationType',
        'ApprovalDocumentation' =>
            '\Controle\sub1\sub2\ApprovalDocumentation',
        'CreateApprovalDocumentationResponse' =>
            '\Controle\sub1\sub2\CreateApprovalDocumentationResponse',
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
	 * LogIn
	 *
	 * @param \Controle\sub1\sub2\LogIn $parameters
	 * @return \Controle\sub1\sub2\LogInResponse
	 */
	public function LogIn(\Controle\sub1\sub2\LogIn $parameters) {
        return $this->__soapCall(
            'LogIn',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * LogOut
	 *
	 * @param \Controle\sub1\sub2\LogOut $parameters
	 * @return \Controle\sub1\sub2\LogOutResponse
	 */
	public function LogOut(\Controle\sub1\sub2\LogOut $parameters) {
        return $this->__soapCall(
            'LogOut',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetOrder
	 *
	 * @param \Controle\sub1\sub2\GetOrder $parameters
	 * @return \Controle\sub1\sub2\GetOrderResponse
	 */
	public function GetOrder(\Controle\sub1\sub2\GetOrder $parameters) {
        return $this->__soapCall(
            'GetOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * CreateOrder
	 *
	 * @param \Controle\sub1\sub2\CreateOrder $parameters
	 * @return \Controle\sub1\sub2\CreateOrderResponse
	 */
	public function CreateOrder(\Controle\sub1\sub2\CreateOrder $parameters) {
        return $this->__soapCall(
            'CreateOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * SearchOrder
	 *
	 * @param \Controle\sub1\sub2\SearchOrder $parameters
	 * @return \Controle\sub1\sub2\SearchOrderResponse
	 */
	public function SearchOrder(\Controle\sub1\sub2\SearchOrder $parameters) {
        return $this->__soapCall(
            'SearchOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetMessages
	 *
	 * @param \Controle\sub1\sub2\GetMessages $parameters
	 * @return \Controle\sub1\sub2\GetMessagesResponse
	 */
	public function GetMessages(\Controle\sub1\sub2\GetMessages $parameters) {
        return $this->__soapCall(
            'GetMessages',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * ValidateOrder
	 *
	 * @param \Controle\sub1\sub2\ValidateOrder $parameters
	 * @return \Controle\sub1\sub2\ValidateOrderResponse
	 */
	public function ValidateOrder(\Controle\sub1\sub2\ValidateOrder $parameters) {
        return $this->__soapCall(
            'ValidateOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * UploadDocumentation
	 *
	 * @param \Controle\sub1\sub2\UploadDocumentation $parameters
	 * @return \Controle\sub1\sub2\UploadDocumentationResponse
	 */
	public function UploadDocumentation(\Controle\sub1\sub2\UploadDocumentation $parameters) {
        return $this->__soapCall(
            'UploadDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * CreateSupportOrder
	 *
	 * @param \Controle\sub1\sub2\CreateSupportOrder $parameters
	 * @return \Controle\sub1\sub2\CreateSupportOrderResponse
	 */
	public function CreateSupportOrder(\Controle\sub1\sub2\CreateSupportOrder $parameters) {
        return $this->__soapCall(
            'CreateSupportOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * UploadMessage
	 *
	 * @param \Controle\sub1\sub2\UploadMessage $parameters
	 * @return \Controle\sub1\sub2\UploadMessageResponse
	 */
	public function UploadMessage(\Controle\sub1\sub2\UploadMessage $parameters) {
        return $this->__soapCall(
            'UploadMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetDomain
	 *
	 * @param \Controle\sub1\sub2\GetDomain $parameters
	 * @return \Controle\sub1\sub2\GetDomainResponse
	 */
	public function GetDomain(\Controle\sub1\sub2\GetDomain $parameters) {
        return $this->__soapCall(
            'GetDomain',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * SearchDomain
	 *
	 * @param \Controle\sub1\sub2\SearchDomain $parameters
	 * @return \Controle\sub1\sub2\SearchDomainResponse
	 */
	public function SearchDomain(\Controle\sub1\sub2\SearchDomain $parameters) {
        return $this->__soapCall(
            'SearchDomain',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * Whois
	 *
	 * @param \Controle\sub1\sub2\Whois $parameters
	 * @return \Controle\sub1\sub2\WhoisResponse
	 */
	public function Whois(\Controle\sub1\sub2\Whois $parameters) {
        return $this->__soapCall(
            'Whois',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * AvailabilityCheck
	 *
	 * @param \Controle\sub1\sub2\AvailabilityCheck $parameters
	 * @return \Controle\sub1\sub2\AvailabilityCheckResponse
	 */
	public function AvailabilityCheck(\Controle\sub1\sub2\AvailabilityCheck $parameters) {
        return $this->__soapCall(
            'AvailabilityCheck',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetRegistrant
	 *
	 * @param \Controle\sub1\sub2\GetRegistrant $parameters
	 * @return \Controle\sub1\sub2\GetRegistrantResponse
	 */
	public function GetRegistrant(\Controle\sub1\sub2\GetRegistrant $parameters) {
        return $this->__soapCall(
            'GetRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * CreateRegistrant
	 *
	 * @param \Controle\sub1\sub2\CreateRegistrant $parameters
	 * @return \Controle\sub1\sub2\CreateRegistrantResponse
	 */
	public function CreateRegistrant(\Controle\sub1\sub2\CreateRegistrant $parameters) {
        return $this->__soapCall(
            'CreateRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * DeleteRegistrant
	 *
	 * @param \Controle\sub1\sub2\DeleteRegistrant $parameters
	 * @return \Controle\sub1\sub2\DeleteRegistrantResponse
	 */
	public function DeleteRegistrant(\Controle\sub1\sub2\DeleteRegistrant $parameters) {
        return $this->__soapCall(
            'DeleteRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * SearchRegistrant
	 *
	 * @param \Controle\sub1\sub2\SearchRegistrant $parameters
	 * @return \Controle\sub1\sub2\SearchRegistrantResponse
	 */
	public function SearchRegistrant(\Controle\sub1\sub2\SearchRegistrant $parameters) {
        return $this->__soapCall(
            'SearchRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetRegistrantVerificationInfo
	 *
	 * @param \Controle\sub1\sub2\GetRegistrantVerificationInfo $parameters
	 * @return \Controle\sub1\sub2\GetRegistrantVerificationInfoResponse
	 */
	public function GetRegistrantVerificationInfo(\Controle\sub1\sub2\GetRegistrantVerificationInfo $parameters) {
        return $this->__soapCall(
            'GetRegistrantVerificationInfo',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * DoRegistrantVerification
	 *
	 * @param \Controle\sub1\sub2\DoRegistrantVerification $parameters
	 * @return \Controle\sub1\sub2\DoRegistrantVerificationResponse
	 */
	public function DoRegistrantVerification(\Controle\sub1\sub2\DoRegistrantVerification $parameters) {
        return $this->__soapCall(
            'DoRegistrantVerification',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetRegistrantVerificationStatus
	 *
	 * @param \Controle\sub1\sub2\GetRegistrantVerificationStatus $parameters
	 * @return \Controle\sub1\sub2\GetRegistrantVerificationStatusResponse
	 */
	public function GetRegistrantVerificationStatus(\Controle\sub1\sub2\GetRegistrantVerificationStatus $parameters) {
        return $this->__soapCall(
            'GetRegistrantVerificationStatus',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * UploadRegistrantVerificationMessage
	 *
	 * @param \Controle\sub1\sub2\UploadRegistrantVerificationMessage $parameters
	 * @return \Controle\sub1\sub2\UploadRegistrantVerificationMessageResponse
	 */
	public function UploadRegistrantVerificationMessage(\Controle\sub1\sub2\UploadRegistrantVerificationMessage $parameters) {
        return $this->__soapCall(
            'UploadRegistrantVerificationMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetContact
	 *
	 * @param \Controle\sub1\sub2\GetContact $parameters
	 * @return \Controle\sub1\sub2\GetContactResponse
	 */
	public function GetContact(\Controle\sub1\sub2\GetContact $parameters) {
        return $this->__soapCall(
            'GetContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * CreateContact
	 *
	 * @param \Controle\sub1\sub2\CreateContact $parameters
	 * @return \Controle\sub1\sub2\CreateContactResponse
	 */
	public function CreateContact(\Controle\sub1\sub2\CreateContact $parameters) {
        return $this->__soapCall(
            'CreateContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * UpdateContact
	 *
	 * @param \Controle\sub1\sub2\UpdateContact $parameters
	 * @return \Controle\sub1\sub2\UpdateContactResponse
	 */
	public function UpdateContact(\Controle\sub1\sub2\UpdateContact $parameters) {
        return $this->__soapCall(
            'UpdateContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * DeleteContact
	 *
	 * @param \Controle\sub1\sub2\DeleteContact $parameters
	 * @return \Controle\sub1\sub2\DeleteContactResponse
	 */
	public function DeleteContact(\Controle\sub1\sub2\DeleteContact $parameters) {
        return $this->__soapCall(
            'DeleteContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * SearchContact
	 *
	 * @param \Controle\sub1\sub2\SearchContact $parameters
	 * @return \Controle\sub1\sub2\SearchContactResponse
	 */
	public function SearchContact(\Controle\sub1\sub2\SearchContact $parameters) {
        return $this->__soapCall(
            'SearchContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetNameServer
	 *
	 * @param \Controle\sub1\sub2\GetNameServer $parameters
	 * @return \Controle\sub1\sub2\GetNameServerResponse
	 */
	public function GetNameServer(\Controle\sub1\sub2\GetNameServer $parameters) {
        return $this->__soapCall(
            'GetNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * CreateNameServer
	 *
	 * @param \Controle\sub1\sub2\CreateNameServer $parameters
	 * @return \Controle\sub1\sub2\CreateNameServerResponse
	 */
	public function CreateNameServer(\Controle\sub1\sub2\CreateNameServer $parameters) {
        return $this->__soapCall(
            'CreateNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * DeleteNameServer
	 *
	 * @param \Controle\sub1\sub2\DeleteNameServer $parameters
	 * @return \Controle\sub1\sub2\DeleteNameServerResponse
	 */
	public function DeleteNameServer(\Controle\sub1\sub2\DeleteNameServer $parameters) {
        return $this->__soapCall(
            'DeleteNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * SearchNameServer
	 *
	 * @param \Controle\sub1\sub2\SearchNameServer $parameters
	 * @return \Controle\sub1\sub2\SearchNameServerResponse
	 */
	public function SearchNameServer(\Controle\sub1\sub2\SearchNameServer $parameters) {
        return $this->__soapCall(
            'SearchNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * PollMessage
	 *
	 * @param \Controle\sub1\sub2\PollMessage $parameters
	 * @return \Controle\sub1\sub2\PollMessageResponse
	 */
	public function PollMessage(\Controle\sub1\sub2\PollMessage $parameters) {
        return $this->__soapCall(
            'PollMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * AckMessage
	 *
	 * @param \Controle\sub1\sub2\AckMessage $parameters
	 * @return \Controle\sub1\sub2\AckMessageResponse
	 */
	public function AckMessage(\Controle\sub1\sub2\AckMessage $parameters) {
        return $this->__soapCall(
            'AckMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetMessageQueue
	 *
	 * @param \Controle\sub1\sub2\GetMessageQueue $parameters
	 * @return \Controle\sub1\sub2\GetMessageQueueResponse
	 */
	public function GetMessageQueue(\Controle\sub1\sub2\GetMessageQueue $parameters) {
        return $this->__soapCall(
            'GetMessageQueue',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * GetDnsSecKey
	 *
	 * @param \Controle\sub1\sub2\GetDnsSecKey $parameters
	 * @return \Controle\sub1\sub2\GetDnsSecKeyResponse
	 */
	public function GetDnsSecKey(\Controle\sub1\sub2\GetDnsSecKey $parameters) {
        return $this->__soapCall(
            'GetDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * CreateDnsSecKey
	 *
	 * @param \Controle\sub1\sub2\CreateDnsSecKey $parameters
	 * @return \Controle\sub1\sub2\CreateDnsSecKeyResponse
	 */
	public function CreateDnsSecKey(\Controle\sub1\sub2\CreateDnsSecKey $parameters) {
        return $this->__soapCall(
            'CreateDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * SearchDnsSecKey
	 *
	 * @param \Controle\sub1\sub2\SearchDnsSecKey $parameters
	 * @return \Controle\sub1\sub2\SearchDnsSecKeyResponse
	 */
	public function SearchDnsSecKey(\Controle\sub1\sub2\SearchDnsSecKey $parameters) {
        return $this->__soapCall(
            'SearchDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * CreateDocumentation
	 *
	 * @param \Controle\sub1\sub2\CreateDocumentation $parameters
	 * @return \Controle\sub1\sub2\CreateDocumentationResponse
	 */
	public function CreateDocumentation(\Controle\sub1\sub2\CreateDocumentation $parameters) {
        return $this->__soapCall(
            'CreateDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}

	/**
	 * CreateApprovalDocumentation
	 *
	 * @param \Controle\sub1\sub2\CreateApprovalDocumentation $parameters
	 * @return \Controle\sub1\sub2\CreateApprovalDocumentationResponse
	 */
	public function CreateApprovalDocumentation(\Controle\sub1\sub2\CreateApprovalDocumentation $parameters) {
        return $this->__soapCall(
            'CreateApprovalDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
	}
}
