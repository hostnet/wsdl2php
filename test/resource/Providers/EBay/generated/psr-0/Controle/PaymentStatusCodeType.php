<?php

namespace Controle;

class PaymentStatusCodeType
{
	// @codingStandardsIgnoreStart
	const NOPAYMENTFAILURE                   = 'NoPaymentFailure';
	const BUYERECHECKBOUNCED                 = 'BuyerECheckBounced';
	const BUYERCREDITCARDFAILED              = 'BuyerCreditCardFailed';
	const BUYERFAILEDPAYMENTREPORTEDBYSELLER = 'BuyerFailedPaymentReportedBySeller';
	const PAYPALPAYMENTINPROCESS             = 'PayPalPaymentInProcess';
	const PAYMENTINPROCESS                   = 'PaymentInProcess';
	const CUSTOMCODE                         = 'CustomCode';
	// @codingStandardsIgnoreEnd
}
