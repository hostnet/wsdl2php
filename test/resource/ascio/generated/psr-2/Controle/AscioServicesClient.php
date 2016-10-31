<?php

namespace Controle;

/**
 * AscioServicesClient
 */
class AscioServicesClient extends \SoapClient {

    const WSDL_FILE = "AscioService.wsdl";
    private $classmap = array(
        'Session' => '\Controle\Session',
        'LogInResponse' => '\Controle\LogInResponse',
        'Response' => '\Controle\Response',
        'LogOutResponse' => '\Controle\LogOutResponse',
        'GetOrderResponse' => '\Controle\GetOrderResponse',
        'Order' => '\Controle\Order',
        'OrderType' => '\Controle\OrderType',
        'OrderStatusType' => '\Controle\OrderStatusType',
        'Domain' => '\Controle\Domain',
        'Registrant' => '\Controle\Registrant',
        'Contact' => '\Controle\Contact',
        'NameServers' => '\Controle\NameServers',
        'NameServer' => '\Controle\NameServer',
        'TradeMark' => '\Controle\TradeMark',
        'DnsSecKeys' => '\Controle\DnsSecKeys',
        'DnsSecKey' => '\Controle\DnsSecKey',
        'PrivacyProxy' => '\Controle\PrivacyProxy',
        'PrivacyProxyType' => '\Controle\PrivacyProxyType',
        'Extensions' => '\Controle\Extensions',
        'Extension' => '\Controle\Extension',
        'CreateOrderResponse' => '\Controle\CreateOrderResponse',
        'SearchOrderRequest' => '\Controle\SearchOrderRequest',
        'SearchOrderSortType' => '\Controle\SearchOrderSortType',
        'PagingInfo' => '\Controle\PagingInfo',
        'SearchOrderResponse' => '\Controle\SearchOrderResponse',
        'GetMessagesResponse' => '\Controle\GetMessagesResponse',
        'Message' => '\Controle\Message',
        'Attachment' => '\Controle\Attachment',
        'MessageType' => '\Controle\MessageType',
        'ValidateOrderResponse' => '\Controle\ValidateOrderResponse',
        'UploadDocumentationResponse' => '\Controle\UploadDocumentationResponse',
        'CreateSupportOrderResponse' => '\Controle\CreateSupportOrderResponse',
        'UploadMessageResponse' => '\Controle\UploadMessageResponse',
        'GetDomainResponse' => '\Controle\GetDomainResponse',
        'SearchCriteria' => '\Controle\SearchCriteria',
        'Clause' => '\Controle\Clause',
        'SearchOperatorType' => '\Controle\SearchOperatorType',
        'SearchModeType' => '\Controle\SearchModeType',
        'SearchDomainResponse' => '\Controle\SearchDomainResponse',
        'WhoisResponse' => '\Controle\WhoisResponse',
        'QualityType' => '\Controle\QualityType',
        'AvailabilityCheckResponse' => '\Controle\AvailabilityCheckResponse',
        'AvailabilityCheckResult' => '\Controle\AvailabilityCheckResult',
        'GetRegistrantResponse' => '\Controle\GetRegistrantResponse',
        'CreateRegistrantResponse' => '\Controle\CreateRegistrantResponse',
        'DeleteRegistrantResponse' => '\Controle\DeleteRegistrantResponse',
        'SearchRegistrantResponse' => '\Controle\SearchRegistrantResponse',
        'GetRegistrantVerificationInfoResponse' => '\Controle\GetRegistrantVerificationInfoResponse',
        'RegistrantVerificationInfo' => '\Controle\RegistrantVerificationInfo',
        'RegistrantVerificationStatus' => '\Controle\RegistrantVerificationStatus',
        'RegistrantVerificationDetails' => '\Controle\RegistrantVerificationDetails',
        'DoRegistrantVerificationResponse' => '\Controle\DoRegistrantVerificationResponse',
        'GetRegistrantVerificationStatusResponse' => '\Controle\GetRegistrantVerificationStatusResponse',
        'UploadRegistrantVerificationMessageResponse' => '\Controle\UploadRegistrantVerificationMessageResponse',
        'GetContactResponse' => '\Controle\GetContactResponse',
        'CreateContactResponse' => '\Controle\CreateContactResponse',
        'UpdateContactResponse' => '\Controle\UpdateContactResponse',
        'DeleteContactResponse' => '\Controle\DeleteContactResponse',
        'SearchContactResponse' => '\Controle\SearchContactResponse',
        'GetNameServerResponse' => '\Controle\GetNameServerResponse',
        'CreateNameServerResponse' => '\Controle\CreateNameServerResponse',
        'DeleteNameServerResponse' => '\Controle\DeleteNameServerResponse',
        'SearchNameServerResponse' => '\Controle\SearchNameServerResponse',
        'PollMessageResponse' => '\Controle\PollMessageResponse',
        'QueueItem' => '\Controle\QueueItem',
        'CallbackStatus' => '\Controle\CallbackStatus',
        'AckMessageResponse' => '\Controle\AckMessageResponse',
        'GetMessageQueueResponse' => '\Controle\GetMessageQueueResponse',
        'GetDnsSecKeyResponse' => '\Controle\GetDnsSecKeyResponse',
        'CreateDnsSecKeyResponse' => '\Controle\CreateDnsSecKeyResponse',
        'SearchDnsSecKeyResponse' => '\Controle\SearchDnsSecKeyResponse',
        'CreateDocumentationResponse' => '\Controle\CreateDocumentationResponse',
        'ApprovalDocumentationType' => '\Controle\ApprovalDocumentationType',
        'ApprovalDocumentation' => '\Controle\ApprovalDocumentation',
        'CreateApprovalDocumentationResponse' => '\Controle\CreateApprovalDocumentationResponse',
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
     * LogIn
     *
     * @param \Controle\LogIn $parameters
     * @return \Controle\LogInResponse
     */
    public function LogIn(\Controle\LogIn $parameters) {
        return $this->__soapCall(
            'LogIn',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * LogOut
     *
     * @param \Controle\LogOut $parameters
     * @return \Controle\LogOutResponse
     */
    public function LogOut(\Controle\LogOut $parameters) {
        return $this->__soapCall(
            'LogOut',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetOrder
     *
     * @param \Controle\GetOrder $parameters
     * @return \Controle\GetOrderResponse
     */
    public function GetOrder(\Controle\GetOrder $parameters) {
        return $this->__soapCall(
            'GetOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateOrder
     *
     * @param \Controle\CreateOrder $parameters
     * @return \Controle\CreateOrderResponse
     */
    public function CreateOrder(\Controle\CreateOrder $parameters) {
        return $this->__soapCall(
            'CreateOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchOrder
     *
     * @param \Controle\SearchOrder $parameters
     * @return \Controle\SearchOrderResponse
     */
    public function SearchOrder(\Controle\SearchOrder $parameters) {
        return $this->__soapCall(
            'SearchOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetMessages
     *
     * @param \Controle\GetMessages $parameters
     * @return \Controle\GetMessagesResponse
     */
    public function GetMessages(\Controle\GetMessages $parameters) {
        return $this->__soapCall(
            'GetMessages',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * ValidateOrder
     *
     * @param \Controle\ValidateOrder $parameters
     * @return \Controle\ValidateOrderResponse
     */
    public function ValidateOrder(\Controle\ValidateOrder $parameters) {
        return $this->__soapCall(
            'ValidateOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * UploadDocumentation
     *
     * @param \Controle\UploadDocumentation $parameters
     * @return \Controle\UploadDocumentationResponse
     */
    public function UploadDocumentation(\Controle\UploadDocumentation $parameters) {
        return $this->__soapCall(
            'UploadDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateSupportOrder
     *
     * @param \Controle\CreateSupportOrder $parameters
     * @return \Controle\CreateSupportOrderResponse
     */
    public function CreateSupportOrder(\Controle\CreateSupportOrder $parameters) {
        return $this->__soapCall(
            'CreateSupportOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * UploadMessage
     *
     * @param \Controle\UploadMessage $parameters
     * @return \Controle\UploadMessageResponse
     */
    public function UploadMessage(\Controle\UploadMessage $parameters) {
        return $this->__soapCall(
            'UploadMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetDomain
     *
     * @param \Controle\GetDomain $parameters
     * @return \Controle\GetDomainResponse
     */
    public function GetDomain(\Controle\GetDomain $parameters) {
        return $this->__soapCall(
            'GetDomain',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchDomain
     *
     * @param \Controle\SearchDomain $parameters
     * @return \Controle\SearchDomainResponse
     */
    public function SearchDomain(\Controle\SearchDomain $parameters) {
        return $this->__soapCall(
            'SearchDomain',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * Whois
     *
     * @param \Controle\Whois $parameters
     * @return \Controle\WhoisResponse
     */
    public function Whois(\Controle\Whois $parameters) {
        return $this->__soapCall(
            'Whois',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * AvailabilityCheck
     *
     * @param \Controle\AvailabilityCheck $parameters
     * @return \Controle\AvailabilityCheckResponse
     */
    public function AvailabilityCheck(\Controle\AvailabilityCheck $parameters) {
        return $this->__soapCall(
            'AvailabilityCheck',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetRegistrant
     *
     * @param \Controle\GetRegistrant $parameters
     * @return \Controle\GetRegistrantResponse
     */
    public function GetRegistrant(\Controle\GetRegistrant $parameters) {
        return $this->__soapCall(
            'GetRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateRegistrant
     *
     * @param \Controle\CreateRegistrant $parameters
     * @return \Controle\CreateRegistrantResponse
     */
    public function CreateRegistrant(\Controle\CreateRegistrant $parameters) {
        return $this->__soapCall(
            'CreateRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * DeleteRegistrant
     *
     * @param \Controle\DeleteRegistrant $parameters
     * @return \Controle\DeleteRegistrantResponse
     */
    public function DeleteRegistrant(\Controle\DeleteRegistrant $parameters) {
        return $this->__soapCall(
            'DeleteRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchRegistrant
     *
     * @param \Controle\SearchRegistrant $parameters
     * @return \Controle\SearchRegistrantResponse
     */
    public function SearchRegistrant(\Controle\SearchRegistrant $parameters) {
        return $this->__soapCall(
            'SearchRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetRegistrantVerificationInfo
     *
     * @param \Controle\GetRegistrantVerificationInfo $parameters
     * @return \Controle\GetRegistrantVerificationInfoResponse
     */
    public function GetRegistrantVerificationInfo(\Controle\GetRegistrantVerificationInfo $parameters) {
        return $this->__soapCall(
            'GetRegistrantVerificationInfo',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * DoRegistrantVerification
     *
     * @param \Controle\DoRegistrantVerification $parameters
     * @return \Controle\DoRegistrantVerificationResponse
     */
    public function DoRegistrantVerification(\Controle\DoRegistrantVerification $parameters) {
        return $this->__soapCall(
            'DoRegistrantVerification',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetRegistrantVerificationStatus
     *
     * @param \Controle\GetRegistrantVerificationStatus $parameters
     * @return \Controle\GetRegistrantVerificationStatusResponse
     */
    public function GetRegistrantVerificationStatus(\Controle\GetRegistrantVerificationStatus $parameters) {
        return $this->__soapCall(
            'GetRegistrantVerificationStatus',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * UploadRegistrantVerificationMessage
     *
     * @param \Controle\UploadRegistrantVerificationMessage $parameters
     * @return \Controle\UploadRegistrantVerificationMessageResponse
     */
    public function UploadRegistrantVerificationMessage(\Controle\UploadRegistrantVerificationMessage $parameters) {
        return $this->__soapCall(
            'UploadRegistrantVerificationMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetContact
     *
     * @param \Controle\GetContact $parameters
     * @return \Controle\GetContactResponse
     */
    public function GetContact(\Controle\GetContact $parameters) {
        return $this->__soapCall(
            'GetContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateContact
     *
     * @param \Controle\CreateContact $parameters
     * @return \Controle\CreateContactResponse
     */
    public function CreateContact(\Controle\CreateContact $parameters) {
        return $this->__soapCall(
            'CreateContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * UpdateContact
     *
     * @param \Controle\UpdateContact $parameters
     * @return \Controle\UpdateContactResponse
     */
    public function UpdateContact(\Controle\UpdateContact $parameters) {
        return $this->__soapCall(
            'UpdateContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * DeleteContact
     *
     * @param \Controle\DeleteContact $parameters
     * @return \Controle\DeleteContactResponse
     */
    public function DeleteContact(\Controle\DeleteContact $parameters) {
        return $this->__soapCall(
            'DeleteContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchContact
     *
     * @param \Controle\SearchContact $parameters
     * @return \Controle\SearchContactResponse
     */
    public function SearchContact(\Controle\SearchContact $parameters) {
        return $this->__soapCall(
            'SearchContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetNameServer
     *
     * @param \Controle\GetNameServer $parameters
     * @return \Controle\GetNameServerResponse
     */
    public function GetNameServer(\Controle\GetNameServer $parameters) {
        return $this->__soapCall(
            'GetNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateNameServer
     *
     * @param \Controle\CreateNameServer $parameters
     * @return \Controle\CreateNameServerResponse
     */
    public function CreateNameServer(\Controle\CreateNameServer $parameters) {
        return $this->__soapCall(
            'CreateNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * DeleteNameServer
     *
     * @param \Controle\DeleteNameServer $parameters
     * @return \Controle\DeleteNameServerResponse
     */
    public function DeleteNameServer(\Controle\DeleteNameServer $parameters) {
        return $this->__soapCall(
            'DeleteNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchNameServer
     *
     * @param \Controle\SearchNameServer $parameters
     * @return \Controle\SearchNameServerResponse
     */
    public function SearchNameServer(\Controle\SearchNameServer $parameters) {
        return $this->__soapCall(
            'SearchNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * PollMessage
     *
     * @param \Controle\PollMessage $parameters
     * @return \Controle\PollMessageResponse
     */
    public function PollMessage(\Controle\PollMessage $parameters) {
        return $this->__soapCall(
            'PollMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * AckMessage
     *
     * @param \Controle\AckMessage $parameters
     * @return \Controle\AckMessageResponse
     */
    public function AckMessage(\Controle\AckMessage $parameters) {
        return $this->__soapCall(
            'AckMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetMessageQueue
     *
     * @param \Controle\GetMessageQueue $parameters
     * @return \Controle\GetMessageQueueResponse
     */
    public function GetMessageQueue(\Controle\GetMessageQueue $parameters) {
        return $this->__soapCall(
            'GetMessageQueue',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetDnsSecKey
     *
     * @param \Controle\GetDnsSecKey $parameters
     * @return \Controle\GetDnsSecKeyResponse
     */
    public function GetDnsSecKey(\Controle\GetDnsSecKey $parameters) {
        return $this->__soapCall(
            'GetDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateDnsSecKey
     *
     * @param \Controle\CreateDnsSecKey $parameters
     * @return \Controle\CreateDnsSecKeyResponse
     */
    public function CreateDnsSecKey(\Controle\CreateDnsSecKey $parameters) {
        return $this->__soapCall(
            'CreateDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchDnsSecKey
     *
     * @param \Controle\SearchDnsSecKey $parameters
     * @return \Controle\SearchDnsSecKeyResponse
     */
    public function SearchDnsSecKey(\Controle\SearchDnsSecKey $parameters) {
        return $this->__soapCall(
            'SearchDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateDocumentation
     *
     * @param \Controle\CreateDocumentation $parameters
     * @return \Controle\CreateDocumentationResponse
     */
    public function CreateDocumentation(\Controle\CreateDocumentation $parameters) {
        return $this->__soapCall(
            'CreateDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateApprovalDocumentation
     *
     * @param \Controle\CreateApprovalDocumentation $parameters
     * @return \Controle\CreateApprovalDocumentationResponse
     */
    public function CreateApprovalDocumentation(\Controle\CreateApprovalDocumentation $parameters) {
        return $this->__soapCall(
            'CreateApprovalDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

}
