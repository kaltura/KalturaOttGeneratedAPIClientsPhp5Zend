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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(count($xml->concurrentLimit))
			$this->concurrentLimit = (int)$xml->concurrentLimit;
		if(count($xml->deviceLimit))
			$this->deviceLimit = (int)$xml->deviceLimit;
		if(count($xml->deviceFrequency))
			$this->deviceFrequency = (int)$xml->deviceFrequency;
		if(count($xml->deviceFrequencyDescription))
		{
			if(isset($xml->deviceFrequencyDescription->item) && count($xml->deviceFrequencyDescription->item))
				$this->multiLingual_deviceFrequencyDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->deviceFrequencyDescription, '');
			else
				$this->deviceFrequencyDescription = (string)$xml->deviceFrequencyDescription;
		}
		if(count($xml->userFrequency))
			$this->userFrequency = (int)$xml->userFrequency;
		if(count($xml->userFrequencyDescription))
		{
			if(isset($xml->userFrequencyDescription->item) && count($xml->userFrequencyDescription->item))
				$this->multiLingual_userFrequencyDescription = Kaltura_Client_ParseUtils::unmarshalArray($xml->userFrequencyDescription, '');
			else
				$this->userFrequencyDescription = (string)$xml->userFrequencyDescription;
		}
		if(count($xml->npvrQuotaInSeconds))
			$this->npvrQuotaInSeconds = (int)$xml->npvrQuotaInSeconds;
		if(count($xml->usersLimit))
			$this->usersLimit = (int)$xml->usersLimit;
		if(count($xml->deviceFamiliesLimitations))
		{
			if(empty($xml->deviceFamiliesLimitations))
				$this->deviceFamiliesLimitations = array();
			else
				$this->deviceFamiliesLimitations = Kaltura_Client_ParseUtils::unmarshalArray($xml->deviceFamiliesLimitations, "KalturaHouseholdDeviceFamilyLimitations");
		}
		if(count($xml->description))
		{
			if(isset($xml->description->item) && count($xml->description->item))
				$this->multiLingual_description = Kaltura_Client_ParseUtils::unmarshalArray($xml->description, '');
			else
				$this->description = (string)$xml->description;
		}
		if(count($xml->associatedDeviceFamiliesIdsIn))
		{
			if(isset($xml->associatedDeviceFamiliesIdsIn->item) && count($xml->associatedDeviceFamiliesIdsIn->item))
				$this->multiLingual_associatedDeviceFamiliesIdsIn = Kaltura_Client_ParseUtils::unmarshalArray($xml->associatedDeviceFamiliesIdsIn, '');
			else
				$this->associatedDeviceFamiliesIdsIn = (string)$xml->associatedDeviceFamiliesIdsIn;
		}
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

