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
class Kaltura_Client_Type_OTTUser extends Kaltura_Client_Type_BaseOTTUser
{
	public function getKalturaObjectType()
	{
		return 'KalturaOTTUser';
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
		if(!is_null($xml) && count($xml->email))
			$this->email = (string)$xml->email;
		if(!is_null($jsonObject) && isset($jsonObject->email))
			$this->email = (string)$jsonObject->email;
		if(!is_null($xml) && count($xml->address))
			$this->address = (string)$xml->address;
		if(!is_null($jsonObject) && isset($jsonObject->address))
			$this->address = (string)$jsonObject->address;
		if(!is_null($xml) && count($xml->city))
			$this->city = (string)$xml->city;
		if(!is_null($jsonObject) && isset($jsonObject->city))
			$this->city = (string)$jsonObject->city;
		if(!is_null($xml) && count($xml->countryId))
			$this->countryId = (int)$xml->countryId;
		if(!is_null($jsonObject) && isset($jsonObject->countryId))
			$this->countryId = (int)$jsonObject->countryId;
		if(!is_null($xml) && count($xml->zip))
			$this->zip = (string)$xml->zip;
		if(!is_null($jsonObject) && isset($jsonObject->zip))
			$this->zip = (string)$jsonObject->zip;
		if(!is_null($xml) && count($xml->phone))
			$this->phone = (string)$xml->phone;
		if(!is_null($jsonObject) && isset($jsonObject->phone))
			$this->phone = (string)$jsonObject->phone;
		if(!is_null($xml) && count($xml->affiliateCode))
			$this->affiliateCode = (string)$xml->affiliateCode;
		if(!is_null($jsonObject) && isset($jsonObject->affiliateCode))
			$this->affiliateCode = (string)$jsonObject->affiliateCode;
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->userType) && !empty($xml->userType))
			$this->userType = Kaltura_Client_ParseUtils::unmarshalObject($xml->userType, "KalturaOTTUserType");
		if(!is_null($jsonObject) && isset($jsonObject->userType) && !empty($jsonObject->userType))
			$this->userType = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->userType, "KalturaOTTUserType");
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
		if(!is_null($xml) && count($xml->isHouseholdMaster))
		{
			if(!empty($xml->isHouseholdMaster) && ((int) $xml->isHouseholdMaster === 1 || strtolower((string)$xml->isHouseholdMaster) === 'true'))
				$this->isHouseholdMaster = true;
			else
				$this->isHouseholdMaster = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isHouseholdMaster))
		{
			if(!empty($jsonObject->isHouseholdMaster) && ((int) $jsonObject->isHouseholdMaster === 1 || strtolower((string)$jsonObject->isHouseholdMaster) === 'true'))
				$this->isHouseholdMaster = true;
			else
				$this->isHouseholdMaster = false;
		}
		if(!is_null($xml) && count($xml->suspensionState))
			$this->suspensionState = (string)$xml->suspensionState;
		if(!is_null($jsonObject) && isset($jsonObject->suspensionState))
			$this->suspensionState = (string)$jsonObject->suspensionState;
		if(!is_null($xml) && count($xml->userState))
			$this->userState = (string)$xml->userState;
		if(!is_null($jsonObject) && isset($jsonObject->userState))
			$this->userState = (string)$jsonObject->userState;
		if(!is_null($xml) && count($xml->roleIds))
			$this->roleIds = (string)$xml->roleIds;
		if(!is_null($jsonObject) && isset($jsonObject->roleIds))
			$this->roleIds = (string)$jsonObject->roleIds;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->lastLoginDate))
			$this->lastLoginDate = (string)$xml->lastLoginDate;
		if(!is_null($jsonObject) && isset($jsonObject->lastLoginDate))
			$this->lastLoginDate = (string)$jsonObject->lastLoginDate;
		if(!is_null($xml) && count($xml->failedLoginCount))
			$this->failedLoginCount = (int)$xml->failedLoginCount;
		if(!is_null($jsonObject) && isset($jsonObject->failedLoginCount))
			$this->failedLoginCount = (int)$jsonObject->failedLoginCount;
	}
	/**
	 * Household identifier
	 *
	 * @var int
	 * @readonly
	 */
	public $householdId = null;

	/**
	 * Email
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * Address
	 *
	 * @var string
	 */
	public $address = null;

	/**
	 * City
	 *
	 * @var string
	 */
	public $city = null;

	/**
	 * Country identifier
	 *
	 * @var int
	 */
	public $countryId = null;

	/**
	 * Zip code
	 *
	 * @var string
	 */
	public $zip = null;

	/**
	 * Phone
	 *
	 * @var string
	 */
	public $phone = null;

	/**
	 * Affiliate code
	 *
	 * @var string
	 * @insertonly
	 */
	public $affiliateCode = null;

	/**
	 * External user identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * User type
	 *
	 * @var Kaltura_Client_Type_OTTUserType
	 */
	public $userType;

	/**
	 * Dynamic data
	 *
	 * @var map
	 */
	public $dynamicData;

	/**
	 * Is the user the household master
	 *
	 * @var bool
	 * @readonly
	 */
	public $isHouseholdMaster = null;

	/**
	 * Suspension state
	 *
	 * @var Kaltura_Client_Enum_HouseholdSuspensionState
	 * @readonly
	 */
	public $suspensionState = null;

	/**
	 * User state
	 *
	 * @var Kaltura_Client_Enum_UserState
	 * @readonly
	 */
	public $userState = null;

	/**
	 * Comma separated list of role Ids.
	 *
	 * @var string
	 */
	public $roleIds = null;

	/**
	 * User create date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * User last update date
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * The date of the last successful login
	 *
	 * @var bigint
	 * @readonly
	 */
	public $lastLoginDate = null;

	/**
	 * The number of failed login attempts since the last successful login
	 *
	 * @var int
	 * @readonly
	 */
	public $failedLoginCount = null;


}

