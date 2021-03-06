<?php

namespace Controle\sub1\sub2;

class DisputeStatusCodeType
{
	const CLOSED                             = 'Closed';
	const WAITINGFORSELLERRESPONSE           = 'WaitingForSellerResponse';
	const WAITINGFORBUYERRESPONSE            = 'WaitingForBuyerResponse';
	const CLOSEDFVFCREDITSTRIKE              = 'ClosedFVFCreditStrike';
	const CLOSEDNOFVFCREDITSTRIKE            = 'ClosedNoFVFCreditStrike';
	const CLOSEDFVFCREDITNOSTRIKE            = 'ClosedFVFCreditNoStrike';
	const CLOSEDNOFVFCREDITNOSTRIKE          = 'ClosedNoFVFCreditNoStrike';
	const STRIKEAPPEALEDAFTERCLOSING         = 'StrikeAppealedAfterClosing';
	const FVFCREDITREVERSEDAFTERCLOSING      = 'FVFCreditReversedAfterClosing';
	const STRIKEAPPEALEDANDFVFCREDITREVERSED = 'StrikeAppealedAndFVFCreditReversed';
	const CLAIMOPENED                        = 'ClaimOpened';
	const NODOCUMENTATION                    = 'NoDocumentation';
	const CLAIMCLOSED                        = 'ClaimClosed';
	const CLAIMDENIED                        = 'ClaimDenied';
	const CLAIMINPROCESS                     = 'ClaimInProcess';
	const CLAIMAPPROVED                      = 'ClaimApproved';
	const CLAIMPAID                          = 'ClaimPaid';
	const CLAIMRESOLVED                      = 'ClaimResolved';
	const CLAIMSUBMITTED                     = 'ClaimSubmitted';
	const CUSTOMCODE                         = 'CustomCode';
}
