<?php

namespace Controle;
/**
 * GetChallengeTokenResponseType
 * Response to GetChallengeToken request.
 */
class GetChallengeTokenResponseType extends \Controle\AbstractResponseType {
    /**
     * @var string | Botblock token that was returned by GetChallengeToken.
     */
    public $ChallengeToken;
    /**
     * @var string | The URL of the image your application should display to the user for a botblock challenge.
     */
    public $ImageChallengeURL;
    /**
     * @var string | The URL of the audio clip your application should provide for sight-impaired users. The
     * audio clip corresponds to the image.
     */
    public $AudioChallengeURL;
}

