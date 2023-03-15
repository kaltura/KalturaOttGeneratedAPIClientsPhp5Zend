<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_Type_IotProfileAws extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaIotProfileAws';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->iotEndPoint))
			$this->iotEndPoint = (string)$xml->iotEndPoint;
		if(!is_null($jsonObject) && isset($jsonObject->iotEndPoint))
			$this->iotEndPoint = (string)$jsonObject->iotEndPoint;
		if(!is_null($xml) && count($xml->accessKeyId))
			$this->accessKeyId = (string)$xml->accessKeyId;
		if(!is_null($jsonObject) && isset($jsonObject->accessKeyId))
			$this->accessKeyId = (string)$jsonObject->accessKeyId;
		if(!is_null($xml) && count($xml->secretAccessKey))
			$this->secretAccessKey = (string)$xml->secretAccessKey;
		if(!is_null($jsonObject) && isset($jsonObject->secretAccessKey))
			$this->secretAccessKey = (string)$jsonObject->secretAccessKey;
		if(!is_null($xml) && count($xml->userPoolId))
			$this->userPoolId = (string)$xml->userPoolId;
		if(!is_null($jsonObject) && isset($jsonObject->userPoolId))
			$this->userPoolId = (string)$jsonObject->userPoolId;
		if(!is_null($xml) && count($xml->clientId))
			$this->clientId = (string)$xml->clientId;
		if(!is_null($jsonObject) && isset($jsonObject->clientId))
			$this->clientId = (string)$jsonObject->clientId;
		if(!is_null($xml) && count($xml->identityPoolId))
			$this->identityPoolId = (string)$xml->identityPoolId;
		if(!is_null($jsonObject) && isset($jsonObject->identityPoolId))
			$this->identityPoolId = (string)$jsonObject->identityPoolId;
		if(!is_null($xml) && count($xml->region))
			$this->region = (string)$xml->region;
		if(!is_null($jsonObject) && isset($jsonObject->region))
			$this->region = (string)$jsonObject->region;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
	}
	/**
	 * iotEndPoint
	 *
	 * @var string
	 */
	public $iotEndPoint = null;

	/**
	 * accessKeyId
	 *
	 * @var string
	 */
	public $accessKeyId = null;

	/**
	 * secretAccessKey
	 *
	 * @var string
	 */
	public $secretAccessKey = null;

	/**
	 * userPoolId
	 *
	 * @var string
	 */
	public $userPoolId = null;

	/**
	 * clientId
	 *
	 * @var string
	 */
	public $clientId = null;

	/**
	 * identityPoolId
	 *
	 * @var string
	 */
	public $identityPoolId = null;

	/**
	 * region
	 *
	 * @var string
	 */
	public $region = null;

	/**
	 * updateDate
	 *
	 * @var bigint
	 */
	public $updateDate = null;


}

