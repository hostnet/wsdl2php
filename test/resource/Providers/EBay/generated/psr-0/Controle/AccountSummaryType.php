<?php

namespace Controle;

/**
 * AccountSummaryType
 * Summary data for the requesting user's seller account as a whole. This includes a balance
 * for the account, any past due amount and date, and defining data for additional accounts
 * (if the user has changed country of residency while having an active eBay account).
 */
class AccountSummaryType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\AccountStateCodeType | Indicates the current state of the account (such as active or inactive). Possible values
	 * are enumerated in the AccountStateCodeType code list.
	 */
	public $AccountState;
	/**
	 * @var \Controle\AmountType | Specifies payment made since the previous invoice, but is returned only if AccountHistorySelection
	 * is LastInvoice or Specified Invoice. With compatibility level 387, the value is positive
	 * for debits and negative for credits, reversing the sign of earlier versions.
	 */
	public $InvoicePayment;
	/**
	 * @var \Controle\AmountType | Specifies credits granted since the previous invoice, but is only returned AccountHistorySelection
	 * is LastInvoice or Specified Invoice. With compatibility level 387, the value is positive
	 * for debits and negative for credits, reversing the sign of earlier versions.
	 */
	public $InvoiceCredit;
	/**
	 * @var \Controle\AmountType | Specifies fees incurred since the last invoice, including tax if applicable. Returned only
	 * if AccountHistorySelection is LastInvoice or Specified Invoice. With compatibility level
	 * 387, the value is positive for debits and negative for credits, reversing the sign of earlier
	 * versions.
	 */
	public $InvoiceNewFee;
	/**
	 * @var \Controle\AdditionalAccountType | Contains the data for one additional account. An AccountSummaryType object
	 *    may return zero, one, or multiple additional accounts. See the schema
	 *  documentation for AdditionalAccountType for details on additional accounts.
	 *      With compatibility level 387, the value is positive for debits                and
	 * negative for credits, reversing the sign of earlier versions.
	 */
	public $AdditionalAccount;
	/**
	 * @var \Controle\AmountType | Amount past due, 0.00 if not past due. With compatibility level 387, the value is positive
	 * for debits and negative for credits, reversing the sign of earlier versions.
	 */
	public $AmountPastDue;
	/**
	 * @var string | First four digits of the bank account the user associated with the seller account (with
	 * remainder Xed-out). This may be an empty string depending upon the payment type the user
	 * selected for the account (e.g., if no debit-card specified).
	 */
	public $BankAccountInfo;
	/**
	 * @var dateTime | Indicates the date and time BankAccountInfo was last modified, in GMT. (Also see the Data
	 * Types appendix for more information on how GMT dates are handled in SOAP.) This may be
	 * an empty string depending upon the payment type the user selected for the account (e.g.,
	 * if no debit-card specified).
	 */
	public $BankModifyDate;
	/**
	 * @var int | Indicates the billing cycle in which eBay sends a billing invoice to the user. A value
	 * of 0 (zero) indicates an invoice sent on the last day of the month. A value of 15 indicates
	 * an invoice sent on the 15th day of the month.
	 */
	public $BillingCycleDate;
	/**
	 * @var dateTime | Expiration date for the credit card selected by the user as payment method for the account,
	 * in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled
	 * in SOAP.) Empty string if no credit card is on file or if the account is inactive - even
	 * if there is a credit card on file.
	 */
	public $CreditCardExpiration;
	/**
	 * @var string | Last four digits of the credit card the user selected as payment method for the account.
	 * Empty string if no credit is on file.
	 */
	public $CreditCardInfo;
	/**
	 * @var dateTime | Indicates the date and time credit card or credit card expiration date was last modified,
	 * in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled
	 * in SOAP.) This may be an empty string depending on the payment method the user selected
	 * for the account (e.g., Empty string if no credit card is on file.)
	 */
	public $CreditCardModifyDate;
	/**
	 * @var \Controle\AmountType | Current balance for the account. Can be 0.00, positive, or negative. With compatibility
	 * level 387, the value is positive for debits and negative for credits, reversing the sign
	 * of earlier versions.
	 */
	public $CurrentBalance;
	/**
	 * @var string | Email address for the user. You cannot retrieve an email address for any user with whom
	 * you do not have a transactional relationship, regardless of site. Email is only returned
	 * for applicable calls when you are retrieving your own user data OR when you and the other
	 * user are in a transactional relationship and the call is being executed within a certain
	 * amount of time after the transaction is created. Based on Trust and Safety policies, the
	 * time is unspecified and can vary by site. <br><br> Starting Jan 2007, when a bidder's user
	 * info is made anonymous, this tag will be returned only for that bidder, and the seller
	 * of an item that the user is bidding on.
	 */
	public $Email;
	/**
	 * @var \Controle\AmountType | Amount of last invoice. 0.00 if account not yet invoiced. With compatibility level 387,
	 * the value is positive for debits and negative for credits, reversing the sign of earlier
	 * versions.
	 */
	public $InvoiceBalance;
	/**
	 * @var dateTime | Date of last invoice sent by eBay to the user, in GMT. (Also see the Data Types appendix
	 * for more information on how GMT dates are handled in SOAP.) Empty string if this account
	 * has not been invoiced yet.
	 */
	public $InvoiceDate;
	/**
	 * @var \Controle\AmountType | Amount of last payment posted, 0.00 if no payments posted. With compatibility level 387,
	 * the value is positive for debits and negative for credits, reversing the sign of earlier
	 * versions.
	 */
	public $LastAmountPaid;
	/**
	 * @var dateTime | Date of last payment by the user to eBay, in GMT. (Also see the Data Types appendix for
	 * more information on how GMT dates are handled in SOAP.) Empty string if no payments have
	 * been posted.
	 */
	public $LastPaymentDate;
	/**
	 * @var boolean | Indicates whether the account has past due amounts outstanding. A value of true indicates
	 * that the account is past due. A value of false indicates the account is current.
	 */
	public $PastDue;
	/**
	 * @var \Controle\SellerPaymentMethodCodeType | 	 */
	public $PaymentMethod;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param AccountStateCodeType $val
	 * @throws \Exception
	 */
	public function setAccountState($val)
	{
        $this->AccountState = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setInvoicePayment($val)
	{
        $this->InvoicePayment = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setInvoiceCredit($val)
	{
        $this->InvoiceCredit = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setInvoiceNewFee($val)
	{
        $this->InvoiceNewFee = $val;
	}

	/**
	 * @param AdditionalAccountType $val
	 * @throws \Exception
	 */
	public function setAdditionalAccount($val)
	{
        $this->AdditionalAccount = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setAmountPastDue($val)
	{
        $this->AmountPastDue = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBankAccountInfo($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for BankAccountInfo');
        }
        $this->BankAccountInfo = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setBankModifyDate($val)
	{
        $this->BankModifyDate = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setBillingCycleDate($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->BillingCycleDate = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreditCardExpiration($val)
	{
        $this->CreditCardExpiration = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCreditCardInfo($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CreditCardInfo');
        }
        $this->CreditCardInfo = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreditCardModifyDate($val)
	{
        $this->CreditCardModifyDate = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setCurrentBalance($val)
	{
        $this->CurrentBalance = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Email');
        }
        $this->Email = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setInvoiceBalance($val)
	{
        $this->InvoiceBalance = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setInvoiceDate($val)
	{
        $this->InvoiceDate = $val;
	}

	/**
	 * @param AmountType $val
	 * @throws \Exception
	 */
	public function setLastAmountPaid($val)
	{
        $this->LastAmountPaid = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setLastPaymentDate($val)
	{
        $this->LastPaymentDate = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setPastDue($val)
	{
        $this->PastDue = $val;
	}

	/**
	 * @param SellerPaymentMethodCodeType $val
	 * @throws \Exception
	 */
	public function setPaymentMethod($val)
	{
        $this->PaymentMethod = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws \Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
