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
class Kaltura_Client_Type_DeviceReport extends Kaltura_Client_Type_Report
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeviceReport';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->configurationGroupId))
			$this->configurationGroupId = (string)$xml->configurationGroupId;
		if(!is_null($jsonObject) && isset($jsonObject->configurationGroupId))
			$this->configurationGroupId = (string)$jsonObject->configurationGroupId;
		if(!is_null($xml) && count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(!is_null($jsonObject) && isset($jsonObject->udid))
			$this->udid = (string)$jsonObject->udid;
		if(!is_null($xml) && count($xml->pushParameters) && !empty($xml->pushParameters))
			$this->pushParameters = Kaltura_Client_ParseUtils::unmarshalObject($xml->pushParameters, "KalturaPushParams");
		if(!is_null($jsonObject) && isset($jsonObject->pushParameters) && !empty($jsonObject->pushParameters))
			$this->pushParameters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->pushParameters, "KalturaPushParams");
		if(!is_null($xml) && count($xml->versionNumber))
			$this->versionNumber = (string)$xml->versionNumber;
		if(!is_null($jsonObject) && isset($jsonObject->versionNumber))
			$this->versionNumber = (string)$jsonObject->versionNumber;
		if(!is_null($xml) && count($xml->versionPlatform))
			$this->versionPlatform = (string)$xml->versionPlatform;
		if(!is_null($jsonObject) && isset($jsonObject->versionPlatform))
			$this->versionPlatform = (string)$jsonObject->versionPlatform;
		if(!is_null($xml) && count($xml->versionAppName))
			$this->versionAppName = (string)$xml->versionAppName;
		if(!is_null($jsonObject) && isset($jsonObject->versionAppName))
			$this->versionAppName = (string)$jsonObject->versionAppName;
		if(!is_null($xml) && count($xml->lastAccessIP))
			$this->lastAccessIP = (string)$xml->lastAccessIP;
		if(!is_null($jsonObject) && isset($jsonObject->lastAccessIP))
			$this->lastAccessIP = (string)$jsonObject->lastAccessIP;
		if(!is_null($xml) && count($xml->lastAccessDate))
			$this->lastAccessDate = (string)$xml->lastAccessDate;
		if(!is_null($jsonObject) && isset($jsonObject->lastAccessDate))
			$this->lastAccessDate = (string)$jsonObject->lastAccessDate;
		if(!is_null($xml) && count($xml->userAgent))
			$this->userAgent = (string)$xml->userAgent;
		if(!is_null($jsonObject) && isset($jsonObject->userAgent))
			$this->userAgent = (string)$jsonObject->userAgent;
		if(!is_null($xml) && count($xml->operationSystem))
			$this->operationSystem = (string)$xml->operationSystem;
		if(!is_null($jsonObject) && isset($jsonObject->operationSystem))
			$this->operationSystem = (string)$jsonObject->operationSystem;
	}
	/**
	 * Partner unique identifier
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Configuration group identifier which the version configuration the device last received belongs to
	 *
	 * @var string
	 */
	public $configurationGroupId = null;

	/**
	 * Device unique identifier
	 *
	 * @var string
	 */
	public $udid = null;

	/**
	 * Device-Application push parameters
	 *
	 * @var Kaltura_Client_Type_PushParams
	 */
	public $pushParameters;

	/**
	 * Application version number
	 *
	 * @var string
	 */
	public $versionNumber = null;

	/**
	 * Application version type
	 *
	 * @var Kaltura_Client_Enum_Platform
	 */
	public $versionPlatform = null;

	/**
	 * Application version name
	 *
	 * @var string
	 */
	public $versionAppName = null;

	/**
	 * Last access IP
	 *
	 * @var string
	 */
	public $lastAccessIP = null;

	/**
	 * Last device configuration request date
	 *
	 * @var bigint
	 */
	public $lastAccessDate = null;

	/**
	 * request header property
	 *
	 * @var string
	 */
	public $userAgent = null;

	/**
	 * Request header property
	 *             Incase value cannot be found - returns &quot;Unknown 0.0&quot;
	 *
	 * @var string
	 */
	public $operationSystem = null;


}

