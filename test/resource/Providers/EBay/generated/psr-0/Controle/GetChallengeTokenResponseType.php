<?php

namespace Controle;

/**
 * GetChallengeTokenResponseType
 * Response to GetChallengeToken request.
 */
class GetChallengeTokenResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var string | Botblock token that was returned by GetChallengeToken.
	 */
	public $challengetoken;
	/**
	 * @var string | The URL of the image your application should display to the user for a botblock challenge.
	 */
	public $imagechallengeurl;
	/**
	 * @var string | The URL of the audio clip your application should provide for sight-impaired users. The
	 * audio clip corresponds to the image.
	 */
	public $audiochallengeurl;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setChallengeToken($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ChallengeToken');
        }
        $this->challengetoken = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setImageChallengeURL($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ImageChallengeURL');
        }
        $this->imagechallengeurl = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAudioChallengeURL($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AudioChallengeURL');
        }
        $this->audiochallengeurl = (int)$val;
	}
}
