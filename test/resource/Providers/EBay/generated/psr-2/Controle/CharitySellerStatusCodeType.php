<?php

namespace Controle;

class CharitySellerStatusCodeType
{
    // @codingStandardsIgnoreStart
    const SUSPENDED                           = 'Suspended';
    const REGISTERED                          = 'Registered';
    const CLOSED                              = 'Closed';
    const CREDITCARDEXPIRED                   = 'CreditCardExpired';
    const TOKENEXPIRED                        = 'TokenExpired';
    const CREDITCARDABOUTTOEXPIRE             = 'CreditCardAboutToExpire';
    const REGISTEREDNOCREDITCARD              = 'RegisteredNoCreditCard';
    const NOTREGISTEREDLOSTDIRECTSELLERSTATUS = 'NotRegisteredLostDirectSellerStatus';
    const DIRECTDEBITREJECTED                 = 'DirectDebitRejected';
    const CUSTOMCODE                          = 'CustomCode';
    // @codingStandardsIgnoreEnd
}
