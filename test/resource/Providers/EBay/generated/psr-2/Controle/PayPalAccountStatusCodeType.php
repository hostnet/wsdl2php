<?php

namespace Controle;

class PayPalAccountStatusCodeType
{
    const ACTIVE         = 'Active';
    const CLOSED         = 'Closed';
    const HIGHRESTRICTED = 'HighRestricted';
    const LOWRESTRICTED  = 'LowRestricted';
    const LOCKED         = 'Locked';
    const CUSTOMCODE     = 'CustomCode';
    const WIREOFF        = 'WireOff';
    const UNKNOWN        = 'Unknown';
    const INVALID        = 'Invalid';
}
