<?php

namespace Controle;

class UserStatusCodeType
{
	// @codingStandardsIgnoreStart
	const UNKNOWN                   = 'Unknown';
	const SUSPENDED                 = 'Suspended';
	const CONFIRMED                 = 'Confirmed';
	const UNCONFIRMED               = 'Unconfirmed';
	const GHOST                     = 'Ghost';
	const INMAINTENANCE             = 'InMaintenance';
	const DELETED                   = 'Deleted';
	const CREDITCARDVERIFY          = 'CreditCardVerify';
	const ACCOUNTONHOLD             = 'AccountOnHold';
	const MERGED                    = 'Merged';
	const REGISTRATIONCODEMAILOUT   = 'RegistrationCodeMailOut';
	const TERMPENDING               = 'TermPending';
	const UNCONFIRMEDHALFOPTIN      = 'UnconfirmedHalfOptIn';
	const CREDITCARDVERIFYHALFOPTIN = 'CreditCardVerifyHalfOptIn';
	const UNCONFIRMEDPASSPORT       = 'UnconfirmedPassport';
	const CREDITCARDVERIFYPASSPORT  = 'CreditCardVerifyPassport';
	const UNCONFIRMEDEXPRESS        = 'UnconfirmedExpress';
	const CUSTOMCODE                = 'CustomCode';
	// @codingStandardsIgnoreEnd
}
