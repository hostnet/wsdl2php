<?php

namespace Controle;
class UserStatusCodeType {
	const Unknown = 'Unknown';
	const Suspended = 'Suspended';
	const Confirmed = 'Confirmed';
	const Unconfirmed = 'Unconfirmed';
	const Ghost = 'Ghost';
	const InMaintenance = 'InMaintenance';
	const Deleted = 'Deleted';
	const CreditCardVerify = 'CreditCardVerify';
	const AccountOnHold = 'AccountOnHold';
	const Merged = 'Merged';
	const RegistrationCodeMailOut = 'RegistrationCodeMailOut';
	const TermPending = 'TermPending';
	const UnconfirmedHalfOptIn = 'UnconfirmedHalfOptIn';
	const CreditCardVerifyHalfOptIn = 'CreditCardVerifyHalfOptIn';
	const UnconfirmedPassport = 'UnconfirmedPassport';
	const CreditCardVerifyPassport = 'CreditCardVerifyPassport';
	const UnconfirmedExpress = 'UnconfirmedExpress';
	const CustomCode = 'CustomCode';
}

