<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AccountEntriesType
 * Collection of zero, one, or multiple individual detail account entries. Contains
 * one AccountEntry object for each account entry returned. See the schema        documentation
 * for AccountEntryType for details on its properties. You can uniquely identify        the
 * entries that the GetAccount call returns within the AccountEntries tag.        Specifically,
 * the following fields, returned within the AccountEntries tag,        can be used in combination
 * as a unique key: AccountEntry.Date, AccountEntry.AccountDetailsEntryType,        AccountEntry.ItemID,
 * and AccountEntry.RefNumber.
 */
class AccountEntriesType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AccountEntryType | Contains the data for one account entry. (See the schema                documentation
     * for AccountEntryType for details on its properties.)
     */
    public $accountentry;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param AccountEntryType $val
     * @throws Exception
     */
    public function setAccountEntry($val)
    {
        $this->accountentry = (int)$val;
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
