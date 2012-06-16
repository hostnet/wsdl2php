<?php

namespace Controle;
class PaymentStatusCodeType {
    const NoPaymentFailure = 'NoPaymentFailure';
    const BuyerECheckBounced = 'BuyerECheckBounced';
    const BuyerCreditCardFailed = 'BuyerCreditCardFailed';
    const BuyerFailedPaymentReportedBySeller = 'BuyerFailedPaymentReportedBySeller';
    const PayPalPaymentInProcess = 'PayPalPaymentInProcess';
    const PaymentInProcess = 'PaymentInProcess';
    const CustomCode = 'CustomCode';
}

