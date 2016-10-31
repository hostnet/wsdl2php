<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AccountEntryType
 * Contains the data for a single account detail entry. Each detail entry is a transaction
 * posted to the account and may be: a credit, a debit, or an administrative action (such as
 * an update putting a credit card on file for the account). You can uniquely identify the
 * entries that the GetAccount call returns within the AccountEntries tag. Specifically, the
 * following fields, returned within the AccountEntries tag, can be used in combination as
 * a unique key: AccountEntry.Date, AccountEntry.AccountDetailsEntryType, AccountEntry.ItemID,
 * and AccountEntry.RefNumber.
 */
class AccountEntryType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AccountDetailEntryCodeType | Indicates the type of transaction or reason for the transaction. For example, a value
     * of FeeGallery indicates a debit for listing an item in the Gallery. Possible values
     * are enumerated in the AccountDetailEntryCodeType code list.
     */
    public $accountdetailsentrytype;
    /**
     * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
     */
    public $description;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Indicates the current balance of the additional account.
     */
    public $balance;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Previous behavior: Credit amount for the entry. Returns 0.00 if the entry is a debit.
     */
    public $credit;
    /**
     * @var dateTime | The date the picture was uploaded to the Picture Manager account.
     */
    public $date;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Previous behavior: Debit amount for the entry. Returns 0.00 if the entry is a credit.
     */
    public $debit;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Gross fees that are assessed by eBay (net fees plus VAT, if any). Returned even if VAT
     * does not apply. With compatibility level 387, the value is positive for debits and negative
     * for credits, reversing the sign of earlier versions.
     */
    public $grossdetailamount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $itemid;
    /**
     * @var string | Memo line for the account entry, can be an empty string.
     */
    public $memo;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Net fees that are assessed by eBay, excluding additional surchargesand VAT (if any).
     * Returned even if VAT does not apply. With compatibility level 387 and higher, the value
     * is positive for debits (user pays eBay) and negative for credits (eBay pays user), reversing
     * the sign of earlier versions.
     */
    public $netdetailamount;
    /**
     * @var string | eBay reference number for the account entry. May return no value for some account transactions,
     * such as an administrative action like placing the user's credit card on file.  You can
     * uniquely identify the entries that the GetAccount call returns within the AccountEntries
     * tag. Specifically, the following fields, returned within the AccountEntries tag, can
     * be used in combination as a unique key: AccountEntry.Date, AccountEntry.AccountDetailsEntryType, AccountEntry.ItemID,
     * and AccountEntry.RefNumber.
     */
    public $refnumber;
    /**
     * @var decimal | VAT rate for the item, if any. When the VATPercent is specified, the item's VAT information
     * appears on the item's listing page. In addition, the seller can choose to print an invoice
     * that includes the item's net price, VAT percent, VAT amount, and total price. Since
     * VAT rates vary depending on the item and on the user's country of residence, a seller
     * is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify
     * a VATPercent, a seller must have a VAT-ID registered with eBay and must be listing the
     * item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal
     * (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round
     * up the value to 12.346.) Note: The View Item page may display the precision to 2 decimal
     * places with no trailing zeros. However, the full value you send in is stored.
     */
    public $vatpercent;
    /**
     * @var string | Title of a Want It Now post.
     */
    public $title;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param AccountDetailEntryCodeType $val
     * @throws Exception
     */
    public function setAccountDetailsEntryType($val)
    {
        $this->accountdetailsentrytype = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setBalance($val)
    {
        $this->balance = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setCredit($val)
    {
        $this->credit = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDate($val)
    {
        $this->date = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setDebit($val)
    {
        $this->debit = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setGrossDetailAmount($val)
    {
        $this->grossdetailamount = (int)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->itemid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMemo($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Memo');
        }
        $this->memo = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setNetDetailAmount($val)
    {
        $this->netdetailamount = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRefNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RefNumber');
        }
        $this->refnumber = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setVATPercent($val)
    {
        $this->vatpercent = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Title');
        }
        $this->title = (int)$val;
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
