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
class Kaltura_Client_Type_HouseholdUser extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdUser';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->householdId))
			$this->householdId = (int)$xml->householdId;
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->isMaster))
		{
			if(!empty($xml->isMaster) && ((int) $xml->isMaster === 1 || strtolower((string)$xml->isMaster) === 'true'))
				$this->isMaster = true;
			else
				$this->isMaster = false;
		}
		if(count($xml->householdMasterUsername))
			$this->householdMasterUsername = (string)$xml->householdMasterUsername;
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
	}
	/**
	 * The identifier of the household
	 *
	 * @var int
	 */
	public $householdId = null;

	/**
	 * The identifier of the user
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * True if the user added as master use
	 *
	 * @var bool
	 */
	public $isMaster = null;

	/**
	 * The username of the household master for adding a user in status pending for the household master to approve
	 *
	 * @var string
	 * @insertonly
	 */
	public $householdMasterUsername = null;

	/**
	 * The status of the user in the household
	 *
	 * @var Kaltura_Client_Enum_HouseholdUserStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * True if the user is a default user
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDefault = null;


}

