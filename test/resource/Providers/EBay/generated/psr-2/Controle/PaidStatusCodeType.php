<?php

namespace Controle;

class PaidStatusCodeType
{
    // @codingStandardsIgnoreStart
    const NOTPAID                      = 'NotPaid';
    const BUYERHASNOTCOMPLETEDCHECKOUT = 'BuyerHasNotCompletedCheckout';
    const PAYMENTPENDINGWITHPAYPAL     = 'PaymentPendingWithPayPal';
    const PAIDWITHPAYPAL               = 'PaidWithPayPal';
    const MARKEDASPAID                 = 'MarkedAsPaid';
    const PAYMENTPENDINGWITHESCROW     = 'PaymentPendingWithEscrow';
    const PAIDWITHESCROW               = 'PaidWithEscrow';
    const ESCROWPAYMENTCANCELLED       = 'EscrowPaymentCancelled';
    const PAYMENTPENDINGWITHPAISAPAY   = 'PaymentPendingWithPaisaPay';
    const PAIDWITHPAISAPAY             = 'PaidWithPaisaPay';
    const PAYMENTPENDING               = 'PaymentPending';
    const CUSTOMCODE                   = 'CustomCode';
    // @codingStandardsIgnoreEnd
}
