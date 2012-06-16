<?php

namespace Controle;
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
class AccountEntriesType {
    /**
     * @var \Controle\AccountEntryType | Contains the data for one account entry. (See the schema                documentation
     * for AccountEntryType for details on its properties.)
     */
    public $AccountEntry;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

