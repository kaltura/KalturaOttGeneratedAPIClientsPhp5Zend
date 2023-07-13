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
class Kaltura_Client_Type_Iot extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaIot';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(!is_null($jsonObject) && isset($jsonObject->udid))
			$this->udid = (string)$jsonObject->udid;
		if(!is_null($xml) && count($xml->accessKey))
			$this->accessKey = (string)$xml->accessKey;
		if(!is_null($jsonObject) && isset($jsonObject->accessKey))
			$this->accessKey = (string)$jsonObject->accessKey;
		if(!is_null($xml) && count($xml->accessSecretKey))
			$this->accessSecretKey = (string)$xml->accessSecretKey;
		if(!is_null($jsonObject) && isset($jsonObject->accessSecretKey))
			$this->accessSecretKey = (string)$jsonObject->accessSecretKey;
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->userPassword))
			$this->userPassword = (string)$xml->userPassword;
		if(!is_null($jsonObject) && isset($jsonObject->userPassword))
			$this->userPassword = (string)$jsonObject->userPassword;
		if(!is_null($xml) && count($xml->identityId))
			$this->identityId = (string)$xml->identityId;
		if(!is_null($jsonObject) && isset($jsonObject->identityId))
			$this->identityId = (string)$jsonObject->identityId;
		if(!is_null($xml) && count($xml->thingArn))
			$this->thingArn = (string)$xml->thingArn;
		if(!is_null($jsonObject) && isset($jsonObject->thingArn))
			$this->thingArn = (string)$jsonObject->thingArn;
		if(!is_null($xml) && count($xml->thingId))
			$this->thingId = (string)$xml->thingId;
		if(!is_null($jsonObject) && isset($jsonObject->thingId))
			$this->thingId = (string)$jsonObject->thingId;
		if(!is_null($xml) && count($xml->principal))
			$this->principal = (string)$xml->principal;
		if(!is_null($jsonObject) && isset($jsonObject->principal))
			$this->principal = (string)$jsonObject->principal;
		if(!is_null($xml) && count($xml->endPoint))
			$this->endPoint = (string)$xml->endPoint;
		if(!is_null($jsonObject) && isset($jsonObject->endPoint))
			$this->endPoint = (string)$jsonObject->endPoint;
		if(!is_null($xml) && count($xml->extendedEndPoint))
			$this->extendedEndPoint = (string)$xml->extendedEndPoint;
		if(!is_null($jsonObject) && isset($jsonObject->extendedEndPoint))
			$this->extendedEndPoint = (string)$jsonObject->extendedEndPoint;
		if(!is_null($xml) && count($xml->identityPoolId))
			$this->identityPoolId = (string)$xml->identityPoolId;
		if(!is_null($jsonObject) && isset($jsonObject->identityPoolId))
			$this->identityPoolId = (string)$jsonObject->identityPoolId;
	}
	/**
	 * id
	 *
	 * @var string
	 */
	public $udid = null;

	/**
	 * accessKey
	 *
	 * @var string
	 */
	public $accessKey = null;

	/**
	 * accessSecretKey
	 *
	 * @var string
	 */
	public $accessSecretKey = null;

	/**
	 * Username
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * UserPassword
	 *
	 * @var string
	 */
	public $userPassword = null;

	/**
	 * IdentityId
	 *
	 * @var string
	 */
	public $identityId = null;

	/**
	 * ThingArn
	 *
	 * @var string
	 */
	public $thingArn = null;

	/**
	 * ThingId
	 *
	 * @var string
	 */
	public $thingId = null;

	/**
	 * Principal
	 *
	 * @var string
	 */
	public $principal = null;

	/**
	 * EndPoint
	 *
	 * @var string
	 */
	public $endPoint = null;

	/**
	 * ExtendedEndPoint
	 *
	 * @var string
	 */
	public $extendedEndPoint = null;

	/**
	 * IdentityPoolId
	 *
	 * @var string
	 */
	public $identityPoolId = null;


}

