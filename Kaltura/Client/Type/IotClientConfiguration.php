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
class Kaltura_Client_Type_IotClientConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIotClientConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->identityPoolId))
			$this->identityPoolId = (string)$xml->identityPoolId;
		if(!is_null($jsonObject) && isset($jsonObject->identityPoolId))
			$this->identityPoolId = (string)$jsonObject->identityPoolId;
		if(!is_null($xml) && count($xml->userPoolId))
			$this->userPoolId = (string)$xml->userPoolId;
		if(!is_null($jsonObject) && isset($jsonObject->userPoolId))
			$this->userPoolId = (string)$jsonObject->userPoolId;
		if(!is_null($xml) && count($xml->awsRegion))
			$this->awsRegion = (string)$xml->awsRegion;
		if(!is_null($jsonObject) && isset($jsonObject->awsRegion))
			$this->awsRegion = (string)$jsonObject->awsRegion;
		if(!is_null($xml) && count($xml->appClientId))
			$this->appClientId = (string)$xml->appClientId;
		if(!is_null($jsonObject) && isset($jsonObject->appClientId))
			$this->appClientId = (string)$jsonObject->appClientId;
		if(!is_null($xml) && count($xml->legacyEndPoint))
			$this->legacyEndPoint = (string)$xml->legacyEndPoint;
		if(!is_null($jsonObject) && isset($jsonObject->legacyEndPoint))
			$this->legacyEndPoint = (string)$jsonObject->legacyEndPoint;
		if(!is_null($xml) && count($xml->endPoint))
			$this->endPoint = (string)$xml->endPoint;
		if(!is_null($jsonObject) && isset($jsonObject->endPoint))
			$this->endPoint = (string)$jsonObject->endPoint;
		if(!is_null($xml) && count($xml->thingName))
			$this->thingName = (string)$xml->thingName;
		if(!is_null($jsonObject) && isset($jsonObject->thingName))
			$this->thingName = (string)$jsonObject->thingName;
		if(!is_null($xml) && count($xml->thingArn))
			$this->thingArn = (string)$xml->thingArn;
		if(!is_null($jsonObject) && isset($jsonObject->thingArn))
			$this->thingArn = (string)$jsonObject->thingArn;
		if(!is_null($xml) && count($xml->thingId))
			$this->thingId = (string)$xml->thingId;
		if(!is_null($jsonObject) && isset($jsonObject->thingId))
			$this->thingId = (string)$jsonObject->thingId;
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->topics))
		{
			if(empty($xml->topics))
				$this->topics = array();
			else
				$this->topics = Kaltura_Client_ParseUtils::unmarshalArray($xml->topics, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->topics))
		{
			if(empty($jsonObject->topics))
				$this->topics = array();
			else
				$this->topics = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->topics, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
	}
	/**
	 * IdentityPoolId
	 *
	 * @var string
	 */
	public $identityPoolId = null;

	/**
	 * UserPoolId
	 *
	 * @var string
	 */
	public $userPoolId = null;

	/**
	 * AwsRegion
	 *
	 * @var string
	 */
	public $awsRegion = null;

	/**
	 * appClientId
	 *
	 * @var string
	 */
	public $appClientId = null;

	/**
	 * legacyEndPoint
	 *
	 * @var string
	 */
	public $legacyEndPoint = null;

	/**
	 * endPoint
	 *
	 * @var string
	 */
	public $endPoint = null;

	/**
	 * thingName
	 *
	 * @var string
	 */
	public $thingName = null;

	/**
	 * thingArn
	 *
	 * @var string
	 */
	public $thingArn = null;

	/**
	 * thingId
	 *
	 * @var string
	 */
	public $thingId = null;

	/**
	 * username
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * password
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * topics
	 *
	 * @var array of KalturaKeyValue
	 */
	public $topics;

	/**
	 * status
	 *
	 * @var string
	 */
	public $status = null;

	/**
	 * message
	 *
	 * @var string
	 */
	public $message = null;


}

