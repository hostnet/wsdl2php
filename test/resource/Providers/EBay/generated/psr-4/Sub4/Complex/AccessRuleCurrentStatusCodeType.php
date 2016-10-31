<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AccessRuleCurrentStatusCodeType
{
    const NOTSET                    = 'NotSet';
    const HOURLYLIMITEXCEEDED       = 'HourlyLimitExceeded';
    const DAILYLIMITEXCEEDED        = 'DailyLimitExceeded';
    const PERIODICLIMITEXCEEDED     = 'PeriodicLimitExceeded';
    const HOURLYSOFTLIMITEXCEEDED   = 'HourlySoftLimitExceeded';
    const DAILYSOFTLIMITEXCEEDED    = 'DailySoftLimitExceeded';
    const PERIODICSOFTLIMITEXCEEDED = 'PeriodicSoftLimitExceeded';
    const CUSTOMCODE                = 'CustomCode';
}
