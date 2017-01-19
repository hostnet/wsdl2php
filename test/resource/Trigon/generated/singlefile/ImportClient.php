<?php

class getModelImportKenmerken
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $modelCode;
	/**
	 * @var string
	 */
	public $modelPassword;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setModelCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for modelCode');
        }
        $this->modelCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setModelPassword($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for modelPassword');
        }
        $this->modelPassword = $val;
	}
}

class getModelImportKenmerkenResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $getModelImportKenmerkenResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setGetModelImportKenmerkenResult($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for getModelImportKenmerkenResult');
        }
        $this->getModelImportKenmerkenResult = $val;
	}
}

class InsertRespondent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $modelCode;
	/**
	 * @var string
	 */
	public $modelPassword;
	/**
	 * @var string
	 */
	public $importBatchNr;
	/**
	 * @var string
	 */
	public $respondentTypeCode;
	/**
	 * @var string
	 */
	public $respondentAanhef;
	/**
	 * @var string
	 */
	public $respondentEmail;
	/**
	 * @var string
	 */
	public $respondentNaam;
	/**
	 * @var string
	 */
	public $respondentDtmTrigger;
	/**
	 * @var string
	 */
	public $afzenderNaam;
	/**
	 * @var string
	 */
	public $respondentId1;
	/**
	 * @var string
	 */
	public $respondentId2;
	/**
	 * @var string
	 */
	public $respondentTxtExtra1;
	/**
	 * @var string
	 */
	public $respondentTxtExtra2;
	/**
	 * @var string
	 */
	public $respondentDtmExtra1;
	/**
	 * @var string
	 */
	public $respondentDtmExtra2;
	/**
	 * @var string
	 */
	public $respondentKenmerkNamen;
	/**
	 * @var string
	 */
	public $respondentKenmerkWaardes;
	/**
	 * @var string
	 */
	public $respondentTelNr;
	/**
	 * @var string
	 */
	public $respondentTelNrAvond;
	/**
	 * @var string
	 */
	public $respondentTelNrMobiel;
	/**
	 * @var string
	 */
	public $respondentAdres;
	/**
	 * @var string
	 */
	public $respondentPlaats;
	/**
	 * @var string
	 */
	public $respondentPostcode;
	/**
	 * @var string
	 */
	public $respondentDtmGeboorte;
	/**
	 * @var string
	 */
	public $respondentDtmInDienst;
	/**
	 * @var string
	 */
	public $respondentOrganisatie;
	/**
	 * @var string
	 */
	public $respondentOrganisatieID;
	/**
	 * @var string
	 */
	public $respondentStage;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setModelCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for modelCode');
        }
        $this->modelCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setModelPassword($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for modelPassword');
        }
        $this->modelPassword = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setImportBatchNr($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for importBatchNr');
        }
        $this->importBatchNr = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentTypeCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentTypeCode');
        }
        $this->respondentTypeCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentAanhef($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentAanhef');
        }
        $this->respondentAanhef = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentEmail($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentEmail');
        }
        $this->respondentEmail = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentNaam($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentNaam');
        }
        $this->respondentNaam = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentDtmTrigger($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentDtmTrigger');
        }
        $this->respondentDtmTrigger = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setAfzenderNaam($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for afzenderNaam');
        }
        $this->afzenderNaam = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentId1($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentId1');
        }
        $this->respondentId1 = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentId2($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentId2');
        }
        $this->respondentId2 = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentTxtExtra1($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentTxtExtra1');
        }
        $this->respondentTxtExtra1 = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentTxtExtra2($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentTxtExtra2');
        }
        $this->respondentTxtExtra2 = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentDtmExtra1($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentDtmExtra1');
        }
        $this->respondentDtmExtra1 = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentDtmExtra2($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentDtmExtra2');
        }
        $this->respondentDtmExtra2 = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentKenmerkNamen($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentKenmerkNamen');
        }
        $this->respondentKenmerkNamen = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentKenmerkWaardes($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentKenmerkWaardes');
        }
        $this->respondentKenmerkWaardes = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentTelNr($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentTelNr');
        }
        $this->respondentTelNr = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentTelNrAvond($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentTelNrAvond');
        }
        $this->respondentTelNrAvond = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentTelNrMobiel($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentTelNrMobiel');
        }
        $this->respondentTelNrMobiel = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentAdres($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentAdres');
        }
        $this->respondentAdres = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentPlaats($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentPlaats');
        }
        $this->respondentPlaats = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentPostcode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentPostcode');
        }
        $this->respondentPostcode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentDtmGeboorte($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentDtmGeboorte');
        }
        $this->respondentDtmGeboorte = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentDtmInDienst($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentDtmInDienst');
        }
        $this->respondentDtmInDienst = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentOrganisatie($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentOrganisatie');
        }
        $this->respondentOrganisatie = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentOrganisatieID($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentOrganisatieID');
        }
        $this->respondentOrganisatieID = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentStage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentStage');
        }
        $this->respondentStage = $val;
	}
}

class InsertRespondentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $InsertRespondentResult;
	/**
	 * @var string
	 */
	public $outErrorMessage;
	/**
	 * @var string
	 */
	public $outInlogCode;
	/**
	 * @var string
	 */
	public $outInlogUrl;
	/**
	 * @var string
	 */
	public $outCUGcode;
	/**
	 * @var string
	 */
	public $outMemberId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setInsertRespondentResult($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for InsertRespondentResult');
        }
        $this->InsertRespondentResult = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutErrorMessage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outErrorMessage');
        }
        $this->outErrorMessage = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutInlogCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outInlogCode');
        }
        $this->outInlogCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutInlogUrl($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outInlogUrl');
        }
        $this->outInlogUrl = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutCUGcode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outCUGcode');
        }
        $this->outCUGcode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutMemberId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outMemberId');
        }
        $this->outMemberId = $val;
	}
}

class CreateRespondent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $email;
	/**
	 * @var string
	 */
	public $itcModel;
	/**
	 * @var string
	 */
	public $passWord;
	/**
	 * @var string
	 */
	public $respondentId;
	/**
	 * @var string
	 */
	public $respondentData;
	/**
	 * @var string
	 */
	public $respondentDataEncoding;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for email');
        }
        $this->email = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setItcModel($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for itcModel');
        }
        $this->itcModel = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPassWord($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for passWord');
        }
        $this->passWord = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentId');
        }
        $this->respondentId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentData($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentData');
        }
        $this->respondentData = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setRespondentDataEncoding($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for respondentDataEncoding');
        }
        $this->respondentDataEncoding = $val;
	}
}

class CreateRespondentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $CreateRespondentResult;
	/**
	 * @var string
	 */
	public $outErrorMessage;
	/**
	 * @var string
	 */
	public $outInlogCode;
	/**
	 * @var string
	 */
	public $outInlogUrl;
	/**
	 * @var string
	 */
	public $outCUGcode;
	/**
	 * @var string
	 */
	public $outMemberId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCreateRespondentResult($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CreateRespondentResult');
        }
        $this->CreateRespondentResult = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutErrorMessage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outErrorMessage');
        }
        $this->outErrorMessage = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutInlogCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outInlogCode');
        }
        $this->outInlogCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutInlogUrl($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outInlogUrl');
        }
        $this->outInlogUrl = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutCUGcode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outCUGcode');
        }
        $this->outCUGcode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutMemberId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outMemberId');
        }
        $this->outMemberId = $val;
	}
}

/**
 * ImportClient
 */
class ImportClient extends SoapClient {

	const WSDL_FILE = "Trigon.wsdl";
	private $classmap = array(
        'getModelImportKenmerken' =>
            'getModelImportKenmerken',
        'getModelImportKenmerkenResponse' =>
            'getModelImportKenmerkenResponse',
        'InsertRespondent' =>
            'InsertRespondent',
        'InsertRespondentResponse' =>
            'InsertRespondentResponse',
        'CreateRespondent' =>
            'CreateRespondent',
        'CreateRespondentResponse' =>
            'CreateRespondentResponse',
	);

	public function __construct($wsdl = null, $options = array()) {
        foreach($this->classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
            	$options['classmap'][$key] = $value;
            }
        }
        if(isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * getModelImportKenmerken
	 *
	 * @param getModelImportKenmerken $parameters
	 * @return getModelImportKenmerkenResponse
	 */
	public function getModelImportKenmerken(getModelImportKenmerken $parameters) {
        return $this->__soapCall(
            'getModelImportKenmerken',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
	}

	/**
	 * InsertRespondent
	 *
	 * @param InsertRespondent $parameters
	 * @return InsertRespondentResponse
	 */
	public function InsertRespondent(InsertRespondent $parameters) {
        return $this->__soapCall(
            'InsertRespondent',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
	}

	/**
	 * CreateRespondent
	 *
	 * @param CreateRespondent $parameters
	 * @return CreateRespondentResponse
	 */
	public function CreateRespondent(CreateRespondent $parameters) {
        return $this->__soapCall(
            'CreateRespondent',
            array($parameters),
            array('uri'=>'http://trigon.nl/')
        );
	}
}
