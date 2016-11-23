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
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AccountEntryType | Contains the data for one account entry. (See the schema                documentation
     * for AccountEntryType for details on its properties.)
     */
    public $AccountEntry;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param AccountEntryType $val
     * @throws Exception
     */
    public function setAccountEntry($val)
    {
        $this->AccountEntry = (int)$val;
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
