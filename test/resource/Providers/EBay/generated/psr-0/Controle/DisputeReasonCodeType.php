<?php

namespace Controle;

class DisputeReasonCodeType
{
	const BUYERHASNOTPAID             = 'BuyerHasNotPaid';
	const TRANSACTIONMUTUALLYCANCELED = 'TransactionMutuallyCanceled';
	const ITEMNOTRECEIVED             = 'ItemNotReceived';
	const SIGNIFICANTLYNOTASDESCRIBED = 'SignificantlyNotAsDescribed';
	const NOREFUND                    = 'NoRefund';
	const RETURNPOLICYUNPAIDITEM      = 'ReturnPolicyUnpaidItem';
	const CUSTOMCODE                  = 'CustomCode';
}
