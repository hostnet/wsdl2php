<?php

namespace Controle;

class DisputeStateCodeType
{
    const LOCKED                                    = 'Locked';
    const CLOSED                                    = 'Closed';
    const BUYERFIRSTRESPONSEPAYOPTION               = 'BuyerFirstResponsePayOption';
    const BUYERFIRSTRESPONSENOPAYOPTION             = 'BuyerFirstResponseNoPayOption';
    const BUYERFIRSTRESPONSEPAYOPTIONLATERESPONSE   = 'BuyerFirstResponsePayOptionLateResponse';
    const BUYERFIRSTRESPONSENOPAYOPTIONLATERESPONSE = 'BuyerFirstResponseNoPayOptionLateResponse';
    const MUTUALCOMMUNICATIONPAYOPTION              = 'MutualCommunicationPayOption';
    const MUTUALCOMMUNICATIONNOPAYOPTION            = 'MutualCommunicationNoPayOption';
    const PENDINGRESOLVE                            = 'PendingResolve';
    const MUTUALWITHDRAWALAGREEMENT                 = 'MutualWithdrawalAgreement';
    const MUTUALWITHDRAWALAGREEMENTLATE             = 'MutualWithdrawalAgreementLate';
    const NOTRECEIVEDNOSELLERRESPONSE               = 'NotReceivedNoSellerResponse';
    const NOTASDESCRIBEDNOSELLERRESPONSE            = 'NotAsDescribedNoSellerResponse';
    const NOTRECEIVEDMUTUALCOMMUNICATION            = 'NotReceivedMutualCommunication';
    const NOTASDESCRIBEDMUTUALCOMMUNICATION         = 'NotAsDescribedMutualCommunication';
    const MUTUALAGREEMENTORBUYERRETURNINGITEM       = 'MutualAgreementOrBuyerReturningItem';
    const CLAIMOPENED                               = 'ClaimOpened';
    const NODOCUMENTATION                           = 'NoDocumentation';
    const CLAIMCLOSED                               = 'ClaimClosed';
    const CLAIMDENIED                               = 'ClaimDenied';
    const CLAIMPENDING                              = 'ClaimPending';
    const CLAIMPAYMENTPENDING                       = 'ClaimPaymentPending';
    const CLAIMPAID                                 = 'ClaimPaid';
    const CLAIMRESOLVED                             = 'ClaimResolved';
    const CLAIMSUBMITTED                            = 'ClaimSubmitted';
    const CUSTOMCODE                                = 'CustomCode';
}
