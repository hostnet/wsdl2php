<?php

namespace Controle\sub1\sub2;
/**
 * AdditionalAccountType
 * Contains the data for one additional account. An additional account is            created
 * when the user has an active account and changes country of            registry (i.e., registers
 * with the eBay site for the new country). A            new account is created and the old
 * account becomes inactive as an            additional account. A user who never changes country
 * of residency while            having an account will never have any additional accounts.
 */
class AdditionalAccountType {
	/**
	 * @var \Controle\sub1\sub2\AmountType | Indicates the current balance of the additional account.
	 */
	public $Balance;
	/**
	 * @var \Controle\sub1\sub2\CurrencyCodeType | Limits the result set to just those items with a specified currency.
	 */
	public $Currency;
	/**
	 * @var string | Indicates the unique identifier for the additional account (the account ID).
	 */
	public $AccountCode;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

