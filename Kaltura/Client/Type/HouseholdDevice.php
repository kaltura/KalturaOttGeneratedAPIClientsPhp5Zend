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
class Kaltura_Client_Type_HouseholdDevice extends Kaltura_Client_Type_OTTObjectSupportNullable
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdDevice';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->householdId))
			$this->householdId = (int)$xml->householdId;
		if(!is_null($jsonObject) && isset($jsonObject->householdId))
			$this->householdId = (int)$jsonObject->householdId;
		if(!is_null($xml) && count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(!is_null($jsonObject) && isset($jsonObject->udid))
			$this->udid = (string)$jsonObject->udid;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->brandId))
			$this->brandId = (int)$xml->brandId;
		if(!is_null($jsonObject) && isset($jsonObject->brandId))
			$this->brandId = (int)$jsonObject->brandId;
		if(!is_null($xml) && count($xml->activatedOn))
			$this->activatedOn = (string)$xml->activatedOn;
		if(!is_null($jsonObject) && isset($jsonObject->activatedOn))
			$this->activatedOn = (string)$jsonObject->activatedOn;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->deviceFamilyId))
			$this->deviceFamilyId = (string)$xml->deviceFamilyId;
		if(!is_null($jsonObject) && isset($jsonObject->deviceFamilyId))
			$this->deviceFamilyId = (string)$jsonObject->deviceFamilyId;
		if(!is_null($xml) && count($xml->drm) && !empty($xml->drm))
			$this->drm = Kaltura_Client_ParseUtils::unmarshalObject($xml->drm, "KalturaCustomDrmPlaybackPluginData");
		if(!is_null($jsonObject) && isset($jsonObject->drm) && !empty($jsonObject->drm))
			$this->drm = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->drm, "KalturaCustomDrmPlaybackPluginData");
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->macAddress))
			$this->macAddress = (string)$xml->macAddress;
		if(!is_null($jsonObject) && isset($jsonObject->macAddress))
			$this->macAddress = (string)$jsonObject->macAddress;
		if(!is_null($xml) && count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dynamicData))
		{
			if(empty($jsonObject->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dynamicData, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->model))
			$this->model = (string)$xml->model;
		if(!is_null($jsonObject) && isset($jsonObject->model))
			$this->model = (string)$jsonObject->model;
		if(!is_null($xml) && count($xml->manufacturer))
			$this->manufacturer = (string)$xml->manufacturer;
		if(!is_null($jsonObject) && isset($jsonObject->manufacturer))
			$this->manufacturer = (string)$jsonObject->manufacturer;
		if(!is_null($xml) && count($xml->manufacturerId))
			$this->manufacturerId = (string)$xml->manufacturerId;
		if(!is_null($jsonObject) && isset($jsonObject->manufacturerId))
			$this->manufacturerId = (string)$jsonObject->manufacturerId;
		if(!is_null($xml) && count($xml->lastActivityTime))
			$this->lastActivityTime = (string)$xml->lastActivityTime;
		if(!is_null($jsonObject) && isset($jsonObject->lastActivityTime))
			$this->lastActivityTime = (string)$jsonObject->lastActivityTime;
	}
	/**
	 * Household identifier
	 *
	 * @var int
	 */
	public $householdId = null;

	/**
	 * Device UDID
	 *
	 * @var string
	 * @insertonly
	 */
	public $udid = null;

	/**
	 * Device name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Device brand identifier
	 *
	 * @var int
	 */
	public $brandId = null;

	/**
	 * Device activation date (epoch)
	 *
	 * @var bigint
	 */
	public $activatedOn = null;

	/**
	 * Device state
	 *
	 * @var Kaltura_Client_Enum_DeviceStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Device family id
	 *
	 * @var bigint
	 * @readonly
	 */
	public $deviceFamilyId = null;

	/**
	 * Device DRM data
	 *
	 * @var Kaltura_Client_Type_CustomDrmPlaybackPluginData
	 * @readonly
	 */
	public $drm;

	/**
	 * external Id
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * mac address
	 *
	 * @var string
	 */
	public $macAddress = null;

	/**
	 * Dynamic data
	 *
	 * @var map
	 */
	public $dynamicData;

	/**
	 * model
	 *
	 * @var string
	 */
	public $model = null;

	/**
	 * manufacturer
	 *
	 * @var string
	 */
	public $manufacturer = null;

	/**
	 * manufacturer Id, read only
	 *
	 * @var bigint
	 * @readonly
	 */
	public $manufacturerId = null;

	/**
	 * Last Activity Time, read only
	 *
	 * @var bigint
	 * @readonly
	 */
	public $lastActivityTime = null;


}

