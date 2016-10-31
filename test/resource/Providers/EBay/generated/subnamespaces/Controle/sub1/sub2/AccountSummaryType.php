<?php

namespace Controle\sub1\sub2;

/**
 * AccountSummaryType
 * Summary data for the requesting user's seller account as a whole. This includes a balance
 * for the account, any past due amount and date, and defining data for additional accounts
 * (if the user has changed country of residency while having an active eBay account).
 */
class AccountSummaryType
{
	/**
	 * @var \Controle\sub1\sub2\AccountStateCodeType | Indicates the current state of the account (such as active or inactive). Possible values
	 * are enumerated in the AccountStateCodeType code list.
	 */
	public $accountstate;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies payment made since the previous invoice, but is returned only if AccountHistorySelection
	 * is LastInvoice or Specified Invoice. With compatibility level 387, the value is positive
	 * for debits and negative for credits, reversing the sign of earlier versions.
	 */
	public $invoicepayment;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies credits granted since the previous invoice, but is only returned AccountHistorySelection
	 * is LastInvoice or Specified Invoice. With compatibility level 387, the value is positive
	 * for debits and negative for credits, reversing the sign of earlier versions.
	 */
	public $invoicecredit;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Specifies fees incurred since the last invoice, including tax if applicable. Returned only
	 * if AccountHistorySelection is LastInvoice or Specified Invoice. With compatibility level
	 * 387, the value is positive for debits and negative for credits, reversing the sign of earlier
	 * versions.
	 */
	public $invoicenewfee;
	/**
	 * @var \Controle\sub1\sub2\AdditionalAccountType | Contains the data for one additional account. An AccountSummaryType object
	 *    may return zero, one, or multiple additional accounts. See the schema
	 *  documentation for AdditionalAccountType for details on additional accounts.
	 *      With compatibility level 387, the value is positive for debits                and
	 * negative for credits, reversing the sign of earlier versions.
	 */
	public $additionalaccount;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount past due, 0.00 if not past due. With compatibility level 387, the value is positive
	 * for debits and negative for credits, reversing the sign of earlier versions.
	 */
	public $amountpastdue;
	/**
	 * @var string | First four digits of the bank account the user associated with the seller account (with
	 * remainder Xed-out). This may be an empty string depending upon the payment type the user
	 * selected for the account (e.g., if no debit-card specified).
	 */
	public $bankaccountinfo;
	/**
	 * @var dateTime | Indicates the date and time BankAccountInfo was last modified, in GMT. (Also see the Data
	 * Types appendix for more information on how GMT dates are handled in SOAP.) This may be
	 * an empty string depending upon the payment type the user selected for the account (e.g.,
	 * if no debit-card specified).
	 */
	public $bankmodifydate;
	/**
	 * @var int | Indicates the billing cycle in which eBay sends a billing invoice to the user. A value
	 * of 0 (zero) indicates an invoice sent on the last day of the month. A value of 15 indicates
	 * an invoice sent on the 15th day of the month.
	 */
	public $billingcycledate;
	/**
	 * @var dateTime | Expiration date for the credit card selected by the user as payment method for the account,
	 * in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled
	 * in SOAP.) Empty string if no credit card is on file or if the account is inactive - even
	 * if there is a credit card on file.
	 */
	public $creditcardexpiration;
	/**
	 * @var string | Last four digits of the credit card the user selected as payment method for the account.
	 * Empty string if no credit is on file.
	 */
	public $creditcardinfo;
	/**
	 * @var dateTime | Indicates the date and time credit card or credit card expiration date was last modified,
	 * in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled
	 * in SOAP.) This may be an empty string depending on the payment method the user selected
	 * for the account (e.g., Empty string if no credit card is on file.)
	 */
	public $creditcardmodifydate;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Current balance for the account. Can be 0.00, positive, or negative. With compatibility
	 * level 387, the value is positive for debits and negative for credits, reversing the sign
	 * of earlier versions.
	 */
	public $currentbalance;
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
	public $email;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount of last invoice. 0.00 if account not yet invoiced. With compatibility level 387,
	 * the value is positive for debits and negative for credits, reversing the sign of earlier
	 * versions.
	 */
	public $invoicebalance;
	/**
	 * @var dateTime | Date of last invoice sent by eBay to the user, in GMT. (Also see the Data Types appendix
	 * for more information on how GMT dates are handled in SOAP.) Empty string if this account
	 * has not been invoiced yet.
	 */
	public $invoicedate;
	/**
	 * @var \Controle\sub1\sub2\AmountType | Amount of last payment posted, 0.00 if no payments posted. With compatibility level 387,
	 * the value is positive for debits and negative for credits, reversing the sign of earlier
	 * versions.
	 */
	public $lastamountpaid;
	/**
	 * @var dateTime | Date of last payment by the user to eBay, in GMT. (Also see the Data Types appendix for
	 * more information on how GMT dates are handled in SOAP.) Empty string if no payments have
	 * been posted.
	 */
	public $lastpaymentdate;
	/**
	 * @var boolean | Indicates whether the account has past due amounts outstanding. A value of true indicates
	 * that the account is past due. A value of false indicates the account is current.
	 */
	public $pastdue;
	/**
	 * @var \Controle\sub1\sub2\SellerPaymentMethodCodeType | 	 */
	public $paymentmethod;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param AccountStateCodeType $val
	 * @throws Exception
	 */
	public function setAccountState($val)
	{
        $this->accountstate = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setInvoicePayment($val)
	{
        $this->invoicepayment = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setInvoiceCredit($val)
	{
        $this->invoicecredit = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setInvoiceNewFee($val)
	{
        $this->invoicenewfee = (int)$val;
	}

	/**
	 * @param AdditionalAccountType $val
	 * @throws Exception
	 */
	public function setAdditionalAccount($val)
	{
        $this->additionalaccount = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setAmountPastDue($val)
	{
        $this->amountpastdue = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBankAccountInfo($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BankAccountInfo');
        }
        $this->bankaccountinfo = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setBankModifyDate($val)
	{
        $this->bankmodifydate = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setBillingCycleDate($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->billingcycledate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreditCardExpiration($val)
	{
        $this->creditcardexpiration = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCreditCardInfo($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CreditCardInfo');
        }
        $this->creditcardinfo = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setCreditCardModifyDate($val)
	{
        $this->creditcardmodifydate = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setCurrentBalance($val)
	{
        $this->currentbalance = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Email');
        }
        $this->email = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setInvoiceBalance($val)
	{
        $this->invoicebalance = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setInvoiceDate($val)
	{
        $this->invoicedate = (int)$val;
	}

	/**
	 * @param AmountType $val
	 * @throws Exception
	 */
	public function setLastAmountPaid($val)
	{
        $this->lastamountpaid = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setLastPaymentDate($val)
	{
        $this->lastpaymentdate = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setPastDue($val)
	{
        $this->pastdue = (int)$val;
	}

	/**
	 * @param SellerPaymentMethodCodeType $val
	 * @throws Exception
	 */
	public function setPaymentMethod($val)
	{
        $this->paymentmethod = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
