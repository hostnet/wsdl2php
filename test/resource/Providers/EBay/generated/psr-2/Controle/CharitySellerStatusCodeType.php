<?php

namespace Controle;
class CharitySellerStatusCodeType {
    const Suspended = 'Suspended';
    const Registered = 'Registered';
    const Closed = 'Closed';
    const CreditCardExpired = 'CreditCardExpired';
    const TokenExpired = 'TokenExpired';
    const CreditCardAboutToExpire = 'CreditCardAboutToExpire';
    const RegisteredNoCreditCard = 'RegisteredNoCreditCard';
    const NotRegisteredLostDirectSellerStatus = 'NotRegisteredLostDirectSellerStatus';
    const DirectDebitRejected = 'DirectDebitRejected';
    const CustomCode = 'CustomCode';
}

