<?php

namespace Controle;

class NotificationEventStateCodeType
{
    const _NEW              = '_New';
    const FAILED            = 'Failed';
    const MARKEDDOWN        = 'MarkedDown';
    const PENDING           = 'Pending';
    const FAILEDPENDING     = 'FailedPending';
    const MARKEDDOWNPENDING = 'MarkedDownPending';
    const DELIVERED         = 'Delivered';
    const UNDELIVERABLE     = 'Undeliverable';
    const REJECTED          = 'Rejected';
    const CANCELED          = 'Canceled';
    const CUSTOMCODE        = 'CustomCode';
}
