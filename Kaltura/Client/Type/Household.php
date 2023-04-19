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
class Kaltura_Client_Type_Household extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHousehold';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->householdLimitationsId))
			$this->householdLimitationsId = (int)$xml->householdLimitationsId;
		if(!is_null($jsonObject) && isset($jsonObject->householdLimitationsId))
			$this->householdLimitationsId = (int)$jsonObject->householdLimitationsId;
		if(!is_null($xml) && count($xml->devicesLimit))
			$this->devicesLimit = (int)$xml->devicesLimit;
		if(!is_null($jsonObject) && isset($jsonObject->devicesLimit))
			$this->devicesLimit = (int)$jsonObject->devicesLimit;
		if(!is_null($xml) && count($xml->usersLimit))
			$this->usersLimit = (int)$xml->usersLimit;
		if(!is_null($jsonObject) && isset($jsonObject->usersLimit))
			$this->usersLimit = (int)$jsonObject->usersLimit;
		if(!is_null($xml) && count($xml->concurrentLimit))
			$this->concurrentLimit = (int)$xml->concurrentLimit;
		if(!is_null($jsonObject) && isset($jsonObject->concurrentLimit))
			$this->concurrentLimit = (int)$jsonObject->concurrentLimit;
		if(!is_null($xml) && count($xml->regionId))
			$this->regionId = (int)$xml->regionId;
		if(!is_null($jsonObject) && isset($jsonObject->regionId))
			$this->regionId = (int)$jsonObject->regionId;
		if(!is_null($xml) && count($xml->state))
			$this->state = (string)$xml->state;
		if(!is_null($jsonObject) && isset($jsonObject->state))
			$this->state = (string)$jsonObject->state;
		if(!is_null($xml) && count($xml->isFrequencyEnabled))
		{
			if(!empty($xml->isFrequencyEnabled) && ((int) $xml->isFrequencyEnabled === 1 || strtolower((string)$xml->isFrequencyEnabled) === 'true'))
				$this->isFrequencyEnabled = true;
			else
				$this->isFrequencyEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isFrequencyEnabled))
		{
			if(!empty($jsonObject->isFrequencyEnabled) && ((int) $jsonObject->isFrequencyEnabled === 1 || strtolower((string)$jsonObject->isFrequencyEnabled) === 'true'))
				$this->isFrequencyEnabled = true;
			else
				$this->isFrequencyEnabled = false;
		}
		if(!is_null($xml) && count($xml->frequencyNextDeviceAction))
			$this->frequencyNextDeviceAction = (string)$xml->frequencyNextDeviceAction;
		if(!is_null($jsonObject) && isset($jsonObject->frequencyNextDeviceAction))
			$this->frequencyNextDeviceAction = (string)$jsonObject->frequencyNextDeviceAction;
		if(!is_null($xml) && count($xml->frequencyNextUserAction))
			$this->frequencyNextUserAction = (string)$xml->frequencyNextUserAction;
		if(!is_null($jsonObject) && isset($jsonObject->frequencyNextUserAction))
			$this->frequencyNextUserAction = (string)$jsonObject->frequencyNextUserAction;
		if(!is_null($xml) && count($xml->restriction))
			$this->restriction = (string)$xml->restriction;
		if(!is_null($jsonObject) && isset($jsonObject->restriction))
			$this->restriction = (string)$jsonObject->restriction;
		if(!is_null($xml) && count($xml->roleId))
			$this->roleId = (int)$xml->roleId;
		if(!is_null($jsonObject) && isset($jsonObject->roleId))
			$this->roleId = (int)$jsonObject->roleId;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
	}
	/**
	 * Household identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Household name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Household description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Household external identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Household limitation module identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $householdLimitationsId = null;

	/**
	 * The max number of the devices that can be added to the household
	 *
	 * @var int
	 * @readonly
	 */
	public $devicesLimit = null;

	/**
	 * The max number of the users that can be added to the household
	 *
	 * @var int
	 * @readonly
	 */
	public $usersLimit = null;

	/**
	 * The max number of concurrent streams in the household
	 *
	 * @var int
	 * @readonly
	 */
	public $concurrentLimit = null;

	/**
	 * The households region identifier
	 *
	 * @var int
	 */
	public $regionId = null;

	/**
	 * Household state
	 *
	 * @var Kaltura_Client_Enum_HouseholdState
	 * @readonly
	 */
	public $state = null;

	/**
	 * Is household frequency enabled
	 *
	 * @var bool
	 * @readonly
	 */
	public $isFrequencyEnabled = null;

	/**
	 * The next time a device is allowed to be removed from the household (epoch)
	 *
	 * @var bigint
	 * @readonly
	 */
	public $frequencyNextDeviceAction = null;

	/**
	 * The next time a user is allowed to be removed from the household (epoch)
	 *
	 * @var bigint
	 * @readonly
	 */
	public $frequencyNextUserAction = null;

	/**
	 * Household restriction
	 *
	 * @var Kaltura_Client_Enum_HouseholdRestriction
	 * @readonly
	 */
	public $restriction = null;

	/**
	 * suspended roleId
	 *
	 * @var int
	 * @readonly
	 */
	public $roleId = null;

	/**
	 * create date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * update date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;


}

