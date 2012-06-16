<?php

namespace Controle\sub1\sub2;
class PaymentStatusCodeType {
	const NoPaymentFailure = 'NoPaymentFailure';
	const BuyerECheckBounced = 'BuyerECheckBounced';
	const BuyerCreditCardFailed = 'BuyerCreditCardFailed';
	const BuyerFailedPaymentReportedBySeller = 'BuyerFailedPaymentReportedBySeller';
	const PayPalPaymentInProcess = 'PayPalPaymentInProcess';
	const PaymentInProcess = 'PaymentInProcess';
	const CustomCode = 'CustomCode';
}

