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
class Kaltura_Client_Type_OTTUser extends Kaltura_Client_Type_BaseOTTUser
{
	public function getKalturaObjectType()
	{
		return 'KalturaOTTUser';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->householdId))
			$this->householdId = (int)$xml->householdId;
		if(count($xml->email))
		{
			if(isset($xml->email->item) && count($xml->email->item))
				$this->multiLingual_email = Kaltura_Client_ParseUtils::unmarshalArray($xml->email, '');
			else
				$this->email = (string)$xml->email;
		}
		if(count($xml->address))
		{
			if(isset($xml->address->item) && count($xml->address->item))
				$this->multiLingual_address = Kaltura_Client_ParseUtils::unmarshalArray($xml->address, '');
			else
				$this->address = (string)$xml->address;
		}
		if(count($xml->city))
		{
			if(isset($xml->city->item) && count($xml->city->item))
				$this->multiLingual_city = Kaltura_Client_ParseUtils::unmarshalArray($xml->city, '');
			else
				$this->city = (string)$xml->city;
		}
		if(count($xml->countryId))
			$this->countryId = (int)$xml->countryId;
		if(count($xml->zip))
		{
			if(isset($xml->zip->item) && count($xml->zip->item))
				$this->multiLingual_zip = Kaltura_Client_ParseUtils::unmarshalArray($xml->zip, '');
			else
				$this->zip = (string)$xml->zip;
		}
		if(count($xml->phone))
		{
			if(isset($xml->phone->item) && count($xml->phone->item))
				$this->multiLingual_phone = Kaltura_Client_ParseUtils::unmarshalArray($xml->phone, '');
			else
				$this->phone = (string)$xml->phone;
		}
		if(count($xml->affiliateCode))
		{
			if(isset($xml->affiliateCode->item) && count($xml->affiliateCode->item))
				$this->multiLingual_affiliateCode = Kaltura_Client_ParseUtils::unmarshalArray($xml->affiliateCode, '');
			else
				$this->affiliateCode = (string)$xml->affiliateCode;
		}
		if(count($xml->externalId))
		{
			if(isset($xml->externalId->item) && count($xml->externalId->item))
				$this->multiLingual_externalId = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalId, '');
			else
				$this->externalId = (string)$xml->externalId;
		}
		if(count($xml->userType) && !empty($xml->userType))
			$this->userType = Kaltura_Client_ParseUtils::unmarshalObject($xml->userType, "KalturaOTTUserType");
		if(count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = Kaltura_Client_ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(count($xml->isHouseholdMaster))
		{
			if(!empty($xml->isHouseholdMaster) && ((int) $xml->isHouseholdMaster === 1 || strtolower((string)$xml->isHouseholdMaster) === 'true'))
				$this->isHouseholdMaster = true;
			else
				$this->isHouseholdMaster = false;
		}
		if(count($xml->suspensionState))
		{
			if(isset($xml->suspensionState->item) && count($xml->suspensionState->item))
				$this->multiLingual_suspensionState = Kaltura_Client_ParseUtils::unmarshalArray($xml->suspensionState, '');
			else
				$this->suspensionState = (string)$xml->suspensionState;
		}
		if(count($xml->userState))
		{
			if(isset($xml->userState->item) && count($xml->userState->item))
				$this->multiLingual_userState = Kaltura_Client_ParseUtils::unmarshalArray($xml->userState, '');
			else
				$this->userState = (string)$xml->userState;
		}
		if(count($xml->roleIds))
		{
			if(isset($xml->roleIds->item) && count($xml->roleIds->item))
				$this->multiLingual_roleIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->roleIds, '');
			else
				$this->roleIds = (string)$xml->roleIds;
		}
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->lastLoginDate))
			$this->lastLoginDate = (string)$xml->lastLoginDate;
		if(count($xml->failedLoginCount))
			$this->failedLoginCount = (int)$xml->failedLoginCount;
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

