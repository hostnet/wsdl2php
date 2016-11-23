<?php

namespace Controle\Hostnet\Namesp;

/**
 * AscioServicesClient
 */
class AscioServicesClient extends \SoapClient
{
    const WSDL_FILE = "AscioService.wsdl";

    private $classmap = array(
        'Session' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Session',
        'LogInResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LogInResponse',
        'Response' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Response',
        'LogOutResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LogOutResponse',
        'GetOrderResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetOrderResponse',
        'Order' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Order',
        'OrderType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OrderType',
        'OrderStatusType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OrderStatusType',
        'Domain' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Domain',
        'Registrant' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Registrant',
        'Contact' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Contact',
        'NameServers' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NameServers',
        'NameServer' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NameServer',
        'TradeMark' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TradeMark',
        'DnsSecKeys' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKeys',
        'DnsSecKey' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey',
        'PrivacyProxy' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PrivacyProxy',
        'PrivacyProxyType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PrivacyProxyType',
        'Extensions' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Extensions',
        'Extension' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Extension',
        'CreateOrderResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateOrderResponse',
        'SearchOrderRequest' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchOrderRequest',
        'SearchOrderSortType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchOrderSortType',
        'PagingInfo' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PagingInfo',
        'SearchOrderResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchOrderResponse',
        'GetMessagesResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetMessagesResponse',
        'Message' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Message',
        'Attachment' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Attachment',
        'MessageType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MessageType',
        'ValidateOrderResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ValidateOrderResponse',
        'UploadDocumentationResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UploadDocumentationResponse',
        'CreateSupportOrderResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateSupportOrderResponse',
        'UploadMessageResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UploadMessageResponse',
        'GetDomainResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetDomainResponse',
        'SearchCriteria' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchCriteria',
        'Clause' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Clause',
        'SearchOperatorType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchOperatorType',
        'SearchModeType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchModeType',
        'SearchDomainResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchDomainResponse',
        'WhoisResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WhoisResponse',
        'QualityType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\QualityType',
        'AvailabilityCheckResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AvailabilityCheckResponse',
        'AvailabilityCheckResult' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AvailabilityCheckResult',
        'GetRegistrantResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantResponse',
        'CreateRegistrantResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateRegistrantResponse',
        'DeleteRegistrantResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DeleteRegistrantResponse',
        'SearchRegistrantResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchRegistrantResponse',
        'GetRegistrantVerificationInfoResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantVerificationInfoResponse',
        'RegistrantVerificationInfo' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationInfo',
        'RegistrantVerificationStatus' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationStatus',
        'RegistrantVerificationDetails' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationDetails',
        'DoRegistrantVerificationResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DoRegistrantVerificationResponse',
        'GetRegistrantVerificationStatusResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantVerificationStatusResponse',
        'UploadRegistrantVerificationMessageResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UploadRegistrantVerificationMessageResponse',
        'GetContactResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetContactResponse',
        'CreateContactResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateContactResponse',
        'UpdateContactResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UpdateContactResponse',
        'DeleteContactResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DeleteContactResponse',
        'SearchContactResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchContactResponse',
        'GetNameServerResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetNameServerResponse',
        'CreateNameServerResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateNameServerResponse',
        'DeleteNameServerResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DeleteNameServerResponse',
        'SearchNameServerResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchNameServerResponse',
        'PollMessageResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PollMessageResponse',
        'QueueItem' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\QueueItem',
        'CallbackStatus' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CallbackStatus',
        'AckMessageResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AckMessageResponse',
        'GetMessageQueueResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetMessageQueueResponse',
        'GetDnsSecKeyResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetDnsSecKeyResponse',
        'CreateDnsSecKeyResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateDnsSecKeyResponse',
        'SearchDnsSecKeyResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchDnsSecKeyResponse',
        'CreateDocumentationResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateDocumentationResponse',
        'ApprovalDocumentationType' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ApprovalDocumentationType',
        'ApprovalDocumentation' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ApprovalDocumentation',
        'CreateApprovalDocumentationResponse' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CreateApprovalDocumentationResponse',
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
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
    }

    /**
     * LogIn
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LogIn $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LogInResponse
     */
    public function logIn(
        \Controle\Hostnet\Namesp\Sub4\Complex\LogIn $parameters
    ) {
        return $this->__soapCall(
            'LogIn',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * LogOut
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LogOut $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LogOutResponse
     */
    public function logOut(
        \Controle\Hostnet\Namesp\Sub4\Complex\LogOut $parameters
    ) {
        return $this->__soapCall(
            'LogOut',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetOrder
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetOrder $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetOrderResponse
     */
    public function getOrder(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetOrder $parameters
    ) {
        return $this->__soapCall(
            'GetOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateOrder
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateOrder $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateOrderResponse
     */
    public function createOrder(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateOrder $parameters
    ) {
        return $this->__soapCall(
            'CreateOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchOrder
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SearchOrder $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SearchOrderResponse
     */
    public function searchOrder(
        \Controle\Hostnet\Namesp\Sub4\Complex\SearchOrder $parameters
    ) {
        return $this->__soapCall(
            'SearchOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetMessages
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetMessages $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetMessagesResponse
     */
    public function getMessages(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetMessages $parameters
    ) {
        return $this->__soapCall(
            'GetMessages',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * ValidateOrder
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ValidateOrder $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ValidateOrderResponse
     */
    public function validateOrder(
        \Controle\Hostnet\Namesp\Sub4\Complex\ValidateOrder $parameters
    ) {
        return $this->__soapCall(
            'ValidateOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * UploadDocumentation
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UploadDocumentation $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UploadDocumentationResponse
     */
    public function uploadDocumentation(
        \Controle\Hostnet\Namesp\Sub4\Complex\UploadDocumentation $parameters
    ) {
        return $this->__soapCall(
            'UploadDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateSupportOrder
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateSupportOrder $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateSupportOrderResponse
     */
    public function createSupportOrder(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateSupportOrder $parameters
    ) {
        return $this->__soapCall(
            'CreateSupportOrder',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * UploadMessage
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UploadMessage $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UploadMessageResponse
     */
    public function uploadMessage(
        \Controle\Hostnet\Namesp\Sub4\Complex\UploadMessage $parameters
    ) {
        return $this->__soapCall(
            'UploadMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetDomain
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetDomain $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetDomainResponse
     */
    public function getDomain(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetDomain $parameters
    ) {
        return $this->__soapCall(
            'GetDomain',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchDomain
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SearchDomain $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SearchDomainResponse
     */
    public function searchDomain(
        \Controle\Hostnet\Namesp\Sub4\Complex\SearchDomain $parameters
    ) {
        return $this->__soapCall(
            'SearchDomain',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * Whois
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\Whois $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\WhoisResponse
     */
    public function whois(
        \Controle\Hostnet\Namesp\Sub4\Complex\Whois $parameters
    ) {
        return $this->__soapCall(
            'Whois',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * AvailabilityCheck
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AvailabilityCheck $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AvailabilityCheckResponse
     */
    public function availabilityCheck(
        \Controle\Hostnet\Namesp\Sub4\Complex\AvailabilityCheck $parameters
    ) {
        return $this->__soapCall(
            'AvailabilityCheck',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetRegistrant
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrant $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantResponse
     */
    public function getRegistrant(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrant $parameters
    ) {
        return $this->__soapCall(
            'GetRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateRegistrant
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateRegistrant $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateRegistrantResponse
     */
    public function createRegistrant(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateRegistrant $parameters
    ) {
        return $this->__soapCall(
            'CreateRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * DeleteRegistrant
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DeleteRegistrant $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DeleteRegistrantResponse
     */
    public function deleteRegistrant(
        \Controle\Hostnet\Namesp\Sub4\Complex\DeleteRegistrant $parameters
    ) {
        return $this->__soapCall(
            'DeleteRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchRegistrant
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SearchRegistrant $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SearchRegistrantResponse
     */
    public function searchRegistrant(
        \Controle\Hostnet\Namesp\Sub4\Complex\SearchRegistrant $parameters
    ) {
        return $this->__soapCall(
            'SearchRegistrant',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetRegistrantVerificationInfo
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantVerificationInfo $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantVerificationInfoResponse
     */
    public function getRegistrantVerificationInfo(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantVerificationInfo $parameters
    ) {
        return $this->__soapCall(
            'GetRegistrantVerificationInfo',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * DoRegistrantVerification
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DoRegistrantVerification $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DoRegistrantVerificationResponse
     */
    public function doRegistrantVerification(
        \Controle\Hostnet\Namesp\Sub4\Complex\DoRegistrantVerification $parameters
    ) {
        return $this->__soapCall(
            'DoRegistrantVerification',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetRegistrantVerificationStatus
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantVerificationStatus $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantVerificationStatusResponse
     */
    public function getRegistrantVerificationStatus(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetRegistrantVerificationStatus $parameters
    ) {
        return $this->__soapCall(
            'GetRegistrantVerificationStatus',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * UploadRegistrantVerificationMessage
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UploadRegistrantVerificationMessage $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UploadRegistrantVerificationMessageResponse
     */
    public function uploadRegistrantVerificationMessage(
        \Controle\Hostnet\Namesp\Sub4\Complex\UploadRegistrantVerificationMessage $parameters
    ) {
        return $this->__soapCall(
            'UploadRegistrantVerificationMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetContact
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetContact $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetContactResponse
     */
    public function getContact(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetContact $parameters
    ) {
        return $this->__soapCall(
            'GetContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateContact
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateContact $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateContactResponse
     */
    public function createContact(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateContact $parameters
    ) {
        return $this->__soapCall(
            'CreateContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * UpdateContact
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UpdateContact $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\UpdateContactResponse
     */
    public function updateContact(
        \Controle\Hostnet\Namesp\Sub4\Complex\UpdateContact $parameters
    ) {
        return $this->__soapCall(
            'UpdateContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * DeleteContact
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DeleteContact $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DeleteContactResponse
     */
    public function deleteContact(
        \Controle\Hostnet\Namesp\Sub4\Complex\DeleteContact $parameters
    ) {
        return $this->__soapCall(
            'DeleteContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchContact
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SearchContact $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SearchContactResponse
     */
    public function searchContact(
        \Controle\Hostnet\Namesp\Sub4\Complex\SearchContact $parameters
    ) {
        return $this->__soapCall(
            'SearchContact',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetNameServer
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetNameServer $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetNameServerResponse
     */
    public function getNameServer(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetNameServer $parameters
    ) {
        return $this->__soapCall(
            'GetNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateNameServer
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateNameServer $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateNameServerResponse
     */
    public function createNameServer(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateNameServer $parameters
    ) {
        return $this->__soapCall(
            'CreateNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * DeleteNameServer
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DeleteNameServer $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DeleteNameServerResponse
     */
    public function deleteNameServer(
        \Controle\Hostnet\Namesp\Sub4\Complex\DeleteNameServer $parameters
    ) {
        return $this->__soapCall(
            'DeleteNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchNameServer
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SearchNameServer $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SearchNameServerResponse
     */
    public function searchNameServer(
        \Controle\Hostnet\Namesp\Sub4\Complex\SearchNameServer $parameters
    ) {
        return $this->__soapCall(
            'SearchNameServer',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * PollMessage
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\PollMessage $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\PollMessageResponse
     */
    public function pollMessage(
        \Controle\Hostnet\Namesp\Sub4\Complex\PollMessage $parameters
    ) {
        return $this->__soapCall(
            'PollMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * AckMessage
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AckMessage $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AckMessageResponse
     */
    public function ackMessage(
        \Controle\Hostnet\Namesp\Sub4\Complex\AckMessage $parameters
    ) {
        return $this->__soapCall(
            'AckMessage',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetMessageQueue
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetMessageQueue $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetMessageQueueResponse
     */
    public function getMessageQueue(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetMessageQueue $parameters
    ) {
        return $this->__soapCall(
            'GetMessageQueue',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * GetDnsSecKey
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetDnsSecKey $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetDnsSecKeyResponse
     */
    public function getDnsSecKey(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetDnsSecKey $parameters
    ) {
        return $this->__soapCall(
            'GetDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateDnsSecKey
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateDnsSecKey $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateDnsSecKeyResponse
     */
    public function createDnsSecKey(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateDnsSecKey $parameters
    ) {
        return $this->__soapCall(
            'CreateDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * SearchDnsSecKey
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SearchDnsSecKey $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SearchDnsSecKeyResponse
     */
    public function searchDnsSecKey(
        \Controle\Hostnet\Namesp\Sub4\Complex\SearchDnsSecKey $parameters
    ) {
        return $this->__soapCall(
            'SearchDnsSecKey',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateDocumentation
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateDocumentation $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateDocumentationResponse
     */
    public function createDocumentation(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateDocumentation $parameters
    ) {
        return $this->__soapCall(
            'CreateDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }

    /**
     * CreateApprovalDocumentation
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CreateApprovalDocumentation $parameters
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CreateApprovalDocumentationResponse
     */
    public function createApprovalDocumentation(
        \Controle\Hostnet\Namesp\Sub4\Complex\CreateApprovalDocumentation $parameters
    ) {
        return $this->__soapCall(
            'CreateApprovalDocumentation',
            array($parameters),
            array('uri'=>'http://www.ascio.com/2012/01/01/AscioService')
        );
    }
}
