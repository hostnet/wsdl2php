<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetChallengeTokenRequestType
 * Retrieves a botblock token and URLs for an image or audio clip that the user is to match.
 * Use this in any process of yours for which you would find a botblock challenge to be of
 * value. Process: (1) Call GetChallengeToken to get a token, an image URL and an audio clip
 * URL. (2) Call ValidateChallengeInput with the token, the user's response, and whether the
 * retrieved token should remain valid for a short period of time. The response from ValidateChallengeInput
 * indicates whether the token is valid. <br><br> This is available for use by authorized third
 * parties who are authorized to use <a href="io_PlaceOffer.html">PlaceOffer</a>.
 */
class GetChallengeTokenRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    // @codingStandardsIgnoreEnd
}
