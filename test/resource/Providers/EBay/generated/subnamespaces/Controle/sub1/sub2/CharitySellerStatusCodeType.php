<?php

namespace Controle\sub1\sub2;

class CharitySellerStatusCodeType
{
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
}
