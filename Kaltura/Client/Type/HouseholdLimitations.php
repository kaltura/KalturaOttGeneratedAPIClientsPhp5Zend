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
class Kaltura_Client_Type_HouseholdLimitations extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdLimitations';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->concurrentLimit))
			$this->concurrentLimit = (int)$xml->concurrentLimit;
		if(!is_null($jsonObject) && isset($jsonObject->concurrentLimit))
			$this->concurrentLimit = (int)$jsonObject->concurrentLimit;
		if(!is_null($xml) && count($xml->deviceLimit))
			$this->deviceLimit = (int)$xml->deviceLimit;
		if(!is_null($jsonObject) && isset($jsonObject->deviceLimit))
			$this->deviceLimit = (int)$jsonObject->deviceLimit;
		if(!is_null($xml) && count($xml->deviceFrequency))
			$this->deviceFrequency = (int)$xml->deviceFrequency;
		if(!is_null($jsonObject) && isset($jsonObject->deviceFrequency))
			$this->deviceFrequency = (int)$jsonObject->deviceFrequency;
		if(!is_null($xml) && count($xml->deviceFrequencyDescription))
			$this->deviceFrequencyDescription = (string)$xml->deviceFrequencyDescription;
		if(!is_null($jsonObject) && isset($jsonObject->deviceFrequencyDescription))
			$this->deviceFrequencyDescription = (string)$jsonObject->deviceFrequencyDescription;
		if(!is_null($xml) && count($xml->userFrequency))
			$this->userFrequency = (int)$xml->userFrequency;
		if(!is_null($jsonObject) && isset($jsonObject->userFrequency))
			$this->userFrequency = (int)$jsonObject->userFrequency;
		if(!is_null($xml) && count($xml->userFrequencyDescription))
			$this->userFrequencyDescription = (string)$xml->userFrequencyDescription;
		if(!is_null($jsonObject) && isset($jsonObject->userFrequencyDescription))
			$this->userFrequencyDescription = (string)$jsonObject->userFrequencyDescription;
		if(!is_null($xml) && count($xml->npvrQuotaInSeconds))
			$this->npvrQuotaInSeconds = (int)$xml->npvrQuotaInSeconds;
		if(!is_null($jsonObject) && isset($jsonObject->npvrQuotaInSeconds))
			$this->npvrQuotaInSeconds = (int)$jsonObject->npvrQuotaInSeconds;
		if(!is_null($xml) && count($xml->usersLimit))
			$this->usersLimit = (int)$xml->usersLimit;
		if(!is_null($jsonObject) && isset($jsonObject->usersLimit))
			$this->usersLimit = (int)$jsonObject->usersLimit;
		if(!is_null($xml) && count($xml->deviceFamiliesLimitations))
		{
			if(empty($xml->deviceFamiliesLimitations))
				$this->deviceFamiliesLimitations = array();
			else
				$this->deviceFamiliesLimitations = Kaltura_Client_ParseUtils::unmarshalArray($xml->deviceFamiliesLimitations, "KalturaHouseholdDeviceFamilyLimitations");
		}
		if(!is_null($jsonObject) && isset($jsonObject->deviceFamiliesLimitations))
		{
			if(empty($jsonObject->deviceFamiliesLimitations))
				$this->deviceFamiliesLimitations = array();
			else
				$this->deviceFamiliesLimitations = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->deviceFamiliesLimitations, "KalturaHouseholdDeviceFamilyLimitations");
		}
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->associatedDeviceFamiliesIdsIn))
			$this->associatedDeviceFamiliesIdsIn = (string)$xml->associatedDeviceFamiliesIdsIn;
		if(!is_null($jsonObject) && isset($jsonObject->associatedDeviceFamiliesIdsIn))
			$this->associatedDeviceFamiliesIdsIn = (string)$jsonObject->associatedDeviceFamiliesIdsIn;
	}
	/**
	 * Household limitation module identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Household limitation module name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Max number of streams allowed for the household
	 *
	 * @var int
	 */
	public $concurrentLimit = null;

	/**
	 * Max number of devices allowed for the household
	 *
	 * @var int
	 */
	public $deviceLimit = null;

	/**
	 * Allowed device change frequency code
	 *
	 * @var int
	 */
	public $deviceFrequency = null;

	/**
	 * Allowed device change frequency description
	 *
	 * @var string
	 * @readonly
	 */
	public $deviceFrequencyDescription = null;

	/**
	 * Allowed user change frequency code
	 *
	 * @var int
	 */
	public $userFrequency = null;

	/**
	 * Allowed user change frequency description
	 *
	 * @var string
	 * @readonly
	 */
	public $userFrequencyDescription = null;

	/**
	 * Allowed NPVR Quota in Seconds
	 *
	 * @var int
	 * @readonly
	 */
	public $npvrQuotaInSeconds = null;

	/**
	 * Max number of users allowed for the household
	 *
	 * @var int
	 */
	public $usersLimit = null;

	/**
	 * Device families limitations
	 *
	 * @var array of KalturaHouseholdDeviceFamilyLimitations
	 */
	public $deviceFamiliesLimitations;

	/**
	 * Allowed device change frequency description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Associated Device Families ids
	 *
	 * @var string
	 */
	public $associatedDeviceFamiliesIdsIn = null;


}

