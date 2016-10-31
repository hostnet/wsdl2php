<?php

namespace Controle;

class DisputeFilterTypeCodeType
{
    const ALLINVOLVEDDISPUTES                = 'AllInvolvedDisputes';
    const DISPUTESAWAITINGMYRESPONSE         = 'DisputesAwaitingMyResponse';
    const DISPUTESAWAITINGOTHERPARTYRESPONSE = 'DisputesAwaitingOtherPartyResponse';
    const ALLINVOLVEDCLOSEDDISPUTES          = 'AllInvolvedClosedDisputes';
    const ELIGIBLEFORCREDIT                  = 'EligibleForCredit';
    const UNPAIDITEMDISPUTES                 = 'UnpaidItemDisputes';
    const ITEMNOTRECEIVEDDISPUTES            = 'ItemNotReceivedDisputes';
    const CUSTOMCODE                         = 'CustomCode';
}
