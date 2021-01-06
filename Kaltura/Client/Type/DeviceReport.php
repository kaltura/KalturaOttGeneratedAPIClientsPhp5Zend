<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2021  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->configurationGroupId))
			$this->configurationGroupId = (string)$xml->configurationGroupId;
		if(count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(count($xml->pushParameters) && !empty($xml->pushParameters))
			$this->pushParameters = Kaltura_Client_ParseUtils::unmarshalObject($xml->pushParameters, "KalturaPushParams");
		if(count($xml->versionNumber))
			$this->versionNumber = (string)$xml->versionNumber;
		if(count($xml->versionPlatform))
			$this->versionPlatform = (string)$xml->versionPlatform;
		if(count($xml->versionAppName))
			$this->versionAppName = (string)$xml->versionAppName;
		if(count($xml->lastAccessIP))
			$this->lastAccessIP = (string)$xml->lastAccessIP;
		if(count($xml->lastAccessDate))
			$this->lastAccessDate = (string)$xml->lastAccessDate;
		if(count($xml->userAgent))
			$this->userAgent = (string)$xml->userAgent;
		if(count($xml->operationSystem))
			$this->operationSystem = (string)$xml->operationSystem;
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

